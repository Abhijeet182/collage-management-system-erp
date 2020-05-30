<?php
include('session.php');

include('serverinfo.php');

echo '<link href="files/bootstrap.min.css" rel="stylesheet">';
echo  '<script src="files/jquery.min.js"></script>';
echo  '<script src="files/bootstrap.min.js"></script>';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['searchbar'])) {

$selected_radio = $_POST['choice'];

if ($selected_radio == '0') { 
 $sql = "SELECT title,author_name,publisher_name,year_published,Shelf,Rack_Number,copies-count FROM authors,book_copy,publishers where book_copy.title like '%".$_POST['searchbar']."%' and authors.author_id = book_copy.author_id and book_copy.publisher_id = publishers.publisher_id and copies-count > 0" ;
}
else if ($selected_radio == '1') {

 $sql = "SELECT title, author_name,  publisher_name, year_published,Shelf,Rack_Number,copies-count FROM authors,book_copy,publishers where author_name like '%".$_POST['searchbar']."%' and authors.author_id = book_copy.author_id and book_copy.publisher_id = publishers.publisher_id and copies-count > 0";
}
else if ($selected_radio == '2') {

$sql = "SELECT title, author_name, publisher_name, year_published,Shelf,Rack_Number,copies-count FROM authors,book_copy,publishers where publisher_name like '%".$_POST['searchbar']."%' and publishers.publisher_id = book_copy.publisher_id and authors.author_id = book_copy.author_id and copies-count > 0";
 }
}
	

$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    
     echo '<table class="table table-hover"><tr class="success"><th>Index</th><th>Title</th><th>Author Name</th><th>Publisher Name</th><th>&nbspYear Published</th><th>Shelf</th><th>Rack Number</th><th>Copies</th><th>Choice</th></tr>';
     // output data of each row
	 $count = 0;
     while($row = $result->fetch_assoc()) {
         echo '<form method="post" action="cart_update.php">';
 	 $count++;
         echo '<tr class = "danger"><td>' . $count . "</td> <td>" . $row["title"]. "&nbsp</td> <td>" . $row["author_name"]. "&nbsp</td> 
		           <td>" . $row["publisher_name"]. "&nbsp</td>
				   <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . $row["year_published"]. "</td> 
				   <td>" . $row["Shelf"].  '</td>
				   <td>' . $row["Rack_Number"].  '</td>
				   <td>' . $row["copies-count"].  '</td>
				     <input type="hidden" value="'.$row["title"].'" name="title"  />
					 <input type="hidden" value="'.$row["author_name"].'" name="author_name"  />
					 <input type="hidden" value="'.$row["publisher_name"].'" name="publisher_name"  />
					 <input type="hidden" value="'.$row["year_published"].'" name="year_published"  />
     				 <td><button type = "submit" class= "btn btn-success" >Add To Cart</button></td></tr>';
         echo '</form>';       
	   }
     echo "</table>";
	 
} else {
     echo "0 results";
}


$conn->close();
?>  

</body>
</html>