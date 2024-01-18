<table>
    <tr>
        <th>Serial</th>
        <th>Product_Name</th>
        <th>Product_category</th>
        <th>Product_price</th>
        <th>Product_quantity</th>



@foreach($data as $item)
    <tr>
    <td>{{$loop->iteration}}</td>
    <td>{{ $item->Product_name}}</td>
    <td>{{ $item->Product_category}}</td>
    <td>{{ $item->Product_price}}</td>
    <td>{{ $item->Product_quantity}}</td>
    </tr>

@endforeach
</table>

    
