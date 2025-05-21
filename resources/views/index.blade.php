<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banners Rotativos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
</head>
<body>
    <div class="banner-slider">
        @foreach($banners as $banner)
            <div>
                <a href="{{ $banner->link }}">
                    <img src="{{ asset($banner->image_path) }}" alt="{{ $banner->title }}">
                </a>
            </div>
        @endforeach
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.banner-slider').slick({
                autoplay: true,
                autoplaySpeed: 3000,
                dots: true,
                arrows: true,
            });
        });
    </script>
</body>
</html>
