<!DOCTYPE html>
<x-guestLayout>
<html lang="pt">
<head>
</head>
<div style="background-color:rgb(66, 131, 230)">
<body>
<br><br>
<div class="container" style="background-color:rgb(66, 131, 230)">
<a href="{{ url('/usuario1e') }}"><img src="psicologo1.PNG" alt="" class="imagem-circular"></a>
<a href="{{ url('/usuario2e') }}"><img src="psicologo2.PNG" alt="" class="imagem-circular"></a>
<a href="{{ url('/usuario3e') }}"><img src="psicologo3.PNG" alt="" class="imagem-circular"></a>
<a href="{{ url('/usuario4e') }}"><img src="psicologo4.PNG" alt="" class="imagem-circular"></a>
<a href="{{ url('/usuario5e') }}"><img src="psicologo5.PNG" alt="" class="imagem-circular"></a>
<a href="{{ url('/usuario6e') }}"><img src="psicologo6.PNG" alt="" class="imagem-circular"></a>
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
