<div class="bg-secondary">
    <div class="d-flex justify-content-center align-items-center h-100">
        <div class="row justify-content-center">
            <div class="card bg-dark text-light" style="border-radius: 1rem;">
                <div class="card-body">
                    <img src="https://via.placeholder.com/150" class="rounded-circle mb-3" alt="Profile Picture">
                    <h1 class="text-light"><?php echo $data['user']['nama_user']; ?></h1>
                    <p class="text-light"><strong></strong><?php echo $data['user']['email']; ?></p>
                    <p class="text-light"><strong></strong><?php echo $data['user']['telepon']; ?></p>
                    <div class="text-center pt-1 pb-1">
                        <a href=" <?= BASEURL; ?>/customer/editprofil" class="btn-color btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" style="text-decoration: none;"> Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>