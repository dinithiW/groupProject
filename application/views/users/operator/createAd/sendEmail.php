<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Send Email For Approval
        <small>To SAR</small>
      </h1>
    </section>
    
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    
                    <form role="form" action=<?= base_url("OperatorIndex/process")?> method="post" name = "emailDetails" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-8">                                
                                    <div class="form-group">
                                        <label for="fname">Subject of email</label>
                                        <input type="text" class="form-control required" name='subject' id='email' required maxlength="128" placeholder="Enter the subject of the email">
                                    </div>
                                </div>
                            </div>

                            <div class = "row">        
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="lname">Description</label>
                                        <textarea required class="form-control" rows="5" id="comment" name='description' placeholder="Enter the Description"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Receiver's Email Address</label>
                                        <input required type="email" class="form-control required email" id="email"  name="remail" maxlength="255" placeholder="Enter sender's email address">
                                    </div>
                                </div>
                            </div>

                            <div class="row">    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gender">Attach Document</label>
                                        <input required type="file" class = "form-control" name = "file" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gender">Name of the Document</label>
                                        <input required type="text" class = "form-control" name = "docName" >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile">Your Email Address </label>
                                        <input type="email" required class="form-control required email" placeholder=" Enter your email" maxlength="255" name = "semail">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="designation">Your Email Password</label>
                                        <input type="password" required class="form-control required"  maxlength="255" name='password'placeholder=" Enter your password" >
                                    </div>
                                </div>
                            </div> 
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
                </div>
            </div>
        </div>    
    </section>   
</div>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>



 



