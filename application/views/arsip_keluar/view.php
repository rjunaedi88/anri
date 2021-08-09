<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Arsip Masuk</h1>
            <?php
                    if($this->session->flashdata('alert')){
                      echo $this->session->flashdata('alert');
                    }
                  ?>
            
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                     Data
                </div>
                <div class="card-body">

                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                              <th>No</th>
                              <th>No Arsip</th>
                              <th>Jenis Arsip</th>
                              <th>Jumlah Halaman</th>
                              <th>Dikerjakan oleh</th>
                              <th>Tanggal Penyerahan</th>
                              <th>Keterangan</th>
                              <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <tr>
                                  <th>No</th>
	                              <th>No Arsip</th>
	                              <th>Jenis Arsip</th>
	                              <th>Jumlah Halaman</th>
	                              <th>Dikerjakan oleh</th>
	                              <th>Tanggal Penyerahan</th>
	                              <th>Keterangan</th>
	                              <th>Aksi</th>
                                </tr>
                            </tr>
                        </tfoot>
                        <tbody>
                           <tr>
                            <?php 
                            $no = 1;
                            foreach ($data as $d) : ?>
                              <td><?php echo $no++; ?></td>
                              <td><?php echo $d->no_arsip_keluar; ?></td>
                              <td><?php echo $d->jenis_arsip_keluar; ?></td>
                              <td><?php echo $d->jml_hlm_keluar; ?></td>
                              <td><?php echo $d->dikerjakan_oleh; ?></td>
                              <td><?php echo $d->tgl_penyerahan; ?></td>
                              <td><?php echo $d->keterangan_keluar; ?></td>
                              <td>
                                <a href="<?php echo site_url('arsip_keluar/edit/'.$d->id_keluar) ?>" ><i class="fa fa-edit"></i></a> | 
                                <a href="<?php echo site_url('arsip_keluar/hapus/'.$d->id_keluar) ?>"onclick="return confirm('Yakin ingin hapus ?')"><i class="fa fa-trash"></i></a>
                              </td>
                          </tr>
                          <?php endforeach; ?>
                        </tbody>
                    </table>
                    <a href="<?php echo site_url('arsip_keluar/input_data') ?>" class="btn btn-sm btn-primary my-3">Input Data Baru</a>
                </div>
            </div>
        </div>
    </main>
</div>