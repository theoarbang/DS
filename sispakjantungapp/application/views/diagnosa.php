<?php $this->load->view('header');?>
<div id="content" class="col-lg-10 col-sm-10">
<!-- content starts -->
            <div>
                <ul class="breadcrumb">
                    <li>
                        <a href="beranda.php">Beranda</a>
                    </li>
                    <li>
                        <a href="#">Diagnosa</a>
                    </li>
                </ul>
            </div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-list"></i> List Diagnosa</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered responsive" id="myTable">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Diagnosa</th>
                    <th>Inisial Diagnosa</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $i = 1;
                foreach ($records as $r) { 
                    echo '<tr>';
                    echo '    <td>'.$r->id_diagnosa.'</td>';
                    echo '    <td class="center">'.$r->nama_diagnosa.'</td>';
                    echo '    <td class="center">'.$r->inisial.'</td>';
                    echo '    <td class="center">';
                    echo '        <a class="btn btn-info btn-setting" href="'.site_url('admin/editdiagnosa/'.$r->id_diagnosa).'">';
                    echo '            <i class="glyphicon glyphicon-edit icon-white"></i>';
                    echo '            ';
                    echo '        </a>';
                    echo '        <a class="btn btn-danger" href="'.site_url('admin/deldiagnosa/'.$r->id_diagnosa).'">';
                    echo '            <i class="glyphicon glyphicon-trash icon-white"></i>';
                    echo '            ';
                    echo '        </a>';
                    echo '    </td>';
                    echo '</tr>';
                    echo '<tr>';
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
                <h2><i class="glyphicon glyphicon-plus"></i> Tambah Diagnosa</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content row">
                <div class="box-content">
                <form role="form" action="<?php echo site_url('admin/adddiagnosa');?>" method="POST">
                    <input type="hidden" placeholder="Enter email">
                    <div class="form-group">
                        <label>Nama Diagnosa</label>
                        <input type="text" class="form-control" placeholder="Nama Diagnosa" name='nama_diagnosa'>
                    </div>
                    <div class="form-group">
                        <label>Inisial Diagnosa</label>
                        <input type="text" class="form-control" placeholder="Inisial Diagnosa" name='inisial'>
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

    <?php $this->load->view('footer') ?>