<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Small Business - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="#!">TRIPP OÜ</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="teenused.php">Teenused</a></li>
                        <li class="nav-item"><a class="nav-link" href="kalkulaator.php">Kalkulaator</a></li>
                        <li class="nav-item"><a class="nav-link" href="kontakt.php">Kontakt</a></li>
                        <li class="nav-item"><a class="nav-link" href="ostukorv.php">Ostukorv</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container px-4 px-lg-5">
            <h1>Kontakt</h1>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d151364.45959388014!2d23.549779152993548!3d59.13148950367892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46ed61fc167fa5fb%3A0x4453a4361b3cf31!2s1944.%20aastal%20p%C3%B5genenute%20m%C3%A4lestusm%C3%A4rk!5e0!3m2!1set!2see!4v1774968692863!5m2!1set!2see" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="container-contact100">
            <div class="wrap-contact100">
                <form class="contact100-form validate-form">
                    <span class="contact100-form-title">
                        Contact Us
                    </span>

                    <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
                        <span class="label-input100">FULL NAME *</span>
                        <input class="input100" type="text" name="name" placeholder="Enter Your Name">
                    </div>

                    <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Enter Your Email (e@a.x)">
                        <span class="label-input100">Email *</span>
                        <input class="input100" type="text" name="email" placeholder="Enter Your Email ">
                    </div>

                    <div class="wrap-input100 bg1 rs1-wrap-input100">
                        <span class="label-input100">Phone</span>
                        <input class="input100" type="text" name="phone" placeholder="Enter Number Phone">
                    </div>

                    <div class="wrap-input100 input100-select bg1">
                        <span class="label-input100">Needed Services *</span>
                        <div>
                            <select class="js-select2" name="service">
                                <option>Please chooses</option>
                                <option>eCommerce Bussiness</option>
                                <option>UI/UX Design</option>
                                <option>Online Services</option>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>
                    </div>

                    <div class="w-full dis-none js-show-service">
                        <div class="wrap-contact100-form-radio">
                            <span class="label-input100">What type of products do you sell?</span>

                            <div class="contact100-form-radio m-t-15">
                                <input class="input-radio100" id="radio1" type="radio" name="type-product" value="physical" checked="checked">
                                <label class="label-radio100" for="radio1">
                                    Phycical Products
                                </label>
                            </div>

                            <div class="contact100-form-radio">
                                <input class="input-radio100" id="radio2" type="radio" name="type-product" value="digital">
                                <label class="label-radio100" for="radio2">
                                    Digital Products
                                </label>
                            </div>

                            <div class="contact100-form-radio">
                                <input class="input-radio100" id="radio3" type="radio" name="type-product" value="service">
                                <label class="label-radio100" for="radio3">
                                    Services Consulting
                                </label>
                            </div>
                        </div>

                        <div class="wrap-contact100-form-range">
                            <span class="label-input100">Budget *</span>

                            <div class="contact100-form-range-value">
                                $<span id="value-lower">610</span> - $<span id="value-upper">980</span>
                                <input type="text" name="from-value">
                                <input type="text" name="to-value">
                            </div>

                            <div class="contact100-form-range-bar">
                                <div id="filter-bar"></div>
                            </div>
                        </div>
                    </div>

                    <div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
                        <span class="label-input100">Message</span>
                        <textarea class="input100" name="message" placeholder="Your message here..."></textarea>
                    </div>

                    <div class="container-contact100-form-btn">
                        <button class="contact100-form-btn">
                            <span>
                                Submit
                                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2026</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
