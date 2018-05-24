<?php require('header_admin.php'); ?>
<div id="content" class="col-lg-10 col-sm-10">
<!-- content starts -->
            <div>
                <ul class="breadcrumb">
                    <li>
                        <a href="beranda.php">Beranda</a>
                    </li>
                    <li>
                        <a href="#">Daftar Paramedis</a>
                    </li>
                </ul>
            </div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-list"></i> List Paramedis</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content">
                <input type="text" id="search" placeholder="Pencarian..."></input>
                <table class="table table-striped table-bordered responsive">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Paramedis</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Telp</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                 <?php 
                    $i = 1;
                   foreach ($records as $r) { 
                    echo '<tr>';
                    echo '    <td class="center">'.$r->id_paramedis.'</td>';
                    echo '    <td class="center">'.$r->nama_paramedis.'</td>';
                    echo '    <td class="center">'.$r->username.'</td>';
                    echo '    <td class="center">'.$r->password.'</td>';
                    echo '    <td class="center">'.$r->tgl_lahir.'</td>';
                    echo '    <td class="center">'.$r->alamat.'</td>';
                    echo '    <td class="center">'.$r->telp.'</td>';
                    echo '    <td class="center">';
                    echo '        <a class="btn btn-info btn-setting" href="'.site_url('admin/editparamedis/').$r->id_paramedis.'">';
                    echo '            <i class="glyphicon glyphicon-edit icon-white"></i>';
                    echo '';
                    echo '        </a>';
                    echo '        <a class="btn btn-danger" href="'.site_url('admin/delparamedis/').$r->id_paramedis.'">';
                    echo '            <i class="glyphicon glyphicon-trash icon-white"></i>';    
                    echo '        </a>';
                    echo '    </td>';
                    echo '</tr>';
                }?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-plus"></i> Ubah Paramedis</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content row">
                <div class="box-content">
                <form role="form" action="<?php echo site_url('admin/updateparamedis'); ?>" method = "POST">
                    <input type="hidden" placeholder="Enter email" name="id" value="<?php echo $dataedit[0]->id_paramedis ?>">
                    <div class="form-group">
                        <label>Nama Paramedis</label>
                        <input type="text" class="form-control" placeholder="Nama Paramedis" name="nama_paramedis" value="<?php echo $dataedit[0]->nama_paramedis ?>" >
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="username" name="username" value="<?php echo $dataedit[0]->username ?>">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" placeholder="password" name="password" value="<?php echo $dataedit[0]->password ?>">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="Date" class="form-control" name="tgl_lahir" value="">
                    </div>
                    <div class="form-group">
                        <label>No. Telp/HP</label>
                        <input type="text" class="form-control" placeholder="No. Telp/HP" name="alamat" value="<?php echo $dataedit[0]->telp ?>">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" placeholder="Alamat" name="telp" value="<?php echo $dataedit[0]->alamat ?>">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Update</button>
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