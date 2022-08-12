<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Akun</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url()?>akun/tambah" class="btn btn-primary">Tambah Akun</a>
           
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Name</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no=1;
                        foreach ($akun as $a) : ?>
                        <tr>
                            <td><?= $no;?></td>
                            <td><?= $a->username;?></td>
                            <td><?= $a->password;?></td>
                            <td><?= $a->name;?></td>
                            <td>
                                <a href="<?= base_url();?>akun/edit/<?= $a->username;?>" class="btn btn-info">Ubah</a>
                                <a href="<?= base_url();?>akun/hapus/<?= $a->username;?>"
                                    class="btn btn-danger">hapus</a>
                            </td>
                        </tr>
                        <?php
                        $no++; endforeach
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>