<?php include('includes/connection.php'); ?>
<?php
    $id = $_GET['id'];

    $sql = "DELETE FROM profile WHERE id=$id LIMIT 1";
    $row_set = mysqli_query($con, $sql);
    if(!$row_set){
        die("Database query field." . mysqli_error($con));
    }
    header('Location: index.php');
    
?>
