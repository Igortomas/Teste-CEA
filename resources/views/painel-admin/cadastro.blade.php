<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html><html lang='pt-br'>
    <head>
        <title>Teste CEA</title>

        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'><script src='https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js'></script>
        <link rel="stylesheet" href="{{ asset('site/bootstrap.css') }}">
        <style class="cp-pen-styles">

        </style>
    </head>
    <body>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <div class="container">
            <div class=" text-center mt-5 ">
                <h1 >Cadastro de produtos</h1>
            </div>
            <div class="row ">
                <div class="col-lg-7 mx-auto">
                    <div class="card mt-2 mx-auto p-4 bg-light">
                        <div class="card-body bg-light">
                            <div class = "container">
                                <form id="contact-form" name="form" id="form" novalidate action={{ isset($produto->id ) ? '/admin/produtos/update/'. $produto->id : '/admin/produtos/store'}} method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="controls">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_name">Nome *</label>
                                                    <input id="form_name" type="text" name="nome" class="form-control" value="{{ old('nome',$produto->nome) }}" maxlength="200" required="required">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_lastname">Preço *</label>
                                                    <input id="form_lastname" type="text" name="preco" class="form-control" value="{{ old('preco',$produto->preco) }}" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_email">Quantidade *</label>
                                                    <input id="form_email" type="text" name="quantidade" class="form-control" value="{{ old('quantidade',$produto->quantidade) }}" maxlength="11" required="required">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="form_message">Imagem *</label>
                                                <input type="file" id="imagem" name="imagem" class="form-control-file" >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group d-flex justify-content-center">
                                                @if($produto->imagem != null && $produto->imagem != '')
                                                    <img src="{{asset("img/produtos/{$produto->imagem}")}}" height="200" width="200">
                                                @endif
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="form_message">Descrição do produto *</label>
                                                    <textarea id="form_message" name="descricao" class="form-control" rows="4" maxlength="200" required="required">{{ old('descricao',$produto->descricao) }}</textarea>
                                                </div>
                                            </div>
                                                <div class="col-md-12">
                                                    <input type="submit" class="btn btn-success btn-send  pt-2 btn-block" value="Salvar Produto" >
                                                    @if($produto->id != null && $produto->id != '')
                                                        <a href="../" class="btn btn-secondary btn-send  pt-2 btn-block" >Cancelar</a>
                                                    @else
                                                        <a href="../produtos" class="btn btn-secondary btn-send  pt-2 btn-block" >Cancelar</a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>