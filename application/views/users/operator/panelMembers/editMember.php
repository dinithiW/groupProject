<?php
$userId = 0;

if(!empty($records)) {
    $userId = $records->PANEL_ID;
}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> User Management
        <small>Edit User</small>
      </h1>
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
                    
                    <form role="form" id="editUser" action="<?php echo base_url().'OperatorIndex/editMemberprocess/'.$records->PANEL_ID; ?>" method="post" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="fname">First Name</label>
                                        <input type="text" class="form-control required" id="fname" name="fname" maxlength="128" value = "<?php if(!empty($records)) echo $records->FNAME; ?>">
                                        <input type="hidden" value="<?php echo $userId; ?>" name="userId" id="userId" />  
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lname">Last Name</label>
                                        <input type="text" class="form-control required " id="lname"  name="lname" maxlength="128" value = "<?php if(!empty($records)) echo $records->LNAME; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input disabled type="text" class="form-control" id="email"  name="email" maxlength="255" value = "<?php if(!empty($records)) echo $records->EMAIL; ?>">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <!-- name and id changed to gender from role -->
                                        <select class="form-control required" id="gender" name="gender">
                                            <option value="0">Select Gender</option>
                                            <option value="<?php if(!empty($records))if($records->GENDER=="male")?> male" selected = "selected" >Male</option>
                                            <option value="<?php if(!empty($records))if($records->GENDER=="female")?> female" selected = "selected">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile">Contact Number </label>
                                        <input type="text" class="form-control required digits" id="mobile" name="mobile" maxlength="10" value = "<?php if(!empty($records)) echo $records->CONTACT_NUMBER; ?>">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="designation">Designation</label>
                                        <input type="text" class="form-control required" id="designation" name="designation" maxlength="255" value = "<?php if(!empty($records)) echo $records->DESIGNATION; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="address">Address </label>
                                        <input type="text" class="form-control required" id="address" name="address" maxlength="255" value = "<?php if(!empty($records)) echo $records->ADDRESS; ?>">
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
<script src="<?php echo base_url(); ?>assets/js/editUser.js" type="text/javascript"></script>