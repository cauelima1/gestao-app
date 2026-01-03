<h3>Fornecedores</h3>

@isset($fornecedores)
    @if (count($fornecedores) > 0)
        <ul>
            @foreach ($fornecedores as $fornecedor)
                Iteração atual: {{ $loop->iteration }}
           
                <br>
                <li>
                    Fornecedor: {{ $fornecedor['nome'] }}
                    <br>
                    CNPJ: {!! $fornecedor['cnpj'] ?? '<strong>CNPJ não informado</strong>' !!}
                    <br>
                    DDD: {!! $fornecedor['ddd'] ?? '<strong>DDD não informado</strong>' !!}
                    <br>
                    Telefone: {!! $fornecedor['telefone'] ?? '<strong>Telefone não informado</strong>' !!}
                    <br>
                    @if ($loop->first)
                        <strong>Primeira iteração do loop</strong>
                    @endif
                    @if ($loop->last)
                        <strong>Última iteração do loop</strong>
                    @endif
                    <br>
                </li>
            @endforeach
        </ul>
    @endif
@endisset
