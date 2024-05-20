<?php
session_start();
include_once("connection.php");
 
 
if(isset($_POST['submit'])) {
    if(!empty($_POST["id"]) && !empty($_POST["name"]) && !empty($_POST["dept"])) {
        $id = $_POST["id"];
        $name = $_POST["name"];
        $dept = $_POST["dept"];
        echo $id;
        echo $name;
        echo $dept;
        
        $sql = "INSERT INTO student(ID, Name, Dept) VALUES ('$id', '$name', '$dept')";
        $run = mysqli_multi_query($mysqli, $sql) or die(mysqli_query());
 
        if($run){
            echo "Saved Successfully!";
        } else {
            echo "Failed Saving info!";
        }
    } else {
        echo "All Fields are required!";
    }
}
?>
