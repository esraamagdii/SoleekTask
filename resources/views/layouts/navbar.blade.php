<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <h5 class="my-0 mr-md-auto font-weight-normal"> My Task</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        @if(!Auth::check())
          <a class="p-2 text-dark" href="/register">Register</a>
          <a class="p-2 text-dark" href="/login">Login</a>
        @endif
        
        <a class="p-2 text-dark" href="/area">Area</a>
        <a class="p-2 text-dark" href="https://github.com/esraamagdii">GitHub</a>

        @if(Auth::check())
            <a class="p-2 text-dark" href="/logout">Logout</a>
            <a class="p-2 blue ml-auto" href="#">{{Auth::User()->name}}</a>
        @endif
      </nav>
</div>