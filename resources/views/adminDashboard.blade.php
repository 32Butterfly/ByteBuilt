<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <link rel="stylesheet" href="{{ asset('css/navbarText.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  </head>

<body>


  <div class="columns is-gapless is-last">
     @include('partials.adminSideNavigation')
    <div class="column is-10 admin-panel">
     @include('partials.navbar')
     @include('partials.message-notifications')

      <section class="hero is-small">
        <!-- Hero content: will be in the middle -->
        <div class="hero-body">
          <div class="container">
            <h1 class="title has-text-black has-text-centered">
              Admin Dashboard
            </h1>
          </div>
        </div>
      </section>

      <section class="section">
      <form method="POST" action="{{ route('adminManageUsers') }}">
      @csrf

      <div class="box">
        <div class="is-flex is-align-items-center is-justify-content-space-between">
          <h1 class="subtitle has-text-weight-medium">Users</h1>
          <div class="is-flex">
            <button type="submit" name="action" value="toggleRole" class="button is-info mr-2">Change Role</button>
            <button type="submit" name="action" value="delete" class="button is-danger">Delete Selected</button>
          </div>
        </div>

        <table class="table is-fullwidth">
          <thead>
            <tr>
              <th><input type="checkbox" id="select-all"></th>
              <th>Role</th>
              <th>Name</th>
              <th>Email</th>
              <th>Created At</th>
              <th>Updated At</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
              <tr>
                <td>
                  @if ($user->id !== 1)
                    <input type="checkbox" name="user_ids[]" value="{{ $user->id }}">
                  @endif
                </td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at->format('Y-m-d H:i') }}</td>
                <td>{{ $user->updated_at->format('Y-m-d H:i') }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </form>
  </section>

  <nav class="pagination is-centered has-text-weight-medium has-text-black" role="navigation" aria-label="pagination" style="margin-bottom: 45px;">
    <ul class="pagination-list">
        {{ $users->links() }}
    </ul>
  </nav>

  <script src="{{ asset('js/checkboxUsers.js') }}"></script>

  </div>
</div>
 @include('partials.footer')
</body>