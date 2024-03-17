<nav class="navbar navbar-expand-sm navbar-dark bg-success rounded text-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">¡!</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('index') }}" aria-current="page">Index</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Options</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="{{route('system.categories.index')}}">{{__('Categories')}}</a>
                        <a class="dropdown-item" href="{{route('relationships.index')}}">Relationships</a>
                    </div>
                </li>



            </ul>
        </div>
    </div>
</nav>
