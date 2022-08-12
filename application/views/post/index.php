<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Post</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url()?>post/tambah" class="btn btn-primary">Tambah Post</a>
           
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Conten</th>
                            <th>Date</th>
                            <th>Pembuat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no=1;
                        foreach ($post as $p) : ?>
                        <tr>
                            <td><?= $no;?></td>
                            <td><?= $p->title;?></td>
                            <td><?= $p->content;?></td>
                            <td><?= $p->date;?></td>
                            <td><?= $p->name;?></td>
                            <td>
                                <a href="<?= base_url();?>post/edit/<?= $p->idpost;?>" class="btn btn-info">Ubah</a>
                                <a href="<?= base_url();?>post/hapus/<?= $p->idpost;?>"
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