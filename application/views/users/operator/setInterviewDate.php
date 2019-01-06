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

      <form action = "<?= base_url().'OperatorIndex/lecturerProbationary'?>" method = "post">
      <div class = "row">
        <div class="form-group  col-xs-8 ">
        
        <select class="form-control input-lg" id="selectBox" name = "vacancy">
           <!-- <select class="form-control input-lg" id="selectBox" onchange="changeFunc();"> -->
          <option value = "1" >Senior Lecturer Grade I selected</option>
          <option value = "2" >Senior Lecturer Grade II selected</option>
          <option value = "3" >Lecturer Probationary Category 1</option>
          <option value = "0" >Lecturer Probationary Category 2</option>
          <option value = "0" >Lecturer Probationary Category 3</option>
        </select>


      </div>


      </div>
    
      <div class = "form-group col-xs-2 row">
        <input type="submit" class="btn btn-primary" value = "Search">
      </div> 

      <!-- <div class = "form-group row ">
          <label>Interview Date</label>
          <input type="date" name="check_list[]" value="" class = "checkbox">
        </div> -->
</form>
        
        <div class="row">

            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Candidates List</h3>
                    <div class="box-tools">
                      
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <section class="content">
        

        <div class="row">

            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?= $headerName?></h3>
                    <div class="box-tools">
                        <form action="<?php echo base_url() ?>userListing" method="POST" id="searchList">
                           
                        </form>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <form method = "post" action = "">
                  <table class="table table-hover">
                    <tr>
                      <th>Applicant ID</th>
                      <th>Name</th>
                      <th>Email Address</th>
                      <th >Selected</th>
                      <th class="text-center">Actions</th>
                    </tr>

                    
                    <?php foreach($array as $a):?>
                    <tr>
                      <td><?=$a->index?></td>
                      <td><?="$a->fname $a->lname"?></td>
                      <td><?=$a->email?></td>
                      <td>
                       <input type="checkbox" name="check_list[]" value="<?= $a->email?>" class = "checkbox"> 
                      <!-- <input type="date" name="check_list[]" value="<?= $a->email?>" class = "checkbox"> -->
                    </td>
                      
                      
                     
                      <td class="text-center">
                          <!-- <input type = "submit"  value="&#xf00c" class="btn btn-sm btn-success fa fa-envelope-square" > -->
                          <!-- <a class="btn btn-sm btn-danger " href="<?php echo base_url().'OperatorIndex/notSelectLP/'.$a->index; ?>" data-userid=""><i class="fa fa-trash"></i></a>  -->
                          <a class="btn btn-sm btn-info " href="" data-userid=""><i class="fa fa-envelope">&nbspSend Email Individually</i></a> 
                      </td>
                    </tr>
                    <?php endforeach?>
                  </form>  
                  </table> 
                  
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
              </div><!-- /.box -->
            </div>
        </div>
    </section>
                  
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



<!-- <table class="table table-hover table-bordered">
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
                  <td style="border-color:black;"> <div id = "container" style="padding-bottom: 10px"> <select class="form-control" id="sel1">
                            <option>Lecturer Probationary</option>
                            <option>Senior Lecturer</option>
                            <option>3</option>
                            <option>4</option> 
                          </select></div><center><a class="btn btn-sm btn-success"  id = "btn"><i class="fa fa-plus"></i></a></center></td>
                  <?php }?>
                    
                  </tr>
                    <?php
                  }

                    ?>
                 
                  </table>  -->