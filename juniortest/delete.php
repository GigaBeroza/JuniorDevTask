<?php 

include 'productdata.php';


if(isset($_POST['mass_delete'])){
  $all_id = $_POST['delete_box'];
  $extract_id = implode(',' , $all_id); 
  $query = "DELETE FROM products WHERE id IN($extract_id)"; 
  $query_run = mysqli_query($conn, $query);

  $conn->close();
  
  header("Location: index.php");
  
}

// IN($extract_sku)

?>