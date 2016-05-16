<!doctype html>
<html>
<head>
<title>Edit Data</title>
<script src="<?php echo base_url()?>assets/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<script type='text/javascript' src='<?php echo base_url();?>assets/js/jquery.autocomplete.js'></script>
<script type='text/javascript' src='<?php echo base_url();?>assets/date_picker_bootstrap/'></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/date_picker_bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/date_picker_bootstrap/js/locales/bootstrap-datetimepicker.id.js"charset="UTF-8"></script>
<script type='text/javascript' src='<?php echo base_url();?>assets/jquery.maskedinput.min.js'></script>
<script type='text/javascript' src='<?php echo base_url();?>autoNumeric-min.js'></script>

<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?php echo base_url();?>assets/js/jquery.autocomplete.css" rel="stylesheet"/>
<link href="<?php echo base_url()?>assets/date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

    <script type='text/javascript'>
        var site = "<?php echo site_url();?>";
        $(function(){

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
                serviceUrl: site+'/home/search_kota'
            });
        

            $('.datepicker').datetimepicker({
                language:  'id',
                weekStart: 1,
                todayBtn:  1,
                autoclose: 1,
                todayHighlight: 1,
                startView: 2,
                minView: 2,
                forceParse: 0
            });

            $("#npwp").mask("99.999.999.9-999.999",{placeholder:"_"});

            $(".numeric").autoNumeric({aSep: ".", aDec: ","});
        });
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
                <h3 class="panel-title"><b>EDIT DATA</b></h3>
            </div>
            <div class="panel-body">
            <!--=========== The Form      ============== -->

<form class="form-horizontal" role="form" method="post" action="<?php echo base_url();?>index.php/home/simpan_ubahan/<?=$id;?>"> 
<?php 
foreach ($hasil as $baris) {
?>    
    <div class="col-sm-6 col-lg-6">   
        <div class="form-group">
            <label for="no_sp" class="col-sm-3 control-label">No. SP</label>
            <div class="col-sm-8">
                <input type="text" name="no_sp" class="form-control input-sm" placeholder="No. SP" value="<?=$baris->no_sp;?>">
            </div>
        </div>
        <div class="form-group">
            <label for="tgl_sp" class="col-sm-3 control-label">Tgl SP</label>
            <div class="col-sm-8">
                <input type="text" name="tgl_sp" class="form-control datepicker input-sm" placeholder="Tgl SP" value="<?=$baris->tgl_sp;?>">
            </div>
        </div>
        <div class="form-group">
            <label for="kpp_asal" class="col-sm-3 control-label">KPP Asal</label>
            <div class="col-sm-8">
                <input type="text" name="kpp_asal" class="autocomplete form-control input-sm" value="<?=$baris->kpp_asal;?>">
            </div>
        </div>
        <div class="form-group">
            <label for="kpp_tujuan" class="col-sm-3 control-label">KPP Tujuan</label>
            <div class="col-sm-8">
                <input type="text" name="kpp_tujuan" class="autocomplete form-control input-sm" value="<?=$baris->kpp_tujuan;?>">
            </div>
        </div>
        <div class="form-group">
            <label for="id_alket" class="col-sm-3 control-label">ID Alket</label>
            <div class="col-sm-8">
                <input type="text" name="id_alket" class="form-control input-sm" placeholder="ID Alket" value="<?=$baris->id_alket;?>">
            </div>
        </div>
        <div class="form-group">
            <label for="npwp" class="col-sm-3 control-label">NPWP</label>
            <div class="col-sm-8">
                <input type="text" name="npwp_lengkap"  id="npwp" class="form-control input-sm" value="<?=$baris->npwp.$baris->kpp.$baris->cab?>">
            </div>
        </div>
        <div class="form-group">
            <label for="nama" class="col-sm-3 control-label">Nama</label>
            <div class="col-sm-8">
                <input type="text" name="nama"class="form-control input-sm" placeholder="Nama" value="<?=$baris->nama;?>">
            </div>
        </div>
        <div class="form-group">
            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
            <div class="col-sm-8">
                <textarea class="form-control" name="alamat" rows="3"><?=$baris->alamat;?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="kota" class="col-sm-3 control-label">Kab./Kota</label>
            <div class="col-sm-8">
                <input type="text" name="kota" class="autocomplete_kota form-control input-sm" value="<?=$baris->kota;?>">
            </div>
        </div>
    </div>



    <div class="col-sm-6 col-lg-6">   
        <div class="form-group">
            <label for="dok_alket" class="col-sm-3 control-label">Jenis Dokumen</label>
            <div class="col-sm-8">
                <div >
                    <select class="form-control" class="form-group" name="kode_dokumen">
                        <option>Silahkan Pilih</option>
                        <?php 
                        foreach($jenis_dok as $row_dok)
                        {
                            ?>
                            <option value="<?=$row_dok->kode_dokumen;?>"><?=$row_dok->nama_dokumen;?></option>
                            <?php
                        }
                        ?>
                        <option value="<?=$row_dok->kode_dokumen;?>" selected>Data Tidak Berubah</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="jenis_data" class="col-sm-3 control-label">Jenis Data</label>
            <div class="col-sm-8">
                <div >
                    <select class="form-control" name="kode_data">
                        <option>Silahkan Pilih</option>
                        <?php
                        foreach($jenis_data as $row_data)
                        {
                            ?>
                            <option value="<?=$row_data->kode_data;?>"><?=$row_data->nama_data;?></option>
                            <?php
                        }
                        ?>
                        <option value="<?=$row_data->kode_data;?>" selected>Data Tidak Berubah</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="tgl_data" class="col-sm-3 control-label">Tgl Data</label>
            <div class="col-sm-8">
                <input type="text" name="tgl_data"class="form-control datepicker input-sm" placeholder="Tgl Data" value="<?=$baris->tgl_data;?>">
            </div>
        </div>
        <div class="form-group">
            <label for="kwantum" class="col-sm-3 control-label">Kwantum</label>
            <div class="col-sm-8">
                <select class="form-control" class="form-group" name="kwantum">
                    <option value="Rupiah">IDR</option>
                    <option value="Dollas AS">USD</option>
                    <option value="<?=$baris->kwantum;?>" selected>Data Tidak Berubah</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="nilai" class="col-sm-3 control-label">Nilai</label>
            <div class="col-sm-8">
                <input type="text" name="nilai_alket" class="numeric form-control input-sm" placeholder="Nilai" value="<?=$baris->nilai_alket;?>">
            </div>
        </div>
        <div class="form-group">
            <label for="uraian" class="col-sm-3 control-label">Uraian</label>
            <div class="col-sm-8">
                <textarea class="form-control" name="uraian" rows="5"><?=$baris->uraian;?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="sumber" class="col-sm-3 control-label">Sumber</label>
            <div class="col-sm-8">
                <input type="text" name="sumber_data" class="form-control input-sm" placeholder="Sumber Data" value="<?=$baris->sumber_data;?>">
            </div>
        </div>
    </div>
<?php
}
?>

<div class="col-sm-6 col-lg-6">   
    <div class="form-group"> 
        <label></label> 
        <div class="col-sm-3"> 
            <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"> Simpan</i></button>
        </div> 
    </div>
</div>

</form>
            <!--========================================== -->  
            </div>
        </div>        
    </div>
</div>
</body>
</html>