<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <a href="/" style="color: #0d6efd"><i class="fa-solid fa-square-h fa-2x"></i></a> 

          @if ($categories->count() > 4)
            @for ($i = 0; $i <= 3; $i++)
              <li><a href="{{ route('categories.show', $categories[$i]->id) }}" class="nav-link px-2 text-white">{{$categories[$i]->title}}</a></li>
            @endfor
              <li>
                <a class="dropdown-toggle nav-link px-2" data-bs-toggle="dropdown" aria-expanded="false" style="color: #fff">
                    Прочее
                  </a>
                  <ul class="dropdown-menu">
                    @for ($i = 4; $i < $categories->count(); $i++)
                      <li><a href="{{ route('categories.show', $categories[$i]->id) }}" class="dropdown-item nav-link px-2 text-dark">{{$categories[$i]->title}}</a></li>
                    @endfor
                  </ul>
              </li>
          @else
            @foreach ($categories as $category)
                <li><a href="{{ route('categories.show', $category['id']) }}" class="nav-link px-2 text-white">{{$category->title}}</a></li>
            @endforeach
          @endif
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search" action="{{ route('search') }}" method="GET">
          <input name="search" type="search" class="form-control form-control-dark text-bg-dark" placeholder="Поиск..." aria-label="Search">
        </form>
        @guest('web')
          <div class="text-end">
            <a type="button" href="{{route('login')}}" class="btn btn-outline-light me-2">Логин</a>
            <a type="button" href="{{route('register')}}" class="btn btn-warning">Регистрация</a>
          </div>
        @endguest

        @auth('web')
          <div class="text-end">
            <a type="button" href="{{route('logout')}}" class="btn btn-outline-light me-2">Выйти</a>
            @role('admin')
              <a type="button" href="{{route('homeAdmin')}}" class="btn btn-warning">Админ панель</a>
            @endrole
          </div>
        @endauth

      </div>
    </div>
  </header>