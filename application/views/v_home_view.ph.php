<html>
<head>
	<title>Home's View</title>
</head>
<body>

<table id="grid-basic" class="table table-condensed table-hover table-striped">
    <thead>
        <tr>
            <th data-column-id="sender">NPWP</th>
            <th data-column-id="sender">KPP</th>
            <th data-column-id="sender">CAB</th>
            <th data-column-id="sender">NAMA WAJIB PAJAK</th>
            <th data-column-id="sender">KOTA</th>
            <th data-column-id="sender">NILAI DATA</th>
        </tr>
    </thead>
    <tbody>
    	<?php
    	foreach ($semua as $r) {
		?>
        <tr>
            <td><?=$r->npwp;?></td>
            <td><?=$r->kpp;?></td>
            <td><?=$r->cab;?></td>
            <td><?=$r->nama;?></td>
            <td><?=$r->kota;?></td>
            <td><?=$r->nilai_alket;?></td>
        </tr>
        <?php
    	}
    	?>
     </tbody>
</table>

<script type="text/javascript">

$("#grid-basic").bootgrid();

</script>

</body>
</html>