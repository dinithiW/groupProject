<?php
  //var_dump($array);
  //exit();
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
        <i class="fa fa-users"></i> Select Candidates
        <!-- <small>Add, Edit, Delete</small> -->
      </h1>
    </section>
    <section class="content">
        <!-- <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?= base_url('OperatorIndex/addMember') ?>"><i class="fa fa-plus"></i> Add New</a>
                </div>
            </div>
        </div> -->
      <div class = "row">
        <label for="input-lg" class="input-lg"> Select Vacancy</label>
      </div>

      <div class = "row">
        <div class="form-group  col-xs-8 ">
        
        <select class="form-control input-lg" id="selectBox" onchange="changeFunc();">
          <option value = "Lecturer Probationary">Lecturer Probationary</option>
          <option value = "Senior Lecturer" selected>Senior Lecturer</option>
          <!-- <option>3</option>
          <option>4</option> -->
        </select>
      </div>
      </div>

      <div class = "form-group col-xs-2 row">
        <button type="button" class="btn btn-primary">Search</button>
      </div>

        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Candidates List</h3>
                    <div class="box-tools">
                        <form action="<?php echo base_url() ?>userListing" method="POST" id="searchList">
                            <div class="input-group">
                              <!-- <input type="text" name="searchText" value="<?php echo $searchText; ?>" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>  -->
                              <!-- <div class="input-group-btn">
                                <button class="btn btn-sm btn-default searchList"><i class="fa fa-search"></i></button>
                              </div> -->
                            </div>
                        </form>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>Applicant ID</th>
                      <th>Name</th>
                      <!-- <th>DOB</th> -->
                      <th>Educational Qualifications</th>
                      <th>Professional Qualifications</th>
                      <th>Other Qualifications</th>
                      <th>Specializations</th>
                      <th>Selected</th>
                      <th class="text-center">Actions</th>
                    </tr>

                    <?php foreach($array as $a):?>
                    <tr>
                      <td><?=$a->index?></td>
                      <td><?="$a->fname $a->lname"?></td>
                      <!-- <td><?=$a->dob?></td> -->
                      <td><?=$a->eq?></td>
                      <td><?=$a->pq?></td>
                      <td><?=$a->oq?></td>
                      <td><?=$a->spe?></td>


                    </tr>
                    <?php endforeach?>
                    

                    <!-- this was commented -->
                   <!--  <?php
                    
                        foreach ($Members as $row) {?>
                    
                    <tr>
                      <td><?php echo $row->getPanelID() ?></td>
                      <td><?php echo $row->getFname()." ".$row->getLname() ?></td>
                     <td><?php echo $row->getLname() ?></td> 
                      <td><?php echo $row->getEmail() ?></td>
                      <td><?php echo $row->getGender()?></td>
                      <td><?php echo $row->getContact()?></td>
                      <td><?php echo $row->getDesignation()?></td>
                      <td><?php echo $row->getAddress()?></td>
                      <td class="text-center">
                          <a class="btn btn-sm btn-info" href="<?php echo base_url().'OperatorIndex/editMember/'.$row->getPanelID(); ?>"><i class="fa fa-pencil"></i></a>
                          <a class="btn btn-sm btn-danger " href="<?php echo base_url().'OperatorIndex/deleteMember/'.$row->getPanelID(); ?>" data-userid="<?php echo $row->getPanelID(); ?>"><i class="fa fa-trash"></i></a> 
                      </td>
                    </tr>
                    <?php
                        
                    }
                    ?> -->
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

<script type="text/javascript">

   function changeFunc() {
    var selectBox = document.getElementById("selectBox");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
    if(selectedValue=='Lecturer Probationary'){
      //show the relevant peeps data
    }else{
      //
    }
    alert(selectedValue);
   }

  </script>

</body>