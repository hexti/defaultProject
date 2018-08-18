$("select").select2({ width: '100%' });





function codigoPai(cod){

	$.getJSON('itens.ajax.php?q=3',{id: cod, ajax: 'true'}, function(j){
		if(j.codigo != null){
			$('#codigo_pai').html(j.codigo + '.');
			$('input[name=codigo_pai]').val(j.codigo + '.');
		}
	});
}