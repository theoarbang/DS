<?php $this->load->view('header2');?>
<div id="content" class="col-lg-10 col-sm-10">
<!-- content starts -->
            <div>
                <ul class="breadcrumb">
                    <li>
                        <a href="beranda.php">Beranda</a>
                    </li>
                    <li>
                        <a href="#">Kunjungan</a>
                    </li>
                </ul>
            </div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-list"></i> List Kunjungan</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered responsive" id="myTable">
                <thead>
                
                <tr>
                    <th>No</th>
                    <th>Diagnosa</th>
                    <th>Densitas</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    foreach($records as $r){
                        echo '<tr>';
                        echo '    <td>'.$no++.'</td>';
                        echo '    <td>'.$r->nama_diagnosa.'</td>';
                        echo '    <td>'.round($r->densitas,2).'</td>';
                        echo '    <td class="center">';
                        echo '        <a class="btn btn-info btn-setting" href="'.site_url('paramedis/hasildiagnosa/').$r->id_diagnosa_kunjungan.'">';
                        echo '            <i class="glyphicon glyphicon-edit icon-white"></i>';
                        echo '            ';
                        echo '        </a>';
                        echo '        <a class="btn btn-danger" href="'.site_url('paramedis/deldiagnosa/').$r->id_diagnosa_kunjungan.'">';
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