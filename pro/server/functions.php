<?php
require "db_connection.php";
function getcats(){
	global $con;
	
	$getCatQuery="select * from categories";
	$result = mysqli_query($con,$getCatQuery);
	while($row=mysqli_fetch_assoc($result)){
	$title=$row['cat_title'];
	$id= $row['cat_id'];
	echo"<li>
                        <a class='nav-link'  href='#'> $title </a>
                    </li>";
	}
}
function getbrands(){
	global $con;
	
	$getBrandQuery="select * from brands";
	$result = mysqli_query($con,$getBrandQuery);
	while($row=mysqli_fetch_assoc($result)){
	$title=$row['brand_title'];
	$id= $row['brand_id'];
	echo"<li>
                        <a class='nav-link'  href='#'> $title </a>
                    </li>";
	}
}
?>
