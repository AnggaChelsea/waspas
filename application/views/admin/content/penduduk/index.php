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
                      <h5 class="m-b-10">Data Air Mineral</h5>
                    </div>
                    <ul class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                      <li class="breadcrumb-item"><a href="#!">Data Air Mineral</a></li>
                    </ul>
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
                    <h5>Daftar Air Mineral</h5>
                    <div class="card-header-right">
                      <div class="btn-group card-option">
                        <button type="button" class="btn-primary btn-sm" data-toggle="modal" data-target="#defaultModal" id="click">Tambah Data Air Mineral</button>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table id="example" class="table table-striped">
                        <thead>
                          <tr>
                            <th style="width: 5%;">#</th>
                            <th>Nama</th>
                            <?php if ($_SESSION['level'] == 1) { ?>
                              <th>Aksi</th>
                            <?php } ?>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $num = 1;
                          foreach ($data_penduduk as $key) { ?>
                            <tr>
                              <td><?php echo $num++;  ?></td>
                              <td>
                                <?php echo $key['nama'] ?><br>
                                
                              </td>

                              <?php if ($_SESSION['level'] == 1) { ?>
                                <td>
                                  <a href="<?php echo base_url(); ?>data-penduduk/edit/<?= $key['id_penduduk'] ?>" class="btn btn-warning btn-sm">Ubah</a>
                                  <!-- <a href="<?php echo base_url(); ?>data-penduduk/remove/<?= $key['id_penduduk'] ?>" class="btn btn-danger btn-sm">Hapus</a> -->
                                  <a onclick="myFunction('<?= $key['id_penduduk'] ?>');" class="btn btn-danger btn-sm">
                                    <font color="#fff">Hapus</font>
                                  </a>
                                </td>
                              <?php } ?>
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
                    <h5>Data Air Mineral + Penilaian</h5>
                    <div class="card-header-right">
                      <div class="btn-group card-option">
                        <a href="<?php echo base_url(); ?>data-penduduk/addnilai" class="btn  btn-primary btn-sm" role="button">Tambah Penilaian</a>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table id="example2" class="table table-striped">
                        <thead>
                          <tr>
                            <th style="background-color: #2ed88a; color:#ffffff;">#</th>
                            <th style="background-color: #2ed88a; color:#ffffff;">Nama</th>
                            <th style="background-color: #2ed88a; color:#ffffff;">C1</th>
                            <th style="background-color: #2ed88a; color:#ffffff;">C2</th>
                            <th style="background-color: #2ed88a; color:#ffffff;">C3</th>
                            <th style="background-color: #2ed88a; color:#ffffff;">C4</th>
                            <?php if ($_SESSION['level'] == 1) { ?>
                              <th style="background-color: #2ed88a; color:#ffffff;">Aksi</th>
                            <?php } ?>
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
                              <?php if ($_SESSION['level'] == 1) { ?>
                                <td>
                                  <a href="<?php echo base_url(); ?>data-penduduk/editnilai/<?= $nilai['id_penduduk_nilai'] ?>" class="btn btn-warning btn-sm">Ubah</a>
                                  <a href="<?php echo base_url(); ?>data-penduduk/removenilai/<?= $nilai['id_penduduk_nilai'] ?>" class="btn btn-danger btn-sm">Hapus</a>

                                </td>
                              <?php } ?>
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
        <h4 class="modal-title" id="defaultModalLabel">Tambah Produk Air Mineral</h4>
      </div>

      <div class="modal-body">
        <?php echo form_open('data-penduduk/add');  ?>
        <div class="row clearfix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            
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

<script>
  function myFunction(recertid) {
    swal({
        title: "",
        text: "Apakah Anda yakin ingin menghapus data ini?",
        type: "warning",
        showCancelButton: true,
        showConfirmButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Hapus!",
        cancelButtonText: "Batal!",
        closeOnConfirm: false,
        closeOnCancel: false,
      },
      function(isConfirm) {
        if (isConfirm) {
          window.location = "<?php echo site_url('data-penduduk/remove/'); ?>" + recertid;
        } else {
          //return false;
          swal({
            title: "",
            text: "Dibatalkan!",
            type: "error",
            timer: 1000
          });
        }
      });
  }
</script>

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