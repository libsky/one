<!-- Форма логина -->
<div id="slider">
	<div id="slider-in">
		<form action="/auth" method="post">
			<p style="padding-bottom: 2px;">Логин:</p>
			<input type="text" name="login" id="login">
			<p style="padding-bottom: 2px;">Пароль:</p>
			<input type="password" name="password">
			<input type="submit" name="btnsubmit" value="Войти" style="width: 100px; height: 25px; margin-top: 10px">
		</form>
		<p><a href="/auth/reg">Быстрая регистрация</a></p>
	</div>
	<div id="open-div"><a href="#" id="open-button">Вход</a></div>
        <div id="close-div" style="display:none"><a href="#" id="close-button">Закрыть</a></div>
</div>

<script type="text/javascript">
	function OpenSlider()
	{
		$("#slider-in").animate({ height: "150px" });
		$("#login").focus();
		$("#open-div").toggle();
		$("#close-div").toggle();
		return false;
	}

	function CloseSlider()
	{
		$("#slider-in").animate({ height: "0" });
		$("#open-div").toggle();
		$("#close-div").toggle();
		return false;
	}

	$(document).ready(function(){
		$("#open-button").click(OpenSlider);
		$("#close-button").click(CloseSlider);
	});
</script>