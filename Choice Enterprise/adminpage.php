<?php
include 'process/db_connection.php';
include 'process/Session_check.php';

$conn = OpenCon();
$sql = "SELECT * FROM `salestbl` ORDER BY id DESC LIMIT 5;";
$result = $conn->query($sql);

$sql2 = "SELECT id FROM `personal_infotbl`;";
$result2 = mysqli_fetch_all($conn->query($sql2));

$sql3 = "SELECT COUNT(privilege) AS privilege_count FROM user_accounttbl WHERE privilege != 0 GROUP BY privilege WITH ROLLUP;";
$result3 = mysqli_fetch_all($conn->query($sql3));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Admin Page</title>
</head>

<body>
    <div class="row flex">
        <div class="col bg-dark vh-100 sticky-top" style="width: 100px;">
            <h2 style="margin-bottom: 2rem; text-align:center; font-family:algerian; color:white;">Herson's Choice Enterprise</h2>
            <ul style="font-size:130%;">
                <li class="list-group-item" style="margin-bottom: 2rem;"><a href="adminpage.php" class="text-lightskyblue text-decoration-none hover-me">Home</a></li>
                <li class="list-group-item <?php echo $user_privilege == 1 ? '' : 'd-none' ?>" style="margin-bottom: 2rem;"><a href="Employee_registration_save.php" class="text-white text-decoration-none hover-me">Employee Registration</a></li>
                <li class="list-group-item <?php echo $user_privilege == 1 ? '' : 'd-none' ?>" style="margin-bottom: 2rem;"><a href="Employeereport.php" class="text-white text-decoration-none hover-me">Employee Report</a></li>
                <li class="list-group-item <?php echo ($user_privilege == 1 || $user_privilege == 2) ? '' : 'd-none' ?>" style="margin-bottom: 2rem;"><a href="Payroll.php" class="text-white text-decoration-none hover-me">Payroll</a></li>
                <li class="list-group-item <?php echo ($user_privilege == 1 || $user_privilege == 2) ? '' : 'd-none' ?>" style="margin-bottom: 2rem;"><a href="Payrollreport.php" class="text-white text-decoration-none hover-me">Payroll Report</a></li>
                <li class="list-group-item <?php echo ($user_privilege == 1 || $user_privilege == 3) ? '' : 'd-none' ?>" style="margin-bottom: 2rem;"><a href="Cellphone.php" class="text-white text-decoration-none hover-me">POS</a></li>
                <li class="list-group-item <?php echo ($user_privilege == 1 || $user_privilege == 3) ? '' : 'd-none' ?>" style="margin-bottom: 2rem;"><a href="POSreport.php" class="text-white text-decoration-none hover-me">POS Sales Report</a></li>
                <li class="list-group-item <?php echo $user_privilege == 1 ? '' : 'd-none' ?>" style="margin-bottom: 2rem;"><a href="user_account_table.php" class="text-white text-decoration-none hover-me">User Account</a></li>
                <li class="list-group-item" style="margin-bottom: 2rem;"><a href="Login.php" class="text-white text-decoration-none hover-me">Logout</a></li>
            </ul>
        </div>
        <div class="col-8  flex-grow-1" style="background-image:url('css/b1gsite.jpg'); text-align:center;"> 
            <h1>Herson's Choice Enterprise</h1>
            <p style="font-size:20px;">the company that you can't rely on...</p><br>
            <div>
                <img src="css/adminpagebg.png" alt="bghome" style="border:solid; border-radius:20px; border-width:3px; width:75%;">
            </div>
        </div>

    </div>
</body>

</html>