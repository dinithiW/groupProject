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

    <!-- <link src="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->

    <!-- <style type="text/css">
      input{
  display: block;
}
    </style> -->
</head> 

<body>
<!-- <?php phpinfo(); ?> -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Set Interview Date
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
      <!-- <div class="form-group  col-xs-12">
        <label for="input-lg" class="input-lg"> Select Vacancy</label>
        <select class="form-control input-lg" id="sel1">
          <option>Lecturer Probationary</option>
          <option>Senior Lecturer</option>
          <option>3</option>
          <option>4</option> 
        </select>
      </div> -->

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
                  <table class="table table-hover table-bordered">
                    <tr style="border-color:black;">
                      <th style="border-color:black;">Time</th>
                      <th style="border-color:black;">Monday</th>
                      <th style="border-color:black;">Tuesday</th>
                      <th style="border-color:black;">Wednesday</th>
                      <th style="border-color:black;">Thursday</th>
                      <th style="border-color:black;">Friday</th>
                      <th style="border-color:black;">Saturday</th>
                      <th style="border-color:black;">Sunday</th> 
                    </tr>

                    <?php
                    for($i=8;$i<=17;$i++){
                    $temp = $i+1;
                    ?>
                    <tr>
                      <td style="border-color:black;">
                      <?php echo "$i".".00 - "."$temp".".00";?>
                    </td>
                    <?php
                    for($j=0;$j<=6;$j++){
                    ?>
                  <td style="border-color:black;"> <div id = "container" style="padding-bottom: 10px"><!-- <select class="form-control" id="sel1">
                            <option>Lecturer Probationary</option>
                            <option>Senior Lecturer</option>
                            <option>3</option>
                            <option>4</option> 
                          </select> --></div><center><a class="btn btn-sm btn-success"  id = "btn"><i class="fa fa-plus"></i></a></center></td>
                  <?php }?>
                    
                  </tr>
                    <?php
                  }

                    ?>


                    <!-- <tr>
                      <td>
                      <?php echo "1";?>
                    </td> -->
                      <!-- <?php
                      for($i=8;$i<=18;$i++){
                      ?><td><?php= "$i"?></td>
                   <?php }
                      ?> -->

                      <!-- <td><div id = "container" style="padding-bottom: 10px"><select class="form-control" id="sel1">
                            <option>Lecturer Probationary</option>
                            <option>Senior Lecturer</option>
                            <option>3</option>
                            <option>4</option> 
                          </select></div><br><a class="btn btn-sm btn-success"  id = "btn"><i class="fa fa-plus"></i></a></td>
                      <td><select class="form-control" id="sel1">
                            <option>Lecturer Probationary</option>
                            <option>Senior Lecturer</option>
                            <option>3</option>
                            <option>4</option> 
                          </select><br><a class="btn btn-sm btn-success" ><i class="fa fa-plus"></i></a></td>
                      <td><select class="form-control" id="sel1">
                            <option>Lecturer Probationary</option>
                            <option>Senior Lecturer</option>
                            <option>3</option>
                            <option>4</option> 
                          </select><br><a class="btn btn-sm btn-success" href=""><i class="fa fa-plus"></i></a></td>
                      <td><select class="form-control" id="sel1">
                            <option>Lecturer Probationary</option>
                            <option>Senior Lecturer</option>
                            <option>3</option>
                            <option>4</option> 
                          </select><br><a class="btn btn-sm btn-success" href=""><i class="fa fa-plus"></i></a></td>
                      <td><select class="form-control" id="sel1">
                            <option>Lecturer Probationary</option>
                            <option>Senior Lecturer</option>
                            <option>3</option>
                            <option>4</option> 
                          </select><br><a class="btn btn-sm btn-success" href=""><i class="fa fa-plus"></i></a></td>
                      <td><select class="form-control" id="sel1">
                            <option>Lecturer Probationary</option>
                            <option>Senior Lecturer</option>
                            <option>3</option>
                            <option>4</option> 
                          </select><br><a class="btn btn-sm btn-success" href=""><i class="fa fa-plus"></i></a></td>
                      <td><select class="form-control" id="sel1">
                            <option>Lecturer Probationary</option>
                            <option>Senior Lecturer</option>
                            <option>3</option>
                            <option>4</option> 
                          </select><br><a class="btn btn-sm btn-success" href=""><i class="fa fa-plus"></i></a></td>  -->
                    <!-- </tr> -->

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

<script type="text/javascript">
  /*var counter = 0;
  var btn = document.getElementById('btn');
  var form = document.getElementById('form');*/
  var addInput = function(i) {
    ///counter++;

    //var div = document.querySelector("#container"),
    var div = i.parentElement.parentElement,
    frag = document.createDocumentFragment(),
    select = document.createElement("select");
    select.className = 'form-control';
    select.id = 'sel1';
    select.options.add( new Option("Method1","AU", true, true) );
    select.options.add( new Option("Method2","FI") );
    frag.appendChild(select);
    div.appendChild(frag);
    frag.write("<br>");
/*

    var input = document.createElement("input");
    input.id = 'input-' + counter;
    input.type = 'text';
    input.name = 'name';
    input.placeholder = 'Input number ' + counter;
    form.appendChild(input);*/

    
  };

  var classn = document.getElementsByClassName("btn");
  for (var i = 0; i < classn.length; i++) {
    classn[i].addEventListener('click', function(){
        addInput(this);
    });
  }
</script>
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