<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data Alket</title>
<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/bootgrid/jquery.bootgrid.min.css" rel="stylesheet">
<script src="<?php echo base_url()?>assets/js/jquery-2.1.4.min.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/bootgrid/jquery.bootgrid.min.js"></script>

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
    <table id="grid-basic" class="table table-condensed table-hover table-striped">
      <thead>
          <tr>
              <!-- <th data-column-id="id" data-type="numeric">ID</th>
              <th data-column-id="sender">Sender</th>
              <th data-column-id="received" data-order="desc">Received</th> -->
              <td><b>No<b/></td>
              <td><b>N P W P<b/></td>
              <td><b>Nama Alket<b/></td>
              <td align='left'><b>KPP Penerima<b/></td>
              <td align='center'><b>Detail<b/></td>
          </tr>
      </thead>
      <tbody>
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
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</div>

</body>

<script type="text/javascript">
  $("#grid-basic").bootgrid();
</script>

</html>