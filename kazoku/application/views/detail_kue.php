<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
    .progress-label-left
    {
        float: left;
        margin-right: 0.5em;
        line-height: 1em;
    }

    .progress-label-right
    {
        float: right;
        margin-right: 0.3em;
        line-height: 1em;
    }

    .star-light 
    {
        color:#e9ecef;
    }
</style>
</head>
<div class="container-fluid">

    <div class="card">
        <h5 class="card-header">Detail kue</h5>
        <div class="card-body">

            <?php 
            foreach ((array) $kue as $kue) :
            ?>
            <div class="row">
                <div class="col-md-4"> 
                    <img src="<?php echo base_url(). '/upload/'.$kue->gambar ?> " class="card-img-top">
                </div>
                
                <div class="col-md-8"> 
                    <table class="table">
                        <tr>
                            <td>Nama Kue</td>
                            <td><strong><?php echo $kue->nama_kue?></strong></td>
                        </tr>

                        <tr>
                            <td>Keterangan</td>
                            <td><strong><?php echo $kue->keterangan?></strong></td>
                        </tr>

                        <tr>
                            <td>Kategori</td>
                            <td><strong><?php echo $kue->kategori?></strong></td>
                        </tr>

                        <tr>
                            <td>Stok</td>
                            <td><strong><?php echo $kue->stok?></strong></td>
                        </tr>

                        <tr>
                            <td>Harga</td>
                            <td><strong><div class="btn btn-sm btn-success">Rp.<?php echo number_format($kue->harga, 0,',','.')?></div></strong></td>
                        </tr>
                        

                    </table>
                    <?php echo anchor('dashboard/tambah_keranjang/'.$kue->id_kue,'<div class="btn btn-sm btn-primary mb-3"><i class="fas fa-solid fa-cart-plus"></i></div>') ?>
                    <?php echo anchor('welcome/','<div class="btn btn-sm btn-danger mb-3">Kembali</div>') ?>
                </div>
    
            </div>
            <?php endforeach; ?>
        </div>
    </div>
   
</div>

<div class="container">
    	<div class="card">
    		<div class="card-body">
    			<div class="row">
    				<div class="col-sm-4 text-center">
    					<h1 class="text-warning mt-4 mb-4">
    						<b><span id="average_rating"><?= number_format((float)$rata, 2, '.', ''); ?></span> / 5</b>
    					</h1>
    					<div class="mb-3">
    						<i class="fas fa-star star-light mr-1 main_star
                             <?php 
                            if ($rata>=1){
                                echo "text-warning";
                            } 
                            ?>
                            "></i>
                            <i class="fas fa-star star-light mr-1 main_star 
                            <?php 
                            if ($rata>=2){
                                echo "text-warning";
                            } 
                            ?>
                            "></i>
                            <i class="fas fa-star star-light mr-1 main_star 
                            <?php 
                            if ($rata>=3){
                                echo "text-warning";
                            } 
                            ?>
                            "></i>
                            <i class="fas fa-star star-light mr-1 main_star 
                            <?php 
                            if ($rata>=4){
                                echo "text-warning";
                            } 
                            ?>
                            "></i>
                            <i class="fas fa-star star-light mr-1 main_star 
                            <?php 
                            if ($rata>=5){
                                echo "text-warning";
                            } 
                            ?>
                            "></i>
	    				</div>
    					<h4><span id="total_review"><?= $total ?></span> Review </h4>
    				</div>
    				<div class="col-sm-4">
    					<p>
                            <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>
                            <div class="progress-label-right">(<span id="total_five_star_review"><?= $jml5 ?></span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" style="width:<?=$persen5?>%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                            </div>
                        </p>
    					<p>
                            <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>                        
                            <div class="progress-label-right">(<span id="total_four_star_review"><?= $jml4 ?></span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width:<?=$persen4?>%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>                            
                            <div class="progress-label-right">(<span id="total_three_star_review"><?= $jml3 ?></span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" style="width:<?=$persen3?>%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>                            
                            <div class="progress-label-right">(<span id="total_two_star_review"><?= $jml2 ?></span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" style="width:<?=$persen2?>%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>                           
                            <div class="progress-label-right">(<span id="total_one_star_review"><?= $jml1 ?></span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" style="width:<?=$persen1?>%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                            </div>               
                        </p>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
                        </div>