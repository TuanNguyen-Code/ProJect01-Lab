<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh Sách Các Vật Tư</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header class="container my-3">
            <h1>Danh Sách Các Vật Tư</h1>
    </header>
    <section>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã Vật Tư</th>
                    <th>Tên Vật Tư</th>
                    <th>Đơn Vị Tính</th>
                    <th>Phần Trăm</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($nmtVattus as $item)
                    <tr>
                        <td>1</td>
                        <td>{{$item->nmtMaVtu}}</td>
                        <td>{{$item->nmtTenVtu}}</td>
                        <td>{{$item->nmtDvTinh}}</td>
                        <td>{{$item->nmtPhanTram}}</td>
                        <td> View / Edit / Delete </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">Chưa có dữ liệu</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <button class="btn btn-primary">Thêm mới</button>
    </section>
</body>
</html>