<div class="container-fluid">
    <h4>History Pemesanan</h4>

    <table class="table table-bordered table-hover table-striped">

        <tr>
            <th>NO</th>
            <th>NAMA KUE</th>
            <th>JUMLAH PESANAN</th>
            <th>HARGA SATUAN</th>
            <th>SUB-TOTAL</th>
            <th>NILAI</th>
        </tr>

        <?php
        $no = 1;
        $total = 0;
        foreach($kue as $kue) :
            $subtotal = $kue->jumlah * $kue->harga;
            $total += $subtotal;
        ?>
        
        <tr>
            <td><?php echo $no++?></td>
            <td><?php echo $kue->nama_kue ?></td>
            <td><?php echo $kue->jumlah ?></td>
            <td><?php echo number_format($kue->harga ,0,',','.') ?></td>
            <td><?php echo number_format($subtotal ,0,',','.') ?></td>
            <td align="center"><?php echo anchor('history/nilai/'.$kue->id_kue,'<div class="btn btn-warning btn-sm"><i class="fas fa-star"></i></div>') ?></td>
        </tr>

        <?php endforeach; ?>

       
    </table>
</div>


