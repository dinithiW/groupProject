<?php
include "header.php";
?>
    <div class="content" style="padding-left: 0px;">
<!--        <nav class="navbar navbar-transparent navbar-absolute">-->
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12 col-12">

                        <div class="card">
                            <div class="card-header card-header-icon" data-background-color="purple">
                                <i class="material-icons">assignment</i>
                            </div>
                            <div class="card-content">
                                <h4 class="card-title" style="color: #4e4e4e;font-size: 17px;font-weight: bold">
                                    APPLICANT DETAILS</h4>
                                <div class="toolbar">
                                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                                </div>
                                <div class="material-datatables">
                                    <table id="tblApplicants" class="table table-striped table-no-bordered table-hover datatables"
                                           cellspacing="0"
                                           width="100%" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Applicant ID</th>
                                            <th>Applicant Name</th>
                                            <th>Email Address</th>
                                            <th>Marks</th>
                                            <th class="disabled-sorting text-right">Remove</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>Applicant ID</th>
                                            <th>Applicant Name</th>
                                            <th>Email Address</th>
                                            <th>Marks</th>
                                            <th class="text-right">Remove</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        <tr style="font-size: 16px;background-color: white;height: 50px;cursor: pointer"
                                        <td></td>
                                        <td>abc</td>
                                        <td>bcd</td>
                                        <td>efg</td>
                                        <td>0</td>
                                        <td class="text-right">
                                            <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i
                                                        class="material-icons">close</i></a>
                                        </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div style="height: 50px"></div>
                                <div class="row">
                                    <div class="form-horizontal">
<!--                                        <div class="col-sm-4">-->
<!--                                            <button type="submit" class="btn btn-fill" style="left: 50%;transform: translateX(-50%);font-weight: bold">Calculate</button>-->
<!--                                        </div>-->
                                        <div class="col-sm-2 label-on-left">Total Marks</div>
                                        <div class="col-sm-4">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label"></label>
                                                <input type="text" class="form-control" disabled id="txtTotal" name="txtTotal">
                                            </div>
                                        </div>
                                        <div class="col-sm-2 label-on-left">Average</div>
                                        <div class="col-sm-4">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label"></label>
                                                <input type="text" class="form-control" disabled id="txtAvg" name="txtAvg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="padding-top: 50px">
                                    <div class="form-horizontal">
                                        <div class="col-sm-2 label-on-left">Applicant Name</div>
                                        <div class="col-sm-10">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label"></label>
                                                <input id="txtName" type="text" class="form-control" name="txtName" disabled>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 label-on-left">Marks</div>
                                        <div class="col-sm-10">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label"></label>
                                                <input id="txtMarks" type="text" class="form-control" name="txtMarks">
                                            </div>
                                        </div>
                                        <div class="col-sm-2 label-on-left">Interviewers Count</div>
                                        <div class="col-sm-10">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label"></label>
                                                <input type="text" class="form-control" name="txtCount">
                                            </div>
                                        </div>
                                        <div class="col-sm-12" style="padding-top: 80px">

                                                <button type="submit" class="btn btn-fill" style="left: 50%;transform: translateX(-50%);font-weight: bold">Submit Marks</button>

                                        </div>
                                    </div>
                                </div>
                            </div><!-- end content-->
                        </div>

                    </div>
                </div>

            </div>
<!--        </nav>-->
    </div>

<?php
include "footer.php";
?>