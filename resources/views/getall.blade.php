<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DS Tài Khoản</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <section>
        <h1>DS Tài Khoản</h1>
        <table class="table table-border">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Id</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Lastname</th>
                </tr>
            </thead>
            <tbody>
                @foreach($list as $item)
                    <tr>
                        <td>1</td>
                        <td>{{$item->Id}}</td>
                        <td>{{$item->Username}}</td>
                        <td>{{$item->Password}}</td>
                        <td>{{$item->Lastname}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</body>
</html>