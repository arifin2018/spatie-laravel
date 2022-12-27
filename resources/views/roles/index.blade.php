<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Roles</title>
</head>
<body>
    @role('admin')
    <button type="submit">Tambah</button>
    @else
    <button>ok</button>
    @endrole
</body>
</html>
