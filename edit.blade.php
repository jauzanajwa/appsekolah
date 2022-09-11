<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade View Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Tambah Data Kelas</h1>
        <div>
            <form action="{{ route('grade.update', $grade->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-2">
                    <input type="text" name="grade" class="form-control" placeholder="Nama Kelas">
                </div>
                <div class="mb-2">
                    <input type="number" name="amount" class="form-control" placeholder="Jumlah Siswa">
                </div>
                <div class="mb-2">
                    <input type="reset" class="btn btn-secondary"> &nbsp; <input type="submit" value="Simpan" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
