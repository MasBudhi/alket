<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data Alket</title>
<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
<script src="<?php echo base_url()?>assets/js/jquery-2.1.4.min.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<style type="text/css">
  .ndas
  {
    background-color: #DFDFDF;
  }

  .awak
  {
    height: 430px;
    background-color: #ccffcc;
  }

  .sikil
  {
    background-color: #DFDFDF;
  }
</style>
</head>
<body>
<?php
$this->load->view('menu');
echo $this->session->flashdata('message');
?>
<div class="row-fluid" style="margin-top:10px;">
  <div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading"><b>DATA ALAT KETERANGAN</b><i> (order by ID Desc)</i><p><?php echo "Jumlah data : ".$jumlah_record;?></p></div>
          <div class="panel-body">
            <div>
            <table width="200" border="0" class="table">
              <tr>
                <td><b>No<b/></td>
                <td><b>N P W P<b/></td>
                <td><b>Nama Alket<b/></td>
                <td align='left'><b>KPP Penerima<b/></td>
                <td align='center'><b>Detail<b/></td>
              </tr>
              <!--Script view yang dipakai -->
              <?php
                $no = $offset;
                foreach($data as $row){ 
              ?>
                <tr>
                    <td><?php echo ++$no;?></td>
                    <td><?php echo substr($row->npwp,0,2).".".substr($row->npwp,2,3).".".substr($row->npwp,6,3).".".substr($row->npwp,8,1)."-".$row->kpp.".".$row->cab; ?></td>
                    <td><?php echo $row->nama; ?></td>
                    <td><?php echo $row->kpp_tujuan; ?></td>
                    <td align='center'>
                    <button type="button" class="btn btn-info btn-sm" data-dismiss="modal" data-toggle='modal' data-target='#Modalku<?php echo $row->id;?>'><i class="glyphicon glyphicon-list"></i></button>
                    </td>
                </tr>
                <!-- MODAL -->
                <div class="modal fade" id="Modalku<?php echo $row->id;?>" role="dialog" tabindex="-1" data-backdrop="false" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                  
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header ndas">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><b>No SP : <?php echo $row->no_sp; ?><b/></h4>
                      </div>
                      <div class="modal-body awak">
                        <!-- BODY-->
                        <div class="form-group"> 
                          <label for="lastname" class="col-sm-3 control-label">Nama Alket</label> 
                          <div class="col-sm-9"> 
                            <p class="text-info"><?php echo $row->nama; ?></p>
                          </div> 
                        </div>
                        <div class="form-group"> 
                          <label for="lastname" class="col-sm-3 control-label">NPWP</label> 
                          <div class="col-sm-9" id="npwp"> 
                            <p class="text-info">
                              <?php echo substr($row->npwp,0,2).".".substr($row->npwp,2,3).".".substr($row->npwp,6,3).".".substr($row->npwp,8,1)."-".$row->kpp.".".$row->cab; ?>
                            </p>
                          </div> 
                        </div>
                        <div class="form-group"> 
                          <label for="lastname" class="col-sm-3 control-label">Tgl SP</label> 
                          <div class="col-sm-9"> 
                            <p class="text-info">
                              <?php echo $row->tgl_sp; ?>
                            </p>
                          </div> 
                        </div>
                        <div class="form-group"> 
                          <label for="lastname" class="col-sm-3 control-label">KPP Pengirim</label> 
                          <div class="col-sm-9"> 
                            <p class="text-info">
                              <?php echo $row->kpp_asal; ?>
                            </p>
                          </div> 
                        </div>
                        <div class="form-group"> 
                          <label for="lastname" class="col-sm-3 control-label">KPP Tujuan</label> 
                          <div class="col-sm-9"> 
                            <p class="text-info">
                              <?php echo $row->kpp_tujuan; ?>
                            </p>
                          </div> 
                        </div>
                        <div class="form-group"> 
                          <label for="lastname" class="col-sm-3 control-label">ID Alket</label> 
                          <div class="col-sm-9"> 
                            <p class="text-info">
                              <?php echo $row->id_alket; ?>
                            </p>
                          </div> 
                        </div>
                        <div class="form-group"> 
                          <label for="lastname" class="col-sm-3 control-label">Alamat Alket</label> 
                          <div class="col-sm-9"> 
                            <p class="text-info">
                              <?php echo $row->alamat; ?>
                            </p>
                          </div> 
                        </div>
                        <div class="form-group"> 
                          <label for="lastname" class="col-sm-3 control-label">Kota Alket</label> 
                          <div class="col-sm-9"> 
                            <p class="text-info">
                              <?php echo $row->kota; ?>
                            </p>
                          </div> 
                        </div>
                        <div class="form-group"> 
                          <label for="lastname" class="col-sm-3 control-label">Nilai Alket</label> 
                          <div class="col-sm-9"> 
                            <p class="text-info">
                              <?php echo "Rp. ".number_format($row->nilai_alket,'0',',','.'); ?>
                            </p>
                          </div> 
                        </div>
                        <div class="form-group"> 
                          <label for="lastname" class="col-sm-3 control-label">Uraian</label> 
                          <div class="col-sm-9"> 
                            <p class="text-info">
                              <?php echo $row->uraian; ?>
                            </p>
                          </div> 
                        </div>
                        <hr/>
                        <!--END of BODY-->
                      </div>
                      <div class="modal-footer sikil">
                        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">OK</button>
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
          <?php echo $halaman;?> <!--Memanggil variable pagination-->
          </div>
          <?php
          
          ?>
    </div>
  </div>
</div>

<button id="tes"> Tes </button>

<script type="text/javascript">

    var hasiltes ='<?php echo base_url();?>'

    $(document).ready(function(){
        $("#tes").click(function(){
            alert("Base_URL : " + hasiltes)
        })
    })
</script>

</body>
</html>