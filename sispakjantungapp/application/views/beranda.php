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
                        <a href="#">Beranda</a>
                    </li>
                </ul>
            </div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Introduction</h2>

                <div class="box-icon">
                </div>
            </div>
            <div class="box-content row">
                <div class="col-md-12">
                    <h1>Selamat Datang !<br>
                        <small>Sistem Pakar Pendeteksi Resiko Penyakit Jantung Koroner dengan Metode Dempster-Shafer</small>
                    </h1>
                    <p>
                        Sistem ini merupakan media konsultasi dan monitoring terhadap penyakit jantung koroner seseorang sehingga
                        dapat meminimalkan terjadinya serangan jantung terhadap seseorang yang menyebabkan kematian. Sistem pakar
                        ini juga berfungsi sebagai asisten bagi pakar dalam memberikan keputusan.
                    </p>
                    <p>
                        Sistem ini dirancang dan dibangun untuk membantu paramedis dalam menganalisa tingkat resiko penyakit jantung koroner seseorang pasien. Proses analisa / diagnosa penyakit Jantung Koroner menggunakan metode <i>Dempster-Shafer</i> dengan pengetahuan pakar yang akan menghasilkan nilai ketidakpastian dalam mencari kemungkinan faktor-faktor resiko dan gejala yang akan mempengaruhi tingkat resiko penyakit jantung koroner seseorang.
                    </p>
                    <p>
                        Pakar utama yang dilibatkan pada sistem ini sebagai acuan adalah 
                        <ul>
                            <li>
                                <b>Dr. Hariadi H, SpPD, SpJP (K)</b> dari RS. Dr. Sardjito Yogyakarta
                            </li>
                            <li>
                                <b>Dr. Budi Yuli, SpPD, SpJp (K)</b> dari RS. Dr. Sardjito Yogyakarta
                            </li>
                        </ul>
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- content ends -->


    <hr>
<?php require('footer.php'); ?>