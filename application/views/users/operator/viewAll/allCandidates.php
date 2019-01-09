<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>  

    <title>
      UCSC
    </title>

    <link rel="stylesheet" href="<?=base_url('assets/css/loginPanel.css')?>" type="text/css"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width= device-width ,initial-scale = 1">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> -->

  </head> 

  <body>

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          <i class="fa fa-users"></i> All Candidates
        </h1>
      </section>

      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Candidates List</h3>
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
                    <?php foreach($array as $a):?>
                      <tr>
                        <td><?=$a->index?></td>
                        <td><?="$a->fname $a->lname"?></td>
                        <!-- <td><?=$a->dob?></td> -->
                        <td><?=$a->eq?></td>
                        <td><?=$a->pq?></td>
                        <td><?=$a->oq?></td>
                        <td><?=$a->spe?></td>
                        <td class="text-center"><a class="btn btn-sm btn-info " href="<?php echo base_url().'OperatorIndex/viewApplicationForm/'.$a->index?>" data-userid=""><i class="fa fa-info"></i></a><td>
                      </tr>
                    <?php endforeach?>
                  </table> 
                </div>
              </div><!-- /.box -->
            </div>
          </div>
      </section>
    </div>
  </body>
</html>