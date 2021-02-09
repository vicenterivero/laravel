<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fecha</title>
    <link rel="stylesheet" href="/public/style.css">
</head>
<body>
<section>
<h1 class="fecha">Fecha actualas</h1>
<div class="fecha">

    {{date('d-m-y')}}


</div>

</section>


</body>
</html>
