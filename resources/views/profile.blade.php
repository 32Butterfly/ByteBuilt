<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbarText.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  </head>

  <body>
    
    @include('partials.navbar')
    @include('partials.message-notifications')

    <div class="login-container">
      <div class="login-box">
        <h2 class="title has-text-centered has-text-primary">Your Profile</h2>

        <form method="POST" action="{{ route('profile.post') }}" enctype="multipart/form-data">
        @csrf

        <div class="has-text-centered mb-4">
          <figure class="image is-128x128 is-inline-block">
            @if (Auth::user()->profile_picture)
              <img class="is-rounded" style="width: 128px; height: 128px; object-fit: cover;"  src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="Profile Picture">
            @else
              <img class="is-rounded" style="width: 128px; height: 128px; object-fit: cover;"  src="{{ asset('images/default_avatar.png') }}" alt="Default Profile Picture">
            @endif
          </figure>
        </div>

        <div class="file has-name is-justify-content-center">
          <label class="file-label">
            <input class="file-input" type="file" name="image" id="imageInput" />
            <span class="file-cta">
              <span class="file-icon">
                <i class="fas fa-upload"></i>
              </span>
              <span class="file-label">Choose a file…</span>
            </span>
            <span class="file-name" id="fileName">No file selected</span>
          </label>
        </div>

        <script src="{{ asset('js/showImageName.js') }}"></script>

        <div class="field has-text-centered mt-4" style="margin-bottom: 25px;">
          <button type="submit" class="button is-link is-light is-fullwidth">Upload</button>
        </div>
      </form>

        <div class="box">
          <div class="field">
            <label class="label">Name</label>
            <div class="control">
              <p>{{ Auth::user()->name }}</p>
            </div>
          </div>

          <div class="field">
            <label class="label">Email</label>
            <div class="control">
              <p>{{ Auth::user()->email }}</p>
            </div>
          </div>

          <div class="field">
            <label class="label">Account Created</label>
            <div class="control">
              <p>{{ Auth::user()->created_at->format('F j, Y') }}</p>
            </div>
          </div>

          <div class="field mt-4">
            <a href="{{ route('logout') }}" class="button is-danger is-fullwidth">
              Logout
            </a>
          </div>
        </div>
      </div>
    </div>

    @include('partials.footer')
  </body>
</html>
