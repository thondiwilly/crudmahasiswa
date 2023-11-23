<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card”">
        <div class=" card-header justify-content-center">
                Form Tambah Data Kaprodi
            </div>

            <div class="card-body">
                <form action="<?=base_url('Prodi/update'); ?>" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama"  value="<?= $prodi['nama'];?>" class="form-control" id="nama" placeholder="Nama">

                    </div>
                    <div class="form-group">
                        <label for="ruangan">Ruangan</label>
                        <input type="text" name="ruangan" value="<?= $prodi['ruangan'];?>" class="form-control" id="ruangan" placeholder="Ruangan">

                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" name="jurusan" value="<?= $prodi['jurusan'];?>" class="form-control" id="jurusan" placeholder="Jurusan">
                    </div>
                    <div class="form-group">
                        <label for="akreditasi">Akreditasi</label>
                        <input type="text" name="akreditasi" value="<?= $prodi['jurusan'];?>" class="form-control" id="akreditasi" placeholder="Akreditasi">

                    </div>
                    <div class="form-group">
                        <label for="nama_kaprodi">Nama Kaprodi</label>
                        <input type="text" name="nama_kaprodi" value="<?= $prodi['nama_kaprodi'];?>" class="form-control" id="nama_kaprodi" placeholder="Nama Kaprodi">

                    </div>
                    <div class="form-group">
                        <label for="tahun_berdiri">Tahun Berdiri</label>
                        <input type="text" name="tahun_berdiri" value="<?= $prodi['tahun_berdiri'];?>" class="form-control" id="tahun_berdiri" placeholder="Tahun Berdiri">
                    </div>
                    <div class="form-group">
                        <label for="output_lulusan">Output Lulusan</label>
                        <input type="text" name="output_lulusan" value="<?= $prodi['output_lulusan'];?>" class="form-control" id="output_lulusan" placeholder="Output Lulusan">

                    </div>
                    <a href="<?= base_url('Prodi') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="tambah" class="btn btn-primary float right">Tambah Kaprodi </button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>