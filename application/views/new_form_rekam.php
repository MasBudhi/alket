<!--=========== The Form      ============== -->

<div class="row">
    <form class="col s12 form-horizontal" role="form" action="<?php echo base_url();?>index.php/home/simpan" method="post">
    <input name="id" type="hidden" value="<?php echo $idnya;?>"/>
        <div class="row">   
            <div class="input-field col s8">
                <i class="material-icons prefix">looks_one</i>
                <label for="no_sp">Nomor Surat Pengantar</label>
                <input type="text" name="no_sp" class="validate" placeholder="No. SP">
            </div>
            <div class="input-field col s4">
                <i class="material-icons prefix">date_range</i>
                <label for="tgl_sp">Tanggal Surat Pengantar</label>
                <input type="date" name="tgl_sp" class="datepicker">
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <i class="material-icons prefix">call_made</i>
                <label for="kpp_asal">KPP Asal</label>
                <input type="text" name="kpp_asal" class="autocomplete validate">
            </div>
            <div class='input-field col s6'>
                <i class="material-icons prefix">call_received</i>
                <label for="kpp_tujuan">KPP Tujuan</label>
                <input type="text" name="kpp_tujuan" class="autocomplete validate">
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <i class="material-icons prefix">grade</i>
                <label for="id_alket">ID Alat Keterangan</label>
                <input type="text" name="id_alket" class="validate" placeholder="ID Alat Keterangan">
            </div>
            <div class='input-field col s6'>
                <i class="material-icons prefix">local_offer</i>
                <label for="npwp">N P W P</label>
                <input type="text" name="npwp_lengkap"  id="npwp" class="validate" placeholder="N P W P">
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">person_pin</i>
                <label for="nama">Nama</label>
                <input type="text" name="nama"class="validate" placeholder="Nama Wajib Pajak">
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">home</i>
                <label for="alamat">Alamat</label>
                <textarea class="materialize-textarea" name="alamat" rows="3"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">account_balance</i>
                <label for="kota" class="col-sm-3 control-label">Kab./Kota</label>
                <input type="text" name="kota" class="autocomplete_kota form-control input-sm" placeholder="Nama">
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <i class="material-icons prefix">format_list_numbered</i>
                <select name="kode_dokumen">
                    <option value="" disabled selected>Silakan Pilih Jenis Dokumen</option>
                    <?php 
                    foreach($jenis_dok as $row_dok)
                    {
                        ?>
                        <option value="<?=$row_dok->kode_dokumen;?>"><?=$row_dok->nama_dokumen;?></option>
                        <?php
                    }
                    ?>
                </select>
                <label>Jenis Dokumen</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">format_list_numbered</i>
                <select name="kode_data">
                    <option value="" disabled selected>Silakan Pilih Jenis Data</option>
                    <?php
                    foreach($jenis_data as $row_data)
                    {
                        ?>
                        <option value="<?=$row_data->kode_data;?>"><?=$row_data->nama_data;?></option>
                        <?php
                    }
                    ?>
                </select>
                <label>Jenis Data</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <i class="material-icons prefix">date_range</i>
                <label for="tgl_sp">Tanggal Data</label>
                <input type="date" name="tgl_data" class="datepicker">
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">format_list_numbered</i>
                <select name="kwantum">
                    <option value="" disabled selected>Silakan Pilih Quantum</option>
                    <option value="Rupiah">IDR</option>
                    <option value="Dollas AS">USD</option>
                </select>
                <label>Quantum</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <i class="material-icons prefix">local_atm</i>
                <label for="nilai">Nilai</label>
                <input type="text" name="nilai_alket" class="validate" placeholder="Nilai">
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">location_on</i>
                <label for="nilai">Sumber Data</label>
                <input type="text" name="sumber_data" class="validate" placeholder="Sumber Data">
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">comment</i>
                <label for="uraian">Uraian</label>
                <textarea id="uraian" class="materialize-textarea"  name="uraian" rows="5"></textarea>
            </div>
        </div>
        <a href="<?php echo site_url();?>/home/simpan" class="waves-effect waves-light btn"><i class="material-icons right">save</i>Simpan</a>
</div>
</form>
