<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ breadcrumb ] start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Form Elements</h5>
                                        </div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!">Data Penduduk</a></li>
                                            <li class="breadcrumb-item"><a href="#!">Ubah Data</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- [ breadcrumb ] end -->
                        <!-- [ Main Content ] start -->
                        <div class="row">
                            <!-- [ form-element ] start -->
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Basic Componant</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <?php echo form_open('data-penduduk/edit/' . $data_penduduk['id_penduduk']); ?>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Nik</label>
                                                    <input type="text" value="<?php echo $data_penduduk['nik'] ?>" name="nik" class="form-control" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Nama</label>
                                                    <input type="text" value="<?php echo $data_penduduk['nama'] ?>" name="nama" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Jenis Kelamin</label>
                                                    <select name="jk" class="form-control" required="">
                                                        <option value="">Jenis Kelamin</option>
                                                        <option value="1" <?php echo ($data_penduduk['jk'] == '1') ? 'selected' : ''; ?>>Laki - Laki</option>
                                                        <option value="2" <?php echo ($data_penduduk['jk'] == '2') ? 'selected' : ''; ?>>Perempuan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Alamat</label>
                                                    <textarea name="alamat" class="form-control"><?php echo $data_penduduk['alamat'] ?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Nomor Telephone</label>
                                                    <input type="text" value="<?php echo $data_penduduk['notelp'] ?>" name="notelp" class="form-control" required>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- [ form-element ] end -->
                        <!-- [ Main Content ] end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>