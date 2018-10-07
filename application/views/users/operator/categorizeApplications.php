<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="<?=base_url('assets/css/applicationForm/bootstrap.min.css')?>" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.js" ></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.min.js" ></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('assets/css/operator/categorizeApplications.css')?>" type="text/css"/>
    <script src="main.js"></script>
</head>
<body>
    <div class="container"><!-- start of the container-->
            <!-- start of the head-->
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4 row centered-form head inner">
                <h4 id="headline1">MANAGE AREA SPECIFICATION</h4>
                

                <div class="insert"><!-- start of the insert-->
                    <form method="post" action="<?=base_url('OperatorDashboard/insesrtDataForDatabase')?>">
                        <input type="text" name="insertArea" class="form-control input-sm input1"  placeholder="Enter the area field in here" required>
                        <button type="submit" name="sub" class="btn btn-info btn-block button1">INSERT</button>
                    </form><!-- end of the head-->
                </div>

                <div class="insert"><!-- start of the delete-->
                    <form method="post" action="<?=base_url('OperatorDashboard/deleteDataFromDatabase')?>">
                        <input type="text" name="deleteArea" class="form-control input-sm input2"  placeholder="Enter id number of area you want to delete" required>
                        <button type="submit" name="sub" class="btn btn-info btn-block button2">DELETE</button>
                    </form>
                </div><!-- end of the delete-->


                <h4 id="headline2">MANAGE FILE UPLOADING</h4>
                

                <div class="insert"><!-- start of the insert-->
                    <form method="post" action="<?=base_url('OperatorDashboard/insesrtFileUploadingLinkForDatabase')?>">
                        <input type="text" name="insertFileUploadLink" class="form-control input-sm input3"  placeholder="Enter the link in here" required>
                        <button type="submit" name="sub" class="btn btn-info btn-block button3">INSERT</button>
                    </form><!-- end of the head-->
                </div>

                <div class="insert"><!-- start of the delete-->
                    <form method="post" action="<?=base_url('OperatorDashboard/deleteFileUploadLinkFromDatabase')?>">
                        <input type="text" name="deleteFileUploadLink" class="form-control input-sm" id="input4" class="form-control input-sm input4"  placeholder="Enter id number of link you want to delete" required>
                        <button type="submit" name="sub" class="btn btn-info btn-block button4">DELETE</button>
                    </form>
                </div><!-- end of the delete-->

                <div class="resultTable1"><!--start of the table1classs-->
                <fieldset style="width: 550px">
                    <legend>
                        SPECIALIZATIONAL AREAS
                    </legend>
                    <table><!--start of the table1-->
                        <tr>
                            <th>AREA ID</th>
                            <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; AREA NAME</th>
                        </tr>

                        <?php
                            if($fetch_data1->num_rows()>0){
                                foreach($fetch_data1->result() as $row){
                        ?>

                            <tr>
                                <td><?php echo$row->AREA_ID?></td>
                                <td><?php echo$row->AREA_NAME?></td>
                            </tr>

                        <?php
                                }
                            }
                        ?>


                    </table><!--end of the table1-->
                </fieldset>
            </div><!--snd of the table1class-->


            <div class="resultTable2"><!--start of the table2classs-->
                <fieldset style="width: 530px">
                    <legend>
                        SPECIALIZATIONALS
                    </legend>
                    <table boarder="2"><!--start of the table2-->
                        <tr>
                            <th>LINK ID</th>
                            <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LINK NAME</th>
                        </tr>

                        <?php
                            if($fetch_data2->num_rows()>0){
                                foreach($fetch_data2->result() as $row){
                        ?>

                            <tr>
                                <td><?php echo$row->LINK_ID?></td>
                                <td><?php echo$row->LINK_NAME?></td>
                            </tr>

                        <?php
                                }
                            }
                        ?>

                    </table><!--end of the table2-->
                </fieldset>
            </div><!--snd of the table2class-->



            </div><!-- end of the head-->

            
    </div><!-- end of the container-->


</body>
</html>
