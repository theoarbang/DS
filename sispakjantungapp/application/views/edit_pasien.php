<?php $this->load->view('header')?>

<div id="content" class="col-lg-10 col-sm-10">
<!-- content starts -->
            <div>
                <ul class="breadcrumb">
                    <li>
                        <a href="beranda.php">Beranda</a>
                    </li>
                    <li>
                        <a href="#">Daftar Pasien</a>
                    </li>
                </ul>
            </div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-list"></i> List Pasien</h2>

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
                    <th>Nama</th>
                    <th>Tanggal lahir</th>
                    <th>Alamat</th>
                    <th>Telp</th>
                    <th>Jenis Kelamin</th>
                    <th>Status perkawinan</th>
                    <th>action</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $i = 1;
                foreach ($records as $r) { 
                echo '<tr>';
                echo '    <td>'.$r->id_pasien.'</td>';
                echo '    <td class="center">'.$r->nama_pasien.'</td>';
                echo '    <td class="center">'.$r->tgl_lahir_pasien.'</td>';
                echo '    <td class="center">'.$r->alamat_pasien.'</td>';
                echo '    <td class="center">'.$r->telp_pasien.'</td>';
                echo '    <td class="center">'.$r->jk_pasien.'</td>';
                echo '    <td class="center">'.$r->status.'</td>';
                echo '    <td class="center">';
                echo '        <a class="btn btn-primary" href="#">';
                echo '            Berkunjung';
                echo '        </a>';
                echo '        <a class="btn btn-info btn-setting" href="'.site_url('admin/editpasien').'">';
                echo '            <i class="glyphicon glyphicon-edit icon-white"></i>';
                echo '            ';
                echo '        </a>';
                echo '        <a class="btn btn-danger" href="'.site_url('admin/delpasien').'">';
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
                <h2><i class="glyphicon glyphicon-plus"></i> Ubah Pasien</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content row">
                <div class="box-content">
                <form role="form" action="<?php echo site_url('admin/updatepasien'); ?>" method="POST">
                    <input type="hidden" placeholder="Enter email" name="id" value="<?php echo $dataedit[0]->id_pasien ?>">
                    <div class="form-group">
                        <label>Nama Pasien</label>
                        <input type="text" class="form-control" placeholder="Nama Pasien" name="nama_pasien" value="<?php echo $dataedit[0]->nama_pasien ?>">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="Date" class="form-control" name="tgl_lahir_pasien" value="<?php echo $dataedit[0]->tgl_lahir_pasien ?>">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" placeholder="Alamat Pasien" name="alamat_pasien" value="<?php echo $dataedit[0]->alamat_pasien ?>">
                    </div>
                    <div class="form-group">
                        <label>No. Telp/HP</label>
                        <input type="text" class="form-control" placeholder="No. Telp/HP" name="telp_pasien" value="<?php echo $dataedit[0]->telp_pasien ?>">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <br>
                        <label class="radio-inline">
                        <?php if ($dataedit[0]->jk_pasien == 'Pria') {
                            echo '<input type="radio" name="jk_pasien" id="inlineRadio1" value="Pria" checked> Pria';
                        }else{
                            echo '<input type="radio" name="jk_pasien" id="inlineRadio1" value="Pria"> Pria';
                        }?>
                        </label>
                        <label class="radio-inline">
                            <?php if ($dataedit[0]->jk_pasien == 'Wanita') {
                                echo '<input type="radio" name="jk_pasien" id="inlineRadio2" value="Wanita" checked> Wanita';
                            }else{
                                echo '<input type="radio" name="jk_pasien" id="inlineRadio2" value="Wanita"> Wanita';
                            }?>
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Status Pernikahan</label>
                        <br>
                        <label class="radio-inline">
                            <?php if ($dataedit[0]->status == 'Belum Menikah') {
                                echo '<input type="radio" name="status" id="inlineRadio1" value="Belum Menikah" checked> Belum Menikah';
                            }else{
                                echo '<input type="radio" name="status" id="inlineRadio1" value="Belum Menikah"> Belum Menikah';
                            }?>
                        </label>
                        <label class="radio-inline">
                            <?php if ($dataedit[0]->status == 'Menikah') {
                                echo '<input type="radio" name="status" id="inlineRadio1" value="Menikah" checked> Menikah';
                            }else{
                                echo '<input type="radio" name="status" id="inlineRadio2" value="Menikah"> Menikah';
                            }?>
                        </label>
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
<?php $this->load->view('footer')?>