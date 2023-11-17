<?php
include 'db_connection.php';
$conn = OpenCon();
$sql = "SELECT * FROM personal_infotbl;";
$result = $conn->query($sql);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $item_name = $_POST['search'];
    $sql = "SELECT * FROM personal_infotbl  WHERE employee_no = '$item_name' OR id = '$item_name';";
    $result = $conn->query($sql);
    if (!$item_name) {
        $sql = "SELECT * FROM personal_infotbl;";
        $result = $conn->query($sql);
    }
}
?>