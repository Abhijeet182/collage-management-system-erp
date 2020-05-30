<?php
require 'session.php';
include_once("serverinfo.php");
//if(!isset($_SESSION['username'])){
    //   header("location:index.php");  
  //  }

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Books in Cart</title>
<link href="style/style.css" rel="stylesheet" type="text/css"></head>
<body>
<div id="products-wrapper">
 <h1>View Cart</h1>
 <div class="view-cart">
 	<?php
    $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	$conn = new mysqli($servername, $username, $password, $dbname)or die("cannot connect");

	if(isset($_SESSION["books"]))
    {
	    $total = 0;
		echo '<form method="post" action="process.php">';
		echo '<ul>';
		$cart_items = 0;
		foreach ($_SESSION["books"] as $cart_itm)
        {
           $title = $cart_itm["name"];
		   $author_name  = $cart_itm["author"];
		   $publisher_name = $cart_itm["publisher"];
		   $year_published = $cart_itm["year"];
	$results = $conn->query("SELECT title,author_name,publisher_name,year_published from authors,publishers,book_copy WHERE book_copy.title = '$title' and
	authors.author_name = '$author_name'	and publishers.publisher_name = '$publisher_name' and book_copy.copies > 1 and 
	authors.author_id = book_copy.author_id and book_copy.publisher_id = publishers.publisher_id");							  		   
	$obj = $results->fetch_object();
		   
		    echo '<li class="cart-itm">';
                echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["name"].'&return_url="cart.php">&times;</a></span>';

        echo '<h3>'.$cart_itm["name"].'</h3>';
        echo '<div class="p-code">Author : '.$cart_itm["author"].'</div>';
        echo '<div class="p-qty">Publisher : '.$cart_itm["publisher"].'</div>';
		echo '<div class="p-qty">Year Published : '.$cart_itm["year"].'</div>';
        echo '</li>';
    
    echo '</ol>';
    

		//	echo '<input type="hidden" name="item_name['.$cart_items.']" value="'.$obj->product_name.'" />';
			//echo '<input type="hidden" name="item_code['.$cart_items.']" value="'.$product_code.'" />';
			//echo '<input type="hidden" name="item_desc['.$cart_items.']" value="'.$obj->product_desc.'" />';
			//echo '<input type="hidden" name="item_qty['.$cart_items.']" value="'.$cart_itm["qty"].'" />';
			$cart_items ++;
			
        }
    	echo '</ul>';
		echo '<span class="check-out-txt"><strong></strong> <a href="transaction.php">Check-out!</a></span><br>';
	echo '<span class="empty-cart"><a href="cart_update.php?emptycart=1&return_url="cart.php">Empty Cart</a></span><br>';
	echo '<span class="check-out-txt"><a href="members.php">Issue Another</a></span>';
echo '</form>';
		
    }else{
    echo 'Your Cart is empty<br>';
	echo '<a href="members.php">Click to return</a>'; 
}
	
    ?>
    </div>
</div>
</body>
</html>
