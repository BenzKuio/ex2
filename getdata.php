<?php
include("database.php");

// Set the locale to Thai
setlocale(LC_TIME, 'th_TH.utf8');

$query = "SELECT * FROM namestable WHERE names != ''";
$result = $conn->query($query);

$html = "";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $dtstamp = $row["date"];
        $dateData = strtotime($dtstamp);
        $formattedDate = date("j F Y H:i:s", $dateData);
        $html .= "<tr>";
        $html .= "<td style='width: 25%;'>" . $row["id"] . "</td>";
        $html .= "<td style='width: 35%;'>" . $row["names"] . "</td>";
        $html .= "<td style='width: 40%;'>" . $formattedDate . "</td>";
        $html .= "</tr>";
    }
    echo $html;
} else {
    echo "<tr><td colspan='3'>No data available</td></tr>";
}

$conn->close();
