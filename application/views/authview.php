<? if(isset($error)){?>
<p style="color:red; text-align:center">Логин или пароль введены неверно.</p>
<?}?>

<form action="" method="post">
				<table class="login">
					<tr>
						<th colspan="2" style="padding-bottom:10px;">Авторизация</th>
					</tr>
					<tr>
						<td>Логин:</td>
						<td><input type="text" name="login"></td>
					</tr>
					<tr>
						<td>Пароль:</td>
						<td><input type="password" name="password"></td>
					</tr>
					<th colspan="2" style="text-align:right"><input type="submit" value="Войти" style="width:170px; height:30px" name="btnsubmit"></th>
				</table>
</form>
