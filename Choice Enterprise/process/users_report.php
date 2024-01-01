<?php
include 'process/db_connection.php';

$conn = OpenCon();
$sql = "SELECT * FROM user_accounttbl JOIN personal_infotbl ON user_accounttbl.employee_no = personal_infotbl.employee_no WHERE user_accounttbl.username = '' OR user_accounttbl.password = '' OR user_accounttbl.confirm_password = ''";
$result = $conn->query($sql);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $item_name = $_POST['search'];
    if (!$item_name) {
        $sql = "SELECT * FROM user_accounttbl JOIN personal_infotbl ON user_accounttbl.employee_no = personal_infotbl.employee_no;";
        $result = $conn->query($sql);
    } else {
        $sql = "SELECT * FROM user_accounttbl JOIN personal_infotbl ON user_accounttbl.employee_no = personal_infotbl.employee_no WHERE user_accounttbl.employee_no = $item_name;";
        $result = $conn->query($sql);
    }
}
?>