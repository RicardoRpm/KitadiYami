@extends('layouts.main')

@section('title', 'Kitadi Kyami')
    
@section('content')
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-sm-12 mb-4 mb-xl-0">
          <h4 class="font-weight-bold text-dark">Olá, Seja bem-vindo novamente!</h4>
          <p class="font-weight-normal mb-2 text-muted">{{ date('F') }} {{ date('d') }}, {{ date('Y') }}</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex">

                <div class="media-body text-left">
                  <h3 class="text-success value-card">{{ number_format($recipes, 2, ',', '.') }} </h1>
                  <span class="tile-card">Total de Receitas</span>
                </div>

                <div class="align-self-center">
                  <i class="icon-bar-chart"></i>
                  <i class="icon-cog"></i>
                </div>
              </div>
              
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex">

                <div class="media-body text-left">
                  <h3 class="text-danger value-card"> {{ number_format($expenses, 2, ',', '.') }} Kz</h1>
                  <span class="tile-card">Total de Despesas</span>
                </div>

                <div class="align-self-center">
                  <i class="icon-bar-chart"></i>
                  <i class="icon-cog"></i>
                </div>
              </div>
              
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex">

                <div class="media-body text-left">
                  <h3 class="text-primary value-card">{{ number_format($savings, 2, ',', '.') }} Kz</h1>
                  <span class="tile-card">Poupança</span>
                </div>

                <div class="align-self-center">
                  <i class="icon-bar-chart"></i>
                  <i class="icon-cog"></i>
                </div>
              </div>
              
            </div>
          </div>
        </div>

        

      </div>

      <div class="row">
        <div class="col-md-6">

        </div>

        <div class="col-md-6">

        </div>
      </div>

      <div class="row mt-2">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Area chart</h4>
              <canvas id="areaChart"></canvas>
            </div>
          </div>
        </div>

        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Area chart</h4>
              <canvas id="areaChart"></canvas>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Area chart</h4>
              <canvas id="areaChart"></canvas>
            </div>
          </div>
        </div>
      </div>



    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    
    

    <!-- partial -->
  </div>
@endsection

@section('scripts')



@endsection