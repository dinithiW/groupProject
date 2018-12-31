
<?php
if($this->session->userdata['logged_in']){
?>
    <div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="container" style="width: 1000px;"><!-- start of the container-->
                <!-- start of the head-->
                <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4 row centered-form head">
                <h4 id="headline1"><span color="red"> ATTACH RELEVANT DOCUMENTS</span></h4>

                    <?php
                        if($fetch_data->num_rows()>0){
                            foreach($fetch_data->result() as $row){
                    ?>
                    
                                <!-- start of a upload link-->
                                <div class="form-group one">
                                        <h6 id="label1"><b><?php echo $row->LINK_NAME?></b></h6>
                                        <input type="file" class="inputClass1" id="inputId1" name="attached_file">
                                        <button type="submit" class="btn btn-lg btn-block btn-primary"  id="button1">upload</button>
                                    </div>
                                <!-- end of a upload link-->

                    <?php
                            }
                        }
                    ?>
                </div><!-- end of the head-->    
            </div><!-- end of the container-->  
        </div>
    </section>
</div>

<?php
}
else{
    redirect(base_url()."User/logout");
}
?>


