$(document).ready(function(){
	$('#datos li').hover(function(){
		$(this).children('a.badge').removeClass('hide');
	});
	$('#datos li').mouseleave(function(){
		$(this).children('a.badge').addClass('hide');
	});

	$('#datos li a.badge').click(function(){
		$(this).parent().children('form').removeClass('hide');
		$(this).addClass('hide');
	});

	$('#datos li form').submit(function(){
		$.ajax({
			type: "POST",
			url: "editar-usr.php",
			data: $(this).serialize(),
			success:function(){
				$('#msje').removeClass('hide');
			}
		});
		$(this).addClass('hide');
		return false;
	});	

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

	$('#cancelar').click(function(){
		$(this).parent().children('div').removeClass('hide');
		$(this).addClass('hide');
	});

	$('#cancelar').parent().children('div').children('button').click(function(){
		$(this).parent().addClass('hide');
		$('#cancelar').removeClass('hide');
	});

	/*$('#cancelar').parent().children('div').children('a.alert-link').click(function(){
		$.ajax({
			type: "POST",
			url: "delete_usr.php",
			data: null,
			async: false,
			success:function(){
				$('body').html(index.php);
			}
		});
	});*/
});



