<!DOCTYPE html>
<html>
	<head>
		<title>Calculadora em PHP</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css" type="text/css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	</head>
	<body>
		<div class="calculator">
			<div class="left">
				<div class="block">
					<label>Primeiro Número</label>
					<input fi type="text" name="numberOne" required id="numberOne" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
				</div>
				<div class="block">
					<label>Segundo Número</label>
					<input fi type="text" name="numberTwo" required id="numberTwo" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
				</div>
				<div class="block">
					<label class="title">Operação</label>
					<div class="controllers">
						<label class="btnOperator" for="btn-1">+</label>
						<label class="btnOperator" for="btn-2">-</label>
						<label class="btnOperator" for="btn-3">x</label>
						<label class="btnOperator" for="btn-4">%</label>
					</div>					
					<input type="radio" class="hidden" name="operator" id="btn-1" value="somar">
					<input type="radio"class="hidden" name="operator" id="btn-2" value="subtrair">
					<input type="radio" class="hidden" name="operator" id="btn-3" value="multiplicar">					
					<input type="radio" class="hidden" name="operator" id="btn-4" value="dividir">

				</div>
				<div class="block">
					<input type="button" name="" value="calcular" class='btnCalculator'>
				</div>
			</div>
			<div class="right">
				<div class="container">

				</div>
			</div>
		</div>
	</body>
</html>
<script>
	$(document).ready(function(){
		$(document).on('click', '.btnOperator', function(){
			$('.btnOperator').removeClass('active');
			$(this).addClass('active');
		});

		$('.btnCalculator').click( ()=>{
			$.ajax({
				url:'calcular.php',
				method: 'POST',
				dataType: 'JSON',
				data:{
					numberOne : $('#numberOne').val(),
					numberTwo : $('#numberTwo').val() ,
					operator : $('input[name="operator"]:checked').val(),
				},
				success: function(e){
					console.log(e);
					$('.container').html(e);
				}

			});
		});
	});
</script>