<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Data Arsip Keluar</h1>
            <div class="row">
            	<div class="col-6">
                    <?php foreach ($arsip as $ars) : ?>
            		<form action="<?php echo site_url('arsip_keluar/edit/'. $ars->id_keluar) ?>" method="post">
            			<div class="form-group">
                            <label>No Arsip</label>
                            <input type="text" name="no_arsip_keluar" class="form-control" value="<?= $ars->no_arsip_keluar?>"> 
                            <input type="hidden" name="id_keluar" class="form-control" value="<?= $ars->id_keluar ?>">
                            <small class="text-danger"><?php echo form_error('no_arsip_keluar') ?></small>
                        </div>
                        <div class="form-group">
                            <label>Jenis Arsip</label>
                            <input type="text" name="jenis_arsip_keluar" class="form-control" value="<?= $ars->jenis_arsip_keluar?>"> 
                            <small class="text-danger"><?php echo form_error('jenis_arsip_keluar') ?></small>
                        </div>
                        <div class="form-group">
                            <label>Jumlah Halaman</label>
                            <input type="text" name="jml_hlm_keluar" class="form-control" value="<?= $ars->jml_hlm_keluar?>"> 
                            <small class="text-danger"><?php echo form_error('jml_hlm_keluar') ?></small>
                        </div>
                        <div class="form-group">
                            <label>Dikerjakan Oleh</label>
                            <input type="text" name="dikerjakan_oleh" class="form-control" value="<?= $ars->dikerjakan_oleh?>"> 
                            <small class="text-danger"><?php echo form_error('dikerjakan_oleh') ?></small>
                        </div>
                        <div class="form-group">
                          <label>Tanggal Penyerahan</label>
                          <input type="date" class="input-small form-control" name="tgl_penyerahan" value="<?php echo date('Y-m-d'); ?>">
                          <small class="text-danger"><?php echo form_error('tgl_penyerahan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" name="keterangan_keluar" class="form-control" value="<?= $ars->keterangan_keluar?>"> 
                            <small class="text-danger"><?php echo form_error('keterangan_keluar') ?></small>
                        </div>
                        
                        <button class="btn btn-primary my-2" type="submit">Submit form</button>
            		</form>
                <?php endforeach; ?>
            	</div>
            </div>
        </div>
    </main>
</div>