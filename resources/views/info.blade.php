@foreach ($user as $item)
    <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->dept}}</td>
        <td><button onclick="EditData({{$item->id}})"class="btn btn-success">edit</button></td>
        <td><button onclick="DeleteData({{$item->id}})" class="btn btn-warning">delete</button></td>
    </tr>
@endforeach