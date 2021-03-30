<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Materi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Beranda</a></li>
                        <li class="breadcrumb-item"><?php echo anchor('soal/index', 'Soal'); ?></li>
                        <li class="breadcrumb-item active">Tambah Soal</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <!-- Input addon -->
                    <form action="<?php echo base_url() . 'soal/tambah_aksi'; ?>" method="POST">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Input Soal</h3>
                            </div>
                            <div class="card-body">
                                <h5 class="mb-2">Soal</h5>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-book-open"></i></span>
                                    </div>
                                    <input type="text" name="soal" class="form-control" placeholder="Soal">
                                </div>

                                <h5 class="mt-4 mb-2">Jawaban</h5>

                                <div class="row">

                                    <!-- /.col-lg-6 -->
                                    <div class="col-lg-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">A</span>
                                            </div>
                                            <input type="text" name="a" class="form-control" placeholder="A">
                                        </div>
                                        <!-- /input-group -->
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">B</span>
                                            </div>
                                            <input type="text" name="b" class="form-control" placeholder="B">
                                        </div>
                                        <!-- /input-group -->
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">C</span>
                                            </div>
                                            <input type="text" name="c" class="form-control" placeholder="C">
                                        </div>
                                        <!-- /input-group -->
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">D</span>
                                            </div>
                                            <input type="text" name="d" class="form-control" placeholder="D">
                                        </div>
                                        <!-- /input-group -->
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">E</span>
                                            </div>
                                            <input type="text" name="e" class="form-control" placeholder="E">
                                        </div>
                                        <!-- /input-group -->
                                    </div>
                                    <!-- /.col-lg-12 -->
                                </div>

                                <h5 class="mb-2">Jawaban yang benar</h5>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-check"></i></span>
                                    </div>
                                    <input type="text" name="correct" class="form-control" placeholder="Jawaban">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-lg-right">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </form>
                    <!-- /.card -->

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->