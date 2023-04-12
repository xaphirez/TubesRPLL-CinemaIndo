<div class="bg-secondary vh-100" ;>
    <div class="container py-5 text-center h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-4">
                <div class="card p-3 bg-dark text-light" style="border-radius: 1rem;">
                    <div class="card-body-login pt-5 text-center">
                        <img src="<?= BASEURL; ?>/img/Cindo.png" alt="Cinema Indo" width="100"
                            class="rounded-circle img-thumbnail shadow-sm mb-3">
                        <h1 class="card-title text-center">L O G I N</h1>
                        <h2 class="card-title text-center">A D M I N</h2>
                    </div>
                    <div class="container py-2 h-100">
                        <?php if (isset($data['error'])) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $data['error'] ?>
                        </div>
                        <?php endif; ?>
                        <form method="POST">
                            <div class="form-outline mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    aria-describedby="emailHelp" placeholder="Masukan Email" required>
                            </div>
                            <div class="form-outline mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Masukan Password" required>
                            </div>
                            <div class="col d-flex">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" />
                                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                                </div>
                            </div>
                            <div class="text-center pt-3 pb-1">
                                <button type="submit"
                                    class="btn-color btn btn-primary btn-block fa-lg gradient-custom-2 mb-3">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>