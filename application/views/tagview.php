<h2>Содержимое категории <?=$tag['name']?></h2>
<ul style="padding: 30px;">
<?if(count($materials)) {?>
	<?foreach($materials as $item){?>
		<li>
			<p><a href="/materials/showcontent/<?=$item['id']?>"><?=$item['name']?></a></p>
			<p><?=$item['content']?></p>
		</li>
	<?}?>
<?}else{?>
		<p>В выбранной категории нет материалов</p>
<?}?>
</ul>