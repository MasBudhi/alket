<!doctype html>
<html>
<head>
<title></title>
<script src="<?php echo base_url()?>materialize/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url()?>materialize/js/materialize.min.js"></script>

<script type='text/javascript' src='<?php echo base_url();?>assets/js/jquery.autocomplete.js'></script>
<script type='text/javascript' src='<?php echo base_url();?>assets/jquery.maskedinput.min.js'></script>

<link rel="stylesheet" href="<?php echo base_url()?>materialize/css/materialize.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>materialize/ceesesnya.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/js/jquery.autocomplete.css" />

<script type='text/javascript'>

    var site = "<?php echo site_url();?>";

    $(document).ready(function(){

        $('.autocomplete').autocomplete({
            // serviceUrl berisi URL ke controller/fungsi yang menangani request kita
            serviceUrl: site+'/home/search',
            // fungsi ini akan dijalankan ketika user memilih salah satu hasil request
            // onSelect: function (suggestion) {
            //     $('#v_nim').val(''+suggestion.kode_kpp); // membuat id 'v_nim' untuk ditampilkan
            //     $('#v_jurusan').val(''+suggestion.alamat); // membuat id 'v_jurusan' untuk ditampilkan
            // }
        });

        $('.autocomplete_kota').autocomplete({
            // serviceUrl berisi URL ke controller/fungsi yang menangani request kita
            serviceUrl: site +'/home/search_kota'
        });

        $("#npwp").mask("99.999.999.9-999.999",{placeholder:"_"});

        $('.datepicker').pickadate({
	      selectMonths: true, // Creates a dropdown to control month
	      selectYears: 15 // Creates a dropdown of 15 years to control year
	    })

	    $('select').material_select();

    });

</script>

</head>
<body>