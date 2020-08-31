<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <a class="navbar-brand" href="/">Challenges 24/7</a>
        <form class="form-inline mr-auto ml-auto">
            
        </form>
        @guest
            <a class="btn btn-outline-success my-2 my-sm-0" id="login" href="{{ route('login') }}">Login</a>
            <a class="btn btn-outline-success my-2 my-sm-0" id="register" href="{{ route('register') }}">Register</a>
        @else
            @if(DB::table('users')->where('id', \Illuminate\Support\Facades\Auth::id())->first()->role_id == 2)
                <a class="btn btn-outline-danger my-2 my-sm-0 new-category-button" href="{{ route('categories.create') }}">Create category</a>
                <a class="btn btn-outline-danger my-2 my-sm-0 new-category-button" href="{{ route('categories.index') }}">Category list</a>
            @endif
            <a class="btn btn-outline-warning my-2 my-sm-0" href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endguest
    </div>
</nav>
