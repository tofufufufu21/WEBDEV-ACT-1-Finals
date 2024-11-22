<!-- Dela Cruz, jhonrick P. 
 BSiT 2 Y1 5
 WEBDEV ACT 1 Finals
-->



<?php

include 'db.php';
$edit_id = isset($_GET['edit_id']) ? $_GET['edit_id'] : null;


$employee = null;



if($edit_id){
    $sql = "SELECT * FROM employees WHERE id = $edit_id";
    $result = $conn->query($sql);


    if($result->num_rows > 0){
        $employee = $result ->fetch_assoc();
    }

}







?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Employee Crud</title>
</head>
<body>
    
    <h1> Employee CRUD Operator </h1>
    <!-- Create/Update Form -->
        <form action = "process.php" method = "POST">
            <input type= "hidden" name = "id" value = "<?= $employee['id'] ??''?>"required>
            <input type= "text" name = "first_name" placeholder ="First Name" value = "<?= $employee['first_name'] ??''?>"required>
            <input type= "text" name = "last_name" placeholder ="Last Name" value = "<?= $employee['last_name'] ??''?>"required>
            <input type= "text" name = "salary" placeholder ="Salary" value = "<?= $employee['salary'] ??''?>"required>
            <input type= "text" name = "department" placeholder ="Department" value = "<?= $employee['department'] ??''?>"required>
            <input type= "date" name = "hire_date" placeholder ="Hire Date" value = "<?= $employee['hire_date'] ??''?>"required>
        <button type = "submit" name = "action" value = "<?= $employee ? 'update' : 'create'?>">
            <?= $employee ? 'Update' : 'Create' ?>
        </button>
        <?php if ($employee) : ?>
            <a href = "index.php"> <button type = "button" > Cancel </button></a>
        <?php endif; ?>
            </form>
        
<hr>
    <form action = "process.php" method = "POST">
            <input type="numbner" name = "id" placeholder = "Employee ID to Delete" required>
            <button type="submit" name = "action" value = "delete"> Delete </button>
        </form>
<hr>
    <h2>Employees</h2>
    <?php
        include 'read.php';
        ?>


<footer>
        <p>&copy; BSIT 2 - Y1 - 5 Dela Cruz, Jhonrick P.</p>
    </footer>



</body>
</html>