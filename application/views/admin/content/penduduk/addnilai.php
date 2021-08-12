<style type="text/css">
  #jenis {
    /* display: block;
        position: fixed; */
    z-index: 1;
    /* top: 20%;
        right: 2%;
        width: 300px; */
    height: 30px;

    /* Size and position */
    margin: auto;
    padding: 10px;
    /* Styles */
    background: #fff;
    border-radius: 7px;
    border: 2px solid rgba(3, 14, 18, 0.21);
    /* box-shadow: 0 2px 1px rgba(255, 10, 10, 0.1); */
    cursor: pointer;
    outline: none;
    /* Font settings */
    color: #000;

  }
</style>
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
                      <li class="breadcrumb-item"><a href="#!">Tambah Penilaian</a></li>
                      <li class="breadcrumb-item"><a href="#!">Tambah Data</a></li>
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
                    <h5>Tambah Penilaian</h5>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <?php echo form_open('data-penduduk/addnilai'); ?>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nama Produk</label>
                          <select id="id_penduduk" name="nama" class="form-control select2" required="">
                            <option value="">Pilih Produk</option>
                            <?php
                            foreach ($data_penduduk as $pdk) {
                              if (in_array($pdk['id_penduduk'], $arNilaii)) {
                                continue;
                              } else {
                                echo '<option value="' . $pdk['id_penduduk'] . '">' .  $pdk['nama'] .  '</option>';
                              }
                            }
                            ?>
                          </select>
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Nama Penduduk</label>
                          <input type="text" id="jenis" name="jenis" class="form-control" placeholder="Nama Penduduk" disabled>
                        </div>


                        <?php foreach ($data_kriteria as $key) { ?>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Kriteria <?php echo $key['nama_kriteria'] ?></label>
                            <select name="kriteria[]" class="form-control select2" required="">
                              <option value="">Pilih Penduduk</option>
                              <?php
                              foreach ($this->Mdatakriteria->get_data_nilai_kriteria($key['id_kriteria']) as $kriteria) {
                                echo '<option value="' . $kriteria['id_nilai_kriteria'] . '">' . $kriteria['nilai'] . '</option>';
                              }
                              ?>
                            </select>
                          </div>
                        <?php } ?>

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<script type="text/javascript">
  $(function() {
    $.ajaxSetup({
      type: "POST",
      url: "<?php echo base_url('Penduduk/ambil_data') ?>",
      cache: false,
    });

    $("#id_penduduk").change(function() {
      var value = $(this).val();
      var txt1 = $("#id_penduduk").val(); //textbox value
      if (value > 0) {
        $.ajax({
          data: {
            type: value,
            id: txt1
          },
          cache: false,
          success: function(respond) {
            $("#jenis").html(respond);
            $("#jenis").val(respond);
            console.log(respond)
            console.log(txt1);
          }
        })
      }
    });
  })
</script>

<script>
  $(document).on('change', '#id_penduduk', function() {
    //var category_id = $('#category_item').val();
    //load_data('sub_category_data', category_id);
    console.log("1")
  });
</script>