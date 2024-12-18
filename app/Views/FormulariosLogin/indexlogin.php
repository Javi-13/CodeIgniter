<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center vh-80 mt-5 mb-5">
    <form class="row g-4 needs-validation border-4 border-dark rounded bg-light" novalidate>
        <div class="col-md-12">
            <h2 clas = "text-center mb-4">Iniciar sesion</h2>
            <label for="validationCustom01" class="form-label">Usuario</label>
            <input placeholder="Ingresa tu usuario" type="text" class="form-control" id="validationCustom01" value="Lenin" required>
            <div class="valid-feedback">
            </div>
        </div>
        <div class="col-md-12">
            <label for="validationCustom02" class="form-label">Contraseña</label>
            <input placeholder="Contraseña" type="password" class="form-control" id="validationCustom02" value="1234" required>
            <div class="valid-feedback">
            </div>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto mt-5">
            <a href="http://localhost/PROYECTODW202416/Formulario" class="btn btn-primary text-decoration-none">Ingresar</a>
        </div>
    </div>
    </form>



</body>

</html>