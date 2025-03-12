<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3">
            <div class="container-fluid">
                <a class="navbar-brand">Prueba Tecnica</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </header>
    <div class="container">
        <h2>Crear cliente</h2>
        <form id="clientForm" action="API.REST.PHP/api-rest/create_client.php" method="POST">
            <div class="row">
                <div class="col-5 mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="name" class="form-control" id="name" aria-describedby="Nombre" required>
                </div>
                <div class="col-5 mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                </div>
            </div>
            <div class="row">
                <div class="col-5 mb-3">
                    <label for="city" class="form-label">Ciudad</label>
                    <input type="city" class="form-control" id="city" required>
                </div>
                <div class="col-5 mb-3">
                    <label for="telephone" class="form-label">Telefono</label>
                    <input type="telephone" class="form-control" id="telephone" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>
    <script src="../js/create-client/script.js"></script>
</body>

</html>