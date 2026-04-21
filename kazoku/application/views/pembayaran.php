<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php 
                $grand_total = 0;
                if($keranjang = $this->cart->contents())
                {
                    foreach ($keranjang as $item)
                    {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                echo "<h4> Total Belanja : Rp. ".number_format($grand_total,0,',','.'); 
                
                ?>
            </div><br><br>
            <h3>Input Alamat Pengiriman Barang</h3>
            <br>

            <div class="modal-body">
                <?php echo form_open_multipart('dashboard/proses_pemesanan'); ?>
            
                    <div class="form-group">
                        <label> NAMA LENGKAP </label>
                        <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                    </div>

                    <div class="form-group">
                        <label> ALAMAT LENGKAP </label>
                        <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                    </div>

                    <div class="form-group">
                        <label> NO. TELEPON </label>
                        <input type="text" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control">
                    </div>

                    <div class="form-group">
                        <label> JASA PENGIRIMAN </label>
                        <select class="form-control">
                            <option>JNE</option>
                            <option>JNT</option>
                            <option>SICEPAT</option>
                            <option>TIKI</option>
                            <option>POS INDONESIA</option>
                            <option>GOJEK</option>
                            <option>GRAB</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>METODE PEMBAYARAN</label>
                        <select class="form-control">
                            <option>Bayar Ditempat</option>
                            <option>Transfer Rekening</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>NOMOR REKENING</label>
                        <input type="text" name="no_rek" placeholder="Nomor Rekening Anda" class="form-control">
                    </div>

                <div>
                <label class="form-label" for="customFile">BUKTI PEMBAYARAN</label>
                <input type="file" name="bukti" id="bukti" class="form-control">
                </div>  

                <br>

                    <button type="submit" class="btn btn-sm btn-primary mb-3">PESAN</button>
            
                <?php echo form_close(); ?>
         </div>
           
            <?php
            } else
            {
                echo "<h5>Keranjang Belanja Anda Masih Kosong </h5>";
                
            }
            ?>

        </div>
        
        <div class="col-md-2"></div>
    </div>
</div>