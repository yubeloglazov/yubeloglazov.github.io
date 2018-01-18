<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" href="./style.css">
		<script type="text/javascript" src="./js/jquery-3.2.0.min.js"></script>
		<title>Тестовое задание "Ось-2"</title>
	</head>
	<body>
		<div id="content-wrap">
			<div id="problem">
				<span class="first">6</span> + <span class="second">3</span> = <span id="question" class="answer-field active">?</span><input class="answer-field" size="2" maxlength="2" name="children" type="text"><span id="answer" class="answer-field"></span>
			</div>
			<div id="sprite">
				<div id="arrows-wrap">
					<div id="arrows">
						<div id="first-arrow" class="arrow">
							<div class="wrap">
								<input class="active" size="1" maxlength="1" name="children" type="text">
								<span></span>
							</div>
							<img src="./images/arrow.png" />
						</div>
						<div id="second-arrow" class="arrow">
							<div class="wrap">
								<input class="active" size="1" maxlength="1" name="children" type="text">
								<span></span>
							</div>
							<img src="./images/arrow.png" />
						</div>
					</div>
				</div>
				<img id="scale" src="./images/sprite.png" />
			</div>
		</div>
	</body>
</html>

<script type="text/javascript">
var	firstNumber = Number($('#problem').find('.first').html()),
	secondNumber = Number($('#problem').find('.second').html()),
	answerNumber = firstNumber + secondNumber;
$(document).ready(function(e){
	var scaleDivision = 5;
		firstArrowWidth = firstNumber * scaleDivision,
		secondArrowWidth = secondNumber * scaleDivision;
	if (firstArrowWidth <= 25){
		$('#first-arrow').find('img').attr('src','./images/arrow_bold.png')
	}
	if (secondArrowWidth <= 25){
		$('#second-arrow').find('img').attr('src','./images/arrow_bold.png')
	}
	$('#answer').html(answerNumber);
	$('#first-arrow').find('.wrap').find('span').html(firstNumber);
	$('#second-arrow').find('.wrap').find('span').html(secondNumber);
	$('#first-arrow').css({'width':firstArrowWidth + '%'});
	$('#second-arrow').css({'left':firstArrowWidth + '%'});
	$('#second-arrow').css({'width':secondArrowWidth + '%'});
	$('#first-arrow').addClass('active');
	$('#first-arrow').find('.wrap').find('input').focus();
});
$('#first-arrow').find('input').on('input', function(e){
	//console.log('hello');
	//console.log($(this).val());
	if ($(this).val() == firstNumber){
		//console.log('hello');
		if ($(this).hasClass('wrong')){
			$(this).removeClass('wrong')
		}
		if ($('#problem').find('.first').hasClass('wrong')){
			$('#problem').find('.first').removeClass('wrong')
		}
		$(this).removeClass('active');
		$('#first-arrow').find('.wrap').find('span').addClass('active');
		$('#second-arrow').addClass('active');
		$('#second-arrow').find('.wrap').find('input').focus();
	} else {
		if (!$(this).hasClass('wrong')){
			$(this).addClass('wrong');
		}
		if (!$('#problem').find('.first').hasClass('wrong')){
			$('#problem').find('.first').addClass('wrong');
		}
	}
});
$('#second-arrow').find('input').on('input', function(e){
	//console.log('hello');
	//console.log($(this).val());
	if ($(this).val() == secondNumber){
		//console.log('hello');
		if ($(this).hasClass('wrong')){
			$(this).removeClass('wrong')
		}
		if ($('#problem').find('.second').hasClass('wrong')){
			$('#problem').find('.second').removeClass('wrong')
		}
		$(this).removeClass('active');
		$('#second-arrow').find('.wrap').find('span').addClass('active');
		$('#question').removeClass('active');
		$('#problem').find('input').addClass('active');
		$('#problem').find('input').focus();
	} else {
		if (!$(this).hasClass('wrong')){
			$(this).addClass('wrong');
		}
		if (!$('#problem').find('.second').hasClass('wrong')){
			$('#problem').find('.second').addClass('wrong');
		}
	}
});
$('#problem').find('input').on('input', function(e){
	if ($(this).val() == answerNumber){
		if ($(this).hasClass('wrong')){
			$(this).removeClass('wrong')
		}
		$(this).removeClass('active');
		$('#answer').addClass('active');
	} else {
		if (!$(this).hasClass('wrong')){
			$(this).addClass('wrong');
		}
	}
});
</script>
















