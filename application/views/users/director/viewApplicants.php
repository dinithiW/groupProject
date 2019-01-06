<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-address-card"></i> View Applicants
        <small>View the applicants</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">View Applicantst</h3>
                    </div><!-- /.box-header -->
                    <div>
                    <center>
                        <h3>Basic Persanol Information of Applicants</h3>
                    </center>
                    </div>
                    <br />
                    <div class =  "table-responsive">
                        <table class = "table table-bordered">
                            <tr>
                                <td><b>Index Number</b></td>
                                <td><b>Name</b></td>
                                <td><b>Address</b></td>
                                <td><b>NIC</b></td>
                                <td><b>E-Mail</b></td>
                                <td><b>Contact Number</b></td>
                                <td><b>Gender</b></td>
                                <td><b>Civil Status</b></td>
                                <td><b>Date of Birth</b></td>
                            </tr>
                        
                        <?php
                        foreach($records as $rec){
                        ?>
                            <tr>
                                <td><?php echo $rec->INDEX_NUMBER; ?></td>
                                <td><?php echo $rec->FIRST_NAME." ".$rec->LAST_NAME; ?></td>
                                <td><?php echo $rec->POSTAL_ADDRESS; ?></td>
                                <td><?php echo $rec->NIC; ?></td>
                                <td><?php echo $rec->PERSONAL_EMAIL; ?></td>
                                <td><?php echo $rec->MOBILE_NUMBER; ?></td>
                                <td><?php echo $rec->GENDER; ?></td>
                                <td><?php echo $rec->CIVIL_STATUS; ?></td>
                                <td><?php echo $rec->DATE_OF_BIRTH; ?></td>
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