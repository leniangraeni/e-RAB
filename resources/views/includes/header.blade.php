<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href= "{{ url('/')}}">
    <h3>e-RAB</h3>
  </a>
    <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/register')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a>
      </li>
    </ul>
    </div>
</nav>
