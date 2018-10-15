<html>
    <head>
        <title>thie for welocme</title>

        <link rel="stylesheet" href="<?=base_url('assets/css/applicationForm/TestForMultistepForms.css')?>" type="text/css"/>
        <link rel="stylesheet" href="<?=base_url('assets/css/applicationForm/font-awesome.min.css')?>" type="text/css"/>
        <link rel="stylesheet" href="<?=base_url('assets/css/applicationForm/bootstrap.min.css')?>" type="text/css"/>
        <script type="text/javascript" src="<?= base_url('assets/js/bootstrap.js')?>" ></script>
        <script type="text/javascript" src="<?= base_url('assets/js/TestForMultistepForms.js')?>" ></script>
        <script type="text/javascript" src="<?= base_url('assets/js/jquery.min.js.js')?>" ></script>
        <script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js')?>" ></script>
        <script type="text/javascript" src="<?= base_url('assets/js/script.js')?>" ></script>
        <script type="text/javascript" src="<?= base_url('assets/js/popper.min.js')?>" ></script>

    </head>

    <body>
       
    <div class="container">
        <form action="save.php" method="post">
            <div class="wizards">
                <div class="progressbar">
                    <div class="progress-line" data-now-value="12.11" data-number-of-steps="5" style="width: 12.11%;"></div> <!-- 19.66% -->
                </div>
                <div class="form-wizard active">
                    <div class="wizard-icon"><i class="fa fa-file-text-o"></i></div>
                    <p>ruwan</p>
                </div>
                <div class="form-wizard">
                    <div class="wizard-icon"><i class="fa fa-user"></i></div>
                    <p>About</p>
                </div>
                <div class="form-wizard">
                    <div class="wizard-icon"><i class="fa fa-key"></i></div>
                    <p>Account</p>
                </div>
                <div class="form-wizard">
                    <div class="wizard-icon"><i class="fa fa-globe"></i></div>
                    <p>Website</p>
                </div>
                <div class="form-wizard">
                    <div class="wizard-icon"><i class="fa fa-check-circle"></i></div>
                    <p>Finish</p>
                </div>
            </div>


            <fieldset>
                <iframe src="license.txt"></iframe>
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" value="yes"> I agree 
                </label>
                <div class="wizard-buttons">
                    <button type="button" class="btn btn-next">Next</button>
                </div>
            </fieldset>


            <fieldset>
                <h4>Input personal data</h4>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Nama anda"/>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Surel anda"/>
                </div>
                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="tel" name="phone" class="form-control" placeholder="Nomor telpon anda"/>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <textarea name="address" class="form-control" placeholder="Alamat anda"></textarea>
                </div>
                <div class="wizard-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" class="btn btn-next">Next</button>
                </div>
            </fieldset>


            <fieldset>
                <h4>Input account info</h4>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Nama pengguna"/>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Kata sandi"/>
                </div>
                <div class="wizard-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" class="btn btn-next">Next</button>
                </div>
            </fieldset>


            <fieldset>
                    <h4>Input website info</h4>
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Judul website"/>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control" placeholder="Deskripsi website"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Website URL</label>
                        <input type="text" name="sites" class="form-control" placeholder="Alamat website"/>
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <input type="text" name="category" class="form-control" placeholder="Category website"/>
                    </div>
                <div class="wizard-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" class="btn btn-next">Next</button>
                </div>
            </fieldset>


            <fieldset>
                <div class="jumbotron text-center">
                <h1>Please click submit button to save your data</h1>
                </div>
                <div class="wizard-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="submit" name="save" class="btn btn-primary btn-submit">Submit</button>
                </div>
            </fieldset>
        </form>
    </div>
    

    </body>
</html>