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
                            <h3><b>Lecturer Probationary </b>(Selected)</h3>
                        </center>
                    </div>
                    <br />
                    <div class = "table-responsive">
                        <table class = "table table-bordered">
                            <tr>
                                <td><b>Index number</b></td>
                                <td><b>Name</b></td>
                                <td><b>Gender</b></td>
                                <td><b>E-Mail</b></td>
                                <td><b>Contact No</b></td>
                                <td><b>Post</b></td>
                                <th class="text-center">Actions</th>
                            </tr>

                        <?php 
                        foreach($records_lp as $rec){
                        ?>
                            <tr>
                                <td><?php echo $rec->INDEX_NUMBER; ?></td>
                                <td><?php echo $rec->FIRST_NAME." ".$rec->LAST_NAME; ?></td>
                                <td><?php echo $rec->GENDER; ?></td>
                                <td><?php echo $rec->PERSONAL_EMAIL; ?></td>
                                <td><?php echo $rec->MOBILE_NUMBER; ?></td>
                                <td><?php echo $rec->POST_APPLY_FOR; ?></td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-danger " href="<?php echo base_url().'Director/deleteApplicant/'.$rec->INDEX_NUMBER; ?>" data-userid="<?php echo $rec->INDEX_NUMBER; ?>"><i class="fa fa-times"></i></a> 
                                </td>
                            </tr>
                        <?php
                        } 
                        ?>
                        </table>
                    </div>
                    <br />

                    <div>
                        <center>
                            <h3><b>Lecturer Probationary </b>(Not Selected)</h3>
                        </center>
                    </div>
                    <br />
                    <div class = "table-responsive">
                        <table class = "table table-bordered">
                            <tr>
                                <td><b>Index number</b></td>
                                <td><b>Name</b></td>
                                <td><b>Gender</b></td>
                                <td><b>E-Mail</b></td>
                                <td><b>Contact No</b></td>
                                <td><b>Post</b></td>
                                <th class="text-center">Actions</th>
                            </tr>

                        <?php 
                        foreach($n_records_lp as $rec){
                        ?>
                            <tr>
                                <td><?php echo $rec->INDEX_NUMBER; ?></td>
                                <td><?php echo $rec->FIRST_NAME." ".$rec->LAST_NAME; ?></td>
                                <td><?php echo $rec->GENDER; ?></td>
                                <td><?php echo $rec->PERSONAL_EMAIL; ?></td>
                                <td><?php echo $rec->MOBILE_NUMBER; ?></td>
                                <td><?php echo $rec->POST_APPLY_FOR; ?></td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-info " href="<?php echo base_url().'Director/approveNotSelected/'.$rec->INDEX_NUMBER ?>" data-userid=""><i class="fa fa-check"></i></a>
                                </td>
                            </tr>
                        <?php
                        } 
                        ?>
                        </table>
                    </div>
                    <br />

                    <div>
                        <center>
                            <h3><b>Senior Lecturers Grade I </b>(Selected)</h3>
                        </center>
                    </div>
                    <br />
                    <div class = "table-responsive">
                        <table class = "table table-bordered">
                            <tr>
                                <td><b>Index number</b></td>
                                <td><b>Name</b></td>
                                <td><b>Gender</b></td>
                                <td><b>E-Mail</b></td>
                                <td><b>Contact No</b></td>
                                <td><b>Post</b></td>
                                <th class="text-center">Actions</th>
                            </tr>

                        <?php 
                        foreach($records_i as $rec){
                        ?>
                            <tr>
                                <td><?php echo $rec->INDEX_NUMBER; ?></td>
                                <td><?php echo $rec->FIRST_NAME." ".$rec->LAST_NAME; ?></td>
                                <td><?php echo $rec->GENDER; ?></td>
                                <td><?php echo $rec->PERSONAL_EMAIL; ?></td>
                                <td><?php echo $rec->MOBILE_NUMBER; ?></td>
                                <td><?php echo $rec->POST_APPLY_FOR; ?></td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-danger " href="<?php echo base_url().'Director/rejectSelectedSEI/'.$rec->INDEX_NUMBER; ?>" data-userid="<?php echo $rec->INDEX_NUMBER; ?>"><i class="fa fa-times"></i></a> 
                                </td>
                            </tr>
                        <?php
                        } 
                        ?>
                        </table>
                    </div>
                    <br />

                    <div>
                        <center>
                            <h3><b>Senior Lecturers Grade I </b>(Not Selected)</h3>
                        </center>
                    </div>
                    <br />
                    <div class = "table-responsive">
                        <table class = "table table-bordered">
                            <tr>
                                <td><b>Index number</b></td>
                                <td><b>Name</b></td>
                                <td><b>Gender</b></td>
                                <td><b>E-Mail</b></td>
                                <td><b>Contact No</b></td>
                                <td><b>Post</b></td>
                                <th class="text-center">Actions</th>
                            </tr>

                        <?php 
                        foreach($n_records_i as $rec){
                        ?>
                            <tr>
                                <td><?php echo $rec->INDEX_NUMBER; ?></td>
                                <td><?php echo $rec->FIRST_NAME." ".$rec->LAST_NAME; ?></td>
                                <td><?php echo $rec->GENDER; ?></td>
                                <td><?php echo $rec->PERSONAL_EMAIL; ?></td>
                                <td><?php echo $rec->MOBILE_NUMBER; ?></td>
                                <td><?php echo $rec->POST_APPLY_FOR; ?></td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-info " href="<?php echo base_url().'Director/approveNotSelectedSEI/'.$rec->INDEX_NUMBER ?>" data-userid=""><i class="fa fa-check"></i></a>
                                </td>
                            </tr>
                        <?php
                        } 
                        ?>
                        </table>
                    </div>
                    <br />

                    <div>
                        <center>
                            <h3><b>Senior Lecturers Grade II </b>(Selected)</h3>
                        </center>
                    </div>
                    <br />
                    <div class = "table-responsive">
                        <table class = "table table-bordered">
                            <tr>
                                <td><b>Index number</b></td>
                                <td><b>Name</b></td>
                                <td><b>Gender</b></td>
                                <td><b>E-Mail</b></td>
                                <td><b>Contact No</b></td>
                                <td><b>Post</b></td>
                                <th class="text-center">Actions</th>
                            </tr>

                        <?php 
                        foreach($records_ii as $rec){
                        ?>
                            <tr>
                                <td><?php echo $rec->INDEX_NUMBER; ?></td>
                                <td><?php echo $rec->FIRST_NAME." ".$rec->LAST_NAME; ?></td>
                                <td><?php echo $rec->GENDER; ?></td>
                                <td><?php echo $rec->PERSONAL_EMAIL; ?></td>
                                <td><?php echo $rec->MOBILE_NUMBER; ?></td>
                                <td><?php echo $rec->POST_APPLY_FOR; ?></td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-danger " href="<?php echo base_url().'Director/rejectSelectedSEII/'.$rec->INDEX_NUMBER; ?>" data-userid="<?php echo $rec->INDEX_NUMBER; ?>"><i class="fa fa-times"></i></a> 
                                </td>
                            </tr>
                        <?php
                        } 
                        ?>
                        </table>
                    </div>
                    <br />

                    <div>
                        <center>
                            <h3><b>Senior Lecturers Grade II </b>(Not Selected)</h3>
                        </center>
                    </div>
                    <br />
                    <div class = "table-responsive">
                        <table class = "table table-bordered">
                            <tr>
                                <td><b>Index number</b></td>
                                <td><b>Name</b></td>
                                <td><b>Gender</b></td>
                                <td><b>E-Mail</b></td>
                                <td><b>Contact No</b></td>
                                <td><b>Post</b></td>
                                <th class="text-center">Actions</th>
                            </tr>

                        <?php 
                        foreach($n_records_ii as $rec){
                        ?>
                            <tr>
                                <td><?php echo $rec->INDEX_NUMBER; ?></td>
                                <td><?php echo $rec->FIRST_NAME." ".$rec->LAST_NAME; ?></td>
                                <td><?php echo $rec->GENDER; ?></td>
                                <td><?php echo $rec->PERSONAL_EMAIL; ?></td>
                                <td><?php echo $rec->MOBILE_NUMBER; ?></td>
                                <td><?php echo $rec->POST_APPLY_FOR; ?></td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-info " href="<?php echo base_url().'Director/approveNotSelectedSEII/'.$rec->INDEX_NUMBER ?>" data-userid=""><i class="fa fa-check"></i></a>
                                </td>
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