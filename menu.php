
<?php
include('includes/array.php');
include('includes/header.php');
?>
<div class="commoncontainer">
</br>
<h2 style="text-align: center;"><u>Our Delisious Menu</u></h2>
<p style="text-align: center;"><em>Click any item to learn more about the item</em></p>

<ul>
<?php
foreach($menuItems as $dish=>$item){?>
	<li style="text-align: center; "><a href="dish.php?item=<?php echo "$dish";?>"style="text-decoration:none;"><?php echo"$item[title]";?><sup>$</sup><?php echo"$item[price]"; ?></a></li></br>
<?php
}

?>





</ul>

</div><!--------teamMember---------->




</div>
<?php
include('includes/footer.php');
?>