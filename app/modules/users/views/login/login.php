<div class="container-fluid">
    <div class="row">
        <div class="col-xl-7"><img class="bg-img-cover bg-center" src="<?= HTTP_HOST . 'app/assets/' ?>images/logo/shopbetle.png" width="90%" alt="looginpage"></div>
        <div class="col-xl-5 p-0">
            <div class="login-card">
                <form class="theme-form login-form">
                    <h4>Iniciar sesión</h4>
                    <h6>¡Bienvenido de nuevo! Ingrese a su cuenta.</h6>
                    <div class="form-group">
                        <label>ID / Correo / Teléfono</label>
                        <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                            <input class="form-control" type="text" required="" placeholder="ID / Correo / Teléfono">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                            <input class="form-control" type="password" name="password" required="" placeholder="*********">
                            <div class="show-hide"><span class="show"> </span></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <input id="checkbox1" type="checkbox">
                            <label class="text-muted" for="checkbox1">Remember password</label>
                        </div><a class="link" href="forget-password.html">Forgot password?</a>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Iniciar sesión</button>
                    </div>
                    <div class="login-social-title">
                        <h5>Sign in with</h5>
                    </div>
                    <div class="form-group">
                        <ul class="login-social">
                            <li><a href="https://www.linkedin.com/login" target="_blank"><i data-feather="linkedin"></i></a></li>
                            <li><a href="https://www.linkedin.com/login" target="_blank"><i data-feather="twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/login" target="_blank"><i data-feather="facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/login" target="_blank"><i data-feather="instagram"> </i></a></li>
                        </ul>
                    </div>
                    <p>Don't have account?<a class="ms-2" href="sign-up.html">Create Account</a></p>
                </form>
            </div>
        </div>
    </div>
</div>