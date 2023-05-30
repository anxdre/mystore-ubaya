<div class="container">
<h2>List of Products according {{$data->name}} category.</h2>
    <p>Our system found {{$numberOfData}} items</p>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name of Product</th>
                <th>Price of Product</th>
                <th>Input at</th>
                <th>Update at</th>
                <th>Category Name</th>
            </tr>
        </thead>
        <tbody>
        @foreach($data->products as $p)
        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->name}}</td>
            <td>{{$p->harga}}</td>
            <td>{{$p->created_at}}</td>
            <td>{{$p->updated_at}}</td>
            <td>{{$p->category->name}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>