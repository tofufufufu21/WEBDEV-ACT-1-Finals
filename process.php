<!-- Dela Cruz, jhonrick P. 
 BSiT 2 Y1 5
 WEBDEV ACT 1 Finals
-->


<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $action = $_POST['action'];


    if($action === "create"){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $salary = $_POST['salary'];
        $department = $_POST['department'];
        $hire_date = $_POST['hire_date'];
        

        $sql = "INSERT INTO employees (first_name, last_name, salary, department, hire_date)
            VALUES ('$first_name', '$last_name', '$salary', '$department', '$hire_date')";
        

            $conn->query($sql);


    }elseif($action === "update"){
        $id = $_POST['id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $salary = $_POST['salary'];
        $department = $_POST['department'];
        $hire_date = $_POST['hire_date'];

    
        $sql = "UPDATE employees 
            SET first_name = '$first_name', last_name = '$last_name', salary = '$salary', department = '$department', hire_date = '$hire_date'
            WHERE id = '$id'";
    
            
        

            $conn->query($sql);

    

}elseif ($action === 'delete'){
    $id = $_POST['id'];

    $sql ="DELETE from employees WHERE id = $id";
            $conn->query($sql);



}

}



header("Location: index.php");
?>
