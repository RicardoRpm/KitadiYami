@extends('layouts.main')

@section('title', 'Kitadi Kyami')
    
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title mb-2">Listagem das Despesas</h4>
                    <div class="table-responsive">
                        <table class="table">
                            
                            <thead>
                                <tr>
                                    <th><strong>Descrição</strong></th>
                                    <th><strong>Valor</strong></th>
                                    <th><strong>Data<strong></th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    @foreach ($expenses as $expense)
                                        <tr>
                                            <td>{{ $expense->description }}</td>
                                            <td>{{ $expense->value }}</td>
                                            <td>{{ $expense->date }}</td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm"><i class="icon-paper"></i></a>
                                                <a href="#" class="btn btn-warning btn-sm"><i class="icon-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tr>
                            </tbody>
                            
                        </table>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection