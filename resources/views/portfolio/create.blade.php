@extends('templates.portfolio')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Adicione os dados do projeto</div>

                    <div class="card-body">
                        <form class="m-5 p-5 align-items-center" action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("post")

                            <div class="form-group">
                                <label for="imagem">Imagem do Projeto</label>
                                <input type="file" class="form-control" name="imagem" id="imagem" accept="image/*">
                            </div>

                            <div class="form-group">
                                <label for="alt">Texto Alternativo a imagem</label>
                                <input type="text" class="form-control" name="alt" id="alt">
                            </div>

                            <div class="form-group">
                                <label for="titulo">Título do Projeto</label>
                                <input type="text" class="form-control" name="titulo" id="titulo">
                            </div>

                            <div class="form-group">
                                <label for="descricao">Descrição do Projeto</label>
                                <textarea class="form-control" name="descricao" id="descricao"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="url">URL do Projeto</label>
                                <input type="text" class="form-control" name="url" id="url">
                            </div>

                            <div class="form-group">
                                <label for="codigo_fonte">URL do Código Fonte</label>
                                <input type="text" class="form-control" name="codigo_fonte" id="codigo_fonte">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Salvar Projeto</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
