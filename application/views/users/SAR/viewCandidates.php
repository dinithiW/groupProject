<!DOCTYPE html>
<html>

<head>    
    <title>UCSC</title>
    <link rel="stylesheet" href="<?=base_url('assets/css/loginPanel.css')?>" type="text/css"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width= device-width ,initial-scale = 1">

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</head> 

<body>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Candidates
        <!--<small>Add, Edit, Delete</small>-->
      </h1>

     </section>
    <section class="content">
        <!--<div class="row">
            <div class="col-xs-12 text-right">

                <div class="form-group">

                    <<a class="btn btn-primary" href="<?= base_url('OperatorIndex/addMember') ?>"><i class="fa fa-plus"></i> Add New</a>-->
              <!--  </div>
            </div>
        </div> -->
        <form method=POST action="<?=base_url('applicants')?>"></form>
        <div class="form-group  col-xs-12">
        <label for="input-lg" class="input-lg"> Select Vacancy</label>
        <select class="form-control input-lg" id="sel1" name="type">
        <option value="PROBATIONARY LECTURER">Lecturer Probationary</option>
          <option value="SENIOR LECTURE GR. I">Senior Lecturer(Grade 1)</option>
          <option value="SENIOR LECTURE GR. II">Senior Lecturer(Grade 2)</option>
          <!-- <option>3</option>
          <option>4</option> -->
        </select>
        </div>
        <div class="col-xs-1" align="right">
  
      
          <button type="submit" class="btn btn-primary" style="margin: 5px" >Search</button>
        </div>



        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Candidate List</h3>
                    <div class="box-tools">
                        <form action="<?php echo base_url() ?>userListing" method="POST" id="searchList">
                            <div class="input-group">
                            	 </div>
                        </form>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <!-- <th>Last Name</th> -->
                      <th>Gender</th>
                      <th>Email</th>
                      <th>Degree</th>
                      <th>Class</th>
                      <!--th>Address</th>-->
                      <!--<th class="text-center">Actions</th>-->
                    </tr>
                </table>
                 </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
              </div><!-- /.box -->
            </div>
        </div>
    </section>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();            
            var link = jQuery(this).get(0).href;            
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "userListing/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>
</body>
</html>