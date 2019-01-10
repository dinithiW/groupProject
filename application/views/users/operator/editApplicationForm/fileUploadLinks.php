<!DOCTYPE html>
<html>

<head>    
    <title>UCSC</title>
    <link rel="stylesheet" href="<?=base_url('assets/css/loginPanel.css')?>" type="text/css"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width= device-width ,initial-scale = 1">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</head> 

<body>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> File Upload Links
        <small>Add, Edit, Delete</small>
      </h1>
    </section>
    
    <section class="content"> 
      <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?= base_url('OperatorIndex/addUploadLink') ?>"><i class="fa fa-plus"></i> Add New</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Upload Links</h3>
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
                      <th>File Upload Link ID</th>
                      <th>File Upload Link Name</th>
                      <th class="text-center">Actions</th>
                    </tr>

                    <?php
                    
                        foreach ($FileUploads as $row) {?>
                    
                    <tr>
                      <td><?php echo $row->fileUploadID ?></td>
                      <td><?php echo $row->fileUploadName ?></td>
                     
                      <td class="text-center">
                          <a class="btn btn-sm btn-info" href="<?php echo base_url().'OperatorIndex/editUploadLink/'.$row->fileUploadID; ?>"><i class="fa fa-pencil"></i></a>
                          <a class="btn btn-sm btn-danger " href="<?php echo base_url().'OperatorIndex/deleteUploadLink/'.$row->fileUploadID; ?>" data-userid="<?php echo $row->fileUploadID; ?>"><i class="fa fa-trash"></i></a> 
                      </td>
                    </tr>
                    <?php
                        
                    }
                    ?>
                  </table>  
                  
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
        </div>
    </section>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
</body>