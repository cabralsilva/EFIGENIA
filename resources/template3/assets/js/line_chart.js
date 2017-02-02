var isUpdate = false;
// REAL TIME CHART
$(function () {

    // We use an inline data source in the example, usually data would
    // be fetched from a server

    var data = [],
        totalPoints = 100, lastRead = 0, lastValue = 0;

    function getRandomData() {
    	
    	
        if (data.length > 0){
            data = data.slice(1);
        }
        
        if (data.length == 0){
        	console.log("Primeira");
         		$.ajax({
         	    	url : "http://localhost/efigenia/controllers/painelcontroller.php",
         	        type: 'POST',
         	        async: false,
         	        data: {
         		        servico: "getHistorical",
         		        qtde: totalPoints,
         		        idpaciente: 1
         	        },
         	        success: function (e) {
         	        	var obj = JSON.parse(e);
         		        for (i in obj){
         		        	data.push(obj[i].sao2);
         		        }
         		        lastRead = obj[0].id_leituras;
         		        lastValue = obj[0].sao2;
         		        data.reverse();
         		        isUpdate = true;
         	        }
         	    });
    	 }else{
//    		 console.log("Segunda");
//    		 $.ajax({
//				url : "http://localhost/efigenia/controllers/painelcontroller.php",
//			    type: 'POST',
//			    data: {
//			        servico: "getHistoricalSync",
//			        lastread: lastRead,
//			        idpaciente: 1
//			    },
//			    success: function (e) {
//			    	var obj = JSON.parse(e);
//			    	console.log("Verificando");
//			    	if (obj != null && obj != "null"){
//			    		console.log("Localizou novos registros");
//			    		obj.reverse();
//			    		for (i in obj){
//				        	data.push(obj[i].sao2);
//				        }
//				        lastRead = obj[0].id_leituras;
//				        lastValue = obj[0].sao2;
//				        isUpdate = true;
//			    	}else{
////			    		console.log(obj);
////			    		data.push(lastValue);
//			    		isUpdate = false;
//			    	}
//		    	}
//    		 });
	 	}
        
        	var res = [];
        	for (var i = 0; i < data.length; ++i) {
                res.push([i, data[i]]);
            }
        	return res;
        
                
        
    }

    // Set up the control widget

    var updateInterval = 1000;
    $("#updateInterval").val(updateInterval).change(function () {
        var v = $(this).val();
        if (v && !isNaN(+v)) {
            updateInterval = +v;
            if (updateInterval < 1) {
                updateInterval = 1;
            } else if (updateInterval > 2000) {
                updateInterval = 2000;
            }
            $(this).val("" + updateInterval);
        }
    });

    var plot = $.plot("#placeholderRT", [getRandomData()], {
        series: {
            shadowSize: 0	// Drawing is faster without shadows
        },
        yaxis: {
            min: 0,
            max: 100
        },
        xaxis: {
            show: false
        }
    });
    
    
    
    function update() {
    		console.log(plot.getData());
    		var ret = getRandomData();
    		if (ret) {
    			plot.setData([getRandomData()]);
    			plot.draw();
    		}

            // Since the axes don't change, we don't need to call plot.setupGrid()
   		
            
            setTimeout(update, updateInterval);
//    	}
        
    }

    function getDados(){
    	console.log("Seg");
    	$.ajax({
			url : "http://localhost/efigenia/controllers/painelcontroller.php",
		    type: 'POST',
		    data: {
		        servico: "getHistoricalSync",
		        lastread: lastRead,
		        idpaciente: 1
		    },
		    success: function (e) {
		    	var obj = JSON.parse(e);
		    	if (obj != null && obj != "null"){
		    		console.log("Localizou novos registros");
		    		obj.reverse();
		    		for (i in obj){
			        	data.push(obj[i].sao2);
			        }
			        lastRead = obj[0].id_leituras;
			        lastValue = obj[0].sao2;
			        isUpdate = true;
		    	}else{
//		    		console.log(obj);
//		    		data.push(lastValue);
		    		isUpdate = false;
		    	}
	    	}
		 });
    	
    	if (isUpdate){
    		plot.setData([getRandomData()]);
			plot.draw();
//        	var res = [];
//        	for (var i = 0; i < data.length; ++i) {
//                res.push([i, data[i]]);
//            }
//        	return res;
        }
    	
    	
    	//var ret = getRandomData();
//    	console.log(ret);
//    	if (ret) {
//    		plot.setData([getRandomData()]);
////            if (isUpdate){
//            	plot.draw();
////            }
//    	}
    	
    }
    setInterval(getDados, updateInterval);
//    update();
    
//    getDados();
    
});
// END REAL TIME CHART


