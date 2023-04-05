<div class="bg-secondary vh-100">
    <div class="global-container text-center">
        <div class="card p-3 bg-dark text-light" style="border-radius: 1rem;">
            <div class="card-body-login p-2 text-center">
            <img src="<?= BASEURL; ?>/img/Cindo.png" alt="Cinema Indo" width="150" class="rounded-circle img-thumbnail shadow-sm mb-3">
                <h1 class="card-title text-center">L O G I N</h1>
            </div>
                <div class="container py-2 h-100">
                    <form>
                        <div class="form-outline mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder = "Masukan Email" required>
                        </div>
                        <div class="form-outline mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder = "Masukan Password" required>
                        </div>
                        <div class="col d-flex">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form2Example31"/>
                            <label class="form-check-label" for="form2Example31"> Remember me </label>
                        </div>
                        </div>
                        <div class="text-center pt-3 pb-1">
                        <button type="submit" class="btn-color btn btn-primary btn-block fa-lg gradient-custom-2 mb-3">Login</button>
                        </div>
                        <div class="text-center pb-1">
                            <a href=" <?= BASEURL; ?>/customer/register" class="btn btn-outline-danger" style="text-decoration: none;"> Register</a>
                        </div>
                    </form>
                </div>            </div>
        </div>
    </div>
</div>