<?php
include("database.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = (isset($_POST["name"])?($_POST["name"]): "");

    $stmt = mysqli_prepare($conn,"INSERT INTO namestable (names) VALUES (?)");
    // $stmt->bind_param("s", $name);
    mysqli_stmt_bind_param($stmt, 's', $name);
    // $stmt->execute();

    if(mysqli_stmt_execute($stmt)){
        // echo "Data inserted successfully";
        echo json_encode(array("response" => "1"));
    } else {
      echo json_encode(array("response" => "0"));
    //   echo "Error" . $conn->error;
    }
    $stmt->close();
}else {
    echo "<script>alert('xxxxxxxxxxx');</script>";
}

$conn->close();
?>
