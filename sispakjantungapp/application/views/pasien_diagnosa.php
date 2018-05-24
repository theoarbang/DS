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
                <form role="form" action="<?php echo site_url('diagnosa') ?>" method="POST">
                    <input type="hidden" placeholder="" name="id" value="<?php echo $dataedit[0]->id_pasien ?>">
                    <div class="form-group">
                        <label>Nama Pasien</label>
                        <input type="text" class="form-control" placeholder="Nama Pasien" value="<?php echo $dataedit[0]->nama_pasien?>" disabled>
                    </div>
                    <label>Faktor Resiko (Pilih Sesuai Kondisi Anda...)</label>
                    <?php 
                        foreach($records1 as $r){
                            echo '<div class="form-group">';
                            echo '<label class="checkbox-inline">';
                            echo '    <input type="checkbox" id="inlineCheckbox1" value="'.$r->id_faktor_resiko_gejala.'" name="gejala[]">'.$r->nama_faktor_resiko_gejala;
                            echo '</label>';
                            echo '</div>';
                        }
                    ?>
                </div>
                <div class="box-content col-md-6">
                    <div class="form-group">
                        <label>Usia Pasien</label>
                        <input type="text" class="form-control" placeholder="Usia Pasien" value="<?php echo $umur ?>" disabled>
                    </div>
                    <label>Gejala (Pilih Sesuai Kondisi Anda...)</label>
                    <?php 
                        foreach($records2 as $r){
                            echo '<div class="form-group">';
                            echo '<label class="checkbox-inline">';
                            echo '    <input type="checkbox" id="inlineCheckbox1" value="'.$r->id_faktor_resiko_gejala.'"name="gejala[]">'.$r->nama_faktor_resiko_gejala;
                            echo '</label>';
                            echo '</div>';
                        }
                    ?>
                </div>
                <div class="box-content col-md-6">
                    <button type="submit" class="btn btn-success">Diagnosa</button>
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