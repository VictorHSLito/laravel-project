<h3>Suppliers View</h3>

Fornecedor: {{ $suppliers[0]['name'] }} <br>
Status:{{ $suppliers[0]['status'] }} <br>

@if(!($suppliers[0]['status'] == "inativo"))
    <h3>Servidor não está inativo</h3>    
@endif