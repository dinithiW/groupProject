<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="<?=base_url('assets/css/ApplicationFormFileUpoload1.css')?>" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-filestyle.min.js"> </script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
 
   
</style>

</head>

<body>
    <div class="container">
    `   <h1 id="headline">ATTACH RELEVANT DOCUMENTS</h1>
        <form class="form-horizontal" role="form" action="process.php" method="post" enctype="multipart/form-data">
        
            <div class="form-group">
                <h3 id="label1">for birth certificate scanned copy</h3>
                <input type="file" class="inputstl" id="selphoto1" name="sentfile">
                <button type="submit" class="btn btn-lg btn-block btn-primary"  id="button1">upload</button>
                
            </div>

            <div class="form-group">
                <h3 id="label2">for NIC scanned copy</h3>
                <input type="file" class="inputst2" id="selphoto2" name="sentfile">
                <button type="submit" class="btn btn-lg btn-block btn-primary"  id="button2">upload</button>
                
            </div>
           
            <div class="form-group">
                <h3 id="label3">for degree certificates</h3>
                <input type="file" class="inputst2" id="selphoto3" name="sentfile">
                <button type="submit" class="btn btn-lg btn-block btn-primary"  id="button3">upload</button>
                
            </div>

            <div class="form-group">
                <h3 id="label4">for curriculum vitae</h3>
                <input type="file" class="inputst2" id="selphoto4" name="sentfile">
                <button type="submit" class="btn btn-lg btn-block btn-primary"  id="button4">upload</button>
                
            </div>

            <div class="form-group">
                <h3 id="label5">for transcript</h3>
                <input type="file" class="inputst2" id="selphoto5" name="sentfile">
                <button type="submit" class="btn btn-lg btn-block btn-primary"  id="button5">upload</button>
                
            </div>
        
            

        </form>

        <form action= "<?= base_url("/index.php/UserLoginController/createAd")?>"  >
            <div class="signup2">
                <input type="submit"id="next" name="signup"class="btn btn-info btn-block" value="SUBMIT"/>
            </div>
        </form>

        <form action= "<?= base_url("/index.php/UserLoginController/loadRegistrationFourthPage")?>" >
            <div class="signup1">
                <input type="submit" id="prev" name="signup" class="btn btn-info btn-block" value="PREV PAGE"/>
            </div>
        </form>

        <form action= "<?= base_url("/index.php/UserLoginController/logout")?>" >
            <div class="signup1">
                <input type="submit" id="logout" name="logout" class="btn btn-info btn-block" value="logout"/>
            </div>
        </form>

    </div>
    
    
    
    <script>
                $('#selphoto').filestyle({
                    buttonName : 'btn-primary',
                    buttonText : ' Upload an Image',
                    iconName : 'glyphicon glyphicon-upload'
                });
    </script>   
</body>
</html>

