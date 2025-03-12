<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Lista de Clientes</title>
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
        <h1>Usuarios</h1>

        <p>
            <a href="create.php" class="btn btn-primary">Crear usuario</a>
        </p>
        <ul id="client-list"></ul>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ciudad</th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="client-table-body">
            </tbody>
        </table>
    </div>
    <footer class="border-top footer text-muted">
        <div class="container">
            &copy; 2025
        </div>
    </footer>
    <script src="~/lib/jquery/dist/jquery.min.js"></script>
    <script src="~/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        fetch('API.REST.PHP/api-rest/get_all_client.php')
            .then(response => response.json())
            .then(data => {
                let tableBody = document.getElementById("client-table-body");
                tableBody.innerHTML = "";

                data.forEach((client, index) => {
                    let row = document.createElement("tr");

                    row.innerHTML = `
                    <th scope="row">${index + 1}</th>
                    <td>${client.name}</td>
                    <td>${client.email}</td>
                    <td>${client.city}</td>
                     <td>
                        <a href="update.php?id=${client.id}" class="btn btn-warning btn-sm">Editar</a>
                        <a href="delete.php?id=${client.id}" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                `;
                    tableBody.appendChild(row);
                });
            })
            .catch(error => console.error("Error al obtener los clientes:", error));
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
