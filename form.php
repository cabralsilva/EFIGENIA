<form id="MyModal" class="form-horizontal"
	data-detail-url="index.php?module=Config&amp;parent=Settings&amp;view=Index&amp;block=4&amp;fieldid=41">
	<div class="widget_header row-fluid">
		<div class="span8">
			<h3>Configurações Empresa</h3>
		</div>
		<div class="span4 btn-toolbar">
			<div class="pull-right">
				<button class="btn btn-success saveButton" type="submit"
					title="Salvar">
					<strong>Salvar</strong>
				</button>
				<a type="reset" class="cancelLink" title="Cancelar">Cancelar</a>
			</div>
		</div>
	</div>
	<hr>
	<div class="contents row-fluid">
		<table
			class="table table-bordered blockContainer showInlineTable equalSplit">
			<thead>
				<tr class="blockHeader">
					<th colspan="6" class="mediumWidthType"><span class="alignMiddle">Discador</span></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="fieldLabel" style="width: 15%;"><label
						class="muted pull-right">Tempo reagendamento</label></td>
					<td class="fieldValue" style="width: 10%;"><input
						class="pull-left input-small tempo_agendamento" type="text"
						name="tempo_agendamento"
						data-validation-engine="validate[required]" value="30"></td>
					<td class="fieldLabel" style="width: 15%;"><label
						class="muted pull-right">Tempo discagem</label></td>
					<td class="fieldValue" style="width: 10%;"><input
						class="pull-left input-small tempo_discagem" type="text"
						name="tempo_discagem" data-validation-engine="validate[required]"
						value="15"></td>
					<td class="fieldLabel" style="width: 15%;"><label
						class="muted pull-right">Grupo televendas</label></td>
					<td class="fieldValue" style="width: 20%;"><select
						class="chzn-select" name="sourceGrupoTelevenda"><option value="2">Grupo
								Televendas</option>
							<option value="200" selected="">Grupo Back Office</option></select></td>
				</tr>
			</tbody>
		</table>
		<br>
		<table class="table table-bordered table-condensed themeTableColor">
			<thead>
				<tr class="blockHeader">
					<th colspan="2" class="mediumWidthType"><span class="alignMiddle">Configurações
							Empresa</span></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td width="15%"><label class="muted pull-right">Segunda-Feira de</label></td>
					<td style="border-left: none;"><span class="pull-left"><input
							class="pull-left input-small segunda" type="text"
							name="segunda_inicio" value="08:00"></span><label
						class="muted pull-left">até</label><span class="pull-left"><input
							class="pull-left input-small segunda" type="text"
							name="segunda_termino" value="20:00"></span></td>
				</tr>
				<tr>
					<td width="15%"><label class="muted pull-right">Terça-Feira de</label></td>
					<td style="border-left: none;"><span class="pull-left"><input
							class="pull-left input-small terca" type="text"
							name="terca_inicio" value="08:00"></span><label
						class="muted pull-left">até</label><span class="pull-left"><input
							class="pull-left input-small terca" type="text"
							name="terca_termino" value="20:00"></span></td>
				</tr>
				<tr>
					<td width="15%"><label class="muted pull-right">Quarta-Feira de</label></td>
					<td style="border-left: none;"><span class="pull-left"><input
							class="pull-left input-small quarta" type="text"
							name="quarta_inicio" value="08:00"></span><label
						class="muted pull-left">até</label><span class="pull-left"><input
							class="pull-left input-small quarta" type="text"
							name="quarta_termino" value="20:00"></span></td>
				</tr>
				<tr>
					<td width="15%"><label class="muted pull-right">Quinta-Feira de</label></td>
					<td style="border-left: none;"><span class="pull-left"><input
							class="pull-left input-small quinta" type="text"
							name="quinta_inicio" value="08:00"></span><label
						class="muted pull-left">até</label><span class="pull-left"><input
							class="pull-left input-small quinta" type="text"
							name="quinta_termino" value="20:00"></span></td>
				</tr>
				<tr>
					<td width="15%"><label class="muted pull-right">Sexta-Feira de</label></td>
					<td style="border-left: none;"><span class="pull-left"><input
							class="pull-left input-small sexta" type="text"
							name="sexta_inicio" value="08:00"></span><label
						class="muted pull-left">até</label><span class="pull-left"><input
							class="pull-left input-small sexta" type="text"
							name="sexta_termino" value="20:00"></span></td>
				</tr>
				<tr>
					<td width="15%"><label class="muted pull-right">Sábado de</label></td>
					<td style="border-left: none;"><span class="pull-left"><input
							class="pull-left input-small sabado" type="text"
							name="sabado_inicio" value=""></span><label
						class="muted pull-left">até</label><span class="pull-left"><input
							class="pull-left input-small sabado" type="text"
							name="sabado_termino" value=""></span></td>
				</tr>
				<tr>
					<td width="15%"><label class="muted pull-right">Domingo de</label></td>
					<td style="border-left: none;"><span class="pull-left"><input
							class="pull-left input-small domingo" type="text"
							name="domingo_inicio" value=""></span><label
						class="muted pull-left">até</label><span class="pull-left"><input
							class="pull-left input-small domingo" type="text"
							name="domingo_termino" value=""></span></td>
				</tr>
			</tbody>
		</table>
		<br>
		<table class="table table-bordered table-condensed themeTableColor">
			<thead>
				<tr class="blockHeader">
					<th colspan="2" class="mediumWidthType"><span class="alignMiddle">Agendamento</span></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td width="15%"><label class="muted pull-right">Interv. entre
							agendam.</label></td>
					<td style="border-left: none;"><span class="pull-left"><input
							class="pull-left input-small time_interval_instant_seconds"
							type="text" name="time_interval_instant_seconds"
							data-validation-engine="validate[required]" value="300"></span><label
						class="muted pull-left">segundos</label></td>
				</tr>
			</tbody>
		</table>
		<br>
		<table
			class="table table-bordered blockContainer showInlineTable equalSplit">
			<thead>
				<tr class="blockHeader">
					<th colspan="6" class="mediumWidthType"><span class="alignMiddle">Help
							desk</span></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="fieldLabel" style="width: 10%;"><label
						class="muted pull-right">Nome email</label></td>
					<td class="fieldValue" style="width: 15%;"><input
						class="pull-left input-small help_desk_nome_email" type="text"
						name="help_desk_nome_email"
						data-validation-engine="validate[required]" value="Docol2"></td>
					<td class="fieldLabel" style="width: 10%;"><label
						class="muted pull-right">Email</label></td>
					<td class="fieldValue" style="width: 20%;"><input
						class="pull-left input-small help_desk_email" type="text"
						name="help_desk_email" data-validation-engine="validate[required]"
						value="televendas2@docol.com.br"></td>
					<td class="fieldLabel" style="width: 10%;"><label
						class="muted pull-right">Email resposta</label></td>
					<td class="fieldValue" style="width: 20%;"><input
						class="pull-left input-small help_desk_email_reply" type="text"
						name="help_desk_email_reply"
						data-validation-engine="validate[required]"
						value="televendas2@docol.com.br"></td>
				</tr>
			</tbody>
		</table>
	</div>
	<input type="hidden" name="module" value="Config"><input type="hidden"
		name="action" value="SaveAjax"><input type="hidden" name="parent"
		value="Settings"><input type="hidden" name="id" value="1">
</form>