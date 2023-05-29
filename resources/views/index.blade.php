@extends('layouts.main')

@section('title', 'Kitadi Kyami')
    
@section('content')

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-sm-12 mb-4 mb-xl-0">
        <h4 class="font-weight-bold text-dark">Olá, Seja bem-vindo novamente!</h4>
        <p class="font-weight-normal mb-2 text-muted">Maio 25, 2023</p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Total de Receitas</h4>
            <div class="text-center">
              <h1>{{ $recipes }}</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Total de Despesas</h4>
            <div class="text-center">
              <h1>{{ $expenses }}</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Poupança</h4>
            <div class="text-center">
              <h1>{{ $savings }}</h1>
            </div>
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