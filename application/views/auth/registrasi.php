<!DOCTYPE html>
<html lang="id">
<head>
    <title>Pendaftaran</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add your stylesheet link and other head content here -->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="post" action="<?= base_url('auth/cek_regis'); ?>">
                <span class="login100-form-title p-b-26">
                    Daftar Akun
                </span>
                <div class="form-group">
                    <label for="namalengkap">Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?= set_value('nama'); ?>" required
                           placeholder="Nama Lengkap">
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" value="<?= set_value('email'); ?>"
                           placeholder="Email" required>
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password1" class="form-control" value="<?= set_value('password1'); ?>"
                           required placeholder="Password">
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="password2">Masukan Password Sekali Lagi</label>
                    <input type="password" name="password2" class="form-control" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-warning float-right">DAFTAR</button>

                <div class="text-center p-t-115">
                    <span class="txt1">
                        Sudah memiliki akun?
                    </span>
                    <a class="txt2" href="<?= base_url('Auth'); ?>">Masuk</a>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
