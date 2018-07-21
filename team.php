<?php

include("includes/header.php");
?>
<div class="commoncontainer">
</br>
<h2 style="text-align: center;"><u>Our Family Mamber <u></h2></br>
<?php
foreach($member as $tempMember){
	?>
	<div id="member">
	<img src="Image/<?php echo"$tempMember[img]";?>.jpg"> </br>
	<strong><?php echo "$tempMember[name]"; ?></strong></br>
	<?php echo "$tempMember[title]"; ?></br>
	<p><?php echo "$tempMember[discription]"; ?></p></br>
	</div>	
	<?php	
	}
?>





</div><!--------teamMember---------->

<?php
include("includes/footer.php");
?>

<!----<echo "<li><a href='$tempMember[name]'> $tempMember[title]</a></li>";