$(document).ready(function(){

	$('div[id ^= collapse]').find('form').submit(function(){
		$.ajax({
			type: 'POST',
			url: 'apostar.php',
			data: $(this).serialize(),
			dataType: 'json',
			success:function(response){
				if(response['correcto']===true){
					$('div[id ^= collapse]').reload();
				}else{
					alert(response['mensaje']);
				}
			}
		});
		return false;
	})

	$('#pdh ul li form').submit(function(){
		$.ajax({
			type: 'POST',
			url: 'apostar.php',
			data: $(this).serialize(),
			dataType: 'json',
			success:function(response){
				$('#pdh ul').addClass('hide');
				$('#pdh div.alert span').text(response['mensaje']);
				$('#pdh div.alert').removeClass('hide');
				if(response['correcto']===true)
					$('#pdh div.alert').addClass('alert-success');
				else
					$('#pdh div.alert').addClass('alert-danger');
			}
		});
		return false;
	});

	$('#pdh div.alert button').click(function(){
		$('#pdh ul').removeClass('hide');
		$(this).parent().addClass('hide');
	});

	$('#rank').DataTable({
        pageLength : 10,
        lengthChange : false,
        info : false,        
        language: {
            processing:     "Procesando...",
            search:         "Buscar:",
            lengthMenu:     "Mostrar _MENU_ registros",
            info:           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            infoEmpty:      "Mostrando registros del 0 al 0 de un total de 0 registros",
            infoFiltered:   "(filtrado de un total de _MAX_ registros)",
            infoPostFix:    "",
            loadingRecords: "Cargando...",
            zeroRecords:    "No se encontraron resultados",
            emptyTable:     "Ningún dato disponible en esta tabla",
            paginate: {
                first:      "Primero",
                previous:   "Anterior",
                next:       "Siguiente",
                last:       "Último"
            },
            aria: {
                sortAscending:  ": Activar para ordenar la columna de manera ascendente",
                sortDescending: ": Activar para ordenar la columna de manera descendente"
            }
        }
    });

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
					window.location.href="dashboard.php";
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
