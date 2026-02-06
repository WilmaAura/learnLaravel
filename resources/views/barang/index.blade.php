<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="wrapper">
        <div class="container">
            @extends('layouts.app')
            @section('content')
            <div class="main-content">
                <h3 class="mt-4">List barang</h3>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>SKU</th>
                            <th>Name barang</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($barangs as $barang)
                        <tr>
                            <td>{{$barang['id']}}</td>
                            <td>{{$barang['sku']}}</td>
                            <td>{{$barang['namaBarang']}}</td>
                            <td>{{$barang['harga']}}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4">Empty</td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>