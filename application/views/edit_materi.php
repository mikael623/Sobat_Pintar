<!DOCTYPE html>
<html>
    <head>
        <title>Edit Soal</title>
        <meta charset="utf-8">
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>

    <body>
    <div class="container">
        <!--Awal card form-->
        <div class="card mt-3">
            <div class="card-header">
            Edit Soal
        </div>
        <div class="card-body">
            <form method="post" action="<?php echo base_url('Welcome/AksiEdit')?> ">
                <div class="form-group">
                    <label>Soal</label>
                    <textarea type="text" value="<?php echo $data_soal->soal?>" class="form-control" name="soal"></textarea>
                </div>
                <br>
                <label>Pilihan</label>
                <div class="input-group mb-3">
                    <div class="input-group-text">
                        <input class="form-check-input mt-0" type="radio" value="pilih1" aria-label="Radio for following text input">
                    </div>
                    <input type="text" class="form-control" aria-label="Text input with checkbox">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-text">
                        <input class="form-check-input mt-0" type="radio" value="pilih2" aria-label="Radio for following text input">
                    </div>
                    <input type="text" class="form-control" aria-label="Text input with checkbox">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-text">
                        <input class="form-check-input mt-0" type="radio" value="pilih3" aria-label="Radio for following text input">
                    </div>
                    <input type="text" class="form-control" aria-label="Text input with checkbox">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-text">
                        <input class="form-check-input mt-0" type="radio" value="pilih4" aria-label="Radio for following text input">
                    </div>
                    <input type="text" class="form-control" aria-label="Text input with checkbox">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-text">
                        <input class="form-check-input mt-0" type="radio" value="pilih5" aria-label="Radio for following text input">
                    </div>
                    <input type="text" class="form-control" aria-label="Text input with checkbox">
                </div>
                <div class="form-group">
                    <label>Jawaban</label>
                    <input class="form-control" name="jawab">
                </div>
                <br>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary me-md-2" type="button" href="save.php">OK</button>
                </div>
            </form>
        </div>
    </div>
        <!--Awal card form-->
</div>
</body>
</html>