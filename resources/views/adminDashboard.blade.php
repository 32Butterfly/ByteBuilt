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
          <div class="hero-body">
            <div class="container">
              <h1 class="title has-text-black has-text-centered">Admin Dashboard</h1>
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
                  <button type="button" class="button is-primary mr-2" id="openModalBtn">
                    <span class="icon"><i class="fas fa-user-plus"></i></span>
                    <span>Add New User</span>
                  </button>
                  <button type="submit" name="action" value="delete" class="button is-danger mr-2">Delete Selected</button>
                  <button type="submit" name="action" value="toggleRole" class="button is-info">Change Role</button>
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

    <!-- Add New User Modal -->
    <div class="modal" id="addUserModal">
      <div class="modal-background"></div>
      <div class="modal-card">
        <header class="modal-card-head">
          <p class="modal-card-title">Add New User</p>
          <button class="delete is-large" aria-label="close" id="closeModalBtn"></button>
        </header>

        <section class="modal-card-body">
          <form method="POST" action="{{ route('adminAddUser') }}">
            @csrf
            <div class="field">
              <label class="label">Name</label>
              <div class="control">
                <input class="input" type="text" name="name" placeholder="Full Name" required>
              </div>
            </div>

            <div class="field">
              <label class="label">Email</label>
              <div class="control">
                <input class="input" type="email" name="email" placeholder="Email" required>
              </div>
            </div>

            <div class="field">
              <label class="label">Password</label>
              <div class="control">
                <input class="input" type="password" name="password" placeholder="Password" required>
              </div>
            </div>

            <div class="field">
              <label class="label">Role</label>
              <div class="control">
                <div class="select">
                  <select name="role" required>
                    <option value="admin">superuser</option>
                    <option value="user">user</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="control">
              <button type="submit" class="button is-primary is-fullwidth">Add User</button>
            </div>
          </form>
        </section>
      </div>
    </div>

    <script src="{{ asset('js/adminUserModal.js') }}"></script>

    @include('partials.footer')
  </body>
</html>