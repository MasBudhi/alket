<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Manage Data</title>
<script src="<?php echo base_url()?>assets/js/jquery-1.11.1.min.js"></script>
<link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
  body{
    font-family: "Lato",3px;
  }
  th{
      text-align: center;
      vertical-align: middle !important;
  }
    td{
        padding-right:5px !important;
        padding-left:2px !important;
        padding-bottom:0 !important;
        padding-top:4px;

    }
    button.spesial{
        padding-top: 2px !important;
        padding-bottom: 2px !important;
    }
    a.spesial{
        padding-top: 2px !important;
        padding-bottom: 2px !important;
    }
    p{
        font-size: 2em;
    }
</style>
<script type="text/javascript">
  function hapus(aidi)
  {
    window.location="<?php echo base_url();?>index.php/home/hapus_data/"+ aidi;
  }
</script>
<style type="text/css">
  .ndas
  {
    /*background-color: red;*/
  }

  .awak
  {
    /*background-color: #ccffcc;*/
    background-color: #DF0101;
  }

  .sikil
  {
    /*background-color: #ffff66;*/
  }
</style>
</head>
<body>
<?php
  $this->load->view('menu');
?>

<div class="row-fluid" style="margin-top:10px;">
  <div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading"> <b>MANAGE DATA</b></div>
          <div class="panel-body">
            <div class="table-striped">
            <table width="200" border="0" class="table">
              <tr>
                <td><b>No<b/></td>
                <td><b>N P W P<b/></td>
                <td><b>Nama Alket<b/></td>
                <td><b>KPP Alket<b/></td>
                <td align='right'><b>Nilai Alket<b/></td>
                <td><b>Edit<b/></td>
                <td><b>Hapus<b/></td>
              </tr>
              <!--Script view yang dipakai -->
              <?php
                $no = $offset;
                foreach($data as $row ) { 
              ?>
                <tr>
                  <td><?php echo ++$no;?></td>
                  <td><?php echo substr($row->npwp,0,2).".".substr($row->npwp,2,3).".".substr($row->npwp,6,3).
                    ".".substr($row->npwp,8,1)."-".$row->kpp.".".$row->cab; ?></td>
                  <td><?php echo $row->nama; ?></td>
                  <td><?php echo $row->kpp_tujuan; ?></td>
                  <td align='right'><?php echo number_format($row->nilai_alket,0,',','.'); ?></td>
                  <td>
                    <?php echo anchor(base_url().'index.php/home/ubah/'.$row->id,'<i class="glyphicon glyphicon-pencil"></i>',array('class'=>'btn btn-info btn-sm spesial'));?> 
                  </td>
                  <td>
                    <button type="button" class="btn btn-danger btn-sm spesial" data-dismiss="modal" data-toggle='modal' data-target='#Modalku<?=$row->id;?>'><i class="glyphicon glyphicon-trash"></i></button>
                  </td>
                </tr>
                <!-- MODAL -->
                <div class="modal fade" id="Modalku<?=$row->id;?>" role="dialog" tabindex="-1" data-backdrop="false" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                  
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header ndas">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><b>KONFIRMASI PENGHAPUSAN DATA<b/></h4>
                      </div>
                      <div class="modal-body awak">
                        <!-- BODY-->
                        <p>You about to DELETE data with ID : <b><?=$row->id;?></b></p>
                        <p>There will be <b>NO UNDO !</b></p>
                        <p>Are You really sure ?</p>
                        <!--END of BODY-->
                      </div>
                      <div class="modal-footer sikil">
                        <button type="button" class="btn btn-danger" onClick="hapus('<?=$row->id;?>');">Just Do It Right NOW !</button>
                        <button type="button" class="btn btn-info" data-dismiss="modal">Oupps, Sorry I didn't mean It</button>
                      </div>
                    </div>
                    
                  </div>
                </div>
                <!-- END of MODAL -->
              <?php 
              } 
              ?>
            </table>
            </div>
          </div>
        
          <div class="panel-footer" style="height:40px;">
            <!--Memanggil variable pagination-->
            <?php echo $halaman;?> 
          </div>
          
    </div>
  </div>
</div>
</body>
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
</html>