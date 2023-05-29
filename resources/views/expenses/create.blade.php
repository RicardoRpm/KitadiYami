@extends('layouts.main')

@section('title', 'Kitadi Kyami')
    
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Despesas</h4>
                    <p class="card-description">
                    Crie uma nova despesas
                    </p>

                    @if (session('successs_msg'))
                        <div class="alert alert-success" role="alert">
                            Despesa adicionada com sucesso.
                        </div>   
                    @endif

                    <form class="forms-sample" action="{{ route('expenses.store') }}" method="post">
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
</div>



@endsection