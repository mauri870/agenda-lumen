<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            @if($pessoa->sexo == "M")
            <i class="fa fa-male"></i>
            @elseif("F")
                <i class="fa fa-female"></i>
            @endif
            {{ $pessoa->apelido }}
            <span class="pull-right">
                <a href=""><button class="btn btn-warning btn-xs" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></button></a>
                <a href="{{ route('home.delete.person',['id'=>$pessoa->id]) }}"><button class="btn btn-danger btn-xs" data-toggle="tooltip" title="Apagar"><i class="fa fa-times"></i></button></a>
            </span>
        </h3>
    </div>
    <div class="panel-body">
        <h1>{{ $pessoa->nome }}</h1>
    </div>
    <table class="table table-hover">
        @foreach($pessoa->telefones as $telefone)
            <tr>
                <td>{{ $telefone->numero }} </td>
                <td>
                    <a href="{{ route('home.delete.phone',['id'=>$telefone->id]) }}">
                        <button class="btn btn-danger btn-xs" data-toggle="tooltip" title="Apagar"><i class="fa fa-times"></i></button>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
</div>