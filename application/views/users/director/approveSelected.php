<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-address-book"></i> Approve Selected
        <small>Approve the selected applicants</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Approve Selected Applicants</h3>
                    </div><!-- /.box-header -->
                    <div>
                        <center>
                            <h3>Selected Applicants</h3>
                        </center>
                    </div>
                    <br />
                    <div class = "table-responsive">
                        <table class = "table table-bordered">
                            <tr>
                                <td><b>Index number</b></td>
                                <td><b>First name</b></td>
                            </tr>

                        <?php 
                        foreach($records as $rec){
                        ?>
                            <tr>
                                <td><?php echo $rec->INDEX_NUMBER; ?></td>
                                <td><?php echo $rec->FIRST_NAME." ".$rec->LAST_NAME; ?></td>
                            </tr>
                        <?php
                        } 
                        ?>
                        </table>
                    </div>
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
    
</div>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>