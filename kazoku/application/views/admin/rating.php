<div class ="container-fluid">
    <h4>Rating Produk</h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>No</th>
            <th>USERNAME</th>
            <th>RATING</th>
            <th>REVIEW</th>
            <th>TANGGAL</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($rating as $rate): ?>
        <tr>
            <td><?php echo $rate->id_review ?></td>
            <td><?php echo $rate->username ?></td>
            <td><?php echo $rate->rating ?></td>
            <td><?php echo $rate->review ?></td>
            <td><?php echo $rate->tanggal ?></td>
            <td><?php echo anchor('admin/rating/hapus/'.$rate->id_review,'<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
        </tr>

        <?php endforeach; ?>

</div>

