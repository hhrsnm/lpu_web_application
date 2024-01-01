<?php
                function empty_inputbox()
                {
                    $employee_no = "";
                    $employee_no = "";
                    $department = "";
                    $firstname = "";
                    $mname = "";
                    $surname = "";
                    $civil_status = "";
                    $designation = "";
                    $qualified_dependents = "";
                    $paydate = "";
                    $emp_status = "";
                    //decleration of variables where inputs are stored
                    $basic_rate_hour = "";
                    $basic_num_hours_cutoff = "";
                    $hono_rate_hour = "";
                    $hono_num_hours_cutoff = "";
                    $other_rate_hour = "";
                    $other_num_hours_cutoff = "";
                    $sss_contri = 0.00;
                    $philH_contri = 0.00;
                    $pagibig_contri = 100.00;
                    $tax_contri = 0.00;
                    $sss_loan = "";
                    $pagibig_loan = "";
                    $fs_deposit = "";
                    $fs_loan = "";
                    $salary_loan = "";
                    $other_loans = "";
                }
                //decleration of variables with fix data value for employee info
                $employee_no = "";
                $department = "";
                $firstname = "";
                $mname = "";
                $surname = "";
                $civil_status = "";
                $designation = "";
                $qualified_dependents = "";
                $paydate = "";
                $emp_status = "";
                //decleration of variables where inputs are stored
                $basic_rate_hour = "";
                $basic_num_hours_cutoff = "";
                $hono_rate_hour = "";
                $hono_num_hours_cutoff = "";
                $other_rate_hour = "";
                $other_num_hours_cutoff = "";
                $sss_contri = 0.00;
                $philH_contri = 0.00;
                $pagibig_contri = 100.00;
                $tax_contri = 0.00;
                $sss_loan = "";
                $pagibig_loan = "";
                $fs_deposit = "";
                $fs_loan = "";
                $salary_loan = "";
                $other_loans = "";

                //declarion of variables that will the results of the given formula
                $basic_income_cutoff = "";
                $hono_income_cutoff = "";
                $other_income_cutoff = "";
                $gross_income = "";
                $net_income = "";
                $total_deduct = "";

                function SSS($gross){
                    $meet=true;
                    $sss=0.00;
                    $counter=0;
                    $initial=0.00;
                    $initial2=4249.99;
                    while($meet){
                        if($gross>=29750.00){
                            $sss=1350.00;
                            $meet=false;
                        }
                        else if($gross>=$initial && $gross<=$initial2){
                            $sss=180+($counter*22.5);
                            $meet=false;
                        }
                        else{
                            $counter++;
                            $initial=$initial2+ 0.01;
                            $initial2+=500;

                        }
                    }
                    return $sss;      
                }
                function PHILHEALTH($gross){
                    $philH=0.00;
                    if($gross<=10000.00 && $gross>=0){
                        $philH=450.00;
                    } 
                    else if($gross>=10000.01 && $gross<=89999.99){
                        $philH=$gross*0.045;
                    } 
                    else {
                        $philH=4050.00;
                    }
                    return $philH;
                }
                function TAX($gross){
                    $tax=0.00;
                    if($gross<=0 && $gross<=10417){
                        $tax = $gross * 0;
                    }
                    else if($gross>10417 && $gross<=16666){
                        $tax = $gross * 0.20;
                    }
                    else if($gross>=16667 && $gross<=33332){
                        $tax = $gross * 0.25;
                    }
                    else if($gross>=33333 && $gross<=83332){
                        $tax = $gross * 0.30;
                    }
                    else if($gross>=83333 && $gross<=333332){
                        $tax = $gross * 0.32;
                    }
                    else if($gross>=333333){
                        $tax = $gross * 0.32;
                    }
                    return $tax;
                }
                //getting input from textbox and place it inside the variable by calling the name of the inputs
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // to press Calculate Gross Income button
                    if (isset($_POST["calculate_gross_income"])) {
                        /*
                        $employee_no = $_POST['employee_no'];
                        $firstname=$_POST['firstname'];
                        $mname=$_POST['mname'];
                        $surname=$_POST['surname'];
                        $civil_status=$_POST['civil_status'];
                        $designation=$_POST['designation'];
                        $department=$_POST['department'];
                        $pagibig_loan=$_POST['paydate'];
                        $emp_status=$_POST['emp_status'];
                        $basic_rate_hour = $_POST["basic_rate_hour"];
                        $basic_num_hours_cutoff = $_POST["basic_num_hours_cutoff"];
                        $hono_rate_hour = $_POST["hono_rate_hour"];
                        $hono_num_hours_cutoff = $_POST["hono_num_hours_cutoff"];
                        $other_rate_hour = $_POST["other_rate_hour"];
                        $other_num_hours_cutoff = $_POST["other_num_hours_cutoff"];
                        $sss_loan = $_POST["sss_loan"];
                        $pagibig_loan = $_POST["pagibig_loan"];
                        $fs_deposit = $_POST["fs_deposit"];
                        $fs_loan = $_POST["fs_loan"];
                        $salary_loan = $_POST["salary_loan"];
                        $other_loans = $_POST["other_loans"];
                        $qualified_dependents = $_POST["qualified_dependents"];
                        */
                        

                        $employee_no = $_POST['employee_no'];
                        $basic_rate_hour = $_POST["basic_rate_hour"];
                        $basic_num_hours_cutoff = $_POST["basic_num_hours_cutoff"];
                        $hono_rate_hour = $_POST["hono_rate_hour"];
                        $hono_num_hours_cutoff = $_POST["hono_num_hours_cutoff"];
                        $other_rate_hour = $_POST["other_rate_hour"];
                        $other_num_hours_cutoff = $_POST["other_num_hours_cutoff"];
                        $sss_loan = $_POST["sss_loan"];
                        $pagibig_loan = $_POST["pagibig_loan"];
                        $fs_deposit = $_POST["fs_deposit"];
                        $fs_loan = $_POST["fs_loan"];
                        $salary_loan = $_POST["salary_loan"];
                        $other_loans = $_POST["other_loans"];
                        $qualified_dependents = $_POST["qualified_dependents"];

                        $basic_income_cutoff = $basic_rate_hour * $basic_num_hours_cutoff;
                        $hono_income_cutoff = $hono_rate_hour * $hono_num_hours_cutoff;
                        $other_income_cutoff = $other_rate_hour * $other_num_hours_cutoff;
                        $gross_income = $basic_income_cutoff + $hono_income_cutoff + $other_income_cutoff;

                        //sss contribution
                        $sss_contri=SSS($gross_income);

                        //philhealth contribution based from the given PhilHealth Table
                        $philH_contri=PHILHEALTH($gross_income);

                        //tax computation
                        //example ( net income - from the table data) * .25 + tax from table base from net income range
                        $tax_contri = TAX($gross_income);
                        

                        // to press Calculate Net Income button
                    } else if (isset($_POST["calculate_net_income"])) {
                        $employee_no = $_POST['employee_no'];
                        $basic_rate_hour = $_POST["basic_rate_hour"];
                        $basic_num_hours_cutoff = $_POST["basic_num_hours_cutoff"];
                        $hono_rate_hour = $_POST["hono_rate_hour"];
                        $hono_num_hours_cutoff = $_POST["hono_num_hours_cutoff"];
                        $other_rate_hour = $_POST["other_rate_hour"];
                        $other_num_hours_cutoff = $_POST["other_num_hours_cutoff"];
                        $sss_loan = $_POST["sss_loan"];
                        $pagibig_loan = $_POST["pagibig_loan"];
                        $fs_deposit = $_POST["fs_deposit"];
                        $fs_loan = $_POST["fs_loan"];
                        $salary_loan = $_POST["salary_loan"];
                        $other_loans = $_POST["other_loans"];
                        $qualified_dependents = $_POST["qualified_dependents"];

                        $basic_income_cutoff = $basic_rate_hour * $basic_num_hours_cutoff;
                        $hono_income_cutoff = $hono_rate_hour * $hono_num_hours_cutoff;
                        $other_income_cutoff = $other_rate_hour * $other_num_hours_cutoff;
                        $gross_income = $basic_income_cutoff + $hono_income_cutoff + $other_income_cutoff;


                        //sss contribution
                        $sss_contri=SSS($gross_income);

                        //philhealth contribution based from the given PhilHealth Table
                        $philH_contri=PHILHEALTH($gross_income);
                        
                        //tax computation
                        //example ( net income - from the table data) * .25 + tax from table base fromnet income range
                        $tax_contri = TAX($gross_income);
                        
                        $total_deduct = $sss_contri + $philH_contri + $pagibig_contri + $tax_contri + $sss_loan + $pagibig_loan + $fs_deposit + $fs_loan + $salary_loan + $other_loans;
                        $net_income = $gross_income - $total_deduct;

                        // to press NEW button
                    } else if (isset($_POST["new"])) {
                        empty_inputbox();
                        // $employee_no="";
                        //$department="";
                        // $firstname="";
                        // $mname="";
                        // $surname="";
                        //$civil_status="";
                        //$designation="";
                        // $qualified_dependents="";
                        // $paydate="";
                        // $emp_status="";
                        //decleration of variables where inputs are stored
                        // $basic_rate_hour="";
                        // $basic_num_hours_cutoff="";
                        // $hono_rate_hour="";
                        // $hono_num_hours_cutoff="";
                        // $other_rate_hour="";
                        // $other_num_hours_cutoff="";
                        // $sss_contri=0.00;
                        // $philH_contri=0.00;
                        // $pagibig_contri=100.00;
                        // $tax_contri=0.00;
                        // $sss_loan="";
                        // $pagibig_loan="";
                        // $fs_deposit="";
                        // $fs_loan="";
                        // $salary_loan="";
                        // $other_loans="";
                        // to press Print Preview Payslip button
                    } else if (isset($_POST["print_preview"])) {
                        echo "PRINT PREVIEW";
                        // to press Print Payslip button
                    } else if (isset($_POST["print_payslip"])) {
                        echo "PRINT PAYSLIP";

                        // to press Cancel button
                    } else if (isset($_POST["cancel"])) {
                        empty_inputbox();
                        // to press Close button
                    } else if (isset($_POST["close"])) {
                        echo "CLOSE";
                    }
                }
                ?>