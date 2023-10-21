<?php include('includes/connection.php'); ?>
<?php include('layouts/header.php'); ?>

<?php 

$id = $_GET['id'];

        $sql = "SELECT * FROM profile WHERE id=$id";
        $row_set = mysqli_query($con, $sql);
        if(!$row_set){
            die("Database query field." . mysqli_error($con));
        }
        $row = mysqli_fetch_assoc($row_set);

        if(isset($_POST["submit"])){

            $f_name = $_POST['f_name'];
            $m_name = $_POST['m_name'];
            $l_name = $_POST['l_name'];
            $age = $_POST['age'];
            $sex = $_POST['sex'];
            $mobile = $_POST['mobile'];

            $sql = "UPDATE profile SET ";
            $sql .= "f_name = '{$f_name}', ";
            $sql .= "m_name = '{$m_name}', ";
            $sql .= "l_name = '{$l_name}', ";
            $sql .= "age = '{$age}', ";
            $sql .= "sex = '{$sex}', ";
            $sql .= "mobile = {$mobile}";
            $sql .= " WHERE id=$id";
            $sql .= " LIMIT 1";
            $profile_set = mysqli_query($con, $sql);
            if(!$profile_set){
                die("Database query field." . mysqli_error($con));
            }else{
                header('Location: index.php');
        }
    }
?>


<form action="edit.php?id=<?php echo $id; ?>"method="post">

    <input type="text" name="f_name" value="<?php echo $row['f_name']; ?>" placeholder="First Name" />
    <input type="text" name="m_name" value="<?php echo $row['m_name']; ?>" placeholder="Middle Name" />
    <input type="text" name="l_name" value="<?php echo $row['l_name']; ?>" placeholder="Last Name" />
    <input type="text" name="age" value="<?php echo $row['age']; ?>" placeholder="Age" />
    <input type="text" name="sex" value="<?php echo $row['sex']; ?>" placeholder="Sex" />
    <input type="text" name="mobile" value="<?php echo $row['mobile']; ?>" placeholder="Mobile" />
    <input type="submit" value="Submit" name="submit"/>

</form>
