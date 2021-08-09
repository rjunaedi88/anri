<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Data Arsip Masuk</h1>
            <div class="row">
            	<div class="col-6">
                    <?php foreach ($arsip as $ars) : ?>
            		<form action="<?php echo site_url('arsip_masuk/edit/'. $ars->id) ?>" method="post">
            			<div class="form-group">
		                  <label>Tanggal pemakaian</label>
	                      <input type="date" class="input-small form-control" name="tanggal_penerimaan" value="<?php echo date('Y-m-d'); ?>">
                          <input type="hidden" name="id" class="form-control" value="<?= $ars->id ?>">
	                      <small class="text-danger"><?php echo form_error('tanggal_penerimaan'); ?></small>
		                </div>
		                <div class="form-group">
            				<label>Provenance</label>
            				<input type="text" name="provenance" class="form-control" value="<?= $ars->provenance?>">	
        					<small class="text-danger"><?php echo form_error('provenance') ?></small>
            			</div>
            			<div class="form-group">
            				<label>No Arsip</label>
            				<input type="text" name="no_arsip" class="form-control" value="<?= $ars->no_arsip?>">	
        					<small class="text-danger"><?php echo form_error('no_arsip') ?></small>
            			</div>
            			<div class="form-group">
            				<label>Jenis Arsip</label>
            				<input type="text" name="jenis_arsip" class="form-control" value="<?= $ars->jenis_arsip?>">	
        					<small class="text-danger"><?php echo form_error('jenis_arsip') ?></small>
            			</div>
            			<div class="form-group">
            				<label>Jumlah Halaman</label>
            				<input type="text" name="jumlah_halaman" class="form-control" value="<?= $ars->jumlah_halaman?>">	
        					<small class="text-danger"><?php echo form_error('jumlah_halaman') ?></small>
            			</div>
            			<div class="form-group">
            				<label>Informasi Arsip</label>
            				<input type="text" name="informasi_arsip" class="form-control" value="<?= $ars->informasi_arsip?>">	
        					<small class="text-danger"><?php echo form_error('informasi_arsip') ?></small>
            			</div>
            			<div class="form-group">
            				<label>Disimpan</label>
            				<input type="text" name="disimpan" class="form-control" value="<?= $ars->disimpan?>">	
        					<small class="text-danger"><?php echo form_error('disimpan') ?></small>
            			</div>
                        <div class="form-group">
                            <label>Dikerjakan</label>
                            <input type="text" name="dikerjakan" class="form-control" value="<?= $ars->dikerjakan?>">   
                            <small class="text-danger"><?php echo form_error('dikerjakan') ?></small>
                        </div>
            			<div class="form-group">
            				<label>Penerima</label>
            				<input type="text" name="penerima" class="form-control" value="<?= $ars->penerima?>">	
        					<small class="text-danger"><?php echo form_error('penerima') ?></small>
            			</div>
            			<div class="form-group">
            				<label>Keterangan</label>
            				<input type="text" name="keterangan" class="form-control" value="<?= $ars->keterangan?>">	
        					<small class="text-danger"><?php echo form_error('keterangan') ?></small>
            			</div>
					    <button class="btn btn-primary my-2" type="submit">Submit form</button>
            		</form>
                <?php endforeach; ?>
            	</div>
            </div>
        </div>
    </main>
</div>