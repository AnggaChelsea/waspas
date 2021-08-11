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
                                            <h5 class="m-b-10">Proses SPK</h5>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- [ breadcrumb ] end -->
                        <!-- [ Main Content ] start -->
                        <!-- [ button ] start -->
                        <div class="row">
                            <!-- [ size-small-button ] start -->
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>PENILAIAN</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="example1" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th style="background-color: #e52d27; color:#ffffff;">#</th>
                                                        <th style="background-color: #e52d27; color:#ffffff;">Nama</th>
                                                        <th style="background-color: #e52d27; color:#ffffff;">C1</th>
                                                        <th style="background-color: #e52d27; color:#ffffff;">C2</th>
                                                        <th style="background-color: #e52d27; color:#ffffff;">C3</th>
                                                        <th style="background-color: #e52d27; color:#ffffff;">C4</th>
                                                    
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $numm = 1;
                                                    foreach ($data_penduduk_nilai as $nilai) { ?>
                                                        <tr>
                                                            <td><?php echo $numm++; ?></td>
                                                            <td><?php echo $nilai['nm_pdk'] ?></td>
                                                            <td><?php echo $this->Mdatakriteria->get_data_nilai_kriteria_id($nilai['C1'])['pilihan'] ?></td>
                                                            <td><?php echo $this->Mdatakriteria->get_data_nilai_kriteria_id($nilai['C2'])['pilihan'] ?></td>
                                                            <td><?php echo $this->Mdatakriteria->get_data_nilai_kriteria_id($nilai['C3'])['pilihan'] ?></td>
                                                            <td><?php echo $this->Mdatakriteria->get_data_nilai_kriteria_id($nilai['C4'])['pilihan'] ?></td>
                                                          
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Kriteria/Tingkat</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="example2" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th style="background-color: #f57c00; color:#ffffff;">#</th>
                                                        <th style="background-color: #f57c00; color:#ffffff;">Nama</th>
                                                        <th style="background-color: #f57c00; color:#ffffff;">C1</th>
                                                        <th style="background-color: #f57c00; color:#ffffff;">C2</th>
                                                        <th style="background-color: #f57c00; color:#ffffff;">C3</th>
                                                        <th style="background-color: #f57c00; color:#ffffff;">C4</th>
                                                      
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $numm = 1;
                                                    foreach ($data_penduduk_nilai as $nilai) { ?>
                                                        <tr>
                                                            <td><?php echo $numm++; ?></td>
                                                            <td><?php echo $nilai['nm_pdk'] ?></td>
                                                            <td><?php echo $this->Mdatakriteria->get_data_nilai_kriteria_id($nilai['C1'])['nilai'] ?></td>
                                                            <td><?php echo $this->Mdatakriteria->get_data_nilai_kriteria_id($nilai['C2'])['nilai'] ?></td>
                                                            <td><?php echo $this->Mdatakriteria->get_data_nilai_kriteria_id($nilai['C3'])['nilai'] ?></td>
                                                            <td><?php echo $this->Mdatakriteria->get_data_nilai_kriteria_id($nilai['C4'])['nilai'] ?></td>
                                                           
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Hasil Normalisasi</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="example3" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th style="background-color: #2962FF; color:#ffffff;">#</th>
                                                        <th style="background-color: #2962FF; color:#ffffff;">Nama</th>
                                                        <th style="background-color: #2962FF; color:#ffffff;">C1</th>
                                                        <th style="background-color: #2962FF; color:#ffffff;">C2</th>
                                                        <th style="background-color: #2962FF; color:#ffffff;">C3</th>
                                                        <th style="background-color: #2962FF; color:#ffffff;">C4</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $numm = 1;
                                                    foreach ($data_penduduk_nilai as $nilai) { ?>
                                                        <tr>
                                                            <td><?php echo $numm++; ?></td>
                                                            <td><?php echo $nilai['nm_pdk'] ?></td>
                                                            <td><?php echo $this->Mdatakriteria->get_data_nilai_kriteria_id($nilai['C1'])['nilai'] / 4 ?></td>
                                                            <td><?php echo $this->Mdatakriteria->get_data_nilai_kriteria_id($nilai['C2'])['nilai'] / 4 ?></td>
                                                            <td><?php echo $this->Mdatakriteria->get_data_nilai_kriteria_id($nilai['C3'])['nilai'] / 4 ?></td>
                                                            <td><?php echo $this->Mdatakriteria->get_data_nilai_kriteria_id($nilai['C4'])['nilai'] / 4 ?></td>
                                                        
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Hasil Penilaian</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="example4" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th style="background-color: #2ed88a; color:#ffffff;">Peringkat</th>
                                                        <th style="background-color: #2ed88a; color:#ffffff;">Nama</th>
                                                        <th style="background-color: #2ed88a; color:#ffffff;">Nilai</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $numm = 1;
                                                    foreach ($data_penduduk_hasil as $hasil) { ?>
                                                        <tr>
                                                            <td><?php echo $numm++; ?></td>
                                                            <td><?php echo $this->Mpenduduk->get_data_penduduk_id($hasil['id_penduduk'])['nama'] ?></td>
                                                            <td><?php echo $hasil['nilai'] ?></td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- [ size-small-button ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Tambah Penduduk</h4>
            </div>

            <div class="modal-body">
                <?php echo form_open('data-penduduk/add');  ?>
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label>Nik</label>
                            <div class="form-line">
                                <input type="text" name="nik" class="form-control" placeholder="Nik" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <div class="form-line">
                                <input type="text" name="nama" class="form-control" placeholder="Nama" required="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">BATAL</button>
                <button type="submit" class="btn btn-link waves-effect">SIMPAN</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>

<?php if ($this->session->flashdata('success')) : ?>
    <script>
        swal({
            title: "Berhasil",
            text: "<?= $this->session->flashdata('success') ?>",
            type: "success",
        });
    </script>
<?php endif; ?>

<?php if ($this->session->flashdata('username')) : ?>
    <script>
        swal({
            title: "Gagal",
            text: "Nik Sudah Terdaftar",
            type: "error",
        });
    </script>
<?php endif; ?>