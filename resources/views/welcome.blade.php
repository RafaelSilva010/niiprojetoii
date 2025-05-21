<x-guestLayout style="background-color:rgb(66, 131, 230)">
<br><br><head><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/></head><body>
<p></p>

<br><br><br><br><br>
<div style=" display: flex;flex-wrap: wrap;justify-content:left;color:white"><h1 style="padding-left:6cm">Médico</h1><h1 style="padding-left:3cm">Dentista</h1><h1 style="padding-left:2cm">Terapeuta</h1><h1 style="padding-left:2cm">Nutricionistas</h1><h1 style="padding-left:1cm">Enfermeiros</h1><h1 style="padding-left:2cm">Psicologos</h1></div>
<br><br><br>
<div class="container">
<a href="{{ route('sobre') }}"><img src="farmaceiticobolinhajabolinha.jpeg" alt="" class="imagem-circular"></a>
<a href="{{ route('sobre2') }}"><img src="dentistabolinhabolinha.png" alt="" class="imagem-circular"></a>
<a href="{{ route('sobre3') }}"><img src="bolinhadoutor.jpg" alt="" class="imagem-circular"></a>
<a href="{{ route('sobre4') }}"><img src="mnutricionistbolinhajabolinha.png" alt="" class="imagem-circular"></a>
<a href="{{ route('sobre5') }}"><img src="tenfermarybolinhajaqbolinhar.png" alt="" class="imagem-circular"></a>
<a href="{{ route('sobre6') }}"><img src="psicologobolinhajabolinha.png" alt="" class="imagem-circular"></a>
</div><br><br>
<div class="banner-slider">
 <div class="banner">
    <img src="Hospitaldaluz.jpg" style="width:600px;height:350px">
 </div>
 <div class="banner">
    <img src="colgate.jpg" style="width:600px;height:350px">
 </div>
 <div class="banner">
    <img src="cufsaude.jpg" style="width:600px;height:350px">
 </div>









 </div>















<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<p style="text-align: center;font-size: 56px;color:rgb(66, 131, 230);">Sobre nós?</p>
<br>
<p style="text-align: center;font-size: 40px;color:rgb(66, 131, 230);">O que é a SS ?</p>
<br>
<div class="textoinicialpaginadeapresentacao">
<p style="text-align: center;font-size: 30px; color:rgb(66, 131, 230);" >Aqui na SS poderá encontrar,facilmente profissionais de saúde de diferentes áreas de uma forma simples e prática.</p>
<br>
<br>
<p style="text-align: center;font-size: 30px;color:rgb(66, 131, 230)" >Estamos por todo o país.</p>
<br>
<p style="text-align: center;font-size: 30px;color:rgb(66, 131, 230);" >Todos os nossos profissionais de saúde,comprovaram a sua carteira profissional para que possamos garantir segurânça e profissionalismo.</p>
<br>
<p style="text-align: center;font-size: 30px;color:rgb(66, 131, 230);" >Podes encontrar profissionais das areas:Médicos,Enfermeiros,Nutricionistas,Dentistas,Psicologos,Terapeutas.</p>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.banner-slider').slick({
                autoplay: true,
                autoplaySpeed: 4000,
                dots: true,
                arrows: true,
            });
        });
    </script>




</body>
</x-guestLayout>


<style>
    .banner-slider {
        width: 600px; /* Largura do slider */
        margin: 20px auto; /* Centraliza o slider */
    }

    .banner {
        width: 100%; /* Largura do banner */
        height: 300px; /* Altura do banner */
        background-color: #f0f0f0; /* Cor de fundo */
        border: 1px solid #ccc; /* Borda */
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .banner img {
        max-width: 100%; /* Garante que a imagem não ultrapasse o banner */
        max-height: 100%; /* Garante que a imagem não ultrapasse o banner */
    }
</style>








<style>

   .container {
    display: flex; /* Ativa o Flexbox */
    flex-wrap: wrap; /* Permite que as imagens se movam para a linha seguinte */
    justify-content: center; /* Centraliza as imagens */
}



    .imagem-circular {
        width: 150px; /* Largura da imagem */
        height: 150px; /* Altura da imagem */
        border-radius: 50%; /* Faz a imagem ficar circular */
        object-fit: cover; /* Corta a imagem para preencher o espaço */

  }
</style>
</style>
<style>



