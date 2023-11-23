<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Login</h3>
                            </div>
                            <div class="card-body">
                                <?= $this->session->flashdata('message'); ?>
                                <form class="user" method="post" action="<?= base_url('auth/cek_login'); ?>">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" name="email" />
                                        <label for="inputEmail">Email address</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="password" type="password" placeholder="Password" name="password"/>
                                        <label for="inputPassword">Password</label>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                        <!-- <a class="btn btn-primary" href="<?= base_url('auth/cek_login'); ?>">Login</a> -->
                                        <button type="submit" class="btn btn-primary btn-block" href="<?= base_url('auth/cek_login'); ?>">Login</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                <div><a class="small" href="password.html">Forgot Password?</a></div>
                                <div class="small"><a href="<?= base_url('Auth/registrasi'); ?>">Buat akun</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>