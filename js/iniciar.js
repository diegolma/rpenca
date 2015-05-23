$(function(){
	$('#elform').submit(function(){
		$.ajax({
			type: 'POST',
			url: 'index.php',
			data: $(this).serialize(),
			dataType: 'text',
			success:function(response){
				if ((response+'').length < 50 ){
					$('#error').html(response);
					$('#error').removeClass('hide');
				}else{
					window.location.href="dashboard.php";
				}
			}
		});
		return false;
	});
});