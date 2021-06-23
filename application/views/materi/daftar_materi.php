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
                        <li class="breadcrumb-item"><?php echo anchor('hello/index', 'Beranda'); ?></li>
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
                <h3 class="card-title">Materi Kelas 7</h3>

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
                            <th style="width: 95%">
                                Materi
                            </th>
                            <th style="width: auto"></th>
                            <th style="width: auto"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($materi as $mtr) :
                        ?>
                            <tr>
                                <td>
                                    <?php echo $no++ ?>
                                </td>
                                <td>
                                    <b><?php echo $mtr->judul_materi ?></b>
                                    <div class="overflow-hidden text-truncate font-weight-light" style="max-width: 200px;">
                                        <?php echo $mtr->isi_materi ?>
                                    </div>
                                </td>
                                <td class="project-actions text-right">
                                    <div>
                                        <?php echo anchor('materi/edit/' . $mtr->id, '<button type="button" class="btn btn-info btn-sm">
                                        <i class="fas fa-pencil-alt"></i>
                                    </button>') ?>
                                    </div>
                                </td>
                                <td onclick="javascript: return confirm('Anda yakin hapus?')" class="project-actions text-right">
                                    <?php echo anchor('materi/hapus/' . $mtr->id, '<button type="button" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </button>') ?>
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

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Materi kelas 8</h3>

                <div class="card-tools">
                    <?php echo anchor('materi/tambah_materi8', '<button class="btn btn-tool btn-outline-secondary" ><i class="fas fa-plus"> Tambah Materi</i></button>'); ?>
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
                                Materi
                            </th>
                            <th style="width: auto"></th>
                            <th style="width: auto"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($materidelapan as $mtr8) :
                        ?>
                            <tr>
                                <td>
                                    <?php echo $no++ ?>
                                </td>
                                <td>
                                    <b><?php echo $mtr8->judul_materi ?></b>
                                    <div class="overflow-hidden text-ov text-truncate font-weight-light" style="max-width: 200px;">
                                        <?php echo $mtr8->isi_materi ?>
                                    </div>
                                </td>
                                <td class="project-actions text-right">
                                    <div>
                                        <?php echo anchor('materi/edit8/' . $mtr8->id, '<button type="button" class="btn btn-info btn-sm">
                                        <i class="fas fa-pencil-alt"></i>
                                    </button>') ?>
                                    </div>
                                </td>
                                <td onclick="javascript: return confirm('Anda yakin hapus?')" class="project-actions text-right">
                                    <?php echo anchor('materi/hapus8/' . $mtr8->id, '<button type="button" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </button>') ?>
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

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Materi kelas 9</h3>

                <div class="card-tools">
                    <?php echo anchor('materi/tambah_materi9', '<button class="btn btn-tool btn-outline-secondary" ><i class="fas fa-plus"> Tambah Materi</i></button>'); ?>
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
                                Materi
                            </th>
                            <th style="width: auto"></th>
                            <th style="width: auto"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($materisembilan as $mtr9) :
                        ?>
                            <tr>
                                <td>
                                    <?php echo $no++ ?>
                                </td>
                                <td>
                                    <b><?php echo $mtr9->judul_materi ?></b>
                                    <div class="overflow-hidden text-truncate font-weight-light" style="max-width: 200px;">
                                        <?php echo $mtr9->isi_materi ?>
                                    </div>
                                </td>
                                <td class="project-actions text-right">
                                    <div>
                                        <?php echo anchor('materi/edit9/' . $mtr9->id, '<button type="button" class="btn btn-info btn-sm">
                                        <i class="fas fa-pencil-alt"></i>
                                    </button>') ?>
                                    </div>
                                </td>
                                <td onclick="javascript: return confirm('Anda yakin hapus?')" class="project-actions text-right">
                                    <?php echo anchor('materi/hapus9/' . $mtr9->id, '<button type="button" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </button>') ?>
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