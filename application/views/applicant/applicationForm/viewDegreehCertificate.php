
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="container" style="width: 100%; height=100%"><!-- start of the container-->
                <!-- start of the head-->

<?php
    if($pdf_details->num_rows()>0){    
        foreach($pdf_details->result() as $row){

?>

    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
    <div class="hpanel hblue contact-panel contact-panel-cs responsive-mg-b-30">

    <embed src="<?php echo base_url(); ?>/assets/uploaded_file/<?php echo substr("$row->DOCUMENT",42);?>" style="width:100%; height:100%;>
    
        <div class="panel-footer contact-footer">
            <div class="professor-stds-int">
                
                <div class="professor-stds">
                    <div class="contact-stat"><span></span> <strong></strong></div>
                </div>
                
            </div>
        </div>
    </div>
</div>



<?php
        }
    }

?>

            </div><!-- end of the container-->  
        </div>
    </section>
</div>


