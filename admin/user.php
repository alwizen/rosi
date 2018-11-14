<?php
include 'nav.php';
?>
<div class="container">
        <a href="tambahUser.php" class="btn btn-primary col-md-offset-10">Tambah User</a>
        <div id="exTab2" class="container">	
            <ul class="nav nav-tabs">
                    <li class="active"><a  href="#1" data-toggle="tab">Semua User</a></li>
                    <li><a href="#2" data-toggle="tab">Admin</a></li>
                    <li><a href="#3" data-toggle="tab">Gudang</a></li>
                    <li><a href="#4" data-toggle="tab">Sales</a></li>
                    <li><a href="#5" data-toggle="tab">Helper</a></li>
            </ul>

			<div class="tab-content ">
                <div class="tab-pane active" id="1"> <br>
                <table class="table table-bordered table-responsive" id="mydata">
                    <thead>
                        <tr class="primary">
                            <th>#</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Level</th>
                            <th><center>Aksi</center></th>
                        </tr>
                        </thead>
                            <?php 
                            include '../koneksi.php';
                            $no = 1;
                            $data = mysqli_query($koneksi, "SELECT * FROM users");
                            while ($d = mysqli_fetch_array($data)) {
                              echo '
                            
                                <tbody>
                                    <tr>
                                    <td>' . $no++ . '</td>
                                    <td>' . $d['nama'] . '</td>
                                    <td>' . $d['username'] . '</td>
                                    <td>' . $d['level'] . '</td>
                                    <td>
                                        <center>
                                        <a href="editUser.php?id=' . $d['id'] . '" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>

                                        <a href="control/prosesUser.php?act=delete&id=' . $d['id'] . '" class="btn btn-danger" onclick ="if (!confirm(\'Apakah Anda yakin akan menghapus data ini?\')) return false;"><span class="glyphicon glyphicon-trash"></span></a>
                                        </center>
                                    </td>
                                    </tr>
                                ';
                            }
                            ?> 
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="tab-pane" id="2"> <br>
                        <table class="table table-bordered table-responsive" id="mydata">
                            <thead>
                            <tr class="primary">
                                <th>#</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No Telpon</th>
                            </tr>
                            </thead>
                                <?php 
                                include '../koneksi.php';
                                $no = 1;
                                $data = mysqli_query($koneksi, "SELECT * FROM users WHERE level='admin'");
                                while ($d = mysqli_fetch_array($data)) {
                                  echo '
                                    
                                <tbody>
                                    <tr>
                                    <td>' . $no++ . '</td>
                                    <td>' . $d['nama'] . '</td>
                                    <td>' . $d['alamat'] . '</td>
                                    <td>' . $d['telp'] . '</td>
                                    
                                    </tr>
                                        ';
                                }
                                ?> 
                                </tbody>
                        </table>
                    </div>
                    
                    <div class="tab-pane" id="3"> <br>
                    <table class="table table-bordered table-responsive" id="mydata">
                            <thead>
                            <tr class="primary">
                                <th>#</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No Telpon</th>
                            </tr>
                            </thead>
                                <?php 
                                include '../koneksi.php';
                                $no = 1;
                                $data = mysqli_query($koneksi, "SELECT * FROM users WHERE level='gudang'");
                                while ($d = mysqli_fetch_array($data)) {
                                  echo '
                                    
                                <tbody>
                                    <tr>
                                    <td>' . $no++ . '</td>
                                    <td>' . $d['nama'] . '</td>
                                    <td>' . $d['alamat'] . '</td>
                                    <td>' . $d['telp'] . '</td>
                                    
                                    </tr>
                                        ';
                                }
                                ?> 
                                </tbody>
                        </table>
                    </div>

                    <div class="tab-pane" id="4"> <br>
                        <table class="table table-bordered table-responsive" id="mydata">
                            <thead>
                            <tr class="primary">
                                <th>#</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No Telpon</th>
                            </tr>
                            </thead>
                                <?php 
                                include '../koneksi.php';
                                $no = 1;
                                $data = mysqli_query($koneksi, "SELECT * FROM users WHERE level='sales'");
                                while ($d = mysqli_fetch_array($data)) {
                                  echo '
                                    
                                <tbody>
                                    <tr>
                                    <td>' . $no++ . '</td>
                                    <td>' . $d['nama'] . '</td>
                                    <td>' . $d['alamat'] . '</td>
                                    <td>' . $d['telp'] . '</td>
                                    
                                    </tr>
                                        ';
                                }
                                ?> 
                                </tbody>
                        </table>
                    </div>

                    <div class="tab-pane" id="5"> <br>
                        <table class="table table-bordered table-responsive" id="mydata">
                            <thead>
                            <tr class="primary">
                                <th>#</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No Telpon</th>
                            </tr>
                            </thead>
                                <?php 
                                include '../koneksi.php';
                                $no = 1;
                                $data = mysqli_query($koneksi, "SELECT * FROM users WHERE level='helper'");
                                while ($d = mysqli_fetch_array($data)) {
                                  echo '
                                    
                                <tbody>
                                    <tr>
                                    <td>' . $no++ . '</td>
                                    <td>' . $d['nama'] . '</td>
                                    <td>' . $d['alamat'] . '</td>
                                    <td>' . $d['telp'] . '</td>
                                    
                                    </tr>
                                        ';
                                }
                                ?> 
                                </tbody>
                        </table>
                    </div>
        </div>