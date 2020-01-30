<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Arsip</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="masalah" class="col-sm-3 control-label">Masalah</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="masalah" class="form-control">
                                    <option value="lapor narkoba">Narkoba</option>
                                    <option value="lapor judi">Perjudian</option>
                                    <option value="lapor preman">Premanisme</option>
                                    <option value="lapor pekat">Penyakit Masyarakat</option>
                                </select>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="para_pihak" class="col-sm-3 control-label">Nama Pelapor</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pelapor" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Pelapor" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_perkara" class="col-sm-3 control-label">Nomor Plapor</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_pelapor"class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Pelapor" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_masuk" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pengantar" class="col-sm-3 control-label">Pengantar Berkas</label>
                            <div class="col-sm-9">
                                <input type="text" name="pengantar" class="form-control" id="inputPassword3" placeholder="Inputkan Staff Pengantar Berkas" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="penerima" class="col-sm-3 control-label">Penerima Berkas</label>
                            <div class="col-sm-9">
                                <input type="text" name="penerima" class="form-control" id="inputPassword3" placeholder="Inputkan Staff Penerima Berkas" required>
                            </div>
                        </div>


                        <!--Status-->

                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-2 col-xs-9">
								<select name="status" class="form-control">
									<option value="Ada">Ada</option>
									<option value="Ditindak">Ditindak</option>
									<option value="Penghapusan">Penghapusan</option>
								</select>
                            </div>
                        </div>
                        <!--Akhir Status-->

						<div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" class="form-control" id="inputPassword3" placeholder="Inputkan Keterangan">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Arsip</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=pengaduan&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Arsip
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $masalah=$_POST['masalah'];
  $nama_pelapor=$_POST['nama_pelapor'];
	$no_pelapor=$_POST['no_pelapor'];
  $tglmasuk=$_POST['tgl_masuk'];
  $pengantar=$_POST['pengantar'];
	$penerima=$_POST['penerima'];
  $status=$_POST['status'];
	$ket=$_POST['ket'];
    //buat sql
    $sql="INSERT INTO tbl_pengaduan VALUES ('','$masalah','$nama_pelapor','no_pelapor','$tglmasuk','$penerima','$pengantar','$status','$ket')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=pengaduan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
