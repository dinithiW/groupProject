<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="icon" type="images/png" href="<?= base_url('assets/images/ucscLogo.jpg')?>">
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords"
          content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/imagehover.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">

</head>

<body>
<!--Navigation bar-->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#feature">About</a></li>
                <li><a href="#staff">Staff</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#add">Advertisement</a></li>
                <li><a href="<?= base_url("loginUsers") ?>" data-target="#login" data-toggle="modal">Sign in</a></li>
                <li><a href="#footer">Contact</a></li>

            </ul>
        </div>
    </div>
</nav>
<!--/ Navigation bar-->
<!--Modal box-->
<div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog modal-sm">

        <!-- Modal content no 1-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center form-title">Login</h4>
            </div>
            <div class="modal-body padtrbl">

                <div class="login-box-body">
                    <p class="login-box-msg">Sign in to start your session</p>
                    <div class="form-group">
                        <form name="" id="loginForm">
                            <div class="form-group has-feedback">
                                <!----- username -------------->
                                <input class="form-control" placeholder="Username" id="loginid" type="text"
                                       autocomplete="off"/>
                                <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;"
                                      id="span_loginid"></span>
                                <!---Alredy exists  ! -->
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <!----- password -------------->
                                <input class="form-control" placeholder="Password" id="loginpsw" type="password"
                                       autocomplete="off"/>
                                <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;"
                                      id="span_loginpsw"></span>
                                <!---Alredy exists  ! -->
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="checkbox icheck">
                                        <label>
                                            <input type="checkbox" id="loginrem"> Remember Me
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <button type="button" class="btn btn-green btn-block btn-flat"
                                            onclick="userlogin()">Sign In
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!--/ Modal box-->
<!--Banner-->
<div class="banner">
    <div class="bg-color">
        <div class="container">
            <div class="row">
                <div class="banner-text text-center">
                    <div class="text-border">
                        <p class="big-text">Learning Today . . . Leading Tomorrow.</p>
                    </div>
                    <div class="intro-para text-center quote">
                        <p class="big-text">University of Colombo School of Computing</p>
                        <p class="big-text">Academic Staff Recruitement</p>

                    </div>
                    <a href="#feature" class="mouse-hover">

                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Banner-->
<!--Feature-->
<section id="feature" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="header-section text-center">

                <h2>About</h2>


            </div>
            <div class="feature-info">
                <div class="fea">
                    <div class="col-md-4">
                        <div class="heading pull-right">
                            <h4>Our Mission</h4>
                            <p>Be a Global Leader in Computing, Advancing the Frontiers of new knowledge through
                                Learning and Research.</p>
                        </div>
                        <div class="fea-img pull-left">
                            <i class="fa fa-css3"></i>
                        </div>
                    </div>
                </div>
                <div class="fea">
                    <div class="col-md-4">
                        <div class="heading pull-right">
                            <h4>Our Vision</h4>
                            <p>To advance and enhance computing knowledge, fostering global strategic alliances,
                                promoting cross disciplinary research, producing socially responsible professionals with
                                entrepreneurial skills, leadership qualities and integrity contributing to position the
                                country as a knowledge hub in the region..</p>
                        </div>
                        <div class="fea-img pull-left">
                            <i class="fa fa-drupal"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ feature-->
<!--Organisations-->
<section id="staff" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="header-section text-center">
                <h2>Meet Our Staff</h2>

                <hr class="bottom-line">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="pm-staff-profile-container">
                    <div class="pm-staff-profile-image-wrapper text-center">
                        <div class="pm-staff-profile-image">
                            <img src="<?php echo base_url('assets/images/director.jpg'); ?>" alt=""
                                 class="img-thumbnail img-circle"/>
                        </div>
                    </div>
                    <div class="pm-staff-profile-details text-center">
                        <p class="pm-staff-profile-name">Prof. K.P. Hewagamage</p>
                        <p class="pm-staff-profile-title">The Director</p>

                        <p class="pm-staff-profile-bio">BSc(Col),PhD(Hiroshima),SMIEEE </p>
                        <p class="pm-staff-profile-bio">kph@ucsc.cmb.ac.lk </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="pm-staff-profile-container">
                    <div class="pm-staff-profile-image-wrapper text-center">
                        <div class="pm-staff-profile-image">
                            <img src="<?= base_url('assets/images/aja.jpg') ?>" alt=""
                                 class="img-thumbnail img-circle"/>
                        </div>
                    </div>
                    <div class="pm-staff-profile-details text-center">
                        <p class="pm-staff-profile-name">Dr. D.A.S. Atukorale</p>
                        <p class="pm-staff-profile-title">Deputy Director</p>

                        <p class="pm-staff-profile-bio">BSc Hons(Col), PhD(Queensland) </p>
                        <p class="pm-staff-profile-bio">aja@ucsc.cmb.ac.lk </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="pm-staff-profile-container">
                    <div class="pm-staff-profile-image-wrapper text-center">
                        <div class="pm-staff-profile-image">
                            <img src="<?= base_url('assets/images/arw.jpg') ?>" alt=""
                                 class="img-thumbnail img-circle"/>
                        </div>
                    </div>
                    <div class="pm-staff-profile-details text-center">
                        <p class="pm-staff-profile-name">Dr A.R.Weerasinghe</p>
                        <p class="pm-staff-profile-title">Deputy Director</p>

                        <p class="pm-staff-profile-bio">BSc(Col), MSc(Keel), PhD(Cardiff) </p>
                        <p class="pm-staff-profile-bio">arw@ucsc.cmb.ac.lk</p
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Organisations-->
<!--Cta-->
<!-- <section id="cta-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center">Subscribe Now</h2>
                <p class="cta-2-txt">Sign up for our free weekly software design courses, we’ll send them right to your
                    inbox.</p>
                <div class="cta-2-form text-center">
                    <form action="#" method="post" id="workshop-newsletter-form">
                        <input name="" placeholder="Enter Your Email Address" type="email">
                        <input class="cta-2-form-submit-btn" value="Subscribe" type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!--/ Cta-->
<!--work-shop-->
<section id="work-shop" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="header-section text-center">
                <h2>About Us</h2>
                <hr class="bottom-line">
                <div class="fea">

                    <div class="heading pull-right">
                        <p class="small-text" style="color:black;text-align:center"><b>Our Mission:</b></p>
                        <p>Be a Global Leader in Computing, Advancing the Frontiers of new knowledge through Learning
                            and Research.</p>
                    </div>
                </div>
            </div>
            <div class="fea">

                <div class="heading pull-right">
                    <p class="small-text" style="color:black;text-align:center"><b>Our Vision:</b></p>
                    <p>To advance and enhance computing knowledge, fostering global strategic alliances, promoting cross
                        disciplinary research, producing socially responsible professionals with entrepreneurial skills,
                        leadership.</p>
                </div>
            </div>
        </div>
    </div>


    </div>
    </div>
</section>
<!--/ work-shop-->
<!--Faculity member-->

<!--/ Faculity member-->
<!--Testimonial-->
<!-- <section id="testimonial" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="header-section text-center">
                <h2 class="white">See What Our Customer Are Saying?</h2>
                <p class="white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt
                    vitae,<br> maiores, magni dolorum aliquam.</p>
                <hr class="bottom-line bg-white">
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="text-comment">
                    <p class="text-par">"Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, nec sagittis
                        sem"</p>
                    <p class="text-name">Abraham Doe - Creative Dırector</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="text-comment">
                    <p class="text-par">"Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, nec sagittis
                        sem"</p>
                    <p class="text-name">Abraham Doe - Creative Dırector</p>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!--/ Testimonial-->
<!--Courses-->
<section id="gallery" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="header-section text-center">
                <h2>Gallery</h2>

                <hr class="bottom-line">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 padleft-right">
                <figure class="imghvr-fold-up">
                    <img src="<?= base_url('assets/images/audi.jpg') ?>" class="img-responsive">
                    <figcaption>
                        <h3>Vidya Jyothi Professor V K Samaranayake Auditorium</h3>

                    </figcaption>
                    <a href="#"></a>
                </figure>
            </div>
            <div class="col-md-4 col-sm-6 padleft-right">
                <figure class="imghvr-fold-up">
                    <img src="<?= base_url('assets/images/semi.jpg') ?>" class="img-responsive">
                    <figcaption>
                        <h3>Seminar by Dr.Patrik Paulson(ANU,Australia)</h3>

                    </figcaption>
                    <a href="#"></a>
                </figure>
            </div>
            <div class="col-md-4 col-sm-6 padleft-right">
                <figure class="imghvr-fold-up">
                    <img src="<?= base_url('assets/images/training.jpg') ?>" class="img-responsive">
                    <figcaption>

                        <h3>Staff Training Session</h3>
                    </figcaption>
                    <a href="#"></a>
                </figure>
            </div>
            <div class="col-md-4 col-sm-6 padleft-right">
                <figure class="imghvr-fold-up">
                    <img src="<?= base_url('assets/images/fre.jpg') ?>" class="img-responsive">
                    <figcaption>
                        <h3>Fresher's Welcome 2017</h3>

                    </figcaption>
                    <a href="#"></a>
                </figure>
            </div>
            <div class="col-md-4 col-sm-6 padleft-right">
                <figure class="imghvr-fold-up">
                    <img src="<?= base_url('assets/images/java.jpg') ?>" class="img-responsive">
                    <figcaption>
                        <h3>External and Extension Programmes</h3>

                    </figcaption>
                    <a href="#"></a>
                </figure>
            </div>
            <div class="col-md-4 col-sm-6 padleft-right">
                <figure class="imghvr-fold-up">
                    <img src="<?= base_url('assets/images/nec.jpg') ?>" class="img-responsive">
                    <figcaption>
                        <h3>NEC Visit</h3>

                    </figcaption>
                    <a href="#"></a>
                </figure>
            </div>
        </div>
    </div>
</section>
<!--/ Courses-->
<!--Pricing-->
<section id="add" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4"
                 style="padding-top: 20px;cursor: pointer;text-align: center;left: 50%;transform: translateX(-50%)">
                <div>
                    <a href="<?= base_url() ?>advertisement" style="color: inherit;text-decoration: none;"
                       target="_blank">
                    <span class="fa-stack fa-4x">
                      <i class="fas fa-circle fa-stack-2x" style="color: #cb941e"></i>
                      <i class="fas fa-book-open fa-stack-1x fa-inverse"></i>
                    </span>
                        <h4 class="service-heading">Advertisement</h4>
                        <p class="text-muted">Click here to view advertisements.</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--  <div class="header-section text-center">
        <h2>Advertisement</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
        <hr class="bottom-line">
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="price-table">
          <!-- Plan  -->
    <!-- <div class="pricing-head">
       <h4>Monthly Plan</h4>
       <span class="fa fa-usd curency"></span> <span class="amount">200</span>
     </div>
     <!-- Plean Detail -->
    <!--<div class="price-in mart-15">
      <a href="#" class="btn btn-bg green btn-block">PURCHACE</a>
    </div>
  </div>
</div>
<div class="col-md-4 col-sm-4">
  <div class="price-table">
    <!-- Plan  -->
    <!-- <div class="pricing-head">
       <h4>Quarterly Plan</h4>
       <span class="fa fa-usd curency"></span> <span class="amount">800</span>
     </div>
     <!-- Plean Detail -->
    <!--<div class="price-in mart-15">
      <a href="#" class="btn btn-bg yellow btn-block">PURCHACE</a>
    </div>
  </div>
</div>
<div class="col-md-4 col-sm-4">
  <div class="price-table">
    <!-- Plan  -->
    <!-- <div class="pricing-head">
       <h4>Year Plan</h4>
       <span class="fa fa-usd curency"></span> <span class="amount">1200</span>
     </div>
     <!-- Plean Detail -->
    <!-- <div class="price-in mart-15">
       <a href="#" class="btn btn-bg red btn-block">PURCHACE</a>
     </div>
   </div>
 </div>
</div>
</div>
<!--id -->
</section>
<!--/ Pricing-->
<!--Contact-->
<section id="contact" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="header-section text-center">
                <h2>KEEP IN TOUCH WITH US</h2>

                <hr class="bottom-line">
            </div>
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
                <div class="col-md-6 col-sm-6 col-xs-12 left">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control form" id="name" placeholder="Your Name"
                               data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                               data-rule="email" data-msg="Please enter a valid email"/>
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                               data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"/>
                        <div class="validation"></div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 right">
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required"
                                  data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validation"></div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <!-- Button -->
                    <button type="submit" id="submit" name="submit"
                            class="form contact-form-button light-form-button oswald light">SEND EMAIL
                    </button>
                </div>
            </form>

        </div>
    </div>
</section>
<!--/ Contact-->
<!--Footer-->
<footer id="footer" class="footer">
    <div class="container text-center">

        <h3>Contact Us</h3>
        <div class="feature-info">
            <div class="fea">
                <div class="col-md-4">
                    <div class="heading pull-right">


                        <p class="small-text">University of Colombo School of Computing</p>
                        <p class="small-text">UCSC Building Complex,</p>
                        <p class="small-text">35 ,Reid Avenue, Colombo 7</p>
                        <p class="small-text">SRI LANKA</p>
                    </div>
                </div>
            </div>
            <div class="feature-info">
                <div class="fea">
                    <div class="col-md-4">
                        <div class="heading pull-right">
                            <p class="small-text">Telephone :</p>
                            <p class="small-text">+94 -11- 2581245/ 7</p>
                        </div>
                    </div>
                </div>
                <div class="fea">
                    <div class="col-md-4">
                        <div class="heading pull-right">
                            <p class="small-text">Fax :</p>
                            <p class="small-text">+94-11-2587239</p>
                            <p class="small-text">Email :</p>
                            <p class="small-text">info[at]ucsc.cmb.ac.lk</p>
                        </div>
                    </div>
                </div>


                <!-- End newsletter-form -->
                <ul class="social-links">
                    <li><a href="#link"><i class="fa fa-twitter fa-fw"></i></a></li>
                    <li><a href="#link"><i class="fa fa-facebook fa-fw"></i></a></li>
                    <li><a href="#link"><i class="fa fa-google-plus fa-fw"></i></a></li>
                    <li><a href="#link"><i class="fa fa-dribbble fa-fw"></i></a></li>
                    <li><a href="#link"><i class="fa fa-linkedin fa-fw"></i></a></li>
                </ul>

            </div>
</footer>
<!--/ Footer-->

<script src="js/jquery.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
<script src="contactform/contactform.js"></script>

</body>

</html>