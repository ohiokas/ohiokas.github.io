<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Wedding Planner</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="https://cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/datepicker.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/carousel.css">
    <style>
        body {
            font-family: 'Open Sans', 'Roboto', sans-serif;
            line-height: 1.5em;
            margin-bottom: 2%;
            margin-top: 3%;
            width: 100%;
            overflow-x: hidden;
            background: #f1f1f1;
        }

        .navbar-light .navbar-brand {
            color: #1a1a1a;
            font-weight: bold;
            line-height: 22px;
        }

        .navbar {
            font-weight: 700;
            padding: 12px;
            font-style: normal;
            font-size: 14px;
            text-transform: uppercase;
            color: black;
            border-bottom: 1px solid #ddd;
        }

        li.nav-item > a.nav-link {
            color: black !important;
            font-weight: bold !important;
        }

        #review {
            font-size: 16px;
            font-weight: bold;
            margin-right: 5px;
        }

        .form-inline > a.mr-2, .btn.btn-sm.my-2.my-sm-0 {
            color: black;
            font-size: 14px;
            font-weight: 700;
            margin-left: 10px;
        }

        .form-inline > a.mr-2:hover, .btn.btn-sm.my-2.my-sm-0:hover {
            color: #17b4bc;
            text-decoration: none;
        }

        a.btn.btn-sm.my-2.my-sm-0.mr-2.loginbtn {
            background: #dc3545;
            font-size: 14px;
            color: white;
            padding: 5px;
            border: 2px solid transparent;
            width: 85px;
        }

        a.btn.btn-sm.my-2.my-sm-0.mr-2.loginbtn:hover {
            background: white;
            border: 2px solid #dc3545;
            color: #dc3545;
        }

        .navbar-expand-lg .navbar-nav .nav-link {
            padding-right: .9rem;
        }

        .navbar-brand {
            margin-left: 20px;
            width: 200px;
        }

        .form-control {
            font-size: 12px;
            border-radius: 0;
            margin-top: 0;
        }



    </style>
</head>
<body>
<?php include "include/nav.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="text-center mb-3">CONTACT US</h3>
            <div class="bg-white p-4">
                <div class="contact-information">
                    <h5>LANDMARKET</h5>
                    <div class="row">
                        <div class="col-md-8">
                            <table class="table table-sm" style="font-size: 12px;">
                                <tr>
                                    <td>Universitas Sebelas Maret</td>
                                    <td><i class="mdi mdi-deskphone mr-3"></i> 021- 2500203</td>
                                </tr>
                                <tr>
                                    <td>Surakarta, Central Java</td>
                                    <td><i class="mdi mdi-phone mr-3"></i> +62 876323846</td>
                                </tr>
                                <tr>
                                    <td>Universitas Sebelas Maret</td>
                                    <td><i class="mdi mdi-email mr-3"></i> contactemail@gmail.com</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center mt-3">
                                <i class="mdi mdi-map-marker" style="font-size: 110px;color: #22ADB5;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white mt-3 pt-1 pl-4 pb-3">
                <div class="row mt-3">
                    <div class="col-md-12">
                        <form action="" method="post" style="font-size: 12px;">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-row">
                                        <div class="form-group col-md-12 mb-1">
                                            <label for="contact_person">Name</label>
                                            <input type="email" class="form-control" id="contact_person" placeholder="Enter contact person">
                                        </div>
                                        <div class="form-group col-md-12 mb-1">
                                            <label for="contact_email">Email</label>
                                            <input type="password" class="form-control" id="contact_email" placeholder="Enter email">
                                        </div>
                                        <div class="form-group col-md-12 mb-1">
                                            <label for="contact_phone">Phone</label>
                                            <input type="text" class="form-control" id="contact_phone" placeholder="Enter mobile phone">
                                        </div>
                                        <div class="form-group col-md-12 mb-1">
                                            <label for="contact_message">Message</label>
                                            <textarea type="text" class="form-control"
                                                      style="resize: none;" rows="8"
                                                      id="contact_message" placeholder="Enter message"></textarea>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6 pr-2">
                                <div class="mapouter"><div class="gmap_canvas"><iframe width="495" height="287" id="gmap_canvas" src="https://maps.google.com/maps?q=Universitas+sebelas+maret&t=k&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://online-timer.me"></a><br><a href="https://www.alarm-clock.net">free alarm clock online</a><br><style>.mapouter{position: relative;text-align: right;height: 287px;width: 495px;}</style><a href="https://www.ongooglemaps.com">location map</a><style>.gmap_canvas{overflow: hidden;background: none !important;height: 287px;width: 495px;}</style></div></div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm rounded-0" style="font-size: 12px;margin-top: 10px;background: #22adb5;border: 0;">Send Message</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- MODAL LOGIN SECTION-->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModal"><img src="images/logo/MOMMYAMBOL.png" alt=""></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="register.php" method="post">
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail" name="email"
                                   placeholder="Enter email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password:</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword" placeholder="Enter password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="login" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <button type="button" class="btn btn-primary mr-2 custom-btn" style="font-size: 14px;">
                                Login
                            </button>
                            <a href="" style="color: #22adb5;">Forgot your password?</a>
                            <br/>
                            <div class="mt-2">Not a member yet? <a href="" style="color: #22adb5;">Join Now</a></div
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>