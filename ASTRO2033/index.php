<?php   include 'views/nuevoModalBitacora.php'; 
        include 'views/nuevoModalFabricante.php'; 
        include 'views/nuevoModalProducto.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!--Jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/5a9cfd487f.js" crossorigin="anonymous"></script>
    <!--DataTables-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.js"></script>

    <link rel="stylesheet" type="text/css" href="/css/tab.css">
    <style>
        /* Estilo para el  tab */
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
        }

        .tab button:hover {
            background-color: #ddd;
        }

        .tab button.active {
            background-color: #ccc;
        }

        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
            animation: fadeEffect 1s;
        }

        @keyframes fadeEffect {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    </style>

    <title>BITACORA FABRICANTES</title>
</head>

<body>
    <div class="container-fluid p-0 bg-secondary text-white text-center">
        <h1>Bitácora de Fabricantes</h1>
        <p class="bg-dark text-white">ASTROQUIM-PADOQUIMIA</p>
    </div>
    <main class="container py-1">
        <div class="row justify-content-end">
            <div class="col-auto p-3">
                <!-- BOTONES -->
                <button class="btn btn-success" id="captura_lote" data-bs-toggle="modal" data-bs-target="#nuevoModalBitacora"><i class="fa-solid fa-table-list"></i> Nuevo Registro</button>
                <button class="btn btn-warning" id="captura_lote" data-bs-toggle="modal" data-bs-target="#nuevoModalFabricante"><i class="fa-solid fa-industry"></i> Alta Fabricante</button>
                <button class="btn btn-primary" id="captura_lote" data-bs-toggle="modal" data-bs-target="#nuevoModalProducto"><i class="fa-solid fa-box"></i> Alta Producto</button>
            </div>
        </div>

        <!-- Tab links -->
        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'Fabricante')" id="defaultOpen">Fabricante</button>
            <button class="tablinks" onclick="openCity(event, 'Producto')">Producto</button>
        </div>

        <!-- Tab content -->
        <div id="Fabricante" class="tabcontent">
            <h3>Busqueda por Fabricante</h3>
            <div class="row">
                <div class="col-12">
                    <div class="mb-auto mt-auto">
                        <input class="form-control" type="text" id="campob" name="campob" required autofocus placeholder="Nombre de Fabricante" autocomplete="off" onkeyup="buscarF();">
                    </div>
                </div>
            </div>

            <div class="row py-3">
                <!-- Resultado busqueda de Fabricantes-->
                <div class="col-12" style="overflow-x:auto;">
                    <h5>Resultado de Busqueda</h5>
                    <div class="table-responsive" id="resultadoBusqueda"></div>
                </div>
            </div>
        </div>

        <div id="Producto" class="tabcontent">
            <h3>Busqueda por Producto</h3>
            <div class="row">
                <div class="col-12">
                    <div class="mb-auto mt-auto">
                        <input class="form-control" type="text" id="campob" name="campob" required autofocus placeholder="Nombre de Producto" autocomplete="off" onkeyup="buscarP();">
                    </div>
                </div>
            </div>

            <div class="row py-3">
                <!-- Resultado busqueda de Productos-->
                <div class="col-12" style="overflow-x:auto;">
                    <h5>Resultado de Busqueda</h5>
                    <div class="table-responsive" id="resultadoBusqueda"></div>
                </div>
            </div>
        </div>
    </main>

    
</body>

<script> //Script para navegar en el tab
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>

<script>
    // Obtener el elemento con id="defaultOpen" y click
    document.getElementById("defaultOpen").click();
</script>

</html>