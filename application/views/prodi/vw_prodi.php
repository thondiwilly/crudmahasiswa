<section class="content-section bg-light" id="about">
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        <div class="row">
            <div class="col-md-6">
                <a href="<?=base_url()?>Prodi/tambah" class="btn btn-info mb-2">tambah prodi</a>
            </div>
        </div>
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama Prodi</th>
                        <th>ruangan</th>
                        <th>Jurusan</th>
                        <th>akreditasi</th>
                        <th>nama kaprodi</th>
                        <th>tahun berdiri</th>
                        <th>output lulusan</th>
                        
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                    <?php foreach ($prodi as $us) : ?>
                    <tr>
                        <td> <?= $i; ?>.</td>
                        <td><?= $us['nama']; ?></td>
                        <td><?= $us['ruangan']; ?></td>
                        <td><?= $us['jurusan']; ?></td>
                        <td><?= $us['akreditasi']; ?></td>
                        <td><?= $us['nama_kaprodi']; ?></td>
                        <td><?= $us['tahun_berdiri']; ?></td>
                        <td><?= $us['output_lulusan']; ?></td>
                            <td>
                                <a href="<?= base_url('Prodi/hapus/') . $us['id']; ?>" class="btn btn-danger btn-l">Hapus</a> 
                                <a href="<?= base_url('index.php/Prodi/edit/') . $us['id']; ?>" class="btn btn-dark btn-l">Edit</a> 
                                <a href="<?= base_url('index.php/Prodi/detail/') . $us['id']; ?>" class="btn btn-dark btn-l">Detail</a> 
                            </td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                </tbody>
        </table>
    </div>
</section>