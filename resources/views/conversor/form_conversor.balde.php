@extends('layout')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<!-- form -->
<section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Novo Cliente</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                        <form action="{{ route('clientes.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm">
                                    
                            <?=inputText('id','', NULL, 'value="'.@$cliente->id.'" hidden')?>
                                    <?=inputText('nome','Nome', NULL, 'placeholder="Nome" value="'.$cliente->nome.'"')?>
                                    <?=inputText('telefone','Telefone', NULL, 'placeholder="Telefone" value="'.$cliente->telefone.'"')?>
                                    <?=inputText('endereco','Endereço', NULL, 'placeholder="Endereço" value="'.$cliente->endereco.'"')?>
                                    <?=inputText('instagram','Instagram', NULL, 'placeholder="@nome" value="'.$cliente->instagram.'"')?>
                                </div>
                            </div>
                            <!--  -->
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            <!-- / -->
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- form -->


@endsection