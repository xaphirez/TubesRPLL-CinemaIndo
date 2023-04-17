<div class="bg-secondary">
    <div class="d-flex justify-content-center align-items-center h-100">
        <div class="row justify-content-center">
            <div class="card bg-dark text-light" style="border-radius: 1rem;">
                <form action="<?= BASEURL; ?>/customer/editprofil" method="POST">
                <div class="card-body">
                    <img src="https://via.placeholder.com/150" class="rounded-circle mb-3" alt="Profile Picture">
                </div>
                <div class="form-outline mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama_user" name="nama_user" placeholder="Masukan Nama" value="<?php echo isset($data['user']) ? $data['user']['nama_user'] : ''; ?>">
                </div>
                <div class="form-outline mb-3">
                    <label for="telepon" class="form-label">Telepon</label>
                    <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Masukan telepon" value="<?php echo isset($data['user']) ? $data['user']['telepon'] : ''; ?>">
                </div>  
                <div class="text-center pt-4">
                    <button type="submit" class="btn-color btn btn-primary btn-block fa-lg gradient-custom-2 mb-3">Submit</button>
                </div>
                <div class="text-center mb-3">
                    <a href="<?= BASEURL; ?>/customer/profile" class="btn-color btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" style="text-decoration: none;"> Back</a>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
