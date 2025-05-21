<!DOCTYPE html>
<x-guestLayout>
<html lang="pt">
<head>
</head>
<div style="background-color:rgb(66, 131, 230)">
<body>
<br><br>
<div class="container" style="background-color:rgb(66, 131, 230)">
<a href="{{ url('/usuario1c') }}"><img src="nutricionista1.PNG" alt="" class="imagem-circular"></a>
<a href="{{ url('/usuario2c') }}"><img src="nutricionista2.PNG" alt="" class="imagem-circular"></a>
<a href="{{ url('/usuario3c') }}"><img src="nutricionista3.PNG" alt="" class="imagem-circular"></a>
<a href="{{ url('/usuario4c') }}"><img src="nutricionista4.PNG" alt="" class="imagem-circular"></a>
<a href="{{ url('/usuario5c') }}"><img src="nutricionista5.PNG" alt="" class="imagem-circular"></a>
<a href="{{ url('/usuario6c') }}"><img src="nutricionista6.PNG" alt="" class="imagem-circular"></a>
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
