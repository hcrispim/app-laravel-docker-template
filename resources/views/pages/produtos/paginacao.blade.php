@extends('index');

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Produtos</h1>
    </div>

    <form action="{{ route('produto.index') }}" method="get">
        <input type="text" name="pesquisar" placeholder="Digite o nome" />
        <button>Pesquisar</button>
        <a type="button" href="#" class="btn btn-success float-end">
            Incluir Produto
        </a>
    </form>
    {{-- <h2>Tabela tal...</h2> --}}
    <div class="table-responsive mt-4">
        <table class="table table-striped table-sm">
            @if ($findProduto->isEmpty())
                <p>Não existem dados</p>
            @else
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Valor</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($findProduto as $produto)
                        <tr>
                            <td>{{ $produto->nome }}</td>
                            <td>{{ 'RS' . ' ' . number_format($produto->valor, 2, ',', '.') }}</td>
                            <td>
                                <a class="btn btn-light btn-sm" href="#" role="button">Editar</a>
                                <a class="btn btn-danger btn-sm" href=" {{ route('produto.delete')}}" role="button">Excluir</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
        @endif
    </div>
    </div>
@endsection
