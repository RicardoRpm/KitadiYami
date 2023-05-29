<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Criar Conta</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ URL::asset('images/logo.png') }}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="images/logo.PNG" style="height:50px;" alt="logo" />

              </div>
              <h4>Nova conta</h4>
              <h6 class="font-weight-light">Cria uma conta. Isto leva apenas alguns passos.</h6>
              @if (session('successs_msg'))
                <div class="alert alert-success" role="alert">
                  Usuário criado com sucesso.
                </div>   
              @endif
              <form action="{{ route('register_user') }}" method="post"  class="pt-3">
                @csrf
                <div class="form-group">
                  <label>Nome Completo</label>
                  <input type="text" class="form-control form-control-lg" id="name" name="name"
                    placeholder="Nome">
                </div>
{{-- 
   
                <div class="form-group">
                  <label>Gênero</label>
                  <select class="form-control form-control-lg" id="gender" name="gender" >
                    <option>Selecionar genero</option>
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                  </select>
                </div>
--}}
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Email">
                </div>

                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="password" name="password"
                    placeholder="Senha">
                </div>

                <div class="mt-3">
                  <button class="btn btn-block btn-info btn-lg font-weight-medium auth-form-btn" type="submit">Criar Conta</button>
                </div>

                <div class="text-center mt-4 font-weight-light">
                  Já tem uma conta? <a href="{{ route('login') }}" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="../../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <!-- endinject -->
</body>

</html>