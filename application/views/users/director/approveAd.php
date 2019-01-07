<?php $vacancyName = "";

$this->load->model('applicantDetails');

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-adn"></i> Approve Advertisement
        <small>Approve the created advertisement</small>
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
                            <h3>Advertisement Details</h3>
                        </center>
                    </div>
                    <br />
                    <div class = "table-responsive">
                        <table class = "table table-bordered">
                            <tr>
                                <th>Ad Reference</th>
                                <th>Vacancy Id</th>
                                <!-- <th>Vacancy needed</th> -->
                                <th>Ad URL</th>
                                <th>Approve</th>
                                <th>Reject</th>
                                <th>Director's Opinion</th>
                            </tr>

                        <?php 
                        foreach($records as $rec){
                        ?>
                            <tr>
                                <td><?php echo $rec->ad_ref; ?></td>
                                <td><?php echo $rec->vacancy_id; ?></td>
                                <?php
                                $vacancyName= $this->applicantDetails->findVacancyNeeded($rec->vacancy_id)
                                ?>
                                <!-- <td><?php// echo $vacancyName; ?></td> -->
                                <td><a href = "<?php echo $rec->ad_url; ?>" target = "_blank"><?php echo $rec->ad_url; ?></a></td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-info " href="<?php echo base_url().'Director/approvelAd/'.$rec->vacancy_id ?>" data-userid=""><i class="fa fa-check"></i></a>
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-danger " href="<?php echo base_url().'Director/rejectAd/'.$rec->vacancy_id; ?>" data-userid=""><i class="fa fa-times"></i></a> 
                                </td>
                                <td>
                                    <form action="<?php echo base_url().'Director/adOpinion/'.$rec->vacancy_id ?>" method="post">
                                        <input type = "text" name = "<?php echo $rec->vacancy_id; ?>" />
                                    </form>
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