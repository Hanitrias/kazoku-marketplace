<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>Review & Rating Produk Kue</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container-fluid">

    <div class="card">
        <h5 class="card-header">BERI RATING KUE</h5>
        <div class="card-body">

            <?php foreach($kue as $kue): ?>
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
    				<div class="col-sm-4 text-center">
    					<h4 class="mt-4 mb-3">Beri Rating Kue</h4>
    					<button type="button" name="add_review" id="add_review" class="btn btn-primary">Review </button>
    				</div>
    			</div>
    		</div>
    	</div>
    	<div class="mt-3" id="review_content"></div>
    </div>
</body>
</html>

<div id="review_modal" class="modal" tabindex="-1" role="dialog">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title">Masukan Rating</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	        	</button>
	      	</div>
	      	<div class="modal-body">
	      		<h4 class="text-center mt-2 mb-4">
	        		<i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
	        	</h4>
	        	<div class="form-group">
	        		<input type="text" name="username" id="username" class="form-control" placeholder="Masukan Nama Anda" />
	        	</div>
	        	<div class="form-group">
	        		<textarea name="review" id="review" class="form-control" placeholder="Masukan Review"></textarea>
	        	</div>
	        	<div class="form-group text-center mt-4">
	        		<button type="button" class="btn btn-primary" id="save_review">Submit</button>
	        	</div>
	      	</div>
    	</div>
  	</div>
</div>

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

<script>
    $(document).ready(function(){
        var rating_data = 0;
    $('#add_review').click(function(){
        $('#review_modal').modal('show');

    });

    $(document).on('mouseenter', '.submit_star', function(){
        var rating = $(this).data('rating');
        reset_background();
        for(var count = 1; count <= rating; count++)
        {
            $('#submit_star_'+count).addClass('text-warning');
        }
    });

    function reset_background()
    {
        for(var count = 1; count <= 5; count++)
        {
            $('#submit_star_'+count).addClass('star-light');
            $('#submit_star_'+count).removeClass('text-warning');
        }
    }

    $(document).on('mouseleave', '.submit_star', function(){
        reset_background();
        for(var count = 1; count <= rating_data; count++)
        {
            $('#submit_star_'+count).removeClass('star-light');
            $('#submit_star_'+count).addClass('text-warning');
        }

    });

    $(document).on('click', '.submit_star', function(){
        rating_data = $(this).data('rating');
    });

    $('#save_review').click(function(){
        var username = $('#username').val();
        var review = $('#review').val();
        if(username == '' || review == '')
        {
            alert("Please Fill Both Field");
            return false;
        }
        else
        {
            $.ajax({
                url:"<?php echo base_url('history/rating')?>",
                method:"POST",
                data:{rating_data:rating_data, username:username, review:review},
                success:function(data)
                {
                    // console.log(data);die;
                    $('#review_modal').modal('hide');
                    load_rating_data();
                    window.location.reload();
                    // alert(data);
                }
            })
        }

    });

    load_rating_data();

    function load_rating_data()
    {
        $.ajax({
            url:"<?php echo base_url('history/rating')?>",
            method:"POST",
            data:{action:'load_data'},
            dataType:"JSON",
            success:function(data)
            {
                // console.log(data)
                $('#average_rating').text(data.average_rating);
                $('#total_review').text(data.total_review);

                var count_star = 0;

                $('.main_star').each(function(){
                    count_star++;
                    if(Math.ceil(data.average_rating) >= count_star)
                    {
                        $(this).addClass('text-warning');
                        $(this).addClass('star-light');
                    }
                });

                $('#total_five_star_review').text(data.five_star_review);
                $('#total_four_star_review').text(data.four_star_review);
                $('#total_three_star_review').text(data.three_star_review);
                $('#total_two_star_review').text(data.two_star_review);
                $('#total_one_star_review').text(data.one_star_review);

                $('#five_star_progress').css('width', (data.five_star_review/data.total_review) * 100 + '%');
                $('#four_star_progress').css('width', (data.four_star_review/data.total_review) * 100 + '%');
                $('#three_star_progress').css('width', (data.three_star_review/data.total_review) * 100 + '%');
                $('#two_star_progress').css('width', (data.two_star_review/data.total_review) * 100 + '%');
                $('#one_star_progress').css('width', (data.one_star_review/data.total_review) * 100 + '%');

                if(data.review_data.length > 0)
                {
                    var html = '';

                    for(var count = 0; count < data.review_data.length; count++)
                    {
                        html += '<div class="row mb-3">';
                        html += '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center">'+data.review_data[count].username.charAt(0)+'</h3></div></div>';
                        html += '<div class="col-sm-11">';
                        html += '<div class="card">';
                        html += '<div class="card-header"><b>'+data.review_data[count].username+'</b></div>';
                        html += '<div class="card-body">';

                        for(var star = 1; star <= 5; star++)
                        {
                            var class_name = '';
                            if(data.review_data[count].rating >= star)
                            {
                                class_name = 'text-warning';
                            }
                            else
                            {
                                class_name = 'star-light';
                            }

                            html += '<i class="fas fa-star '+class_name+' mr-1"></i>';
                        }

                        html += '<br />';
                        html += data.review_data[count].review;
                        html += '</div>';
                        html += '<div class="card-footer text-right">On '+data.review_data[count].datetime+'</div>';
                        html += '</div>';
                        html += '</div>';
                        html += '</div>';
                    }

                    $('#review_content').html(html);
                }
            }
        })
    }


});
</script>