<?php
include 'db_connection.php';
$conn = OpenCon();
$sql = "SELECT * FROM incometbl JOIN deductiontbl ON incometbl.employee_no=deductiontbl.employee_no JOIN personal_infotbl ON deductiontbl.employee_no=personal_infotbl.employee_no ;";
$result = $conn->query($sql);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $item_name = $_POST['search'];
    $sql = "SELECT * FROM `incometbl`  WHERE employee_no = '$item_name' OR id = '$item_name';";
    $result = $conn->query($sql);
    if (!$item_name) {
        $sql = "SELECT * FROM `incometbl`;";
        $result = $conn->query($sql);
    }
}
?>