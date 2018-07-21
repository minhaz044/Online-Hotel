<?php
include('includes/array.php');
include("includes/header.php");

function strip_bad_char($input){
	$output=preg_replace("/[^a-zA-Z0-9_-]/","",$input);
	return $output;
	
	
}

function tip_calculator($price,$tip){
	$total_tip=$price*$tip;
	$total_tip=floor($total_tip);
	echo $total_tip;
}



if(isset($_GET['item'])){
	$menuItem=strip_bad_char($_GET['item']);
	$dish=$menuItems[$menuItem];
}
?>




<div class="commoncontainer">
<div id-"dish"> 
</br>
<h2>  <?php echo "$dish[title]";?><span style="float:right; padding-right:10px;"><sup>$</sup><?php echo"$dish[price]";?></span></h2>
<p><?php echo"$dish[detail]"?></p></br>
<p><strong>Suggested beverage: <?php echo"$dish[drink]"?></strong></p></br></br>
<?php
$tempprice=$dish['price'];
?>
<p><em>Suggested Tips: <sup>$</sup><?php  tip_calculator($tempprice,.20);?></em></p>
</div>



</div><!--------teamMember---------->



<?php
include("includes/footer.php");
?>