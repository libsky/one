<p style="text-align:center">Введите адрес эл. почты.</p>
<? if(isset($error)){?>
<p style="color:red; text-align:center">Адрес эл. почты не найден.</p>
<?}?>
<? if(isset($ok)){?>
<p style="color:green; text-align:center">Проверьте вашу эл. почту.</p>
<?}?>
<form action="" method="post">
				<table class="login">
					<tr>
						<th colspan="2" style="padding-bottom:10px;">Вспоминаем пароль</th>
					</tr>
					<tr>
						<td>Эл. почта:</td>
						<td><input type="text" name="email" id="email"><span id="trueimg" style="display:none"><img src="/img/true.png"></span><span id="falseimg" style="display:none"><img src="/img/false.png"></span></td>
					</tr>
					<th colspan="2" style="text-align:right"><input type="submit" value="Вспомнить" style="width:170px; height:30px" name="btnsubmit"></th>
				</table>
</form>

<script type="text/javascript">
	function runajax()
	{
		var email = $("#email").val();
		
		$.ajax({
		  type: "POST",
		  data: "email=" + email,
		  url: "/ajax/emailunique",
		  dataType: "json",
		  success: function(data)
		  {
			if(!data.result)
			{
				$("#trueimg").css('display','inline');
				$("#falseimg").css('display','none');
			}
			else
			{
				$("#falseimg").css('display','inline');
				$("#trueimg").css('display','none');
			}
		  }
		})
	}
	
	$(document).ready(function(){
		$("#email").blur(runajax);
	});
</script>