<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">{{ $pessoa->apelido }}</h3>
    </div>
    <div class="panel-body">
        <h1>{{ $pessoa->nome }}</h1>
    </div>
    <table class="table table-hover">
        @foreach($pessoa->telefones as $telefone)
            <tr>
                <td>{{ $telefone->numero }} </td>
                <td>
                    <a href="">
                        <button class="btn btn-danger btn-xs" data-toggle="tooltip" title="Apagar"><i class="fa fa-times"></i></button>
                        <button class="btn btn-warning btn-xs" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></button>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
</div>