<?php include 'partials/header.php'?>
        <form method="post" action="controller.php">
          <img class="mb-4" src="img/bootstrap-logo.svg" alt="" width="72" height="57" />
          <h1 class="h3 mb-3 fw-normal">Formulario de Registro</h1>
          <div class="form-floating">
<input name='usuario' type="text" class="form-control" id="floatingInput" placeholder="nickname" />
<label for="floatingInput">Usuario</label>
</div>
          <div class="form-floating">
            <input name='email' type="email" class="form-control" id="floatingInput" placeholder="name@example.com" />
            <label for="floatingInput">Dirección Email</label>
          </div>
          <div class="form-floating">
            <input name='password' type="password" class="form-control" id="floatingPassword" placeholder="Password" />
            <label for="floatingPassword">Password</label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">
            Regístrate
          </button>
          <p class="mt-5 mb-3 text-muted">&copy; MCECILIA- <?php echo date('Y') ?></php>
            </php>
          </p>
        </form>
<?php include 'partials/foooter.php'?>