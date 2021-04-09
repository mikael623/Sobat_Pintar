<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Soal</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <?php foreach ($soal as $soal1) { ?>
                        <!-- Input addon -->
                        <form action="<?php echo base_url() . 'soal/update'; ?>" method="POST">
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Input Soal</h3>
                                </div>
                                <div class="card-body">
                                    <h5 class="mb-2">Soal</h5>

                                    <div class="input-group mb-3">
                                        <input type="hidden" name="id" class="form-control" value="<?php echo $soal1->id ?>">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-book-open"></i></span>
                                        </div>
                                        <input type="text" name="soal" class="form-control" value="<?php echo $soal1->soal ?>">
                                    </div>

                                    <h5 class="mt-4 mb-2">Jawaban</h5>

                                    <div class="row">

                                        <!-- /.col-lg-6 -->
                                        <div class="col-lg-12">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">A</span>
                                                </div>
                                                <input type="text" name="a" class="form-control" value="<?php echo $soal1->a ?>">
                                            </div>
                                            <!-- /input-group -->
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">B</span>
                                                </div>
                                                <input type="text" name="b" class="form-control" value="<?php echo $soal1->b ?>">
                                            </div>
                                            <!-- /input-group -->
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">C</span>
                                                </div>
                                                <input type="text" name="c" class="form-control" value="<?php echo $soal1->c ?>">
                                            </div>
                                            <!-- /input-group -->
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">D</span>
                                                </div>
                                                <input type="text" name="d" class="form-control" value="<?php echo $soal1->d ?>">
                                            </div>
                                            <!-- /input-group -->
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">E</span>
                                                </div>
                                                <input type="text" name="e" class="form-control" value="<?php echo $soal1->e ?>">
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
                                        <input type="text" name="correct" class="form-control" value="<?php echo $soal1->correct ?>">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer text-lg-right">
                                    <button type="submit" class="btn btn-primary">Kirim</button>
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
<!-- /.content-wrapper -->