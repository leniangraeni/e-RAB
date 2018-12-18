<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ url('/') }}">
                <h3>e-RAB</h3>
            </a>
        </div>
            <!-- Left Side Of Navbar -->
        <ul class="nav navbar-nav">

        </ul>

        <!-- Right Side Of Navbar -->
        &nbsp;
        <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
              @if (Auth::guest())
              <div class="navnih">
                <li><a href="{{ url('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              </div>
              <div class="navnih">
                <li><a href="{{ url('register') }}"><span class="glyphicon glyphicon-user"></span> Register</a></li>
              </div>
              @else
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          {{ Auth::user()->name }}
                          <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                          <li>
                              <a href="{{ url('logout') }}"
                                  onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                  Logout
                              </a>
                              <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                              </form>
                          </li>
                      </ul>
                  </li>
              @endif
        </ul>
    </div>
</nav>
