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
                    <?php echo anchor('materi/tambah_materi', '<button class="btn btn-tool btn-outline-secondary" ><i class="fas fa-plus"> Tambah Materi</i></button>'); ?>
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
                                <td class="project-actions text-right">
                                    <div class="btn btn-info btn-sm">
                                        <i class="fas fa-pencil-alt"></i> Edit
                                    </div>
                                </td>
                                <td onclick="javascript: return confirm('Anda yakin hapus?')" class="project-actions text-right">
                                    <?php echo anchor('materi/hapus/' . $mtr->id, '<div class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash">
                                        </i>
                                    </div>') ?>

                                </td>
                        </tr>
                    <?php
                            endforeach;
                    ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>