<?php
include "login-screen-header.php";
// $this->load->view('examples/pages/login-screen-header');
?>

    <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right" id="signUpApp">
                <li class= "">
                    <a href="<?= base_url('register')?>">
                        <i class="material-icons">person_add</i>
                        Sign up
                    </a>
                </li>
            </ul>
        </div>
    </div>
    </nav>
    <div class="wrapper wrapper-full-page">
            <div class="full-page login-page" filter-color="black" data-image="<?=base_url('assets/img/leaf.jpg')?>">
        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                        <form method="#" action="<?=base_url('main')?>">
                            <div class="card card-login card-hidden" style="background-color: rgba(0,0,0,0.7);border: none">
                                <div class="card-header text-center" data-background-color="rose">
                                    <h4 class="card-title">Sign in</h4>
                                    <div class="social-line">
                                        <a href="https://www.google.com/" target="_blank" class="btn btn-just-icon btn-simple">
                                            <i class="fa fa-google"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-just-icon btn-simple">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                        <a href="https://www.dropbox.com/" target="_blank" class="btn btn-just-icon btn-simple">
                                            <i class="fa fa-dropbox"></i>
                                        </a>
                                    </div>
                                </div>
                               
                                <div class="card-content">

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">account_circle</i>
                                        </span>
                                        <div class="form-group label-floating">
                                            <label class="control-label">I'm a/an</label>
                                                <select class="selectpicker" data-style="select-with-transition" [(ngModel)]="user.accountType" name="txtType" style="color: white">
                                                    <option value="applicant">Applicant</option>
                                                    <option value="user">User</option>
                                                </select>
                                        </div>
                                        <!--<select class="selectpicker" data-style="select-with-transition" multiple title="Choose City" data-size="7">-->
                                    </div>
                              
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">email</i>
                                        </span>

                                        <div class="form-group label-floating">
                                            <label class="control-label">Email address</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Password</label>
                                            <input type="password" class="form-control">
                                        </div>
                                    </div>
                                </div>
                               <div class="footer text-center">
                                     <button type="submit" class="btn btn-rose btn-simple btn-wd btn-lg" style="color: #e9b500">
                                         Sign In
                                        </button>
                                    </div>
                                <!--<div *ngIf="failed" class="alert alert-danger" style="margin-left: 10px;margin-right: 10px;text-align: center;color: #870c00;font-weight: bold">
                                    Incorrect username or password
                                </div>-->
                                <div class="row">
                                    <div id="fgt" class="col-12" style="margin-left: 40px;color: #9e9e9e;font-size: 12px;cursor: pointer">Forgot / Change Password?
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">

<?php
include "login-screen-footer.php";
// $this->load->view('examples/pages/login-screen-footer');
?>