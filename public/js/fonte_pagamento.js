$("select").select2({ width: '100%' });

function valCod(){
	var cod = $('input[name=codigo]').val();
	var cod_aux = $('input[name=codigo_aux]').val();

	$.getJSON('itens.ajax.php?q=4',{codigo: cod, codigo_aux : cod_aux, ajax: 'true'}, function(j){
		$('#grupo_aux').removeClass(j.remover);
		$('#grupo_aux').addClass(j.classe);

		$('#item_aux').removeClass(j.icon_remover);
		$('#item_aux').addClass(j.icon_ok);

		if(j.validacao == 0){
			$('#salvar').hide();
		}else{
			$('#salvar').show();
		}
	});
}

function codigoPai(cod){

	$.getJSON('itens.ajax.php?q=3',{id: cod, ajax: 'true'}, function(j){
		if(j.codigo != null){
			$('#codigo_pai').html(j.codigo + '.');
			$('input[name=codigo_pai]').val(j.codigo + '.');
		}
	});
}
