@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Empresas</div>

                    <div class="card-body">

                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <a href="{{ route('empresa.create') }}"
                                       class="btn btn-sm btn-success float-sm-right">Cadastar</a>
                                </div>
                            </div>

                            <br>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Razão Social</th>
                                    <th scope="col">Nome Fantasia</th>
                                    <th scope="col">CNPJ</th>
                                    <th scope="col">Ação</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach ($empresas as $empresa)
                                    <tr>
                                        <td>{{ $empresa->nome }}</td>
                                        <td>{{ $empresa->nome_fantasia }}</td>
                                        <td>{{ $empresa->cnpj }}</td>
                                        <td width="190px">
                                            <a href="{{ route('empresa.show', $empresa->id) }}"
                                               class="btn btn-sm btn-outline-secondary">Ver</a>
                                            <a href="{{ route('empresa.edit', $empresa->id) }}"
                                               class="btn btn-sm btn-primary">Editar</a>
                                            <button onclick="empresaSelecionada('{{$empresa->id}}', '{{$empresa->nome}}')"
                                                    data-toggle="modal" data-target="#deletarEmpresa"
                                                    class="btn btn-sm btn-danger">Apagar
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                            {{ $empresas->links() }}
                        </div>


                    </div>
                </div>
            </div>
        </div>
        @include('empresa.destroy_modal')
    </div>

@endsection

@push('scripts')
    <script type="application/javascript">
        function empresaSelecionada(id, nome) {
            console.log(id + " " + nome);
            $('#empresaNome').html(nome);
            $('#deleteForm').attr('action', '{{route('empresa.destroy','')}}'+'/'+id);
        }
    </script>
@endpush