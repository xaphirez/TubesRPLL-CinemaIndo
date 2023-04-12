<div class="bg-secondary vh-100">
    <div class="container pt-3 p text-center h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-4">
                <div class="card p-3 bg-dark text-light" style="border-radius: 1rem;">
                    <div class="card-body-register text-center">
                    <img src="<?= BASEURL; ?>/img/Cindo.png" alt="Cinema Indo" width="100" class="rounded-circle img-thumbnail shadow-sm mb-3">
                        <h2 class="card-title text-center">R E G I S T E R</h2>
                        <h2 class="card-title text-center">A D M I N</h2>
                    </div>
                        <div class="container">
                            <form action="<?= BASEURL; ?>/admin/register" method="POST">
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
                                <div class="text-center pt-4 pb-2">
                                <button type="submit" class="btn-color btn btn-primary btn-block fa-lg gradient-custom-2 mb-3">Register</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>