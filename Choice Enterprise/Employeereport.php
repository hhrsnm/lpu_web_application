<?php
error_reporting(E_ALL);
ini_set("display_errors", "On");
include 'process/employee_report.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Employee Report Page</title>
</head>

<body>
    <div class="row flex">
        <div class="col bg-dark vh-100 sticky-top" style="width: 100px;">
            <h2 style="margin-bottom: 2rem; text-align:center; font-family:algerian; color:white;">Herson's Choice Enterprise</h2>
            <ul style="font-size:130%;">
                <li class="list-group-item" style="margin-bottom: 2rem;"><a href="adminpage.php" class="text-white text-decoration-none">Home</a></li>
                <li class="list-group-item" style="margin-bottom: 2rem;"><a href="Employee_registration_save.php" class="text-white text-decoration-none">Employee Registration</a></li>
                <li class="list-group-item" style="margin-bottom: 2rem;"><a href="Employeereport.php" class="text-lightskyblue text-decoration-none">Employee Report</a></li>
                <li class="list-group-item" style="margin-bottom: 2rem;"><a href="Payroll.php" class="text-white text-decoration-none">Payroll</a></li>
                <li class="list-group-item" style="margin-bottom: 2rem;"><a href="Payrollreport.php" class="text-white text-decoration-none">Payroll Report</a></li>
                <li class="list-group-item" style="margin-bottom: 2rem;"><a href="Cellphone.php" class="text-white text-decoration-none">POS</a></li>
                <li class="list-group-item" style="margin-bottom: 2rem;"><a href="POSreport.php" class="text-white text-decoration-none">POS Sales Report</a></li>
                <li class="list-group-item" style="margin-bottom: 2rem;"><a href="user_account_info.php" class="text-white text-decoration-none">User Account</a></li>
                <li class="list-group-item" style="margin-bottom: 2rem;"><a href="Login.php" class="text-white text-decoration-none">Logout</a></li>
            </ul>
        </div>
        <div class="col-8  flex-grow-1" style="background-image:url('css/b1gsite.jpg'); text-align:center;"> 
            <h1>Herson's Choice Enterprise</h1>
            <div class="px-5 bg-white">
                <h1 class="d-flex justify-content-center m-2" style="font-size:30px;">Employee Report</h1>
                <form action="" method="post" class="input-group mb-3 mt-3" style="height: 2rem; width:250px">
                    <input type="text" class="form-control" aria-describedby="button-addon2" placeholder="Search item name" name='search'>
                    <button class="btn btn-outline-secondary" type="submit" id="search_button"> <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 24 24" class="">
                            <path d="M 9 2 C 5.1458514 2 2 5.1458514 2 9 C 2 12.854149 5.1458514 16 9 16 C 10.747998 16 12.345009 15.348024 13.574219 14.28125 L 14 14.707031 L 14 16 L 20 22 L 22 20 L 16 14 L 14.707031 14 L 14.28125 13.574219 C 15.348024 12.345009 16 10.747998 16 9 C 16 5.1458514 12.854149 2 9 2 z M 9 4 C 11.773268 4 14 6.2267316 14 9 C 14 11.773268 11.773268 14 9 14 C 6.2267316 14 4 11.773268 4 9 C 4 6.2267316 6.2267316 4 9 4 z"></path>
                        </svg></button>
                </form>
                <section>
                    <div class="table-responsive">
                        <table class="table table-bordered bg-white rounded small table-hover">
                            <thead class="border-bottom">
                                <tr>
                                    <th class="py-6 ps-6 bg-dark"><span class="btn p-0 d-flex align-items-center text-white fw-bold px-3  pe-none">Employee Number</span></th>
                                    <th class="py-6 ps-6 bg-dark"><span class="btn p-0 d-flex align-items-center text-white fw-bold px-3  pe-none">Employee Name</span></th>
                                    <th class="py-6 ps-6 bg-dark"><span class="btn p-0 d-flex align-items-center text-white fw-bold px-3  pe-none">Date of Birth</span></th>
                                    <th class="py-6 ps-6 bg-dark"><span class="btn p-0 d-flex align-items-center text-white fw-bold px-3  pe-none">Qual. Dependents</span></th>
                                    <th class="py-6 ps-6 bg-dark"><span class="btn p-0 d-flex align-items-center text-white fw-bold px-3  pe-none">Civil Status</span></th>
                                    <th class="py-6 ps-6 bg-dark"><span class="btn p-0 d-flex align-items-center text-white fw-bold px-3  pe-none">Department</span></th>
                                    <th class="py-6 ps-6 bg-dark"><span class="btn p-0 d-flex align-items-center text-white fw-bold px-3  pe-none">Designation</span></th>
                                    <th class="py-6 ps-6 bg-dark"><span class="btn p-0 d-flex align-items-center text-white fw-bold px-3  pe-none">Employee Status</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($result) {
                                    while ($item = $result->fetch_assoc()) {
                                        echo "
                                <tr class='clickable-row' style='cursor: pointer' data-href='Employee_registration_save.php?id={$item['id']}'>
                                    <td class='py-6 ps-6'>$item[employee_no]</td>
                                    <td class='py-6 ps-6'>$item[fname] $item[mname] $item[lname]</td>
                                    <td class='py-6 ps-6'>$item[birth_date]</td>
                                    <td class='py-6 ps-6'>$item[qualified_dependent_status]</td>
                                    <td class='py-6 ps-6'>$item[civil_status]</td>
                                    <td class='py-6 ps-6'>$item[department]</td>
                                    <td class='py-6 ps-6'>$item[designation]</td>
                                    <td class='py-6 ps-6'>$item[employee_status]</td>
                                </tr>
                                ";
                                    }
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </section>

            </div>
        </div>
        </div>

    </div>
</body>
<script>
    $(document).ready(function(){
        $(".clickable-row").click(function(){
            window.location = $(this).data("href")
        })
    })
</script>
</html>