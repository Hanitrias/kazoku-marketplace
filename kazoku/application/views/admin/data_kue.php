<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_kue"><i class="fas fa-plus fa-sm"></i>Tambah Kue</Button>
    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NAMA KUE</th>
            <th>KETERANGAN</th>
            <th>KATEGORI</th>
            <th>HARGA</th>
            <th>STOK</th>
            <th colspan="3">AKSI</th>
        </tr>

        <?php
        $no=1;
        foreach($kue as $kue) : ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $kue->nama_kue ?></td>
            <td><?php echo $kue->keterangan ?></td>
            <td><?php echo $kue->kategori ?></td>
            <td><?php echo $kue->harga ?></td>
            <td><?php echo $kue->stok ?></td>
            <td><?php echo anchor('admin/data_kue/edit/'.$kue->id_kue,'<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
            <td><?php echo anchor('admin/data_kue/hapus/'.$kue->id_kue,'<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
        </tr>

        <?php endforeach; ?>

    </table>
</div>


<!-- Modal -->
<div class="modal fade" id="tambah_kue" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">FORM INPUT DATA KUE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_kue/tambah_aksi';?>" method="post" enctype="multipart/form-data">
        
        <div class="form-group">
            <label> NAMA KUE </label>
            <input type="text" name="nama_kue" class="form-control">
        </div>

        <div class="form-group">
            <label> KETERANGAN </label>
            <input type="text" name="keterangan" class="form-control">
        </div>

        <div class="form-group">
            <label> KATEGORI </label>
            <select class="form-control" name="kategori">
              <option>Spesial Lebaran</option>
              <option>Terbaru</option>
              <option>Jadoel</option>
            </select>
        </div>

        <div class="form-group">
            <label> HARGA </label>
            <input type="text" name="harga" class="form-control">
        </div>

        <div class="form-group">
            <label> STOK </label>
            <input type="text" name="stok" class="form-control">
        </div>

        <div class="form-group">
            <label> GAMBAR </label></br>
            <input type="file" name="gambar" class="form-control">
        </div>
             
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>