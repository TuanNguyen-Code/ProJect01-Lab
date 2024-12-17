<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh Sách Nhà Cung Cấp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header class="container my-3">
            <h1>Danh Sách Nhà Cung Cấp</h1>
    </header>
    <section>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã Nhà Cung Cấp</th>
                    <th>Tên Nhà Cung Cấp</th>
                    <th>Địa Chỉ</th>
                    <th>Email</th>
                    <th>Điện Thoại</th>
                    <th>Chức Năng</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($nmtNhaccs as $item)
                    <tr>
                        <td>1</td>
                        <td>{{$item->nmtManhacc}}</td>
                        <td>{{$item->nmtTennhacc}}</td>
                        <td>{{$item->nmtDiachi}}</td>
                        <td>{{$item->nmtDienthoai}}</td>
                        <td>{{$item->nmtEmail}}</td>
                        <td> View / Edit / Delete </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7">Chưa có dữ liệu</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <button class="btn btn-primary">Thêm mới</button>
    </section>
</body>
</html>