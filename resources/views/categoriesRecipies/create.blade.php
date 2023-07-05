@extends('layouts.main')

@section('title', 'Kitadi Kyami')
    
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Categoria</h4>
                    <p class="card-description">
                    Crie uma nova categoria para as suas despesas
                    </p>

                    @if (session('successs_msg'))
                        <div class="alert alert-success" role="alert">
                            Categoria criada com sucesso.
                        </div>   
                    @endif

                    <form class="forms-sample" action="{{ route('categoriesRecipies.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Nome</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nome da Categoria">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="description">Descrição</label>
                                    <input type="text" class="form-control" id="description" name="description" placeholder="Descricção da Categoria">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="color">Cor da categoria</label>
                                    <input type="color" class="form-control" id="color" name="color" />
                                </div>
                            </div>
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