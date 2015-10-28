<table class="table table-hover">
    @foreach($telefones as $telefone)
        <tr>
            <td>{{ $telefone->numero }} </td>
            <td>
                <a href="#" onclick="deleteModal('{{ route('home.delete.phone',['id'=>$telefone->id]) }}')">
                    <button class="btn btn-danger btn-xs" data-toggle="tooltip" title="Apagar"><i class="fa fa-times"></i></button>
                </a>
            </td>
        </tr>
    @endforeach
</table>