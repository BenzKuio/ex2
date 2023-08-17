<?php
include("database.php");

$query = "SELECT * FROM namestable WHERE names != ''";
$result = $conn->query($query);
// var_dump($result);
$html = "";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $html .= "<tr>";
        $html .= "<td>" . $row["id"] . "</td>";
        $html .= "<td>" . $row["names"] . "</td>";
        $html .= "</tr>";
    }
    echo($html);
    // echo  json_encode(array("response" => "1"));
} else {
    echo "<tr><td colspan='2'>No data available</td></tr>";
    // echo  json_encode(array("response" => "0"));
}

$conn->close();
