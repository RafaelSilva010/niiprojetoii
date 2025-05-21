<x-guestLayout>
    <div style="background-color:rgb(38, 39, 114)">
    <div>
    <p style="text-align: center;font-size: 530%;background-color:#323372;" class="m-auto">Profissionais</p>
    <div> <div style="text-align: center; margin: 20px 0;">

            </div>
            <div style="text-align: center;">
                <button style="background-color: #071169; color: white; margin: 5px;">Cirurgião</button>
                <button style="background-color: #071169; color: white; margin: 5px;">Farmacêutico</button>
                <button style="background-color: #071169; color: white; margin: 5px;">Nutricionista</button>
                <button style="background-color: #071169; color: white; margin: 5px;">Enfermagem</button>
                <button style="background-color: #071169; color: white; margin: 5px;">Pediatria</button>
                <button style="background-color: #071169; color: white; margin: 5px;">Fonoaudiologia</button>
                <button style="background-color: #071169; color: white; margin: 5px;">Educação Física</button>
                <button style="background-color: #071169; color: white; margin: 5px;">Saúde Pública</button>
                <button style="background-color: #071169; color: white; margin: 5px;">Enfermagem Obstétrica</button>
                <button style="background-color: #071169; color: white; margin: 5px;">Psicologia</button>
                <button style="background-color: #071169; color: rgb(234, 230, 247); margin: 5px;">Medicina</button>
                <button style="background-color: #071169; color: white; margin: 5px;">Fisioterapia</button>
                <button style="background-color: #071169; color: white; margin: 5px;">Odontologia</button>
                <button style="background-color: #071169; color: white; margin: 5px;">Farmácia</button>
                <button style="background-color: #071169; color: white; margin: 5px;">Terapia Ocupacional</button>
                <button style="background-color: #071169; color: white; margin: 5px;">Psiquiatria</button>
                <button style="background-color: #071169; color: white; margin: 5px;">Biomedicina</button>
                <button style="background-color: #071169; color: white; margin: 5px;">Nutrição Esportiva</button>
                <button style="background-color: #071169; color: white; margin: 5px;">Logopedia</button>
            </div>
        </div>

        <div style="display: flex; gap: 10px;">
            <img src="rafael_silva.jpg" style="width: 100px; height: 150px; object-fit: cover; border-radius: 10%; overflow: hidden; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);">
            <img src="rafael_silva.jpg" style="width: 100px; height: 150px; object-fit: cover; border-radius: 10%; overflow: hidden; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);">
            <img src="rafael_silva.jpg" style="width: 100px; height: 150px; object-fit: cover; border-radius: 10%; overflow: hidden; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);">
            <img src="rafael_silva.jpg" style="width: 100px; height: 150px; object-fit: cover; border-radius: 10%; overflow: hidden; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);">
            <img src="rafael_silva.jpg" style="width: 100px; height: 150px; object-fit: cover; border-radius: 10%; overflow: hidden; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);">
            <img src="rafael_silva.jpg" style="width: 100px; height: 150px; object-fit: cover; border-radius: 10%; overflow: hidden; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);">
            <img src="rafael_silva.jpg" style="width: 100px; height: 150px; object-fit: cover; border-radius: 10%; overflow: hidden; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);">
            <img src="rafael_silva.jpg" style="width: 100px; height: 150px; object-fit: cover; border-radius: 10%; overflow: hidden; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);">
            <img src="rafael_silva.jpg" style="width: 100px; height: 150px; object-fit: cover; border-radius: 10%; overflow: hidden; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);">
            <img src="rafael_silva.jpg" style="width: 100px; height: 150px; object-fit: cover; border-radius: 10%; overflow: hidden; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);">
            <img src="rafael_silva.jpg" style="width: 100px; height: 150px; object-fit: cover; border-radius: 10%; overflow: hidden; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);">
            <img src="rafael_silva.jpg" style="width: 100px; height: 150px; object-fit: cover; border-radius: 10%; overflow: hidden; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);">



        </div>

    </div>
    </div>

    <div class="max-w-4xl m-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        @foreach ($nutritionists as $nutritionist)
            <a href="/nutritionists/{{ $nutritionist->id}}">
                <div class="border-2 m-4 p-4 rounded-lg">
                    <image class="h-48 object-cover" src="/images/nutritionists/{{ $nutritionist->image }}"/>
                    <p class="font-bold text-center">{{ $nutritionist->name }}</p>
                    <p class="text-center">{{ $nutritionist->email }}</p>
                </div>
            </a>
        @endforeach
    </div>



</x-guestLayout>


