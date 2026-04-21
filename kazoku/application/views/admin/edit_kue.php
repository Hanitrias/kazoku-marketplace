<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT DATA KUE</h3>

    <?php foreach($kue as $kue) :?>

        <form method="post" action="<?php echo base_url().'admin/data_kue/update' ?>">
        <div class="for-group">
            <label> NAMA KUE </label>
            <input type="hidden" name="id_kue" class="form-control" value="<?php echo $kue->id_kue?>">
            <input type="text" name="nama_kue" class="form-control" value="<?php echo $kue->nama_kue?>">
        </div>

        <div class="for-group">
            <label> KETERANGAN </label>
            <input type="text" name="keterangan" class="form-control" value="<?php echo $kue->keterangan?>">
        </div>

        <div class="for-group">
            <label> KATEGORI </label>
            <input type="text" name="kategori" class="form-control" value="<?php echo $kue->kategori?>">
        </div>

        <div class="for-group">
            <label> HARGA </label>
            <input type="text" name="harga" class="form-control" value="<?php echo $kue->harga?>">
        </div>

        <div class="for-group">
            <label> STOK </label>
            <input type="text" name="stok" class="form-control" value="<?php echo $kue->stok?>">
        </div>

        <button type="submit" class="btn btn-primary btn-sm">SIMPAN</button>
    
        </form>

    <?php endforeach; ?>
</div>