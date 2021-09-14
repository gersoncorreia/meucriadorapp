@extends('panel.layout.index')
@section('content')
<!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Painel Produtos</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Painel</a>
                        </li>
                        <li class="breadcrumb-item active">Produtos</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <!-- /.content-header -->
    <div class="container-fluid col-sm-6 col-md-6">
        <!-- Input addon -->
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Informações do Produto</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('panel.product.store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-store-alt"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Nome do Produto" name="name">
                        <input type="text" name="userID" value="{{Auth::user()->id}}" hidden>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-outdent"></i></span>
                        </div>
                        <textarea class="form-control" id="description" name="description" rows="5"
                            placeholder="Descrição do Produto"></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-project-diagram"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Slug: ex -> nome-produto" name="slug">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-money-bill-alt"></i></span>
                        </div>
                        <input type="number" class="form-control" name="price">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-file-image"></i></span>
                        </div>
                        <input type="file" class="form-control" id="photo" name="photo[]" multiple>
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
    </section>
    <!-- /.content -->
@endsection