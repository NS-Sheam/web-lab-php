<?php
session_start();
include_once("connection.php");

$sql = "SELECT id, name, dept FROM student";
echo '<table style="width:60%" border="2">
<tr>
<th>ID</th>
<th> Student Name</th>
<th> Student Dept.</th>
<th><font color="green">Edit</font></th>
<th><font color="Red">Delete</font></th>
</tr>';

if ($result = $mysqli->query($sql)) {  // Corrected the typo here
    while ($row = $result->fetch_assoc()) {
        $ID = $row["id"];
        $Name = $row["name"];
        $Dept = $row["dept"];

        echo '<tr>
        <td>'.$ID.'</td>
        <td>'.$Name.'</td>
        <td>'.$Dept.'</td>
        <td>
        <button class="btn btn-primary"> <a href="single_edit.php?updateid='.$ID.'">Update</a></button>
        </td>
        <td>
        <button class="btn btn-primary"> <a href="single_delete.php?deleteid='.$ID.'">Delete</a></button>
        </td>
        </tr>';
    }
    $result->free();
}
$mysqli->close();
?>