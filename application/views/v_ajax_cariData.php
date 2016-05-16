<!-- <table id="table" class="table-striped" cellspacing="0" width="100%">	 -->
<style type="text/css">
	.kanan{
		text-align: right !important;
	}
	.tengah{
		text-align: center !important;
	}
	.kiri{
		text-align: left !important;
	}
</style>
<table class="highlight bordered">
	<thead class="card-panel teal lighten-1">
		<tr>
			<th class="tengah">NAMA WAJIB PAJAK</th>
			<th class="tengah">N P W P</th>
			<th class="tengah">NILAI</th>
		</tr>	
	</thead>
	<tbody>
		<?php
			foreach($hasil as $r){
			//$total_jumlah+=$r['JUMLAH'];
		?>
		<tr>
			<td align="center"><?=$r['nama'];?></td>
			<td class="tengah"><?=$r['npwp']."-".$r['kpp'].".".$r['cab'];?></td>
			<td class="kanan"><?=number_format($r['nilai_alket'],'0','.',',');?></td>
		</tr>
		<?php
		}
		?>
	</tbody>
</table>