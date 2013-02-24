<?if(isset($regok)){?>
	<p style="text-align:center; color:green;">
		Регистрация прошла успешно
	</p>
<?}?>
<?if(isset($errors)){?>
		<?foreach($errors as $item){?>
			<p style="color:red;"><?=$item?></p>
		<?}?>
<?}?>

<form action="" method="post">
				<table class="login" style="background-color:#ff8f8f;">
					<tr>
						<th colspan="2" style="padding-bottom:10px;">Регистрация пользователя</th>
					</tr>
					<tr>
						<td style="text-align:right;">Эл. почта:</td>
						<td><input type="text" name="email"></td>
					</tr>
					<tr>
						<td>Секретный код:</td>
						<td><input type="text" name="regcodevalue"></td>
					</tr>
					<th colspan="2" style="text-align:right"><input type="submit" value="Зарегистрироваться" style="width:170px; height:30px" name="btnsubmit"></th>
				</table>
</form>
