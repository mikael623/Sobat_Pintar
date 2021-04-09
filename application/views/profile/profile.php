<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Profil Admin</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo site_url('hello/index') ?>">Beranda</a></li>
            <li class="breadcrumb-item active">Profil</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <div class="content">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-11">
        <div class="accordion width" id="accordionHorizontalExample">
          <!-- Accordion group creating-->
          <div class="card flex-row shadow-none bg-transparent">
            <div class="h-100 col-sm-4 bg-white rounded">
              <img class="img-fluid rounded-circle elevation-2 w-50 mt-5 bg-black " src="<?php echo base_url() ?>assets/dist/img/logo.png">
              <h4 class="font-weight-bold mt-4"><?= $user['name']; ?></h4>
              <p><?= $user['role']; ?></p>
              <ul class="list-unstyled d-flex justify-content-center">
                <li><a href="#"><i class="fab fa-facebook-f px-3 text-info"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin px-3 text-info"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram px-3 text-info"></i></a></li>
              </ul>
              <button type="button" class="btn btn-primary btn-dark mb-4" data-toggle="collapse" data-target="#collapseOne">View Profile</button>
            </div>
            <div id="collapseOne" class="collapse col-sm-8" data-parent="#accordionHorizontalExample">
              <?= form_open_multipart('hello/edit'); ?>
              <div class="card ml-lg-3 shadow-none">
                <div class="card-header text-left">
                  Profil
                </div>
                <div class="card-body">
                  <div class="form-row ">
                    <div class="form-group col-md-6 text-left">
                      <input type="hidden" class="form-control form-control-border" name="username" id="username" placeholder="Nama" value="<?= $user['username']; ?>" readonly>
                      <label>Nama</label>
                      <input type="text" class="form-control form-control-border" name="name" id="name" placeholder="Nama" value="<?= $user['name']; ?>">
                    </div>
                    <div class="form-group col-md-6 text-left">
                      <label>Email</label>
                      <input type="email" class="form-control form-control-border" name="email" id="email" placeholder="Email" value="<?= $user['email']; ?>">
                    </div>
                  </div>
                  <div class="form-row mt-3">
                    <div class="form-group col-md-4 mb-3 text-left">
                      <label>Tanggal Lahir</label>
                      <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <div class="input-group-prepend" data-target="#reservationdate" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                        <input type="text" class="form-control form-control-border datetimepicker-input" data-target="#reservationdate" name="tgl_lahir" placeholder="Tanggal Lahir" value="<?= $user['tgl_lahir']; ?>" />

                      </div>
                    </div>
                    <div class=" col-md-4 mb-3 text-left">
                      <div class="form-group ">
                        <label>Jenis Kelamin</label>
                        <select class="form-control form-control-border" name="gender">
                          <option value="<?= $user['gender']; ?>">Choose</option>
                          <option>Laki-laki</option>
                          <option>Perempuan</option>
                        </select>
                      </div>
                    </div>
                    <div class=" col-md-4 mb-3 text-left">
                      <label>No. HP</label>
                      <input type="number" class="form-control form-control-border" name="telp" placeholder="No. HP" value="<?= $user['telp']; ?>" />
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6 text-left">
                      <label>Role</label>
                      <input type="text" class="form-control form-control-border" name="role" placeholder="Role" value="<?= $user['role']; ?>">
                    </div>
                    <div class="form-group col-md-6 text-left">
                      <label>Alamat</label>
                      <input type="text" class="form-control form-control-border" name="alamat" placeholder="Alamat" value="<?= $user['alamat']; ?>">
                    </div>
                  </div>
                </div>
                <div class="card-footer text-lg-right">
                  <button type="reset" class="btn btn-danger" value="Reset">Reset</button>
                  <button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
                </div>
              </div>
              </form>

            </div>
          </div>

          <script>
            var horizontalAccordions = $(".accordion.width");

            horizontalAccordions.each(function() {
              var accordion = $(this);
              var collapse = accordion.find(".collapse");
              var bodies = collapse.find("> *");
              accordion.height(accordion.height());
              bodies.width(bodies.eq(0).width());
              collapse.not(".show").each(function() {
                $(this).parent().find("[data-toggle='collapse']")
                  .addClass("collapsed");
              });
            });
          </script>
        </div>
      </div>
    </div>
  </div>
</div>