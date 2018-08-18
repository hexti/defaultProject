$("select").select2({ width: '100%' });
var $eventSelect = $("select[name=data]");
$eventSelect.on("change", function (e) {
	if( $(this).val() ) {
		var moeda = $('select[name=moeda]').val();
		if(moeda == null || moeda == ''){
			alert('É necessário que a moeda seja selecionada primeiro');
			$('input[name=data]').val('');
		}else{
			$.getJSON('itens.ajax.php?q=1',{_data: $(this).val(), _moeda: moeda, ajax: 'true'}, function(j){

				$('#data_moeda').removeClass(j.remover);
				$('#data_moeda').addClass(j.classe);
				$('#msg_moeda').text('');
				$('#msg_moeda').text(j.msg);

				if(j.validacao == 1){
					$('#salvar').show();
				}else{
					$('#salvar').hide();
				}
			});
		}
	}
});