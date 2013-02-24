<h2>Содержимое категории <?=$category_name?></h2>
<ul style="padding: 30px;">
<?foreach($materials as $item){?>
	<li><a href="/materials/showcontent/<?=$item['id']?>"><?=$item['name']?></a></li>
<?}?>
</ul>