<div class="container-fluid">
    <h4>Detail Pemesanan <div class="btn btn-sm btn-success">No. Invoice: <?php echo $invoice->id_invoice ?></div></h4>

    <table class="table table-bordered table-hover table-striped">

        <tr>
            <th>NO</th>
            <th>NAMA KUE</th>
            <th>JUMLAH PESANAN</th>
            <th>HARGA SATUAN</th>
            <th>SUB-TOTAL</th>
            <th>BUKTI</th>
        </tr>

        <?php
        $total = 0;
        foreach($pemesanan as $psn) :
            $subtotal = $psn->jumlah * $psn->harga;
            $total += $subtotal;
        ?>
        
        <tr>
            <td><?php echo $psn->id_kue ?></td>
            <td><?php echo $psn->nama_kue ?></td>
            <td><?php echo $psn->jumlah ?></td>
            <td><?php echo number_format($psn->harga ,0,',','.') ?></td>
            <td><?php echo number_format($subtotal ,0,',','.') ?></td>
            <td><a href="<?php echo base_url('./upload/').$psn->bukti?>"><?php echo $psn->bukti?></a></td>
            
        </tr>

        <?php endforeach; ?>

        <tr>
            <td colspan="5" align="right">Grand Total</td>
            <td align="right">Rp. <?php echo number_format($total,0,',','.') ?></td>
        </tr>

    </table> 

   <div align="left">
        <a href="<?php echo base_url('admin/invoice/index') ?>">
            <div class="btn btn-sm btn-primary"> Kembali </div>
        </a>
    </div>

   
</div>