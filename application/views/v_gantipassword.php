<div class="container-fluid">
    <h3 class="mb-3">GANTI PASSWORD</h3>
    <div class="col-md-6">
    <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "berhasil"){
                echo "<div class='alert alert-success'>Password berhasil di ganti.</div>";
            }
            if($_GET['pesan'] == "gagal"){
                echo "<div class='alert alert-danger'>Password gagal di ganti.</div>";
            }
        }
    ?>

        <form action="<?php echo base_url().'gantipassword/act'?>" method="post">
        
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" id="pass_baru" placeholder="" name="pass_baru">
            <?php echo form_error('pass_baru')?>
        </div>
        <div class="form-group">
            <label>Ulangi Password Baru</label>
            <input type="password" class="form-control" id="ulang_pass" placeholder="" name="ulang_pass">
            <?php echo form_error('ulang_pass')?>
        </div>
            <button class="btn btn-primary btn-danger btn-sm mr-2" type="reset">Reset</button>
            <button class="btn btn-primary btn-sm" type="submit">Simpan</button>
        </form>
    </div>
    
</div>