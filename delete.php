<?php include('includes/error-reporting.php');include('includes/connx.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['employee_id'])) {

    $employee_id = $_GET['employee_id']; //store get value

    $stmt = $conn->prepare("DELETE FROM employee_details WHERE employee_id=?");
    $stmt->bind_param("i", $employee_id); //bind the variables to the sql statement as parameters
    $stmt->execute(); //Execute the prepared statement
    header('Location: delete-records.php'); //redirect back to delete-records.php

}

else{

    //something else
}

$stmt->close(); // close sql statement - optional and depends on context
$conn->close(); // close dbase connection - optional and depend on context

?>

