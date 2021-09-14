@extends('panel.layout.index')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Painel Criação de Lojas</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('panel.index') }}">Painel</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('panel.stores.index') }}">Lojas</a></li>
                        <li class="breadcrumb-item active">Cria</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <hr>
    <!-- /.content-header -->
    <div class="container-fluid col-sm-6 col-md-6">
        <!-- Input addon -->
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Informações da nova Loja</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('panel.stores.store') }}" method="POST" enctype="multipart/form-data" >
                    {{ csrf_field() }}
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-store-alt"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Nome da Loja" name="name">
                        <input type="text" name="userID" value="{{Auth::user()->id}}" hidden>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-outdent"></i></span>
                        </div>
                        <textarea class="form-control" id="description" name="description" rows="5"
                            placeholder="Descrição da Loja"></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-project-diagram"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Slug: ex -> nome-loja" name="slug">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-file-image"></i></span>
                        </div>
                        <input type="file" class="form-control" id="logo" name="logo[]" multiple>
                    </div>
                    <div class="input-group mb-3">
                        <button type="submit" class="btn btn-block btn-outline-success">Criar Loja</button>
                        <button type="cancel" class="btn btn-block btn-outline-secondary">Cancelar</button>
                    </div>
                    @if (isset($resposta))
                        @if ($resposta == 'sucesso')
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-check"></i> Sucesso!</h5>
                                Usuário cadastrado com Sucesso.
                            </div>
                        @else
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-ban"></i> Falha!</h5>
                                Falha ao cadastrar as informações do usuário!
                            </div>
                        @endif
                    @endif
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

@endsection
