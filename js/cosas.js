$(document).ready(function(){

	$('#contenido form').submit(function(){
		var form=$(this);
		$.ajax({
			type: "POST",
			url: "restaurar.php",
			data: $(this).serialize(),
			dataType: "html",
			success:function(response){
				$('#contenido').html(response);
				var largo= (response + '').length;
				if(largo>300){
					form.submit();
				}
			}
		});

		return false;
	});

	$('#datos li').hover(function(){
		$(this).children('a.badge').removeClass('hide');
	});
	$('#datos li').mouseleave(function(){
		$(this).children('a.badge').addClass('hide');
	});

	$('#datos li a.badge').click(function(){
		if($(this).parent().children('form').hasClass('hide')){
			$(this).parent().children('form').removeClass('hide');
		}else{
			$(this).parent().children('form').addClass('hide');
		}
		$(this).addClass('hide');
	});

	$('#datos li form').submit(function(){
		$.ajax({
			type: "POST",
			url: "editar-usr.php",
			data: $(this).serialize()
		});
		$('#datos').reload();
		
		return false;
	});	

	$('#cancelar').click(function(){
		$(this).parent().children('div').removeClass('hide');
		$(this).addClass('hide');
	});

	$('#cancelar').parent().children('div').children('button').click(function(){
		$(this).parent().addClass('hide');
		$('#cancelar').removeClass('hide');
	});

	$('a.page-scroll').attr("href", "index.php");
});

$('#graf').ready(function(){
	var exactos=$('#exactos').text();
	var aciertos=$('#aciertos').text()-exactos;
	var errados=$('#pron').text()-aciertos-exactos;


	Morris.Donut({
		element: 'graf',
		data: [
		    {label: "Errados", value: errados},
		    {label: "Aciertos", value: aciertos},
		    {label: "Aciertos Exactos", value: exactos}
		],
			colors: ['#D9534F','#5CB85C','#F0AD4E'],
			resize: true
	});
});