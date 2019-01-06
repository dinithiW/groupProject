<!DOCTYPE html>
<html>
<head>
<!-- <link rel="stylesheet" href="<?=base_url('assets/css/alerts/sweetalert.css')?>" type="text/css"/> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

</head>
<body>
<?php echo "<script type=\"text/javascript\">

var sURL = window.document.URL.toString();
var id = sURL.split('/').pop();
var part1 = '../Director/deleteApplicantModel/';
var newURL = part1.concat(id);
var cancelURL = '../Director/approveSelected';
swal({
  title: 'Are you sure?',
  text: 'This user will be deleted permanently',
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: 'red',
  confirmButtonText: 'Yes delete it!'
},
function(isConfirm){
  if (isConfirm) {
    window.location.href = newURL;
  }else{
    window.location.href = cancelURL;
  }
}); 

</script>";

?>

</body>
</html>