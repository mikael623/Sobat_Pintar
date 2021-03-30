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
                        <li class="breadcrumb-item active">Materi</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Materi</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool btn-outline-primary" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"> Tambah Materi</i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>

                    <!-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button> -->
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 2%">
                                #
                            </th>
                            <th style="width: 70%">
                                Materi
                            </th>
                            <th style="width: 8%" class="text-center">
                                Status
                            </th>
                            <th style="width: 20%">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            $no = 1;
                            foreach ($materi as $mtr) :
                            ?>
                                <td>
                                    <?php
                                    echo $no++
                                    ?>
                                </td>
                                <td>
                                    <a>
                                        <?php
                                        echo $mtr->judul_materi
                                        ?>
                                    </a>
                                </td>
                                <td class="project-state">
                                    <span class="badge badge-success">Success</span>
                                </td>
                                <td onclick="javascript: return confirm('Anda yakin hapus?')" class="project-actions text-right">
                                    <div class="btn btn-info btn-sm">
                                        <i class="fas fa-pencil-alt"></i> Edit
                                    </div>
                                    <?php echo anchor('materi/hapus/' . $mtr->id, '<div class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash">
                                        </i>
                                        Delete
                                    </div>') ?>

                                </td>
                        </tr>
                    <?php
                            endforeach;
                    ?>
                    <!-- <tr>
                        <td>
                            #
                        </td>
                        <td>
                            <a>
                                Materi 2
                            </a>
                        </td>
                        <td class="project-state">
                            <span class="badge badge-success">Success</span>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="#">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr> -->
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Input Materi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo base_url() . 'materi/tambah_materi'; ?>">
                    <div class="card-body">
                        <h5 class="mb-2">Judul Materi</h5>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-book-open"></i></span>
                            </div>
                            <input type="text" name="judul_materi" class="form-control" placeholder="Judul Materi">
                        </div>

                        <h5 class="mt-4 mb-2">Isi Materi</h5>

                        <div class="row">

                            <!-- /.col-lg-6 -->
                            <div class="col-lg-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"></span>
                                    </div>
                                    <textarea type="text" name="isi_materi" class="form-control" rows="3" placeholder="Isi Materi"></textarea>
                                </div>
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                    </div>
                    <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>