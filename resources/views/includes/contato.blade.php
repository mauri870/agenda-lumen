@if($pessoa->sexo == "M")
    <div class="panel panel-info">
@elseif("F")
    <div class="panel panel-danger">
@endif
    <div class="panel-heading">
        <h3 class="panel-title">
            @if($pessoa->sexo == "M")
            <i class="fa fa-male"></i>
            @elseif("F")
                <i class="fa fa-female"></i>
            @endif
            {{ $pessoa->apelido }}
            <span class="pull-right">
                <a href="{{ route('home.edit.person',['id'=>$pessoa->id]) }}"><button class="btn btn-warning btn-xs" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></button></a>
                <a href="#" onclick="deleteModal('{{ route('home.delete.person',['id'=>$pessoa->id]) }}')"><button class="btn btn-danger btn-xs" data-toggle="tooltip" title="Apagar"><i class="fa fa-times"></i></button></a>
            </span>
        </h3>
    </div>
    <div class="panel-body">
        <h1>{{ $pessoa->nome }}</h1>
        <a href=""><button class="btn btn-info btn-xs pull-left"><i class="fa fa-plus"></i> Novo telefone</button></a>
    </div>
    @include('includes.telefone',['telefones'=>$pessoa->telefones])
</div>