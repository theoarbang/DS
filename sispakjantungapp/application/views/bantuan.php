<?php 
if ($this->session->userdata('level')==1) {
    require('header_admin.php'); 
} else if ($this->session->userdata('level')==2){
    require('header_pakar.php'); 
}else{
    require('header_paramedis.php'); 
}
?>
<div id="content" class="col-lg-10 col-sm-10">
<!-- content starts -->
            <div>
                <ul class="breadcrumb">
                    <li>
                        <a href="beranda.php">Beranda</a>
                    </li>
                    <li>
                        <a href="#">Bantuan</a>
                    </li>
                </ul>
            </div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Bantuan Sistem</h2>

                <div class="box-icon">
                </div>
            </div>
            <div class="box-content row">
                <div class="col-md-12">
                    <h1>Halaman Bantuan Sistem <br>
                        <small>Sistem Pakar Deteksi Resiko Jantung Koroner</small>
                    </h1>
                    <p>BlaBlaBlaBlaBlaBlaBlaBlaBlaBla</p>

                    <p><b>BlaBlaBlaBlaBlaBlaBlaBlaBla</b></p>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- content ends -->


    <hr>
<?php require('footer.php'); ?>