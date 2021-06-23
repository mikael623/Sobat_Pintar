<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Materi</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <?php foreach ($materi as $mtr) { ?>
                        <!-- Input addon -->
                        <form action="<?php echo base_url() . 'materi/update'; ?>" method="post">
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Edit Materi</h3>
                                </div>
                                <div class="card-body">
                                    <h5 class="mb-2">Judul Materi</h5>

                                    <div class="input-group mb-3">
                                        <input type="hidden" name="id" class="form-control" value="<?php echo $mtr->id ?>">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-book-open"></i></span>
                                        </div>
                                        <input type="text" name="judul_materi" class="form-control" value="<?= $mtr->judul_materi ?>">
                                    </div>

                                    <h5 class="mt-4 mb-2">Sub Materi</h5>

                                    <div class="row">

                                        <!-- /.col-lg-6 -->
                                        <div class="col-lg-12">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">A</span>
                                                </div>
                                                <textarea type="text" name="submateri" class="form-control" rows="3">
                                                <?php echo $mtr->submateri ?></textarea>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-12 -->
                                    </div>

                                    <h5 class="mt-4 mb-2">Isi Materi</h5>

                                    <div class="row">

                                        <!-- /.col-lg-6 -->
                                        <div class="col-lg-12">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">A</span>
                                                </div>
                                                <textarea type="text" name="isi_materi" class="form-control" rows="3"><?php echo $mtr->isi_materi ?></textarea>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-12 -->
                                    </div>

                                    <h5 class="mt-4 mb-2">Upload Gambar</h5>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="gambar" placeholder="Pilih Gambar">
                                                <label class="custom-file-label"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="row">

                                        <div class="col-lg-12">
                                            <div class="input-group mb-3">
                                                <img src="<?#= base_url(); ?>assets/dist/upload_file/<?#= $mtr->gambar ?>" alt="Gambar" width="100" height="100">
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer text-lg-right">
                                    <input type="submit" class="btn btn-primary" value="Simpan"></input>
                                </div>
                            </div>
                        </form>
                        <!-- /.card -->
                    <?php } ?>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>