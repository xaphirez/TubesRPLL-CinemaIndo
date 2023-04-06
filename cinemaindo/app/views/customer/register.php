<div class="bg-secondary vh-100">
    <div class="global-container text-center">
        <div class="card p-2 bg-dark text-light" style="border-radius: 1rem;">
            <div class="card-body-register p-3 pb-2 text-center">
            <img src="<?= BASEURL; ?>/img/Cindo.png" alt="Cinema Indo" width="150" class="rounded-circle img-thumbnail shadow-sm mb-3">
                <h2 class="card-title text-center">R E G I S T E R</h2>
            </div>
                <div class="container">
                    <form action="<?= BASEURL; ?>/customer/regis" method="POST">
                        <div class="d-flex flex-row align-items-center mb-0 pt-2">
                        <div class="form-outline flex-fill mb-0">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder = "Masukan Email" required>
                        </div>
                        </div>
                        <div class="mb pt-1">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder = "Masukan Nama" required>
                        </div>
                        <div class="mb pt-1">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder = "Masukan Password" required>
                        </div>
                        <div class="mb pt-1">
                            <label for="telepon" class="form-label">Telepon</label>
                            <input type="text" class="form-control" id="telepon" name="telepon" placeholder = "Masukan No Telpon" required>
                        </div>
                        <div class="text-center pt-4 pb-2">
                        <button type="submit" class="btn-color btn btn-primary btn-block fa-lg gradient-custom-2 mb-3">Register</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>