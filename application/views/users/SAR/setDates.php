<?php
$this->load->library('session');
$confirmed = "";
if (!empty($_GET["email"])) {
    $confirmed = $_GET["email"];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>TinyMCE - Setup</title>
        <link rel="stylesheet" href="<?=base_url('assets/css/loginPanel.css')?>" type="text/css"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width= device-width ,initial-scale = 1">

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> --> 

    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Droid+Serif|Tangerine|Lobster:regular" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <style>
        a:hover { 
            text-decoration: none;
        }
    </style>
    
    </head>
    <body>
        <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Interview Dates
        <!-- <small>Add / Edit User</small> -->
      </h1>
    </section>
    
     <section>
        <div>
            <?php
            if ($confirmed == "success") {
                ?>
                <div class="alert alert-success"
                     style="margin-left: 10px;margin-right: 10px;text-align: center;color: #17630a;font-weight: bold">
                    Email has been sent
                </div>
                <?php
            }
            ?>
        </div>
    </section>
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter User Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form action="<?= base_url("sendBulkmail").'/formdoor'; ?>" method="post">
                    <textarea class="tinymce" name="reportdetails">
                        <!-- <p><span style="font-size: 18pt; font-family: 'indie flower', cursive;">some text here</span></p> -->
                    </textarea>
                     <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      
                      <th>Name</th>
                      <!-- <th>Last Name</th> -->
                      
                      <th>Email</th>
                      <th>Select</th>
                      <th>Action</th>
                      <!--th>Address</th>-->
                      <!--<th class="text-center">Actions</th>-->
                    </tr>
                    <?php
                        $count=0;
                        foreach ($Members as $row) {
                           $count=$count+1;?>
                           <tr>
                                     <td> <?php echo $row->getfname()." ". $row->getlname() ?></td>
                                    <td> <?php echo $row->getemail() ?></td>
                                    <input type="hidden" name="directormail<?=$count?>" value="<?= $row->getemail() ?>">
                                    <td> 


                                        <!-- <input type="checkbox" name="single_select<?=$count?>" class="single_select" data-email=<?php echo $row->getemail() ?> data-name=<?php echo $row->getfname()." ". $row->getlname() ?> > -->

                                        <input type="checkbox" name="formdoor[]" class="single_select" data-email=<?php echo $row->getemail() ?> data-name=<?php echo $row->getfname()." ". $row->getlname() ?> value = "<?= $row->getemail() ?>">


                                    </td>
                                    <!--<td><button type="submit" name="email_button" class="btn btn-primary" id="'.$count.'" data-email=<?php echo $row->getemail() ?> data-name=<?php echo $row->getfname()." ". $row->getlname() ?> data-action="single" href = "<?= base_url("sendmail") ?>">send</button ></td>-->

                                

                           </tr>
                           <?php
                        }
                    ?>
                    <tr>
                        <td colspan="3"></td>
                        <td><button type="submit" name="emailBulk_button" class="btn btn-primary" id="bulk_email" data-action="bulk">Bulk</button></td>
                    </tr>
                </table>
           </form>
                 </div>

        <!-- javascript -->

        <script type="text/javascript" src="<?=base_url('assets/js/jquery.min.js')?>"></script>
        <script type="text/javascript" src="<?=base_url('assets/plugin/tinymce/tinymce.min.js')?>"></script>
        <script type="text/javascript" src="<?=base_url('assets/plugin/tinymce/init-tinymce.js')?>"></script>

      <!--  <form action = <?= base_url("sendmail")?> method = "post">
            <br>
                 Mail Address :
            <input type="text" name="directormail"> -->
           <!-- <input type="submit" name="haha" value = "Send" class="btn btn-primary btn-md" style="float: right">
             <label for="role" font="50px">Email Address :</label>
            <select class="form-control required" id="role" name="lectemail">

                <?php
                //echo"....................tdhtdhddhddhdhtdhtdhdhtthd...................................................";
                $i=0;
                    if(!empty($Members)){
                        //echo ".....................................................I am empty";
                        foreach ($Members as $row) {
                            # code...
                            ?>
                            <option value="<?php echo $row->getEmail() ?>"><?php echo $row->getEmail() ?></option>
                            <?php
                        }

                    ?>
                    <?php
                    }


                ?>
            </select>
        </form>
                    
                </div>
            </div>-->
            <div class="col-md-4">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
        </div>    
    </section>
    
</div>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>
</body>
</html>