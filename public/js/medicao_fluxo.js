$("select").select2({ width: '100%' });
$(function(){
	$(".aprovar").click(function () {
		$(".aprovar").attr("disabled", true);
		$('#aprovar').submit();
 	});

});
// Ímpede recarregar página
window.onload = function () {
    document.onkeydown = function (e) {
            return false;
    };
}

var $eventSelect = $("select[name=contrato]");
$eventSelect.on("change", function (e) {
	if( $(this).val() ) {
		$("#medicao").hide();
		$('.carregando').show();

		$.getJSON('itens.ajax.php',{q: 1, contrato: $(this).val(), ajax: 'true'}, function(j){
			var options = '';

			options += '<option value="">Selecione &hellip;</option>';

			for (var i = 0; i < j.length; i++) {
				options += '<option value="' + j[i].id +'">BM '+ j[i].numero + '</option>';
			}
			$("#medicao").html(options).show();
			$('.carregando').hide();
		});
	} else {
		$("select[name=medicao]").html('<option value="">Selecione &hellip;</option>');
	}
});

var $eventSelect = $("select[name=medicao]");
$eventSelect.on("change", function (e) {
	$('.nav-wizard').show();

	if( $(this).val() ) {
		$.getJSON('itens.ajax.php',{q: 2, medicao: $(this).val(), user : <?php echo userId();?>, ajax: 'true'}, function(j){

			for (var i = 0; i < j.length; i++) {
				$('#valor_medicao').val(j[i].valor);
				$('#nome_empresa').val(j[i].nome_empresa);

				$('.url_global').attr('href', '<?php echo EXTERNAL_ROOT_PORTAL;?>/medicao/relatorio/bm_g.php?listagem=1&id='+j[i].id);

				if(j[i].passo == 2){
					$('#contratada').addClass('active');
					$('#supervisao').addClass('active');
					$('#fiscalizacao').removeClass('active');
					$('#coordenacao').removeClass('active');

					$('#cmd').val('supervisao');
					$('#aprovar').val('Aprovar');

					$('#editar_item').show();
					$('#retroagir').hide();

					if(j[i].supervisao == 'N'){
						$('#aprovar').hide();
						$('#editar_item').hide();
						$('#observacao').hide();
					}
				}

				if(j[i].passo == 3){
					$('#contratada').addClass('active');
					$('#supervisao').addClass('active');
					$('#fiscalizacao').addClass('active');
					$('#coordenacao').removeClass('active');

					$('#cmd').val('fiscalizacao');
					$('#aprovar').val('Aprovar');

					$('#editar_item').show();
					$('#retroagir').hide();

					if(j[i].fiscalizacao == 'N'){
						$('#aprovar').hide();
						$('#editar_item').hide();
						$('#observacao').hide();
					}
				}

				if(j[i].passo == 4){
					$('#contratada').addClass('active');
					$('#supervisao').addClass('active');
					$('#fiscalizacao').addClass('active');
					$('#coordenacao').addClass('active');
					$('#editar_item').hide();
					$('#retroagir').show();

					$('#cmd').val('coordenacao');
					$('#aprovar').val('Salvar');

					if(j[i].coordenacao == 'N'){
						$('#aprovar').hide();
						$('#editar_item').hide();
						$('#observacao').hide();
						$('#retroagir').hide();
					}

					$('#retroagir').attr('href', '<?php echo EXTERNAL_ROOT_PORTAL;?>/medicao/fluxo/index.php?cmd=retroagir&id='+j[i].id);
				}

				if(j[i].valida_reajuste > 0){

					$('.bm_reajuste').show();
					$('.url_reajuste').attr('href', '<?php echo EXTERNAL_ROOT_PORTAL;?>/medicao/relatorio/bm_a.php?listagem=1&id='+j[i].id);
				}else{
					$('.bm_reajuste').hide();
					$('.url_reajuste').attr('href', '#');
				}

				if(j[i].valida_complementar > 0){
					$('.bm_complementar').show();
					$('.url_complementar').attr('href', '<?php echo EXTERNAL_ROOT_PORTAL;?>/medicao/relatorio/bm_c.php?listagem=1&id='+j[i].id);
				}else{
					$('.bm_complementar').hide();
					$('.url_complementar').attr('href', '#');
				}

				$('#editar_item').attr('href', '../cadastro/itens.php?fluxo='+j[i].fluxo_processo+'&medicao='+j[i].id);
				$('#fluxo_processo').val(j[i].fluxo_processo);
				$('#id_fluxo').val(j[i].fluxo);
				$('#id_medicao').val(j[i].id);

				$('#nome_responsavel').val(j[i].nome_contratada);
				$('#data_responsavel').val(j[i].data_contratada);

			}
		});
	} else {
		$("select[name=medicao]").html('<option value="">Selecione &hellip;</option>');
	}
});
