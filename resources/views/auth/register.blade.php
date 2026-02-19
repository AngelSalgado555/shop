<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Register </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    @include('components.header')

    <h2> Register </h2>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white text-center py-3"></div>
                        <h5> Formulario de registro </h5>
                    </div>
                    <div class="card-body p-4">
                        <form action="{{ route('register.shop') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name"> Name * </label>
                                <input class="form-control" type="text" name="name" id="name" placeholder="Enter name">                        
                            </div>

                            <div class="form-group">
                                <label for="email"> Email * </label>
                                <input class="form-control" type="text" name="email" id="email" placeholder="Enter email">                        
                            </div>

                            <div class="form-group">
                                <label for="password"> Password * </label>
                                <input class="form-control" type="password" name="password" id="password" placeholder="Enter password">                        
                            </div>

                            <div class="form-group">
                                <label for="password_confirmation"> Repeat Password * </label>
                                <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat password pls">                        
                            </div>

                            <button type="submit" class="btn btn-primary"> Register </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>