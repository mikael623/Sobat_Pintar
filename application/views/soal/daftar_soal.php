<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Soal</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><?php echo anchor('hello/index', 'Beranda'); ?></li>
                        <li class="breadcrumb-item active">Soal</li>
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
                <h3 class="card-title">Soal</h3>

                <div class="card-tools">
                    <?php echo anchor('soal/tambah_soal', '<button class="btn btn-tool btn-outline-secondary" ><i class="fas fa-plus"> Tambah Soal</i></button>'); ?>
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
                            <th style="width: 95%">
                                Soal
                            </th>
                            <th style="width: auto"></th>
                            <th style="width: auto"></th>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            $no = 1;
                            foreach ($soal as $soal1) :
                            ?>
                                <td>
                                    <?php
                                    echo $no++
                                    ?>
                                </td>
                                <td>
                                    <b><?php echo $soal1->soal ?></b>
                                    <div class="overflow-hidden text-truncate font-weight-light" style="max-width: 200px;">
                                        <?php echo $soal1->correct ?>
                                    </div>
                                </td>
                                <td class="project-actions text-right">
                                    <?php echo anchor('soal/edit/' . $soal1->id, '<div class="btn btn-info btn-sm">
                                        <i class="fas fa-pencil-alt"></i>
                                    </div>') ?>

                                </td>
                                <td onclick="javascript: return confirm('Anda yakin hapus?')" class="project-actions text-right">
                                    <?php echo anchor('soal/hapus/' . $soal1->id, '<div class="btn btn-danger btn-sm">
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