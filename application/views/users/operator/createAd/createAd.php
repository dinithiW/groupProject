<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>TinyMCE - Setup</title>
		<link rel="stylesheet" href="<?=base_url('assets/css/loginPanel.css')?>" type="text/css"/>
        <meta charset="utf-8">
        <meta name="viewport" content="width= device-width ,initial-scale = 1">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

        <link href="http://fonts.googleapis.com/css?family=Droid+Serif|Tangerine|Lobster:regular" rel="stylesheet" type="text/css">
    
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
                    Create Advertisement
                </h1>
            </section>
    
        <section class="content">
            <div class="row">
            <!-- left column -->
                <div class="col-md-8">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Enter User Details</h3>
                        </div><!-- /.box-header -->
                    <!-- form start -->
                    
                        <textarea class="tinymce">
                        </textarea>

    		            <form action = <?= base_url("OperatorIndex/sendEmail")?> method = "post">
    			            <br>
    			            <input type="submit" name="haha" value = "Send to SAR for approval" class="btn btn-primary btn-md" style="float: right">
    		            </form>
                    
                    </div>
                </div>


            </div>    
        </section>
    
    </div>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>
<script type="text/javascript" src="<?=base_url('assets/js/jquery.min.js')?>"></script>
<script type="text/javascript" src="<?=base_url('assets/plugin/tinymce/tinymce.min.js')?>"></script>
<script type="text/javascript" src="<?=base_url('assets/plugin/tinymce/init-tinymce.js')?>"></script>

</body>
</html>