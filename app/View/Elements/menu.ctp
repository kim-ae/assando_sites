<ul id="nav">
<?php
	foreach($itens as $item)
	{
		echo "<li>";
		$nome = str_replace(' ', '-', $item);
		echo "<a href='$nome'>$item</a>";
		if(is_array($item))
		{
			echo "<ul>";
			foreach($item as $subitem)
			{
				$nome2 = str_replace(' ', '-', $subitem);
				echo " <li><a href='$nome/$nome2'>$subitem</a></li>";
			}
			echo "</ul>";
		}
		echo "</li>";
	}
?>
</ul>