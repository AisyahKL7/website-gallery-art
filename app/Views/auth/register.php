<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Registrasi untuk melanjutkan</h5>

            <?php if(session()->getFlashData('success')) { ?>
                <div class="alert alert-success">
                    <?= session()->get('success') ?>
                </div>
            <?php } ?>

            <?php if(session()->getFlashdata('errors')) { ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata('errors') ?>
                </div>
            <?php } ?>

            <form action="/register" method="post">
                <div class="form-group">
                    <label for="example-nama">Nama</label>
                    <input type="text" class="form-control" id="example-nama" aria-describedby="emailHelp" 
                        placeholder="Masukkan Nama" required name="nama">
                </div>

                <div class="form-group">
                    <label for="example-email">Email</label>
                    <input type="text" class="form-control" id="example-email" aria-describedby="emailHelp" 
                        placeholder="Masukkan email" required name="email">
                </div>

                <div class="form-group">
                    <label for="example-password">Password</label>
                    <input type="password" class="form-control" id="example-password" aria-describedby="emailHelp" 
                        placeholder="Masukkan password" required name="password">
                </div>

                <div class="form-group">
                    <label for="example-password-confirmation">Konfirmasi Password</label>
                    <input type="password" class="form-control" id="example-password-confirmation" aria-describedby="emailHelp" 
                        placeholder="Masukkan password" required name="password_confirmation">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>