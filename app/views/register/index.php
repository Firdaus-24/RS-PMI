<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Register
                </div>
                <div class="card-body">
                    <div class="col-sm-12">
                        <?php
                        Flasher::Message();
                        // var_dump($data['data']);
                        ?>
                    </div>
                    <form action="<?= base_url ?>/register/simpanUser" method="post">
                        <div class="form-group mb-3">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" id="username" name="username" autocomplete="off" maxlength="100" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="name">Nama Lengkap:</label>
                            <input type="text" class="form-control" id="name" name="name" autocomplete="off" maxlength="100" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" autocomplete="off" maxlength="255" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nik">NIK:</label>
                            <input type="text" class="form-control" id="nik" name="nik" autocomplete="off" pattern="\d*" maxlength="16" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="alamat">Alamat:</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" autocomplete="off" maxlength="255" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="msisdn">No Telfon:</label>
                            <input type="text" class="form-control" id="msisdn" name="msisdn" pattern="\d*" maxlength="13" autocomplete="off" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" autocomplete="off" maxlength="255" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="register">Save</button>
                    </form>
                    <small>sudah punya akun <a href="./">Login</a></small>
                </div>
            </div>
        </div>
    </div>
</div>