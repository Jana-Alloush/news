<?php
include "inc/security.php";

if (isset($_GET['ID'])) {
    $id = mysqli_real_escape_string($conn, $_GET['ID']);
    
    $sql = "DELETE FROM sources WHERE ID=?";
    $stmt = mysqli_prepare($conn, $sql);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $id);
        if (mysqli_stmt_execute($stmt)) {
            header("location: managesource.php");
        } else {
            echo "Error executing the query: " . mysqli_error($conn);
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing the statement: " . mysqli_error($conn);
    }
} else {
    echo "ID parameter is missing in the URL.";
}
?>