<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-audio-description"></i> Advertisement Request
        <small>Request for a new Advertisement</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Advertisement Request</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <?php echo validation_errors(); ?>
                    <form role="form" id="addUser" action="<?php echo base_url() ?>Director/insertData" method="post" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="vacanciesneeded">Vacancies needed : </label>
                                        <select type = "dropdown" id = "vacanciesneeded" name = "vacanciesneeded">
                                            <option value = "Probationary Lecture">Probationary Lecture</option>
                                            <option value = "Senior Lecturer Grade I">Senior Lecturer Grade I</option>
                                            <option value = "senioSenior Lecturer Grade II">Senior Lecturer Grade II</option>
                                        </select>
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="deadline">Deadline : </label>
                                        <input type="date" class="form-control required" id="deadline"  name="deadline" maxlength="128">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="specializationrequirements">Specialization requirements : </label><br />
                                        <input type = "checkbox" name = "Software Engineering" value = "on"> Software Engineering<br />
                                        <input type = "checkbox" name = "Information Systems Security" value = "on"> Information Systems Security<br />
                                        <input type = "checkbox" name = "Computer Networks" value = "on"> Computer Networks<br />
                                        <input type = "checkbox" name = "Grid Computing" value = "on"> Grid Computing<br />
                                        <input type = "checkbox" name = "Artificial Neural Networks" value = "on"> Artificial Neural Networks<br />
                                        <input type = "checkbox" name = "Human-Computer Interaction" value = "on"> Human-Computer Interaction<br />
                                        <input type = "checkbox" name = "Data Science" value = "on"> Data Science<br />
                                        <input type = "checkbox" name = "Embedded Systems" value = "on"> Embedded Systems<br />
                                        <input type = "checkbox" name = "Operating Systems" value = "on"> Operating Systems<br />
                                        <input type = "checkbox" name = "Software Verification & Quality Assurance" value = "on"> Software Verification & Quality Assurance<br />
                                        <input type = "checkbox" name = "Enterprise Application Development" value = "on"> Enterprise Application Development<br />
                                        <input type = "checkbox" name = "IT Project Management" value = "on"> IT Project Management<br />
                                        <input type = "checkbox" name = "Computer Graphics and Vision" value = "on"> Computer Graphics and Vision<br />
                                        <input type = "checkbox" name = "Computer Architecture & Engineering" value = "on"> Computer Architecture & Engineering<br />
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="specializationrequirements">Note : </label><br />
                                        <textarea rows = "5" cols = "56" name = "notes">Any notes here... </textarea>
                                    </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="specializationrequirements">Specialization requirements : </label>
                                        <input type="text" class="form-control required" id="specializationrequirements"  name="specializationrequirements" maxlength="10">
                                    </div>
                            </div> -->
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
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>