<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Tambah Post</h1>

    <!-- DataTales Example -->
    <div class="row">
        <div class="col-lg">
            <div class="card shadow mb-4">
                <div class="card-body">
                <?= validation_errors(); ?>
                    <form action="" method="POST">
                        <div class="mb-3 row">
                            <label for="title" class="col-sm-2 col-form-label">Title:</label>
                            <div class="col-sm-10">
                                <textarea name="title" class="form-control" id="title" cols="30" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="conten" class="col-sm-2 col-form-label">Conten :</label>
                            <div class="col-sm-10">
                                <textarea name="conten" class="form-control" id="conten" cols="30" rows="7"></textarea>
                            </div>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>