<!DOCTYPE html>
<x-guestLayout>
<html lang="pt">
<head>
</head>
<div style="background-color:rgb(66, 131, 230)">
<body>
<br><br>
<div class="container" style="background-color:rgb(66, 131, 230)">
<a href="{{ url('/usuario1') }}"><img src="imagem1doutor.jpeg" alt="" class="imagem-circular"></a>
<a href="{{ url('/usuario2') }}"><img src="imagem2doutor.jpeg" alt="" class="imagem-circular"></a>
<a href="{{ url('/usuario3') }}"><img src="imagem3doutor.jpeg" alt="" class="imagem-circular"></a>
<a href="{{ url('/usuario4') }}"><img src="imagem4doutor.jpeg" alt="" class="imagem-circular"></a>
<a href="{{ url('/usuario5') }}"><img src="imagem5doutor.jpeg" alt="" class="imagem-circular"></a>
<a href="{{ url('/usuario6') }}"><img src="imagem6doutor.jpeg" alt="" class="imagem-circular"></a>
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
