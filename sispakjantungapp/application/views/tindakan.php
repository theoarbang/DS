<?php require('header.php'); ?>
<div id="content" class="col-lg-10 col-sm-10">
<!-- content starts -->
            <div>
                <ul class="breadcrumb">
                    <li>
                        <a href="beranda.php">Beranda</a>
                    </li>
                    <li>
                        <a href="#">Tindakan</a>
                    </li>
                </ul>
            </div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-list"></i> List Tindakan</h2>

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
                    <th>Nama Tindakan</th>
                    <th>Detail</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $i = 1;
                foreach ($records as $r) { 
                echo '<tr>';
                echo '    <td>'.$r->id_tindakan.'</td>';
                echo '    <td class="center">'.$r->nama_tindakan.'</td>';
                echo '    <td class="center">'.$r->detail.'</td>';
                echo '    <td class="center">';
                echo '        <a class="btn btn-info btn-setting" href="'.site_url('admin/edittindakan/').$r->id_tindakan.'">';
                echo '            <i class="glyphicon glyphicon-edit icon-white"></i>';
                echo '            ';
                echo '        </a>';
                echo '        <a class="btn btn-danger" href="'.site_url('admin/deltindakan/').$r->id_tindakan.'">';
                echo '            <i class="glyphicon glyphicon-trash icon-white"></i>';
                echo '            ';
                echo '        </a>';
                echo '    </td>';
                echo ' </tr>';
            }?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-plus"></i> Tambah Administrator</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content row">
                <div class="box-content">
                <form role="form" action="<?php echo site_url('admin/addtindakan') ?>" method="POST">
                    <input type="hidden" placeholder="Enter email">
                    <div class="form-group">
                        <label>Nama Tindakan</label>
                        <input type="text" class="form-control" placeholder="Nama Tindakan" name="nama_tindakan">
                    </div>
                    <div class="form-group">
                        <label>Detail</label>
                        <textarea name="detail" id="tmce" cols="30" rows="10">

                        </textarea>
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

<script src="<?php echo base_url();?>external/tinymce/js/tinymce/tinymce.min.js"></script>
<script type='text/javascript'> 
    tinymce.init({selector:'#tmce'});
</script>
<?php require('footer.php'); ?>