<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="{{ route('index') }}">Shop</a>
            
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-primary border-0" href="{{ route('index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-success border-0" href="{{ route('client.create') }}">Create client</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-info border-0" href="{{ route('order.create') }}">Create order</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item">
                        <span class="navbar-text me-2">Hola, {{ auth()->user()->name }}</span>
                        <a class="btn btn-outline-danger border-0" href="{{ route('logout') }}">Logout</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-secondary border-0" href="{{ route('login.shop') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-dark border-0" href="{{ route('register.shop') }}">Register</a>
                    </li>
                @endauth
            </ul>
        </div>
    </nav>
</header>