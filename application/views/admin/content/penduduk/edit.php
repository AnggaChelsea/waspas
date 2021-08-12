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
                          <label for="exampleInputEmail1">Nama</label>
                          <input type="text" value="<?php echo $data_penduduk['nama'] ?>" name="nama" class="form-control" required>
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