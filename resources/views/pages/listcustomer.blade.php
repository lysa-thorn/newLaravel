<h1>ListCustomer</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
    </tr>
    @foreach ($customer as $item)
    <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['name']}}</td>
        <td>{{$item['email']}}</td>
    </tr>
    
@endforeach
</table>