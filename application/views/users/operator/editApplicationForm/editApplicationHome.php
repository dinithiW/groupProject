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
            <i class="fa fa-users"></i> Application Form
            <small>Manage</small> 
          </h1>
        </section>
      
        <section class="content">
          <div class = "row">
            <label for="input-lg" class="input-lg"> Select Field</label>
          </div>

          <form action = "<?= base_url().'OperatorIndex/directEditApplication'?>" method = "post">
            <div class = "row">
              <div class="form-group  col-xs-8 ">
                <select class="form-control input-lg" id="selectBox" name = "editField">
                  <option value = "sa">Specialization Areas</option>
                  <option value = "fa">File Uploads</option>
                </select>
              </div>
            </div>
    
            <div class = "form-group col-xs-2 row">
              <input type="submit" class="btn btn-primary" value = "Search">
            </div> 
          </form>
      
        </section>
      </div>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
  </body>
  </html>