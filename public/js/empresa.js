$("select").select2({ width: '100%' });
var $eventSelect = $("select[name=pais]");
$eventSelect.on("change", function (e) {
	if( $(this).val() ) {
		$("#estado").hide();
		$('.carregando').show();
		$.getJSON('itens.ajax.php?q=1&search=',{pais: $(this).val(), tipo: $("select[name=tipo]").val(), ajax: 'true'}, function(j){
			var options = '';
			for (var i = 0; i < j.length; i++) {
				options += '<option value="' + j[i].id +'">'+ j[i].uf + j[i].nome + '</option>';
			}
			$("#estado").html(options).show();
			$('.carregando').hide();
		});
	} else {
		$("select[name=estado]").html('<option value="">-- Selecione &hellip; --</option>');
	}
});

$('select').select2();
var $eventSelect = $("#consorcio");
$eventSelect.on("change", function (e) {
	var valor = $(this).val();
	if( $(this).val() ) {
		var text = $("#consorcio option:selected").text();
		var div = '<div class="form-group"> <div class="form-line"> <input type="number" step="0.01" class="form-control" id="exampleInputEmail1" name="'+valor+'" placeholder="Percentual '+ text +' " required="required"> </div> </div>';
		$("#percentual").append(div);
	}
});

$('select').select2();
var $eventSelect = $("select[name=estado]");
$eventSelect.on("change", function (e) {
	if( $(this).val() ) {
		$("#cidade").hide();
		$('.carregando').show();
		$.getJSON('itens.ajax.php?q=2&search=',{estado: $(this).val(), ajax: 'true'}, function(j){
			var options = '';
			for (var i = 0; i < j.length; i++) {
				options += '<option value="' + j[i].id +'">'+ j[i].nome + '</option>';
			}
			$("#cidade").html(options).show();
			$('.carregando').hide();
		});
	} else {
		$("select[name=cidade]").html('<option value="">-- Selecione &hellip; --</option>');
	}
});