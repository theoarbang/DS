<?php require('header_admin.php'); ?>

<div id="content" class="col-lg-10 col-sm-10">
<!-- content starts -->
            <div>
                <ul class="breadcrumb">
                    <li>
                        <a href="beranda.php">Beranda</a>
                    </li>
                    <li>
                        <a href="#">Daftar Admin</a>
                    </li>
                </ul>
            </div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-list"></i> List Administrator / Pakar</h2>

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
                    <th>Nama Admin</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Tgl Lahir</th>
                    <th>Telp</th>
                    <th>Alamat</th>
                    <th>Admin/Pakar</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                 <?php 
                $i = 1;
                foreach ($records as $r) { 
                echo '<tr>';
                echo '    <td>'.$r->id_administrator.'</td>';
                echo '    <td class="center">'.$r->nama_admin.'</td>';
                echo '    <td class="center">'.$r->username.'</td>';
                echo '    <td class="center">'.$r->password.'</td>';
                echo '    <td class="center">'.$r->tanggal_lahir.'</td>';
                echo '    <td class="center">'.$r->telp.'</td>';
                echo '    <td class="center">'.$r->alamat.'</td>';
                if ($r->admin==1) {
                    echo '    <td class="center">Admin</td>';
                } else {
                    echo '    <td class="center">Pakar</td>';
                }
                echo '    <td class="center">';
                echo '        <a class="btn btn-info btn-setting" href="'.site_url('admin/editpakar/').$r->id_administrator.'">';
                echo '            <i class="glyphicon glyphicon-edit icon-white"></i>';
                echo '            ';
                echo '        </a>';
                echo '        <a class="btn btn-danger" href="'.site_url('admin/delpakar/').$r->id_administrator.'">';
                echo '            <i class="glyphicon glyphicon-trash icon-white"></i>';
                echo '            ';
                echo '        </a>';
                echo '    </td>';
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
                <h2><i class="glyphicon glyphicon-plus"></i> Ubah Administrator</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content row">
                <div class="box-content">
                <form role="form" action="<?php echo site_url('admin/updatepakar'); ?>" method="POST">
                    <input type="hidden" placeholder="Enter email" name="id" value="<?php echo $dataedit[0]->id_administrator ?>">
                    <div class="form-group">
                        <label>Nama Admin</label>
                        <input type="text" class="form-control" placeholder="Nama Admin" name="nama_admin" value="<?php echo $dataedit[0]->nama_admin; ?>">
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="username" name="username" value="<?php echo $dataedit[0]->username?>">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="password" name="password" value="<?php echo $dataedit[0]->password ?>">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="Date" class="form-control" name="tanggal_lahir" value="<?php echo $dataedit[0]->tanggal_lahir?>">
                    </div>
                    <div class="form-group">
                        <label>No. Telp/HP</label>
                        <input type="text" class="form-control" placeholder="No. Telp/HP" name="telp" value="<?php echo $dataedit[0]->telp ?>">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="<?php echo $dataedit[0]->alamat?>">
                    </div>
                    <div class="form-group">
                        <label>Status Admin</label>
                        <br>
<?php 
    if ($dataedit[0]->admin == 1) {
        echo '<label class="radio-inline">';
        echo '    <input type="radio" name="admin" id="inlineRadio1" value="1" checked> Administrator';
        echo '</label>';
        echo '<label class="radio-inline">';
        echo '    <input type="radio" name="admin" id="inlineRadio2" value="2"> Pakar';
        echo '</label>';
    } else {
        echo '<label class="radio-inline">';
        echo '    <input type="radio" name="admin" id="inlineRadio1" value="1"> Administrator';
        echo '</label>';
        echo '<label class="radio-inline">';
        echo '    <input type="radio" name="admin" id="inlineRadio2" value="2" checked> Pakar';
        echo '</label>';
    }
    
 ?>
                        
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