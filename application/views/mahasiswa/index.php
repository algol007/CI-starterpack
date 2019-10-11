<div class="container">

    <?php if( $this->session->flashdata('flashdata') ) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flashdata'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <? endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url();?>mahasiswa/add_mahasiswa" class="btn btn-primary">Tambah Data Mahasiswa</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Seacrh.." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Button</button>
                    </div>                
                </div>        
            </form>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Mahasiswa</h3>
            <?php if( empty($mahasiswa) ) : ?>
                <div class="alert alert-danger" role="alert">
                    Data tidak ditemukan !
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($mahasiswa as $mahasiswa) : ?>
                <li class="list-group-item"><?= $mahasiswa['nama']; ?>
                    <a href="<?= base_url(); ?>mahasiswa/delete_mahasiswa/<?= $mahasiswa['id_mahasiswa']; ?>" class="badge 
                    badge-danger float-right" onclick="return confirm('Hapus data mahasiswa ?');">Delete</a>
                    <a href="<?= base_url(); ?>mahasiswa/edit_mahasiswa/<?= $mahasiswa['id_mahasiswa']; ?>" class="badge badge-warning float-right">Edit</a>
                    <a href="<?= base_url(); ?>mahasiswa/detail_mahasiswa/<?= $mahasiswa['id_mahasiswa']; ?>" class="badge badge-primary float-right">Details</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>