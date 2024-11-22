
<!-- Dela Cruz, jhonrick P. 
 BSiT 2 Y1 5
 WEBDEV ACT 1 Finals
-->

<?php
include 'db.php';

$sql = "SELECT * FROM Employees";
$result = $conn -> query($sql);

if ($result -> num_rows > 0){
    echo "<table border = '1' >";
    echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Salary</th><th> Department </th><th>Hire Date </th></th><th>Action </th></tr>";
    while ($row = $result -> fetch_assoc()){
        echo "<tr> 
        <td>{$row['id']} </td> 
        <td>{$row['first_name']} </td> 
        <td>{$row['last_name']} </td> 
        <td>{$row['salary']} </td> 
        <td>{$row['department']} </td> 
        <td>{$row['hire_date']} </td> 
        <td><a href = 'index.php?edit_id={$row['id']}'> Edit </a></td> 
        </tr>";

    }
    echo "</table>";
    
}  
    
    else{
        echo "No Records";
        

}



?>