<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Laravel CRUD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home </a>
      </li>
      
      @if(Auth::user())
        <li class="nav-item">
          <a class="nav-link" href="/category">Category </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/post">Post</a>
        </li>
        <li class="nav-item">
          <form action="{{url('/logout')}}" method='POST'>
            @csrf
            <button type="submit" class="btn btn-outline-dark">Logout</button>
          </form>
        </li>
      @else
        <li class="nav-item">
          <a class="nav-link" href="/login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/register">Register</a>
        </li>
      @endif
    </ul>

    @if(Auth::user())
    <ul class="navbar-nav">
      <li class="nav-item">
        {{Auth::user()->name}}
      </li>
    </ul>
    @endif
  </div>
</nav>