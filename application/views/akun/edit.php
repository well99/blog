<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Edit Akun</h1>

    <!-- DataTales Example -->
    <div class="row">
        <div class="col-lg">
            <div class="card shadow mb-4">
                <div class="card-body">
                <?= validation_errors(); ?>
                    <form action="" method="POST">
                        <div class="mb-3 row">
                            <label for="username" class="col-sm-2 col-form-label">Username:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="username" value="<?= $akun->username ?>">
                                
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-2 col-form-label">Password :</label>
                            <div class="col-sm-10">
                            <input type="password" class="form-control" name="password" value="<?= $akun->password ?>">
                                
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-2 col-form-label">Name :</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" value="<?= $akun->name ?>">
                                
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="role" class="col-sm-2 col-form-label">Role :</label>
                            <div class="col-sm-10">
                                <select name="role" id="role" class="form-control">
                                <?php if ($akun->role == 1) { ?>
                                    <option selected value="1">Admin</option>
                                    <?php } else if ($akun->role == 2) { ?>
                                    <option selected value="2">Author</option>
                                    <?php } ?>
                                    <option value="1">Admin</option>
                                    <option value="2">Author</option>
                                </select>
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