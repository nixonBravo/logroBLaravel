<nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{url('/')}}">LogroB</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Productos
                    </a>
                    <ul class="dropdown-menu" style="background-color: #D8FFF1" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{url('/tipos-productos')}}">Tipos de Productos</a></li>
                        <li><a class="dropdown-item" href="{{url('/productos')}}">Productos</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
