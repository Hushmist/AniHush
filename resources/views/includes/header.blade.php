<div class="container-xxl bg-dark d-flex" style="padding: 1vh 0;" > 
    <div class="d-block m-auto">
        <a class="header_logo" href="/">
            <img class="header_logo_img" src="{{asset('img/gamepad.png')}}">
            <div class="header_logo_text">
                <h2>
                    Gamer's hub
                </h2>
            </div>
        </a>
    </div>

    <div class="d-block m-auto">
        <div class="header_navigation">
            @foreach ($categories as $category)
                    <a href="{{ route('category.show', $category['id']) }}" class="header_navigation_text">
                        <h2>
                            {{$category->title}}
                        </h2>
                    </a>
            @endforeach
        </div>
    </div>
    @auth('web')
        <div class="d-block">
            <a href="#" class="header_navigation_text">
                <h2>
                    {{Auth::user()->name}}
                </h2>
            </a>
        </div>
        <div class="d-block m-auto">
            <a href="{{route('logout')}}" class="header_navigation_text">
                <h2>
                    logout
                </h2>
            </a>
        </div>
    @endauth

    @guest('web')
        <div class="d-block m-auto">
            <a href="{{route('login')}}" class="header_navigation_text">
                <h2>
                    Login
                </h2>
            </a>
        </div>
    @endguest
    
</div>