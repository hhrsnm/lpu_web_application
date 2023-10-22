<?php
error_reporting(E_ALL);
ini_set("display_errors", "On");
require_once('process/payroll_computation.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="js/herson_payroll_save.js"></script>
    <link rel="stylesheet" href="css/payroll.css">
    <title>Payroll</title>
</head>

<body>
    <div class="row flex">
        <div class="col bg-dark vh-100 sticky-top" style="width: 100px;">
            <h2 style="margin-bottom: 2rem; text-align:center; font-family:algerian; color:white;">Herson's Choice Enterprise</h2>
            <ul style="font-size:130%;">
                <li class="list-group-item" style="margin-bottom: 2rem;"><a href="adminpage.php" class="text-white text-decoration-none">Home</a></li>
                <li class="list-group-item" style="margin-bottom: 2rem;"><a href="Employee_registration_save.php" class="text-white text-decoration-none">Employee Registration</a></li>
                <li class="list-group-item" style="margin-bottom: 2rem;"><a href="" class="text-white text-decoration-none">Employee Report</a></li>
                <li class="list-group-item" style="margin-bottom: 2rem;"><a href="Payroll.php" class="text-lightskyblue text-decoration-none">Payroll</a></li>
                <li class="list-group-item" style="margin-bottom: 2rem;"><a href="" class="text-white text-decoration-none">Payroll Report</a></li>
                <li class="list-group-item" style="margin-bottom: 2rem;"><a href="Cellphone.php" class="text-white text-decoration-none">POS</a></li>
                <li class="list-group-item" style="margin-bottom: 2rem;"><a href="" class="text-white text-decoration-none">POS Sales Report</a></li>
                <li class="list-group-item" style="margin-bottom: 2rem;"><a href="user_account_info.php" class="text-white text-decoration-none">User Account</a></li>
                <li class="list-group-item" style="margin-bottom: 2rem;"><a href="Login.php" class="text-white text-decoration-none">Logout</a></li>
            </ul>
        </div>
        <div class="col-8  flex-grow-1" style="background-image:url('css/bgsite.jpg');">

            <div class="container border" style="background-color:floralwhite;">
            
                <div class="container">
                    <div class="page_border" style="background-color:white;"> 
                        <h1 class="text-center" style="padding-top:10px; padding-bottom:10px; font-weight:bold;">Herson's Choice Payroll Application</h1>
                        <h5 style="padding-top:10px; font-weight:bold;">EMPLOYEE BASIC INFO:</h5>
                        <form action="Payroll.php" method="POST">
                            <div class="payrol_form_group1">
                                <div style="float:left; width:50%;">
                                    <div style="margin-left:100px; margin-top:10px;">
                                        <img src="css/NoImage.jpg" class="imgthumbnail" style="width:250px;" alt="Picture Preview">
                                        <input type="file" style="margin-top:10px; text-align:center;" name="file">
                                    </div>
                                    <div>
                                        <span style="margin-top:20px;">Employee Number:</span>
                                        <input type="text" class="form-control input_box1" style="margintop:20px;" id="employee_no" name="employee_no" value="<?php echo $employee_no; ?>">
                                    </div>
                                    <div>
                                        <span>Department:</span>
                                        <input type="text" class="form-control input_box1" id="department" name="department" value="<?php echo $department; ?>" disabled>
                                    </div>
                                    <div>
                                      <span><button type="submit" name="cancel" class="btn btndanger" style="padding:5px; background-color:red; width:100px; margin-left:180px;">Search &#128269</button></span>
                                    </div>
                                </div>
                                <div class="payrol_form_group1" style="width:50%; margin:right; margin-top:36px;">
                                    <div>
                                        <span>Firstname:</span>
                                        <input type="text" class="form-control input_box1" id="firstname" name="firstname" value="<?php echo $firstname; ?>" disabled>
                                    </div>
                                    <div>
                                        <span>Middle Name:</span>
                                        <input type="text" class="form-control input_box1" id="mname" name="mname" value="<?php echo $mname; ?>" disabled>
                                    </div>
                                    <div>
                                        <span>Surname:</span>
                                        <input type="text" class="form-control input_box1" id="surname" name="surname" value="<?php echo $surname; ?>" disabled>
                                    </div>
                                    <div>
                                        <span>Civil Status:</span>
                                        <input type="text" class="form-control input_box1" id="civil_status" name="civil_status" value="<?php echo $civil_status; ?>" disabled>
                                    </div>
                                    <div>
                                        <span>Designation:</span>
                                        <input type="text" class="form-control input_box1" id="designation" name="designation" value="<?php echo $designation; ?>" disabled>
                                    </div>
                                    <div>
                                        <span>Qualified Dependents Status:</span>
                                        <input type="text" class="form-control input_box1" id="qualified_dependents" name="qualified_dependents" value="<?php echo $qualified_dependents; ?>">
                                    </div>
                                    <div>
                                        <span>Paydate:</span>
                                        <input type="text" class="form-control input_box1" id="paydate" name="paydate" value="<?php echo $paydate; ?>" disabled>
                                    </div>
                                    <div>
                                        <span>Employee Status:</span>
                                        <input type="text" class="form-control input_box1" id="emp_status" name="emp_status" value="<?php echo $emp_status; ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="payrol_form_group">
                                    <div style="float:left; width:50%;">
                                        <div>
                                            <h5 style="padding-top:10px; padding-bottom:10px; font-weight:bold;">BASIC INCOME:</h5>
                                        </div>
                                        <div>
                                            <span>Rate / Hour:</span>
                                            <input type="text" class="form-control input_box" id="basic_rate_hour" name="basic_rate_hour" value="<?php echo $basic_rate_hour; ?>">
                                        </div>
                                        <div>
                                            <span>No. of Hours / Cut Off:</span>
                                            <input type="text" class="form-control input_box" id="basic_num_hours_cutoff" name="basic_num_hours_cutoff" value="<?php echo
                                                                                                                                                                $basic_num_hours_cutoff; ?>">
                                        </div>
                                        <div>
                                            <span>Income / Cut Off:</span>
                                            <input type="text" class="form-control input_box" id="basic_income_cutoff" name="basic_income_cutoff" value="<?php echo $basic_income_cutoff; ?>" disabled>
                                        </div>
                                        <div>
                                            <h5 style="padding-top:10px; padding-bottom:10px; font-weight:bold;">HONORARIUM INCOME:</h5>
                                        </div>
                                        <div>
                                            <span>Rate / Hour:</span>
                                            <input type="text" class="form-control input_box" id="hono_rate_hour" name="hono_rate_hour" value="<?php echo $hono_rate_hour; ?>">
                                        </div>
                                        <div>
                                            <span>No. of Hours / Cut Off:</span>
                                            <input type="text" class="form-control input_box" id="hono_num_hours_cutoff" name="hono_num_hours_cutoff" value="<?php echo $hono_num_hours_cutoff; ?>">
                                        </div>
                                        <div>
                                            <span>Income / Cut Off:</span>
                                            <input type="text" class="form-control input_box" id="hono_income_cutoff" name="hono_income_cutoff" value="<?php echo $hono_income_cutoff; ?>" disabled>
                                        </div>
                                        <div>
                                            <h5 style="padding-top:10px; padding-bottom:10px; font-weight:bold;">OTHER INCOME:</h5>
                                        </div>
                                        <div>
                                            <span>Rate / Hour:</span>
                                            <input type="text" class="form-control input_box" id="other_rate_hour" name="other_rate_hour" value="<?php echo $other_rate_hour; ?>">
                                        </div>
                                        <div>
                                            <span>No. of Hours / Cut Off:</span>
                                            <input type="text" class="form-control input_box" id="other_num_hours_cutoff" name="other_num_hours_cutoff" value="<?php echo
                                                                                                                                                                $other_num_hours_cutoff; ?>">
                                        </div>
                                        <div>
                                            <span>Income / Cut Off:</span>
                                            <input type="text" class="form-control input_box" id="other_income_cutoff" name="other_income_cutoff" value="<?php echo $other_income_cutoff; ?>" disabled>
                                        </div>
                                        <div>
                                            <h5 style="padding-top:10px; padding-bottom:10px; font-weight:bold;">SUMMARY INCOME:</h5>
                                        </div>
                                        <div>
                                            <span>GROSS INCOME:</span>
                                            <input type="text" class="form-control input_box" id="gross_income" name="gross_income" value="<?php echo $gross_income; ?>" disabled>
                                        </div>
                                        <div>
                                            <span>NET INCOME:</span>
                                            <input type="text" class="form-control input_box" id="net_income" name="net_income" value="<?php echo $net_income; ?>" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="deduction_form_group" style="width:50%; margin:right; float:right;">
                                    <div>
                                        <div>
                                            <h5 style="padding-top:10px; padding-bottom:10px; font-weight:bold;">REGULAR DEDUCTIONS:</h5>
                                        </div>
                                        <div>
                                            <span>SSS Contribution:</span>
                                            <input type="text" class="form-control deduction_box" id="sss_contri" name="sss_contri" value="<?php echo $sss_contri; ?>" disabled>
                                        </div>
                                        <div>
                                            <span>PhilHealth Contribution:</span>
                                            <input type="text" class="form-control deduction_box" id="philH_contri" name="philH_contri" value="<?php echo $philH_contri; ?>" disabled>
                                        </div>
                                        <div>
                                            <span>Pagibig Contribution:</span>
                                            <input type="text" class="form-control deduction_box" id="pagibig_contri" name="pagibig_contri" value="<?php echo $pagibig_contri; ?>" disabled>
                                        </div>
                                        <div>
                                            <span>Income Tax Contribution:</span>
                                            <input type="text" class="form-control deduction_box" id="tax_contri" name="tax_contri" value="<?php echo $tax_contri; ?>" disabled>
                                        </div>
                                        <div>
                                            <h5 style="padding-top:10px; padding-bottom:10px; font-weight:bold;">OTHER DEDUCTIONS:</h5>
                                        </div>
                                        <div>
                                            <span>SSS Loan:</span>
                                            <input type="text" class="form-control deduction_box" id="sss_loan" name="sss_loan" value="<?php echo $sss_loan; ?>">
                                        </div>
                                        <div>
                                            <span>Pagibig Loan:</span>
                                            <input type="text" class="form-control deduction_box" id="pagibig_loan" name="pagibig_loan" value="<?php echo $pagibig_loan; ?>">
                                        </div>
                                        <div>
                                            <span>Faculty Savings Deposit:</span>
                                            <input type="text" class="form-control deduction_box" id="fs_deposit" name="fs_deposit" value="<?php echo $fs_deposit; ?>">
                                        </div>
                                        <div>
                                            <span>Faculty Savings Loan:</span>
                                            <input type="text" class="form-control deduction_box" id="fs_loan" name="fs_loan" value="<?php echo $fs_loan; ?>">
                                        </div>
                                        <div>
                                            <span>Salary Loan:</span>
                                            <input type="text" class="form-control deduction_box" id="salary_loan" name="salary_loan" value="<?php echo $salary_loan; ?>">
                                        </div>
                                        <div>
                                            <span>Other Loans:</span>
                                            <input type="text" class="form-control deduction_box" id="other_loans" name="other_loans" value="<?php echo $other_loans; ?>">
                                        </div>
                                        <div>
                                            <h5 style="padding-top:10px; padding-bottom:10px; font-weight:bold;">DEDUCTION SUMMARY:</h5>
                                        </div>
                                        <div>
                                            <span>Total Deductions:</span>
                                            <input type="text" class="form-control deduction_box" id="total_deduct" name="total_deduct" value="<?php echo $total_deduct; ?>" disabled>
                                        </div>
                                        <div>
                                            <div>
                                                <button type="submit" name="calculate_gross_income" class="btn btn-primary" style="padding:5px; margin-bottom:5px;">CALCULATE GROSS INCOME</button>
                                                <button type="submit" name="calculate_net_income" class="btn btn-primary" style="padding:5px; margin-bottom:5px;">CALCULATE NET INCOME</button>
                                                <button type="submit" name="new" class="btn btnwarning" style="padding:5px; margin-bottom:5px; width:100px; background-color:orange;">NEW</button>
                                                <button type="submit" name="print_preview" id='save' class="btn btninfo" style="padding:5px; background-color:turquoise;">SAVE</button>
                                                <button type="submit" name="print_payslip" class="btn btninfo" style="padding:5px; background-color:turquoise; width:117px;">PRINT PAYSLIP</button>
                                                <button type="submit" name="cancel" class="btn btndanger" style="padding:5px; background-color:red; width:100px;">CANCEL</button>
                                                <button type="submit" name="close" class="btn btndark" style="padding:5px; background-color:black; width:100px;">CLOSE</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>