<?php
if($this->session->userdata['logged_in']){
?>
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="container" style="width: 1200px;"><!-- start of the container-->
                <!-- start of the head-->

                <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4 row centered-form head">
                <h4 id="headline1"><span color="red"> <b>ATTACH RELEVANT DOCUMENTS</b></span></h4>


                    <div class="headline_for_links">
                        <font color="#821D12"> <b>REQUIRED DOCUMENTS FOR THIS YEAR</b></font>
                    </div>
                    <style>
                    .headline_for_links{
                        margin-left:-30px;
                        
                    }
                    </style>

                    <ol>
                        <?php
                        if($fetch_data->num_rows()>0){
                            foreach($fetch_data->result() as $row){
                        ?>
                        <li><font color="#821D12"> <b><?php echo $row->LINK_NAME?></b></font></li>    
                        <?php
                            }
                        }
                            
                        ?>   
                    </ol>

                    <ol>
                        <b> YOUR SUBMITTED DOCUMENTS </b>
                        <?php
                            $dbh = new PDO("mysql:host=localhost;dbname=ucsc","root","");
                            $index = $_SESSION['index_number'];
                            $stat = $dbh->prepare("select * from application_form_documents where INDEX_NUMBER = '$index'");
                            $stat->execute();
                        ?>
                        <table class="responstable" id="tableId">

                            <tr>
                                <th>SUBMITTED DOCUMENT</th>
                            </tr>
                            <?php
                            while($row = $stat->fetch()){
                            ?>
                            <tr>
                                <td><?php echo substr($row['DOCUMENT_NAME'],0,strlen($row['DOCUMENT_NAME'])-4)?></td>
                               
                            </tr>
                        
                            <?php  
                            }
                            
                            ?>
                        </table>
                        
                        <style>
                            #tableId{
                                margin-left:-130px;
                            }
                            
                        </style>

                    </ol>

                    
                    <!-- start of a upload link-->
                    <?php echo form_open_multipart('ApplicationForm/insertfileUpload'); ?>
                        <div class="form-group one">
                            <div class="custom-select " style="width:430px; height:50px;">
                                <select name="selectDegree" id="selectCategory">
                                    <option value=""> SELECT DOCUMENT </option>
                                    <?php
                            
                                    if($fetch_data->num_rows()>0){
                                        foreach($fetch_data->result() as $row){
                                    ?>
                                    <option value="<?php echo $row->LINK_NAME?>"><?php echo $row->LINK_NAME?></option>
                                    <?php
                                        }
                                    }    
                                    ?>        
                                </select>
                            </div>
                            <input type="file" name="userfile"  class="btn btn-default btn-file" value="<?php echo $row->LINK_NAME;?>"/>
                            <!-- <input type="file" class=" inputClass1" id="inputId1" name="attached_file" value="<?/*php echo $row->LINK_NAME;*/?>" accept="application/pdf"> -->
                            <button name = "submit" type="submit" class="btn btn-lg btn-block btn-primary"  id="button1">upload</button>
                            
                            <style>

                                #button1{
                                    width:100px;
                                    height:30px;
                                    padding-top:1px;
                                    background-color:red;
                                    margin-left:125px;
                                    margin-top:-25px;
                                    color: #024457;
                                }
                                #inputId1{
                                    width:200px;
                                    margin-left:-80px;
                                    margin-top:-40px;
                                    color: #024457;
                                }
                            
                                #selectCategory{
                                    
                                    margin-left:-270px;
                                    margin-top:10px;
                                    color: #024457;
                                }


                            </style>

                        </div>
                    </form>
                    <!-- end of a upload link-->

                    <!-- start of a edit link-->
                   
                    <form action= "<?= base_url("ApplicationForm/viewUploadedFile")?>" method = "post" >
                        <div class="form-group one">
                            <div class="custom-select " style="width:430px; height:50px;">
                                <select name="selectCategory" id="selectDocument">
                                    <option value=""> SELECT DOCUMENT </option>
                                    <?php
                                    if($fetch_data->num_rows()>0){
                                        foreach($fetch_data->result() as $row){
                                    ?>
                                    <option name ="selected_document" value="<?php echo $row->LINK_NAME?>"><?php echo $row->LINK_NAME?></option>
                                    <?php
                                        }
                                    }
                                        
                                    ?>        
                                </select>
                            </div>
                            <button name = "edit" type="submit" class="btn btn-lg btn-block btn-primary"  id="button3">View</button>            
                            <!-- <button name = "edit" type="submit" class="btn btn-lg btn-block btn-primary deleteButton"  id="button4">Delete</button>            
                    -->
                            <style>

                                #button3{
                                    width:120px;
                                    height:30px;
                                    padding-top:1px;
                                    background-color:red;
                                    margin-left:-55px;
                                    margin-top:-45px;
                                    color: #024457;
                                }
                                #button4{
                                    width:120px;
                                    height:30px;
                                    color:#FEFEFE;
                                    padding-top:1px;
                                    background-color:red;
                                    margin-left:105px;
                                    margin-top:-30px;
                                    color: #024457;
                                }
                                #selectDocument{
                                    
                                    margin-left:-270px;
                                    margin-top:10px;
                                    color: #024457;
                                }


                            </style>
                        </div>
                    </form>
 </div><!-- end of the head-->   

                    <!-- end of a edit link-->  


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




<style>

.responstable {
  margin-left:-100px;

  width: 500px;
  overflow: hidden;
  background: #E7FAFE;
  color: #024457;
  border-radius: 10px;
  border: 1px solid #167f92;
}
.responstable tr {
  border: 10px green;
}
.responstable tr:nth-child(odd) {
  background-color: #FEFEFE;
}
.responstable th {
  display: none;
  border: 1px solid #fff;
  background-color: #167f92;
  color: #fff;
  padding: 1em;
}
.responstable th:first-child {
  display: table-cell;
  text-align: center;
}
.responstable th:nth-child(2) {
  display: table-cell;
}
.responstable th:nth-child(2) span {
  display: none;
}
.responstable th:nth-child(2):after {
  content: attr(data-th);
}
@media (min-width: 480px) {
  .responstable th:nth-child(2) span {
    display: block;
  }
  .responstable th:nth-child(2):after {
    display: none;
  }
}
.responstable td {
  display: block;
  word-wrap: break-word;
  max-width: 700px;
  height:5px;
}
.responstable td:first-child {
  display: table-cell;
  text-align: center;
  border-right: 1px solid #d9e4e6;
}
@media (min-width: 480px) {
  .responstable td {
    border: 1px solid #d9e4e6;
  }
}
.responstable th,
.responstable td {
  text-align: left;
  margin: 0.5em 1em;
}
@media (min-width: 480px) {
  .responstable th,
  .responstable td {
    display: table-cell;
    padding: 1em;
  }
}

body {
  padding: 0 2em;
  font-family: Arial, sans-serif;
  color: #024457;
  background: #f2f2f2;
}

h1 {
  font-family: Verdana;
  font-weight: normal;
  color: #024457;
}
h1 span {
  color: #167f92;
}

</style>


