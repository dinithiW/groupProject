<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title>UCSC</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/loginPanel.css') ?>" type="text/css"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width= device-width ,initial-scale = 1">

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>

</head>
<body>
    
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <i class="fa fa-users"></i> Candidates
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
         <form method="post" action="<?= base_url('Panel/viewApplicants') ?>">
            <div class="form-group  col-xs-12">
                <label for="input-lg" class="input-lg"> Select Vacancy</label>
                <select class="form-control input-lg" id="sel1" name="lecturerType">
                    <option value="PROBATIONARY_LECTURER" <?= isset($lecturerType) ? $lecturerType == 'PROBATIONARY_LECTURER' ? 'selected' : '' : '' ?>>Lecturer Probationary</option>
                    <option value="SENIOR_LECTURE_GR.I" <?= isset($lecturerType) ? $lecturerType == 'SENIOR_LECTURE_GR.I' ? 'selected' : '' : '' ?>>Senior Lecturer (Grade 1)</option>
                    <option value="SENIOR_LECTURE_GR.II" <?= isset($lecturerType) ? $lecturerType == 'SENIOR_LECTURE_GR.II' ? 'selected' : '' : '' ?>>Senior Lecturer (Grade 2)</option>

                    <!-- <option>3</option>
                    <option>4</option> -->
                </select>
            </div>
            <div class="col-xs-1" align="right">

            <button type="submit" class="btn btn-primary" style="margin: 5px">Search</button>
            </div>
        </form>
        <div class="row">
            <div class="col-sm-12">
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

                    <table class="table table-hover"  id="tblApplicants">
                        <tr>
                            <td>Applicant ID</td>
                            <td>Applicant Name</td>
                            <td>Email Address</td>
                            <td>Marks</td>

                        </tr>
                         <tbody>
                         <script>
                                var applicants = new Array();
                            </script>
                            <?php
                            $value = 0;
                            foreach ($applicants as $row) {
                                ?>
                                <tr id="tr<?= $value ?>">
                                    <td><?= $row->INDEX_NUMBER ?></td>
                                    <td><?= $row->LAST_NAME ?></td>
                                    <td><?= $row->PERSONAL_EMAIL ?></td>
                                    <td>0</td>
                                </tr>
                                <script>
                                <?php
                                    echo "
                                        applicants.push({
                                            interviewers_count: '1',
                                            fullName: '$row->FIRST_NAME $row->LAST_NAME'
                                          });
                                        ";
                                    ?>
                                </script>
                                <?php
                                $value++;
                            }
                            ?>
                           
                        </tbody>
                    </table>
                     </div><!-- /.box-body -->

                    <div class="">
                        <hr style="margin-top: 100px">
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12 col-12" style="text-align: center;"><h4 class="card-title"
                                                                                          style="color: #4e4e4e;font-size: 17px;font-weight: bold">
                                    MARKING CRITERIA</h4></div>
                        </div>
                        <div class="row" style="padding-top: 40px;font-size: 18px">
                            <div class="">
                                <?php
                                $value = 0;
                                foreach ($detailed_criteria_headings as $row1) {
                                    $value++;
                                    if ($value % 2 != 0) {
                                        ?>
                                        <div class="row">
                                        <?php
                                    }
                                    ?>
                                     <div class="col-sm-6">
                                        <div class="row" style="margin-left: 10px">
                                            <div class="col-sm-8"
                                                 style="font-weight: 400;text-decoration: underline;padding-bottom: 10px;padding-top: 10px"><?= $row1->name ?></div>
                                            <div class="col-sm-4"
                                                 style="font-weight: 400;text-decoration: underline;padding-bottom: 10px;padding-top: 10px">
                                                Marks
                                            </div>
                                            <?php
                                             foreach ($detailed_criteria as $row2) {
                                                 if ($row2->mhid == $row1->mhid) {
                                                    if ($row2->marks == "0") {
                                                        ?>
                                                        <div class="row" style="margin-left: 0px">
                                                            <div class="col-sm-12"
                                                                 style="font-weight: 400;padding-top: 5px"><?= $row2->name ?></div>
                                                        </div>
                                                        <?php
                                                    } else {
                                                        ?>
                                                     <div class="row" style="margin-left: 0px">
                                                            <div class="col-sm-8"
                                                                 style="font-weight: 100"><?= $row2->name ?></div>
                                                            <div class="col-sm-4"
                                                                 style="font-weight: 100"><?= $row2->marks ?>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>

                                    <?php
                                    if ($value % 2 == 0) {
                                        ?>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                                 </div>
                        </div>

                        <hr>

                        <div class="row" style="padding-top: 100px">
                            <div class="col-md-12 col-12" style="text-align: center">
                                <h4 style="color: #4e4e4e;font-size: 17px;font-weight: bold">
                                    MARKING PANEL</h4>
                            </div>
                        </div>

                         <div style="margin: 10px">
                            <div class="row" style="padding-top: 20px;font-size: 18px">
                                <div class="">
                                    <div class="col-sm-2">Applicant ID</div>
                                    <div class="col-sm-10">
                                        <div class="">
                                            <!--                                        <label class="control-label"></label>-->
                                            <input id="txtId" type="text" class="form-control" name="txtId"
                                                   readonly>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 label-on-left">Applicant Name</div>
                                    <div class="col-sm-10">
                                        <div class="form-group label-floating is-empty">
                                            <!--                                            <label class="control-label"></label>-->
                                            <input id="txtName" type="text" class="form-control" name="txtName"
                                                   readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 50px;font-size: 18px">
                                <div class="">
                                    <div class="col-sm-2 label-on-left">Interviewers Count</div>
                                    <div class="col-sm-10">
                                        <div class="form-group label-floating is-empty">
                                            <input type="number" class="form-control" name="txtCount"
                                                   id="txtCount"
                                                   style="font-size: 16px" value="1" min="1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                         <table id="tblMarks"
                                   class="table table-hover"
                                   cellspacing="0"
                                   width="100%" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Marking Panel</th>
                                    <th style="text-align: center">Marks</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $value = 0;
                                foreach ($criteria_headings as $row) {
                                    $value++;
                                    ?>
                                    <tr style="font-size: 16px;background-color: white;height: 50px;cursor: pointer"
                                    <td></td>
                                    <td><?= $row->name ?></td>
                                    <td><input type="number" class="form-control txtMarks" min="0"
                                               id="txtMarks<?= $value ?>" name="txtMarks" value="0"
                                               style="font-size: 16px;text-align: center"></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                <tr style="font-size: 16px;background-color: white;height: 50px;cursor: pointer"
                                <td></td>
                                <td style="font-weight: 400">Total Marks</td>
                                <td><input type="text" class="form-control" readonly id="txtTotal"
                                           name="txtTotal" placeholder="0 / 100"
                                           style="font-size: 16px;text-align: center"></td>
                                </tr>
                                <tr style="font-size: 16px;background-color: white;height: 50px;cursor: pointer;height: 100px"
                                <td></td>
                                <td>Referees Report</td>
                                <td style="right: 0px"><textarea class="form-control" id="txtReport"
                                                                 name="txtReport"
                                                                 style="font-size: 16px;height: 150px"></textarea>
                                </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--                        <div style="height: 50px"></div>-->
                        <div class="row" style="padding-top: 0px">
                            <div class="form-horizontal">
                                <div class="col-sm-12" style="padding-top: 80px">
                                  
                                    <button type="submit" class="btn btn-fill"
                                            style="left: 50%;transform: translateX(-50%);font-weight: bold;position: relative"
                                            id="submitBtn">
                                        Submit Marks
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer clearfix">
                        <?php echo $this->pagination->create_links(); ?>
                    </div>
                </div><!-- /.box -->
            </div>
        </div>
    </section>
</div>
</body>

<script src="<?= base_url('application/views/js/interview/applicantController.js') ?>"></script>
<script>
    function getComments(aid) {
        $.ajax(
            {
                type: "post",
                url: "<?= base_url('InterviewerController/getComments') ?>",
                data: {aid: aid},
                success: function (response) {
                    var fields = response.split('~');
                    var comment = '';
                    for (var i = 0; i < fields.length; i++) {
                        comment += fields[i] + '\n';
                    }
                    $('#txtReport').val(comment);
                    // nicEditors.findEditor( "txtReport" ).setContent( comment );
                }
                // error: function () {
                //     alert("Invalide!");
                // }
            }
        );
    }
</script>
</body>
</html> 







</body>