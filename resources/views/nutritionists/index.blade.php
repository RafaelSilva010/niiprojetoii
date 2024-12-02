<x-guestLayout>
    <div class="max-w-4xl m-auto"> 
        <p class="text-8xl">Nutricionistas</p>
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