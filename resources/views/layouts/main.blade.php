<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title', 'Kitadi Kyami')</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{ URL::asset('vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('vendors/base/vendor.bundle.base.css') }} ">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{ URL::asset('vendors/flag-icon-css/css/flag-icon.min.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('vendors/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('vendors/jquery-bar-rating/fontawesome-stars-o.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('vendors/jquery-bar-rating/fontawesome-stars.css') }}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/myStyle.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ URL::asset('images/logo.png') }}" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="{{ route('home') }}"><img src="{{ URL::asset('/images/logo.PNG') }}" style="height:50px;"
            alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo" /></a>
      </div>

      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>


        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown  d-flex mr-4">
            <button type="button" class="btn btn-info font-weight-bold d-flex align-items-center justify-content-center" data-toggle="modal" data-target="#expediture">+ Nova despesa</button>
          </li>
          <li class="nav-item dropdown d-flex mr-4 ">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center"
              id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-cog"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
              aria-labelledby="notificationDropdown">
              <a class="dropdown-item preview-item">
                <i class="icon-head"></i> Perfil
              </a>

              <a class="dropdown-item preview-item" href="{{ route('logout') }}">
                <i class="icon-inbox"></i>Sair
              </a>
            </div>
          </li>

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
          data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="user-profile">
          <div class="user-image">
            <img src="{{ URL::asset('/images/user.png') }}">
          </div>
          <div class="user-name">
            {{ Auth::user()->name }}
          </div>
        </div>

        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#revenues" aria-expanded="false" aria-controls="revenues">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Receitas</span>
              <i class="menu-arrow"></i>
            </a>

            <div class="collapse" id="revenues" style>
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('recipes.create') }}">Nova</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('recipes.index') }}">Listar</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#expesnses" aria-expanded="false" aria-controls="expesnses">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Despesas</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="expesnses">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('expenses.create') }}">Nova</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('expenses.index') }}">Listar</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#category" aria-expanded="false" aria-controls="category">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Categorias Despesas</span>
              <i class="menu-arrow"></i>
            </a>

            <div class="collapse" id="category">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('categories.create') }}">Nova</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('categories') }}">Listar</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#categoryRecipies" aria-expanded="false" aria-controls="categoryRecipies">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Categorias Receitas</span>
              <i class="menu-arrow"></i>
            </a>

            <div class="collapse" id="categoryRecipies">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('categoriesRecipies.create') }}">Nova</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('categoriesRecipies') }}">Listar</a></li>
              </ul>
            </div>
          </li>

          <!-- 
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#category_recipes" aria-expanded="false" aria-controls="category_recipes">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Categorias Receitas</span>
              <i class="menu-arrow"></i>
            </a>

            <div class="collapse" id="category_recipes">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('categories.create') }}">Nova</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('categories') }}">Listar</a></li>
              </ul>
            </div>
          </li>
          -->
        </ul>
      </nav>
      <!-- partial -->
      @yield('content')
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- Modal -->
    <div class="modal fade" id="expediture" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nova Despesa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">

                  @if (session('successs_msg'))
                  <div class="alert alert-success" role="alert">
                      Despesa adicionada com sucesso.
                  </div>   
              @endif

              <form class="forms-sample" method="post" action="{{ route('expenses.storeModal') }}">
                  @csrf
                  <div class="form-group">
                      <label for="description">Descrição</label>
                      <input type="text" class="form-control" id="description" name="description" placeholder="Descrição da despesa">
                  </div>
                  
                  <div class="form-group">
                    <label for="date">Data</label>
                    <input type="date" class="form-control" id="date" name="date">
                  </div>

                  <div class="form-group">
                    <label for="value">Valor</label>
                    <input type="number" class="form-control" id="value" name="value" placeholder="Valor da despesa">
                  </div>
                  
                  <button type="submit" class="btn btn-primary mr-2">Criar</button>
                  <button class="btn btn-light">Voltar</button>
              </form>

                </div>

            </div>
        </div>
    </div>

  <!-- base:js -->
  <script src="{{URL::asset('vendors/base/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ URL::asset('js/off-canvas.js') }} "></script>
  <script src="{{ URL::asset('js/hoverable-collapse.js') }}"></script>
  <script src="{{  URL::asset('js/template.js') }}"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="{{ URL::asset('vendors/chart.js/Chart.min.js') }}"></script>
  <script src="{{ URL::asset('vendors/jquery-bar-rating/jquery.barrating.min.js') }}"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="{{ URL::asset('js/dashboard.js') }}"></script>
  <!-- End custom js for this page-->

  @yield('scripts')
</body>

</html>