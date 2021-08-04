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
                                            <h5 class="m-b-10">Form</h5>
                                        </div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!">Data Penduduk</a></li>
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
                                        <h5>Data Penduduk <?php echo "    =>   " . $_SESSION['nama'] ?></h5>
                                        <?php

                                        if ($data_penduduk_nilai['id_penduduk']) {
                                        } else {
                                            echo "<font color='red'>belum di inputkan</font>";
                                        }
                                        ?>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <?php echo form_open('data-penduduk/editnilai/' . $data_penduduk_nilai['id_penduduk_nilai']); ?>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Nama Penduduk</label>
                                                    <!-- <select id="id_penduduk" name="id_penduduk" class="form-control select2" required="" disabled>
                                                        <option value="">Pilih Penduduk</option>
                                                        <?php
                                                        foreach ($data_penduduk as $pdk) {
                                                            $selected = ($pdk['id_penduduk'] == $data_penduduk_nilai['id_penduduk']) ? ' selected="selected"' : "";
                                                            echo '<option value="' . $pdk['id_penduduk'] . '" ' . $selected . '>' . $pdk['nama'] . '</option>';
                                                        }
                                                        ?>
                                                    </select> -->
                                                    <input type="text" class="form-control" value="<?php echo $data_penduduk_nilai['nama'] ?>" placeholder="Text">

                                                </div>

                                                <?php foreach ($data_kriteria as $key) { ?>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Kriteria <?php echo $key['nama_kriteria'] ?> <?php echo $key['kd_kriteria'] ?></label>
                                                        <br>
                                                        <input type="text" class="form-control" value="<?php
                                                                                                        echo $this->Mdatakriteria->get_data_nilai_kriteria_id($data_penduduk_nilai[$key['kd_kriteria']])['pilihan'];
                                                                                                        ?>" placeholder="Text">
                                                        <br>
                                                        <?php

                                                        ?>
                                                    </div>
                                                <?php } ?>

                                                <!-- <?php foreach ($data_kriteria as $key) { ?>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Kriteria <?php echo $key['nama_kriteria'] ?> <?php echo $key['kd_kriteria'] ?></label>
                                                        <select name="kriteria[]" class="form-control" required="" disabled>
                                                            <option value="">Pilih Penduduk</option>
                                                            <?php
                                                            foreach ($this->Mdatakriteria->get_data_nilai_kriteria($key['id_kriteria']) as $kriteria) {

                                                                echo '<option value="' . $kriteria['id_nilai_kriteria'] . '" ' . $selected . '>' . $kriteria['pilihan'] . '</option>';
                                                            }
                                                            ?>
                                                        </select>
                                                        <br>
                                                        <?php

                                                            echo $kriteria['id_nilai_kriteria'] ?>
                                                    </div>
                                                <?php } ?> -->
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