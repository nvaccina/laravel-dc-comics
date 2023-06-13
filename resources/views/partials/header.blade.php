<header class="border border-bottom-2">
    <div class="container py-3">

        <ul class="nav nav-underline">
            <li class="nav-item">
                <a class="nav-link {{Route::currentRouteName() === 'home' ? 'active' : ''}}" aria-current="page" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::currentRouteName() === 'comics.index' ? 'active' : ''}}" href="{{route('comics.index')}}">Comics</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::currentRouteName() === 'comics.create' ? 'active' : ''}}" href="{{route('comics.create')}}">Create new Comic Book</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::currentRouteName() === 'contacts' ? 'active' : ''}}" href="{{route('contacts')}}">Contacts</a>
            </li>
        </ul>
    </div>


</header>
