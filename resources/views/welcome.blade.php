<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>eID Easy</title>
</head>
<body>
<h1>eID Easy simple demo</h1>

<form method="POST" enctype="multipart/form-data">
    {{csrf_field()}}

    <label for="file_to_be_signed">File to be signed</label>
    <input
        name="file_to_be_signed"
        type="file"
        id="file_to_be_signed"
        accept="application/pdf"
    >

    <button type="submit" class="btn btn-primary">Sign now</button>
</form>
</body>
</html>
