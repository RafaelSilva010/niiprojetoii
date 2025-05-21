<!DOCTYPE html>
<html lang="Pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Imagem Link</title>
</head>
<body>
    <a href="{{ $originalUrl }}" target="_blank">
        <img src="{{ asset('images/your-image.jpg') }}" alt="Descrição da Imagem" />
    </a>
</body>
</html>
