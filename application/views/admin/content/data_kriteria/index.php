<div class="pcoded-main-container">
  <div class="pcoded-wrapper">
    <div class="pcoded-content">
      <div class="pcoded-inner-content">
        <div class="main-body">
          <div class="page-wrapper">

            <div class="page-header">
              <div class="page-block">
                <div class="row align-items-center">
                  <div class="col-md-12">
                    <div class="page-header-title">
                      <h5 class="m-b-10">Data Kriteria</h5>
                    </div>
                    <ul class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                      <li class="breadcrumb-item"><a href="#!">Data Kriteria</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <?php foreach ($data as $key) { ?>
                <!-- [ size-small-button ] start -->
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h5>Kriteria <?php echo $key['nama_kriteria'] . ' (' . $key['kd_kriteria'] . ')' ?></h5>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Kriteria Bobot</th>
                              <th>Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $num = 1;
                            foreach ($this->Mdatakriteria->get_data_nilai_kriteria($key['id_kriteria']) as $nilai) { ?>
                              <tr>
                                <td><?php echo $num++;  ?></td>
                                <td><?php echo $nilai['nilai'] ?></td>
                                <td> <a href="<?php echo base_url(); ?>data-kriteria/edit/<?= $nilai['id_nilai_kriteria'] ?>" class="btn btn-warning btn-sm">Ubah</a></td>
                              </tr>
                            <?php } ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>