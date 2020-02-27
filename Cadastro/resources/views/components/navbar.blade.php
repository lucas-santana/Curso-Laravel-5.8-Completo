<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item {{ request()->routeIs('index') ? 'active' : ''}}">
                <a class="nav-link" href="/">Home </a>
            </li>
            <li class="nav-item {{ request()->routeIs('cliente.*') ? 'active' : ''}}">
                <a class="nav-link" href="{{route('cliente.index')}}">Clientes</a>
            </li>
            <li class="nav-item {{ request()->routeIs('produtos.*') ? 'active' : ''}}">
                <a class="nav-link" href="{{route('produtos.index')}}">Produtos</a>
            </li>
            <li class="nav-item {{ request()->routeIs('categorias.*') ? 'active' : ''}}">
                <a class="nav-link" href="{{route('categorias.index')}}">Categorias</a>
            </li>
           
           
        </ul>
    </div>
</nav>
