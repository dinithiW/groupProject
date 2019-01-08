<?php
$this->load->library('session');
$confirmed = "";
if (!empty($_GET["confirmed"])) {
    $confirmed = $_GET["confirmed"];
}
?>
<!Doctype html>
<html>
<head>
    <title>TinyMCE - Setup</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/loginPanel.css') ?>" type="text/css"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width= device-width ,initial-scale = 1">

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->

    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>

    <link href="http://fonts.googleapis.com/css?family=Droid+Serif|Tangerine|Lobster:regular" rel="stylesheet"
          type="text/css">
    <!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">-->
    <style>
        a:hover {
            text-decoration: none;
        }
    </style>

</head>

<body>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Vacancy Details
            <!-- <small>Add / Edit User</small> -->
        </h1>
    </section>
    <section class="content">

        <div class="row">
            <div class="col-sm-12">
                <div>
                    <?php
                    if ($confirmed == "success") {
                        ?>
                        <div class="alert alert-success"
                             style="margin-left: 10px;margin-right: 10px;text-align: center;color: #17630a;font-weight: bold">
                            Advertisement has been confirmed
                        </div>
                        <?php
                    }
                    ?>
                     <?php
                    if ($confirmed == "failed") {
                        ?>
                        <div class="alert alert-danger"
                             style="margin-left: 10px;margin-right: 10px;text-align: center;color: #17630a;font-weight: bold">
                            Advertisement has been declined
                        </div>
                        <?php
                    }
                    ?>

                </div>
                <div style="margin-left: 10px;margin-right: 10px">
                    <form method="post" action="<?= base_url('SARDashboard/confirmAdvertisement') ?>">
                        <div class="row" style="background-color: white;border: 2px solid #7a4d01;padding: 10px">
                            <?php
                                $this->load->view('add');
                            ?>
                        </div>
                        <button type="submit" class="btn btn-fill"
                                style="left: 50%;transform: translateX(-50%);font-weight: bold;margin-top: 80px;position: relative"
                                id="submitAdBtn">
                            Confirm Advertisement
                        </button>
                        <button type="submit" class="btn btn-danger"
                                style="left: 50%;transform: translateX(-50%);font-weight: bold;margin-top: 80px;position: relative"
                                id="submitAdBtn">
                           Decline Advertisement
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
</body>