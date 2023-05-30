<h2>Product Detail</h2>
<table class="table" boder="1">
    <thead>
        <tr>
            <th>Data</th>
            <th>Hasil<th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>ID</td>
            <td>{{$data->id}}</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>{{$data->name}}</td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>{{$data->harga_jual}}</td>
        </tr>
        <tr>
            <td>Category</td>
            <td>{{$data->category->name}}</td>
        </tr>
        <tr>
            <td>Created At</td>
            <td>{{$data->created_at}}</td>
        </tr>
        <tr>
            <td>Updated At</td>
            <td>{{$data->updated_at}}</td>
        </tr>

    </tbody>
</table>