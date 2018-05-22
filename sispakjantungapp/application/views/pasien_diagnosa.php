<?php require('header2.php'); ?>

<div id="content" class="col-lg-10 col-sm-10">
<!-- content starts -->
            <div>
                <ul class="breadcrumb">
                    <li>
                        <a href="beranda.php">Beranda</a>
                    </li>
                    <li>
                        <a href="pasien.php">Daftar Pasien</a>
                    </li>
                    <li>
                        <a href="#">Diagnosa Pasien</a>
                    </li>
                </ul>
            </div>

<div class="row">
    
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-folder-open"></i>Diagnosa Pasien</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content row">
                <div class="box-content col-md-6">
                <form role="form">
                    <input type="hidden" placeholder="">
                    <div class="form-group">
                        <label>Nama Pasien</label>
                        <input type="text" class="form-control" placeholder="Nama Pasien" value="<?php echo $dataedit[0]->nama_pasien?>" disabled>
                    </div>
                    <div class="form-group">
                        <label>Usia Pasien</label>
                        <input type="text" class="form-control" placeholder="Usia Pasien" value="<?php echo $umur ?>" disabled>
                    </div>

                    <div class="form-group">
                        <label>Tinggi Pasien</label>
                        <input type="text" class="form-control" placeholder="Tinggi Pasien" name="tinggi_badan">
                    </div>
                    <div class="form-group">
                        <label>Berat Pasien</label>
                        <input type="text" class="form-control" placeholder="Berat Pasien" name="berat_badan">
                    </div>
                </div>
                <div class="box-content col-md-6">
                    <div class="form-group">
                        <label>Nadi Pasien</label>
                        <input type="text" class="form-control" placeholder="Nadi Pasien" name="nadi">
                    </div>
                    <div class="form-group">
                        <label>Tekanan Darah Pasien</label>
                        <input type="text" class="form-control" placeholder="Tekanan Darah Pasien" name="tekanan_darah">
                    </div>
                    <div class="form-group">
                        <label>Gula Darah</label>
                        <input type="text" class="form-control" placeholder="Gula Darah Pasien" name="gula_darah">
                    </div>
                    <div class="form-group">
                        <label>Kolesterol Pasien</label>
                        <input type="text" class="form-control" placeholder="Kolesterol Pasien" name="kolesterol">
                    </div>
                </div>
                <div class="box-content col-md-6">
                    <button type="submit" class="btn btn-success">Lanjutkan</button>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- content ends -->

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>View All</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>

    <hr>
<?php require('footer.php'); ?>