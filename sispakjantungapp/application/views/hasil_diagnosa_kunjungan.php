<?php require('header2.php'); ?>

<div id="content" class="col-lg-10 col-sm-10">
<!-- content starts -->
<div class="row">
    
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-folder-open"></i> Hasil Diagnosa</h2>
            </div>
            <div class="box-content row">
                <div class="box-content col-md-10">
                    <h2>Data Pasien</h3> <hr>
                    <table class="table table-striped table-bordered responsive" id="myTable">
                        <tr>
                            <td><b>Nama Pasien</b></td>
                            <td><?php echo $records[0]->nama_pasien ?></td>
                        </tr>
                        <tr>
                            <td><b>Tgl Lahir</b></td>
                            <td><?php echo $records[0]->tgl_lahir_pasien ?></td>
                        </tr>
                        <tr>
                            <td><b>Telp</b></td>
                            <td><?php echo $records[0]->alamat_pasien ?></td>
                        </tr>
                        <tr>
                            <td><b>Alamat</b></td>
                            <td><?php echo $records[0]->telp_pasien ?></td>
                        </tr>
                        <tr>
                            <td><b>Jenis Kelamin</b></td>
                            <td><?php echo $records[0]->jk_pasien ?></td>
                        </tr>
                        <tr>
                            <td><b>Status Pasien</b></td>
                            <td><?php echo $records[0]->status ?></td>
                        </tr>
                    </table>
                    <h3>Data Faktor Resiko dan Gejala</h3> <hr>
                    <table class="table table-striped table-bordered responsive">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Faktor Resiko / Gejala</th>
                            </tr>
                        </thead>
                        <?php
                        foreach ($records as $r) {
                            echo '<tr>';
                            echo '    <td>'.$r->id_faktor_resiko_gejala.'</td>';
                            echo '    <td>'.$r->nama_faktor_resiko_gejala.'</td>';
                            echo '</tr>';
                        }
                        ?>
                    </table>
                    <h3>Diagnosa</h3> <hr>
                    <table>
                        <tr>
                            <td><h4>Diagnosa</h4> </td>
                            <td>:</td>
                            <td><h4><?php echo $records[0]->nama_diagnosa; ?></h4></td>
                        </tr>
                        <tr>
                            <td><h4>Densitas</h4></td>
                            <td>:</td>
                            <td><h4><?php echo $records[0]->densitas; ?> %</h4></td>
                        </tr>
                    </table>
                    <h3>Saran Tindakan</h3> <hr>
                    <h4><?php echo $records[0]->nama_tindakan ?></h4>
                    <p><?php echo $records[0]->detail ?></p>
                    <table>
                    </table>
                    
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