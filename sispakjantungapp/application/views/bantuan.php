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
                    <h1>
                        <small>Sistem Pakar Deteksi Resiko Jantung Koroner</small>
                    </h1>
                    <p>Sistem dibagi menjadi beberapa bagian yaitu: </p>
                    <ul>
                        <li>Admin</li>
                        <li>Pakar</li>
                        <li>Paramedis</li>
                    </ul>
                    <p>Setiap pengguna telah dibagi dalam masing-masing hak akses.</p>
                    <p><b>Admin</b></p>
                    <ul>
                        <li>Admin dapat melakukan akses terhadap keseluruhan user pengguna sistem.</li>
                        <li>Keseluruhan akses yang diberikan adalah mengenai penambahan, edit, dan hapus data pakar, paramedis maupun admin itu sendiri.</li>
                    </ul>
                    <p><b>Pakar</b></p>
                    <ul>
                        <li>Pakar dapat melakukan akuisi pengetahuan dari sistem.</li>
                        <li>Pakar dapat melakukan manipulasi baik itu tambah,edit,hapus terhadap Rule(keputusan), Diagnosa, Tindakan, Faktor-faktor resiko gejala untuk pengetahuan sistem.</li>
                    </ul>
                    <p><b>Paramedis</b></p>
                    <ul>
                        <li>Paramedis memiliki hak akses terhadap keseluruhan data pasien.</li>
                        <li>Paramedis dapat melakukan diagnosa terhadap pasien Penyakit Jantung Koroner untuk mengetahui seberapa berat tingkat penyakit yang diderita pasien sebelum pasien bertemu langsung dengan dokter ahli.</li>
                        <li>Paramedis dapat meninjau kembali catatan rekam kunjungan seorang pasien dan melakukan perubahan diagnosa mengikuti perkembangan pasien tersebut.</li>
                        <li>Paramedis dapat mencetak hasil diagnosa pasien untuk diberikan kepada pasien yang akan bertemu dengan dokter ahli penyakit Jantung Kororner</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- content ends -->


    <hr>
<?php require('footer.php'); ?>