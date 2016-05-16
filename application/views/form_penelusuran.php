<!doctype html>
<html>
<head>
<title>Tambah Data</title>
<script src="<?php echo base_url()?>assets/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url()?>materialize/js/materialize.min.js"></script>
<!--<script src="<?php// echo base_url()?>assets/js/bootstrap.min.js"></script>
<script type='text/javascript' src='<?php// echo base_url();?>assets/js/jquery.autocomplete.js'></script>-->

<link rel="stylesheet" href="<?php echo base_url()?>materialize/css/materialize.min.css">
<!--<link href="<?php// echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?php// echo base_url();?>assets/js/jquery.autocomplete.css" rel="stylesheet"/>
<link href="<?php// echo base_url()?>assets/date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen"> -->
<script type="text/javascript">
    $(document).ready(function(){

        $("#nama").keyup(function(){
            var theSite='<?php echo base_url();?>'
            var theNama=$("#nama").val()

            if(theNama.length > 0){
                $.ajax({
                    type: "GET",
                    url: theSite+"index.php/home/ajax_cariData/"+theNama,
                }).done(function(res){
                    $("#tempat_hasil").html(res)
                })
            }else{
                alert("Kata kunci harus diisi !")
            }
        })
    })
</script>

</head>
<body>
<?php
  $this->load->view('menu');
?>
<div class="container">
    <div class="row">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><b>PENELUSURAN DATA</b></h3>
            </div>
            <div class="panel-body">
            
    <div class="col-sm-8 col-lg-8">   
        <div class="form-group">
            <label for="nama" class="col-sm-4 control-label">Nama Dalam Alat Keterangan</label>
            <div class="col-sm-8">
                <input type="text" name="nama" id="nama" class="form-control input-sm"/>
            </div>
        </div>
    </div>

<div class="col-sm-12 col-lg-12" id="tempat_hasil">   
</div>

            </div>
        </div>        
    </div>
</div>
</body>
</html>