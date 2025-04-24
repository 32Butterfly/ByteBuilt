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
    <aside class="column is-2 aside hero is-fullheight is-hidden-mobile side-navigation has-background-black-bis">
      <nav class="menu">
        <p class="menu-label has-text-white has-text-centered main-text">Main</p>

        <ul class="menu-list">
          <li><a class="is-active" href="#">
            <span class="icon is-small"><i class="fa fa-home"></i></span>
            <span>Dashboard</span></a></li>

          <li><a href="#">
            <span class="icon is-small"><i class="fa fa-map-marker"></i></span>
            <span>Activity</span></a></li>

          <li><a href="#">
            <span class="icon is-small"><i class="fa fa-th-list"></i></span>
            <span>Timeline</span></a></li>

          <li><a href="#">
            <span class="icon is-small"><i class="fa fa-folder-o"></i></span>
            <span>Folders</span></a></li>
        </ul>
      </nav>
    </aside>
    <div class="column is-10 admin-panel">
      <nav class="nav has-shadow" id="top">
        <div class="container">
          <div class="nav-left">
            @include('partials.navbar')
          </div>
          <span class="nav-toggle">
            <span></span>
            <span></span>
            <span></span>
          </span>
          <div class="nav-right nav-menu is-hidden-tablet">
            <a href="#" class="nav-item is-active">
              Dashboard
            </a>
            <a href="#" class="nav-item">
              Activity
            </a>
            <a href="#" class="nav-item">
              Timeline
            </a>
            <a href="#" class="nav-item">
              Folders
            </a>
          </div>
        </div>
      </nav>
      <section class="hero is-small">
        <!-- Hero content: will be in the middle -->
        <div class="hero-body">
          <div class="container">
            <h1 class="title">
              Admin Dashboard
            </h1>
            <h2 class="subtitle">
              A simple admin template
            </h2>
          </div>
        </div>

        <!-- Hero footer: will stick at the bottom -->
        <div class="hero-foot">
          <nav class="level">
            <div class="level-item has-text-centered">
              <p class="heading">Tweets</p>
              <p class="title">3,456</p>
            </div>
            <div class="level-item has-text-centered">
              <p class="heading">Following</p>
              <p class="title">123</p>
            </div>
            <div class="level-item has-text-centered">
              <p class="heading">Followers</p>
              <p class="title">456K</p>
            </div>
            <div class="level-item has-text-centered">
              <p class="heading">Likes</p>
              <p class="title">789</p>
            </div>
          </nav>
        </div>
      </section>

      <section class="section">
            <div class="box">
                <h2 class="subtitle">Users</h2>
                <table class="table is-fullwidth">
                    <thead>
                        <tr>
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
        </section>



      <section class="section has-background-white-ter">
        <div class="columns is-mobile is-multiline">
          <div class="column is-one-third-desktop is-full-mobile">
            <section class="panel">
              <p class="panel-heading">
                Total Users
              </p>
              <p class="panel-tabs">
                <a class="is-active" href="#">All Time</a>
                <a href="#">Past week</a>
                <a href="#">Past month</a>
                <a href="#">Past quarter</a>
                <a href="#">Past Year</a>
              </p>
              <div class="panel-block">
                <div id="chart1" style="height: 250px;"></div>
              </div>
              <div class="panel-block">
                <button class="button is-default is-outlined is-fullwidth">
                  View Data
                </button>
              </div>
            </section>
          </div>
          <div class="column is-one-third-desktop is-full-mobile">
            <section class="panel">
              <p class="panel-heading">
                Sales
              </p>
              <div class="panel-block">
                <div id="chart2" style="height: 280px;"></div>
              </div>
              <div class="panel-block">
                <button class="button is-default is-outlined is-fullwidth">
                  View Data
                </button>
              </div>
            </section>
          </div>
          <div class="column is-one-third-desktop is-full-mobile">
            <section class="panel">
              <p class="panel-heading">
                YoY Comparison
              </p>
              <div class="panel-block">
                <div id="chart3" style="height: 280px;"></div>
              </div>
              <div class="panel-block">
                <button class="button is-default is-outlined is-fullwidth">
                  View Data
                </button>
              </div>
            </section>
          </div>
          <div class="column is-half-desktop is-full-mobile">
            <section class="panel">
              <p class="panel-heading">
               Notifications
             </p>
             <div class="panel-block">
              <div class="notification is-warning">
                <button class="delete" onclick="((this).parentNode.remove())"></button>
                <strong>Server 101a is at 90% disk capacity.</strong>
                <br>
                <small>1h ago | via: system</small> 
              </div>
              <div class="notification">
                <button class="delete" onclick="((this).parentNode.remove())"></button>
                <strong>Cron job successfully completed.</strong>
                <br>
                <small>2h ago | via: system</small> 
              </div>
              <div class="notification">
                <button class="delete" onclick="((this).parentNode.remove())"></button>
                <strong>Completed automated backup.</strong>
                <br>
                <small>1d ago | via: system</small> 
              </div>
              <div class="notification">
                <button class="delete" onclick="((this).parentNode.remove())"></button>
                <strong>Security scan complete. 0 exceptions found.</strong>
                <br>
                <small>1d ago | via: system</small> 
              </div>
            </div>
          </section>
        </div>
        <div class="column is-half-desktop is-full-mobile">
          <section class="panel">
            <p class="panel-heading">
              Forecast
            </p>
            <div class="panel-block">
              <div id="chart5" style="height: 280px;"></div>
            </div>
          </section>
        </div>
        <div class="column is-half-desktop is-full-mobile">
          <section class="panel">
            <p class="panel-heading">
              Popular Followers
            </p>
            <div class="panel-block">
              <table class="table">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Instrument</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Instrument</th>
                    <th></th>
                    <th></th>
                  </tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td>Misty Abbott</td>
                    <td>Bass Guitar</td>
                    <td class="is-icon">
                      <a href="#">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </td>
                    <td class="is-icon">
                      <a href="#">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>John Smith</td>
                    <td>Rhythm Guitar</td>
                    <td class="is-icon">
                      <a href="#">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </td>
                    <td class="is-icon">
                      <a href="#">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>Robert Mikels</td>
                    <td>Lead Guitar</td>
                    <td class="is-icon">
                      <a href="#">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </td>
                    <td class="is-icon">
                      <a href="#">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>Karyn Holmberg</td>
                    <td>Drums</td>
                    <td class="is-icon">
                      <a href="#">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </td>
                    <td class="is-icon">
                      <a href="#">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </section>
        </div>
        <div class="column">
          <section class="panel">
            <p class="panel-heading">
             Message User
           </p>
           <div class="panel-block">
            <label class="label">Name</label>
            <p class="control">
              <input class="input" type="text" placeholder="Text input">
            </p>
            <label class="label">Username</label>
            <p class="control has-icon has-icon-right">
              <input class="input is-success" type="text" placeholder="Text input" value="bulma">
              <i class="fa fa-check"></i>
              <span class="help is-success">This username is available</span>
            </p>
            <label class="label">Email</label>
            <p class="control has-icon has-icon-right">
              <input class="input is-danger" type="text" placeholder="Email input" value="hello@">
              <i class="fa fa-warning"></i>
              <span class="help is-danger">This email is invalid</span>
            </p>
            <label class="label">Subject</label>
            <p class="control">
              <span class="select">
                <select>
                  <option>Select dropdown</option>
                  <option>With options</option>
                </select>
              </span>
            </p>
            <label class="label">Message</label>
            <p class="control">
              <textarea class="textarea" placeholder="Textarea"></textarea>
            </p>
            <p class="control">
              <label class="checkbox">
                <input type="checkbox">
                Remember me
              </label>
            </p>
            <p class="control">
              <label class="radio">
                <input type="radio" name="question">
                Yes
              </label>
              <label class="radio">
                <input type="radio" name="question">
                No
              </label>
            </p>
            <p class="control">
              <button class="button is-primary">Submit</button>
              <button class="button is-link">Cancel</button>
            </p>
          </div>
        </section>
      </div>
    </div>
  </section>
</div>
</div>
 @include('partials.footer')
</body>