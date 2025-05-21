<x-app-layout>
    <form action="{{ route('profile.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="imageUpload">
          <div class="profile-container" id="profileContainer">
            @if(Auth::user()->profile_image)
              <img src="{{ asset('storage/' . Auth::user()->profile_image) }}" id="profileImage" alt="Imagem de Perfil">
            @else
              <span class="placeholder">+</span>
              <img id="profileImage" style="display: none;" alt="Imagem de Perfil">
            @endif
          </div>
        </label>
        <input type="file" id="imageUpload" name="profile_image" accept="image/*" onchange="this.form.submit();">
      </form>
    <div class="profile-info">
        <h1>{{ Auth::user()->name }}</h1>
        <p>{{ Auth::user()->email }}</p>




 </x-app-layout>
