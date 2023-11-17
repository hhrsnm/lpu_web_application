<?php
include 'db_connection.php';
$conn = OpenCon();
$sql = "SELECT * FROM salestbl;";
$result = $conn->query($sql);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $item_name = $_POST['search'];
    $sql = "SELECT * FROM salestbl  WHERE employee_no = '$item_name' OR id = '$item_name';";
    $result = $conn->query($sql);
    if (!$item_name) {
        $sql = "SELECT * FROM salestbl;";
        $result = $conn->query($sql);
    }
}
?>