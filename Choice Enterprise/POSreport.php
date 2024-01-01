<?php
error_reporting(E_ALL);
ini_set("display_errors", "On");
require_once('process/pos_report.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>POS Report Page</title>
</head>

<body>
    <div class="row flex">
        <div class="col bg-dark vh-100 sticky-top" style="width: 100px;">
            <h2 style="margin-bottom: 2rem; text-align:center; font-family:algerian; color:white;">Herson's Choice Enterprise</h2>
            <ul style="font-size:130%;">
                <li class="list-group-item" style="margin-bottom: 2rem;"><a href="adminpage.php" class="text-white text-decoration-none hover-me">Home</a></li>
                <li class="list-group-item <?php echo $user_privilege == 1 ? '' : 'd-none' ?>" style="margin-bottom: 2rem;"><a href="Employee_registration_save.php" class="text-white text-decoration-none hover-me">Employee Registration</a></li>
                <li class="list-group-item <?php echo $user_privilege == 1 ? '' : 'd-none' ?>" style="margin-bottom: 2rem;"><a href="Employeereport.php" class="text-white text-decoration-none hover-me">Employee Report</a></li>
                <li class="list-group-item <?php echo ($user_privilege == 1 || $user_privilege == 2) ? '' : 'd-none' ?>" style="margin-bottom: 2rem;"><a href="Payroll.php" class="text-white text-decoration-none hover-me">Payroll</a></li>
                <li class="list-group-item <?php echo ($user_privilege == 1 || $user_privilege == 2) ? '' : 'd-none' ?>" style="margin-bottom: 2rem;"><a href="Payrollreport.php" class="text-white text-decoration-none hover-me">Payroll Report</a></li>
                <li class="list-group-item <?php echo ($user_privilege == 1 || $user_privilege == 3) ? '' : 'd-none' ?>" style="margin-bottom: 2rem;"><a href="Cellphone.php" class="text-white text-decoration-none hover-me">POS</a></li>
                <li class="list-group-item <?php echo ($user_privilege == 1 || $user_privilege == 3) ? '' : 'd-none' ?>" style="margin-bottom: 2rem;"><a href="POSreport.php" class="text-lightskyblue text-decoration-none hover-me">POS Sales Report</a></li>
                <li class="list-group-item <?php echo $user_privilege == 1 ? '' : 'd-none' ?>" style="margin-bottom: 2rem;"><a href="user_account_info.php" class="text-white text-decoration-none hover-me">User Account</a></li>
                <li class="list-group-item" style="margin-bottom: 2rem;"><a href="Login.php" class="text-white text-decoration-none hover-me">Logout</a></li>
            </ul>
        </div>
        <div class="col-8  flex-grow-1" style="background-image:url('css/b1gsite.jpg'); text-align:center;"> 
            <h1>Herson's Choice Enterprise</h1>
            <div class="px-5 bg-white">
                <h1 class="d-flex justify-content-center m-2" style="font-size:30px;">POS Report</h1>
                <form action="" method="post" class="input-group mb-3 mt-3" style="height: 2rem; width:250px">
                    <input type="text" class="form-control" aria-describedby="button-addon2" placeholder="Search item name" name='search'>
                    <button class="btn btn-outline-secondary" type="submit" id="search_button"> <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 24 24" class="">
                            <path d="M 9 2 C 5.1458514 2 2 5.1458514 2 9 C 2 12.854149 5.1458514 16 9 16 C 10.747998 16 12.345009 15.348024 13.574219 14.28125 L 14 14.707031 L 14 16 L 20 22 L 22 20 L 16 14 L 14.707031 14 L 14.28125 13.574219 C 15.348024 12.345009 16 10.747998 16 9 C 16 5.1458514 12.854149 2 9 2 z M 9 4 C 11.773268 4 14 6.2267316 14 9 C 14 11.773268 11.773268 14 9 14 C 6.2267316 14 4 11.773268 4 9 C 4 6.2267316 6.2267316 4 9 4 z"></path>
                        </svg></button>
                </form>
                <section>
                    <div class="table-responsive">
                        <table class="table table-bordered bg-white rounded small">
                            <thead class="border-bottom">
                                <tr>
                                    <th class="py-6 ps-6 bg-dark"><span class="btn p-0 d-flex align-items-center text-white fw-bold px-3 pe-none">Product Name</span></th>
                                    <th class="py-6 ps-6 bg-dark"><span class="btn p-0 d-flex align-items-center text-white fw-bold px-3 pe-none">Quantity</span></th>
                                    <th class="py-6 ps-6 bg-dark"><span class="btn p-0 d-flex align-items-center text-white fw-bold px-3 pe-none">Product Price</span></th>
                                    <th class="py-6 ps-6 bg-dark"><span class="btn p-0 d-flex align-items-center text-white fw-bold px-3 pe-none">Discount Amount</span></th>
                                    <th class="py-6 ps-6 bg-dark"><span class="btn p-0 d-flex align-items-center text-white fw-bold px-3 pe-none">Discounted Amount</span></th>
                                    <th class="py-6 ps-6 bg-dark"><span class="btn p-0 d-flex align-items-center text-white fw-bold px-3 pe-none">Discount Option</span></th>
                                    <th class="py-6 ps-6 bg-dark"><span class="btn p-0 d-flex align-items-center text-white fw-bold px-3 pe-none">Cash Given</span></th>
                                    <th class="py-6 ps-6 bg-dark"><span class="btn p-0 d-flex align-items-center text-white fw-bold px-3 pe-none">Change</span></th>
                                    <th class="py-6 ps-6 bg-dark"><span class="btn p-0 d-flex align-items-center text-white fw-bold px-3 pe-none">Sale ID</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($result) {
                                    while ($item = $result->fetch_assoc()) {
                                        echo "
                                <tr class='clickable-row' style='cursor: pointer' data-href='{$item['item_type']}.php?id={$item['id']}'>
                                    <td class='py-6 ps-6'>$item[item_name]</td>
                                    <td class='py-6 ps-6'>$item[quantity]</td>
                                    <td class='py-6 ps-6'>$item[price]</td>
                                    <td class='py-6 ps-6'>$item[discount_amount]</td>
                                    <td class='py-6 ps-6'>$item[discounted_amount]</td>
                                    <td class='py-6 ps-6'>$item[discount_option]</td>
                                    <td class='py-6 ps-6'>$item[cash_given]</td>
                                    <td class='py-6 ps-6'>$item[customer_change]</td>
                                    <td class='py-6 ps-6'>$item[id]</td>
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
    $(document).ready(function() {
        $(".clickable-row").click(function() {
            window.location = $(this).data("href")
        })
    })
</script>

</html>