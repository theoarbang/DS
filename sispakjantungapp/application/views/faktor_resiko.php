<?php $this->load->view('header');?>
<div id="content" class="col-lg-10 col-sm-10">
<!-- content starts -->
            <div>
                <ul class="breadcrumb">
                    <li>
                        <a href="beranda.php">Beranda</a>
                    </li>
                    <li>
                        <a href="#">Faktor Resiko Gejala</a>
                    </li>
                </ul>
            </div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-list"></i> List Faktor Resiko Gejala</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content">
                <input type="text" id="search" placeholder="Pencarian..."></input>
                <table class="table table-striped table-bordered responsive" id="myTable">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Faktor Resiko Gejala</th>
                    <th>Jenis Faktor Resiko Gejala</th>
                    <th>densitas</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $i = 1;
                foreach ($records as $r) { 
                echo '<tr>';
                echo   ' <td>'.$r->id_faktor_resiko_gejala.'</td>';
                echo    ' <td class="center">'.$r->nama_faktor_resiko_gejala.'</td>';
                echo   '  <td class="center">'.$r->nama_jns_faktor_gejala.'</td>';
                echo   '  <td class="center">'.$r->densitas.'</td>';
                echo    ' <td class="center">';
                echo       '  <a class="btn btn-info btn-setting" href="'.site_url('admin/editfresikogejala/'.$r->id_faktor_resiko_gejala).'">';
                echo            ' <i class="glyphicon glyphicon-edit icon-white"></i>';
                echo             ' ';
                echo       '  </a>';
                echo        ' <a class="btn btn-danger" href="'.site_url('admin/delfresikogejala/'.$r->id_faktor_resiko_gejala).'">';
                echo             '<i class="glyphicon glyphicon-trash icon-white"></i>';
                echo             ' ';
                echo        ' </a>';
                echo   '  </td>';
                echo '</tr>';
            }
                ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-plus"></i> Tambah Faktor Resiko Gejala</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content row">
                <div class="box-content">
                <form role="form" action="<?php echo site_url('admin/addfresikogejala');?>" method="POST">
                    <input type="hidden">
                    <div class="form-group">
                        <label>Nama Jenis Faktor Resiko Gejala</label>
                        <!--
                        <input type="text" class="form-control" placeholder="Nama Jenis Faktor Resiko Gejala">
                        -->
                        <div class="controls">
                        <select data-placeholder="Jenis Faktor Resiko Gejala" id="selectError2" data-rel="chosen" name="jns_faktor">
                            <option value="0">---Pilih---</option>
                            <?php foreach ($records2 as $r) {
                                echo '<option value="'.$r->id_jns_faktor_gejala.'">'.$r->nama_jns_faktor_gejala.'</option>';
                            }
                            ?>
                        </select>
                    </div>
                    </div>
                    <div class="form-group">
                        <label>Nama Faktor Resiko Gejala</label>
                        <input type="text" class="form-control" placeholder="Nama Faktor Resiko Gejala" name="nama_faktor">
                    </div>
                    <div class="form-group">
                        <label>Densitas</label>
                        <input type="text" class="form-control" placeholder="Densitas" name="densitas">
                    </div>                    
                    <button type="submit" class="btn btn-primary">Submit</button>
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
<?php $this->load->view('footer');?>