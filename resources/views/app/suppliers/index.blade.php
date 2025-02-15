<h3>Suppliers View</h3>

@foreach ($suppliers as $supplier)
    Fornecedor: {{ $supplier['name'] }} <br>
    Status:{{ $supplier['status'] }} <br>
    CPF:{{ $supplier['cpf']}} <br>
@endforeach

@if(!($suppliers[0]['status'] == "inativo"))
    <h3>O servidor {{$suppliers[0]['name']}} não está inativo</h3>    
@endif