
<!DOCTYPE html>
<html>

<head>    
    <title>UCSC</title>
    <link rel="stylesheet" href="<?=base_url('assets/css/loginPanel.css')?>" type="text/css"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width= device-width ,initial-scale = 1">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

</head> 

<body>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Send Emails For Interviews
        <!-- <small>Add, Edit, Delete</small> -->
      </h1>

    </section>
    
    <section class="content">
       <div class = "row">
        <label for="input-lg" class="input-lg"> Select Time Slot</label>
      </div>

      <form action = "<?= base_url().'OperatorIndex/interviewDateEmails'?>" method = "post">
      <div class = "row">
        <div class="form-group  col-xs-8 ">
        
        <select class="form-control input-lg" id="selectBox" name = "timeSlot">
           
           <?php foreach ($array as $row): ?>
             <option value = <?=$row->rdate.'_'.$row->rtime?>><?php echo $row->idate.'&nbsp&nbspat '. $row->itime?></option>
           <?php endforeach ?>
        </select>
      </div>
      </div>

    </section>
<section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">

                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Type Here</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    
                    <textarea class="tinymce" name = "content">
                      <!-- <p><span style="font-size: 18pt; font-family: 'indie flower', cursive;">some text here</span></p> -->
                    </textarea>

    <!-- javascript -->

    <script type="text/javascript" src="<?=base_url('assets/js/jquery.min.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/plugin/tinymce/tinymce.min.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/plugin/tinymce/init-tinymce.js')?>"></script>

      <br>
      <input type="submit" name="haha" value = "Send Emails To Candidates" class="btn btn-primary btn-md" style="float: right">
    </form>
                    
                </div>
            </div>
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
    <section class="content">
        

        
    </section>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
<!-- <script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();            
            var link = jQuery(this).get(0).href;            
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "userListing/" + value);
            jQuery("#searchList").submit();
        });
    });
</script> -->






</body>