<?php
$position = "";
?>
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
        <i class="fa fa-users"></i> Categorized Applicants
        <!-- <small>Add, Edit, Delete</small> -->
      </h1>

    </section>
    <!-- <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?= base_url('OperatorIndex/categorize') ?>"><i class="fa fa-home"></i> Categorization Home</a>
                </div>
            </div>
        </div> -->
    <section class="content">
       <div class = "row">
        <label for="input-lg" class="input-lg"> Select Category</label>
      </div>

      <form action = "<?= base_url().'SAR/categorizedApplicants'?>" method = "post">
      <div class = "row">
        <div class="form-group  col-xs-8 ">
        
        <select class="form-control input-lg" id="selectBox" name = "vacancy">
           <!-- <select class="form-control input-lg" id="selectBox" onchange="changeFunc();"> -->
          <option value = "Senior Lecturer Grade I selected" >Senior Lecturer Grade I selected</option>
          <option value = "Senior Lecturer Grade I not selected" >Senior Lecturer Grade I not selected</option>
          <option value = "Senior Lecturer Grade II selected" >Senior Lecturer Grade II selected</option>
          <option value = "Senior Lecturer Grade II not selected" >Senior Lecturer Grade II not selected</option>
          <option value = "Lecturer Probationary Category 1" >Lecturer Probationary Category 1</option>
          <option value = "Lecturer Probationary Category 2" >Lecturer Probationary Category 2</option>
          <option value = "Lecturer Probationary Category 3" >Lecturer Probationary Category 3</option>
          <option value = "Lecturer Probationary not selected" >Lecturer Probationary not selected</option>
        </select>
      </div>
      </div>
    
      <div class = "form-group col-xs-2 row">
        <input type="submit" class="btn btn-primary" value = "Search">
      </div> 
</form>  
    </section>

    <section class="content">
        

        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title"></h3>
                    <div class="box-tools">
                        <form action="<?php echo base_url() ?>userListing" method="POST" id="searchList">
                           
                        </form>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>Applicant ID</th>
                      <th>Name</th>
                      <th>Educational Qualifications</th>
                      <th>Professional Qualifications</th>
                      <th>Other Qualifications</th>
                      <th>Specializations</th>
                      
                      <th class="text-center">Actions</th>
                    </tr>

                    
                  <!--   <?php foreach($array as $a):?>
                    <tr>
                      <td><?=$a->index?></td>
                      <td><?="$a->fname $a->lname"?></td>
                      <td><?=$a->dob?></td> 
                      <td><?=$a->eq?></td>
                      <td><?=$a->pq?></td>
                      <td><?=$a->oq?></td>
                      <td><?=$a->spe?></td>
                      <form method = "post" action = "<?= base_url().'OperatorIndex/selectLP/'.$a->index.'/'.$category;?>">
                      <td class="text-center">
                          <input type = "submit"  value="&#xf00c" class="btn btn-sm btn-success fa fa-check" >
                          <a class="btn btn-sm btn-danger " href="<?php echo base_url().'OperatorIndex/notSelectLP/'.$a->index; ?>" data-userid=""><i class="fa fa-trash"></i></a>  
                          <a class="btn btn-sm btn-info " href="" data-userid=""><i class="fa fa-info"></i></a> 
                      </td>
                    </tr>
                    <?php endforeach?> 
                  </form>   -->
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