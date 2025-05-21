<!DOCTYPE html>
<x-guestLayout>
<html lang="pt">
<head>
</head>
<div style="background-color:rgb(66, 131, 230)">
<body>
<br><br>
<div class="container" style="background-color:rgb(66, 131, 230)">
<a href="{{ url('/usuario1b') }}"><img src="terapeuta.PNG" alt="" class="imagem-circular"></a>
<a href="{{ url('/usuario2b') }}"><img src="terapeuta2.PNG" alt="" class="imagem-circular"></a>
<a href="{{ url('/usuario3b') }}"><img src="terapeuta3.PNG" alt="" class="imagem-circular"></a>
<a href="{{ url('/usuario4b') }}"><img src="terapeuta4.PNG" alt="" class="imagem-circular"></a>
<a href="{{ url('/usuario5b') }}"><img src="terapeuta5.PNG" alt="" class="imagem-circular"></a>
<a href="{{ url('/usuario6b') }}"><img src="terapeuta6.PNG" alt="" class="imagem-circular"></a>
</div>
<br><br><br>

</div>
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




</body>
</html>

</x-guestLayout>
