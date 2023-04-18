<div class="bg-secondary">
    <div class="d-flex justify-content-center align-items-center h-100">
        <div class="row justify-content-center">
            <div class="card bg-dark text-light" style="border-radius: 1rem;">
                <div class="card-body">
                    <img src="data:image/jpeg;base64,<?= base64_encode($data['gambar_profile']); ?>"
                        class="rounded-circle mb-3">
                    <h1 class="text-light"><?= $data['user']['nama_user']; ?></h1>
                    <p class="text-light"><strong>Email: </strong><?= $data['user']['email']; ?></p>
                    <p class="text-light"><strong>Telepon: </strong><?= $data['user']['telepon']; ?></p>
                    <div class="text-center pt-1 pb-1">
                        <a href="<?= BASEURL; ?>/customer/editprofil"
                            class="btn-color btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                            style="text-decoration: none;">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>