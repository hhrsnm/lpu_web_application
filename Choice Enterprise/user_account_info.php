<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>User Account</title>
</head>

<body>
    <div class="row flex">
        <div class="col bg-dark vh-100 sticky-top" style="width: 100px;">
            <h2 style="margin-bottom: 2rem; text-align:center; font-family:algerian; color:white;">Herson's Choice Enterprise</h2>
            <ul style="font-size:130%;">
            <li class="list-group-item" style="margin-bottom: 2rem;"><a href="adminpage.php" class="text-white text-decoration-none">Home</a></li>
                <li class="list-group-item" style="margin-bottom: 2rem;"><a href="Employee_registration_save.php" class="text-white text-decoration-none">Employee Registration</a></li>
                <li class="list-group-item" style="margin-bottom: 2rem;"><a href="" class="text-white text-decoration-none">Employee Report</a></li>
                <li class="list-group-item" style="margin-bottom: 2rem;"><a href="Payroll.php" class="text-white text-decoration-none">Payroll</a></li>
                <li class="list-group-item" style="margin-bottom: 2rem;"><a href="" class="text-white text-decoration-none">Payroll Report</a></li>
                <li class="list-group-item" style="margin-bottom: 2rem;"><a href="Cellphone.php" class="text-white text-decoration-none">POS</a></li>
                <li class="list-group-item" style="margin-bottom: 2rem;"><a href="" class="text-white text-decoration-none">POS Sales Report</a></li>
                <li class="list-group-item" style="margin-bottom: 2rem;"><a href="user_account_info.php" class="text-lightskyblue text-decoration-none">User Account</a></li>
                <li class="list-group-item" style="margin-bottom: 2rem;"><a href="Login.php" class="text-white text-decoration-none">Logout</a></li>
            </ul>
        </div>
        <div class="col-8  flex-grow-1" style="background-image:url('css/bgsite.jpg');">
            <div class="container d-flex my-5">
                <!--====== CONTACT ONE PART START ======-->
                <section class="contact-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                                <div class="card" style="width: 50%; margin-top:12%; margin-left:50%;">
                                    <img src="data:image/jpeg;base64,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"
                                     class="card-img-top" alt="..." height="50%">
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-8">
                                <div class="section-title mt-45">
                                    <h3 class="title">User account Information</h3>
                                </div>
                                <div class="contact-form form-style-four mt-15">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-3" style="margin-right:3%;">
                                                <div class="form-input mt-15">
                                                    <label>First Name</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-user"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>

                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3" style="margin-right:3%;">
                                                <div class="form-input mt-15">
                                                    <label>Middle Name</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-envelope"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3" style="margin-right:3%;">
                                                <div class="form-input mt-15">
                                                    <label>Last name</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-phone"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3" style="margin-right:3%;">
                                                <div class="form-input mt-15">
                                                    <label>Suffix</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-bubble"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3" style="margin-right:3%;">
                                                <div class="form-input mt-15">
                                                    <label>Department</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-user"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>

                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3" style="margin-right:3%;">
                                                <div class="form-input mt-15">
                                                    <label>Username</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-envelope"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3" style="margin-right:3%;">
                                                <div class="form-input mt-15">
                                                    <label>Password</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-phone"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3" style="margin-right:3%;">
                                                <div class="form-input mt-15">
                                                    <label>Confirm Password</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-bubble"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3" style="margin-right:3%;">
                                                <div class="form-input mt-15">
                                                    <label>User type</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-user"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>

                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3" style="margin-right:3%;">
                                                <div class="form-input mt-15">
                                                    <label>User status</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-envelope"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3" style="margin-right:3%;">
                                                <div class="form-input mt-15">
                                                    <label>Employee Number</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-phone"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3" style="margin-right:3%;">
                                                <div class="form-input mt-15">
                                                    <label>Department</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-bubble"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                        </div>
                                        <!-- row -->
                                        <div class="well mt-5 d-flex justify-content-end gap-4" style="margin-right: 15%;">
                                            <button type="button" class="btn btn-primary">Update</button>
                                            <button type="button" class="btn btn-warning">Delete</button>
                                            <button type="button" class="btn btn-light">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- contact form -->
                            </div>

                        </div>
                        <!-- row -->
                    </div>
                    <!-- container -->
                </section>
                <!--====== CONTACT ONE PART ENDS ======-->
            </div>
        </div>

    </div>
</body>

</html>