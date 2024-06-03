<h3>Fornecedor</h3>

{{-- teste --}}
@isset($fornecedor)
    @forelse ($fornecedor as $v)
        Fornecedor: {{ $v['nome'] }}
        <br>
        status: {{ $v['status'] }}
        <br>
        CNPJ: {{ $v['cnpj'] ?? '' }}
        <hr>
        @empty
        Nada encontrado
    @endforelse
@endisset
