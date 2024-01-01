<?php
include 'db_connection.php';
$conn = OpenCon();
$sql = "SELECT * FROM incometbl JOIN personal_infotbl ON incometbl.employee_no = personal_infotbl.employee_no JOIN deductiontbl ON incometbl.employee_no = deductiontbl.employee_no;";
$result = $conn->query($sql);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $item_name = $_POST['search'];
    if (!$item_name) {
        $sql = "SELECT * FROM incometbl JOIN personal_infotbl ON incometbl.employee_no = personal_infotbl.employee_no JOIN deductiontbl ON incometbl.employee_no = deductiontbl.employee_no;";
        $result = $conn->query($sql);
    } else {
        $sql = "SELECT * FROM incometbl JOIN personal_infotbl ON incometbl.employee_no = personal_infotbl.employee_no JOIN deductiontbl ON incometbl.employee_no = deductiontbl.employee_no WHERE personal_infotbl.employee_no = $item_name;";
        $result = $conn->query($sql);
    }
}
?>