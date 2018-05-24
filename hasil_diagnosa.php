<?php $this->load->view('header3') ?>

<div id="content" class="col-lg-10 col-sm-10">
<!-- content starts -->
<div class="row">
    
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-folder-open"></i> Hasil Diagnosa</h2>
            </div>
            <div class="box-content row">
                <div class="box-content col-md-6">
                <form role="form">
                    <input type="hidden" placeholder="Enter email">
                    <div class="form-group">
                        <label>Nama Pasien</label>
                        <input type="text" class="form-control" placeholder="Nama Pasien" disabled>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir Pasien</label>
                        <input type="date" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                        <label>No. Telp Pasien</label>
                        <input type="text" class="form-control" placeholder="No. Telp Pasien" disabled>
                    </div>
                    <div class="form-group">
                        <label>Alamat Pasien</label>
                        <input type="text" class="form-control" placeholder="Alamat Pasien" disabled>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <input type="text" class="form-control" placeholder="Jenis Kelamin" disabled>
                    </div>
                    <div class="form-group">
                        <label>Status Pasien</label>
                        <input type="text" class="form-control" placeholder="Status Pasien" disabled>
                    </div>
                    <div class="form-group">
                        <label>Gejala</label>
                        <textarea rows="auto" cols="70" name="gejala" class="form-control"></textarea>
                    </label>
                    </div>
                    <div class="form-group">
                        <label>Faktor Resiko</label>
                        <textarea rows="auto" cols="70" name="faktor" class="form-control"></textarea>
                    </label>
                    </div>
                    <div class="form-group">
                        <label>Saran Tindakan</label>
                        <textarea rows="auto" cols="70" name="saran" class="form-control"></textarea>
                    </label>
                    </div>
                </div>
                <div class="box-content col-md-6">
                    <div class="form-group">
                        <label>Usia Pasien</label>
                        <input type="text" class="form-control" placeholder="Usia Pasien" disabled>
                    </div>
                    <div class="form-group">
                        <label>Tinggi Pasien</label>
                        <input type="text" class="form-control" placeholder="Tinggi Pasien" disabled>
                    </div>
                    <div class="form-group">
                        <label>Berat Pasien</label>
                        <input type="text" class="form-control" placeholder="Berat Pasien" disabled>
                    </div>
                    <div class="form-group">
                        <label>Nadi Pasien</label>
                        <input type="text" class="form-control" placeholder="Nadi Pasien" disabled>
                    </div>
                    <div class="form-group">
                        <label>Tekanan Darah Pasien</label>
                        <input type="text" class="form-control" placeholder="Tekanan Darah Pasien" disabled>
                    </div>
                    <div class="form-group">
                        <label>Gula Darah</label>
                        <input type="text" class="form-control" placeholder="Gula Darah Pasien" disabled>
                    </div>
                    <div class="form-group">
                        <label>Kolesterol Pasien</label>
                        <input type="text" class="form-control" placeholder="Kolesterol Pasien" disabled>
                    </div>
                    <div class="box-content row">
                        <div class="box-content col-md-6">
                            <div class="form-group">
                                <label>Diagnosa Pasien</label>
                                <input type="text" class="form-control" placeholder="Diagnosa Pasien" disabled>
                            </div>
                        </div>
                        <div class="box-content col-md-6">
                            <div class="form-group">
                                <label>Densitas</label>
                                <input type="text" class="form-control" placeholder="Densitas" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Prognosis</label>
                        <textarea rows="auto" cols="70" name="prognosis" class="form-control"></textarea>
                    </div>
                <button onclick="myPrint()" class="btn btn-success">Cetak Diagnosa</button>
                <a href="pasien.php" class="btn btn-danger">Cancel</a>
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