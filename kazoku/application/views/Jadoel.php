<div class="container-fluid">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-bs-slide-to="1" ></li>
        <li data-target="#carouselExampleIndicators" data-bs-slide-to="2" ></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo base_url('assets/img/slider1.png')?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo base_url('assets/img/slider2.png')?>" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" hreff="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" hreff="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>

    <div class="row text-center mt-4">

        <?php foreach ($Jadoel as $kue) : ?>

        <div class="card ml-5 mb-3" style="width: 12rem;">
        <img src="<?php echo base_url().'/upload/'.$kue->gambar?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title mb-1"><?php echo $kue->nama_kue?></h5>
            <small><?php echo $kue->keterangan?></small><br>
            <span class="badge badge-pill badge-success mb-3">Rp.<?php echo number_format($kue->harga , 0,',','.') ?></span><br>
            <?php echo anchor('dashboard/tambah_keranjang/'.$kue->id_kue,'<div class="btn btn-sm btn-primary mb-3"><i class="fas fa-solid fa-cart-plus"></i></div>') ?>
            <?php echo anchor('dashboard/detail/'.$kue->id_kue,'<div class="btn btn-sm btn-success mb-3">Detail</div>') ?>
            
        </div>
        </div>

        <?php endforeach; ?>
    </div>
</div> 