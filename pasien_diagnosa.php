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
                <h2><i class="glyphicon glyphicon-folder-open"></i> Diagnosa Pasien</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
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
                        <label>Usia Pasien</label>
                        <input type="text" class="form-control" placeholder="Usia Pasien">
                    </div>
                    <div class="form-group">
                        <label>Tinggi Pasien</label>
                        <input type="text" class="form-control" placeholder="Tinggi Pasien">
                    </div>
                    <div class="form-group">
                        <label>Berat Pasien</label>
                        <input type="text" class="form-control" placeholder="Berat Pasien">
                    </div>
                    
                    <label>Gejala (Pilih Sesuai Kondisi Anda...)</label>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Batuk-batuk
                    </label>
                    </div>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Jantung Berdebar-debar (Jarang)
                    </label>
                    </div>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Jantung Berdebar-debar (Sering)
                    </label>
                    </div>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Keringat dingin (Jarang)
                    </label>
                    </div>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Keringat dingin (Sering)
                    </label>
                    </div>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Lemas
                    </label>
                    </div>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Mual (Jarang)
                    </label>
                    </div>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Mual (Sering)
                    </label>
                    </div>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Muntah (Jarang)
                    </label>
                    </div>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Muntah (Sering)
                    </label>
                    </div>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Nyeri Dada (Agak Nyeri)
                    </label>
                    </div>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Nyeri Dada (Biasa)
                    </label>
                    </div>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Nyeri Dada (Sangat)
                    </label>
                    </div>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Pingsan (Jarang)
                    </label>
                    </div>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Pingsan (Sering)
                    </label>
                    </div>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Pusing (Agak Pusing)
                    </label>
                    </div>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Pusing (Biasa)
                    </label>
                    </div>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Pusing (Sangat Pusing)
                    </label>
                    </div>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Sesak Nafas (Biasa)
                    </label>
                    </div>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Sesak Nafas (Sangat)
                    </label>
                    </div>
                </div>
                <div class="box-content col-md-6">
                    <div class="form-group">
                        <label>Nadi Pasien</label>
                        <input type="text" class="form-control" placeholder="Nadi Pasien">
                    </div>
                    <div class="form-group">
                        <label>Tekanan Darah Pasien</label>
                        <input type="text" class="form-control" placeholder="Tekanan Darah Pasien">
                    </div>
                    <div class="form-group">
                        <label>Gula Darah</label>
                        <input type="text" class="form-control" placeholder="Gula Darah Pasien">
                    </div>
                    <div class="form-group">
                        <label>Kolesterol Pasien</label>
                        <input type="text" class="form-control" placeholder="Kolesterol Pasien">
                    </div>

                    <label>Faktor Resiko (Pilih Sesuai Kondisi Anda...)</label>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Kolesterol Rendah (< 200 mg/dl)
                    </label>
                    </div>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Kolesterol Rendah (< 200 mg/dl)
                    </label>
                    </div>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Tekanan Darah Rendah (<= 90/60 mmHg)
                    </label>
                    </div>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Tekanan Darah Normal (100/70 - 130/80 mmHg)
                    </label>
                    </div>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Tekanan Darah Tinggi (>= 140/90 mmHg)
                    </label>
                    </div>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Gula Darah Rendah (< 60 mg/dl)
                    </label>
                    </div>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Gula Darah Sedang (70-140 mg/dl)
                    </label>
                    </div>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Gula Darah Tinggi (> 200 mg/dl)
                    </label>
                    </div>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Merokok
                    </label>
                    </div>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Alkohol
                    </label>
                    </div>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Kurang Olahraga / Aktivitas
                    </label>
                    </div>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> IBM Rendah
                    </label>
                    </div>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> IBM Normal
                    </label>
                    </div>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> IBM Tinggi
                    </label>
                    </div>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Stress
                    </label>
                    </div>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Keturunan Penyakit Jantung
                    </label>
                    </div>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Usia < 40 tahun
                    </label>
                    </div>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Usia > 40 tahun
                    </label>
                    </div>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Jenis Kelamin (Pria)
                    </label>
                    </div>
                    <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Jenis Kelamin (Wanita)
                    </label>
                    </div>
                <button type="submit" class="btn btn-success">Hasil Diagnosa</button>
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