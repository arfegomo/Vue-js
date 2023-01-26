<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" > 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="plugins/sweetalert2/css/sweetalert2.min.css" >
    <link rel="stylesheet" href="main.css" >

<body>

<header>
    <h2 class="text-center text-dark"><span class="badge badge-warning">CRUD con VUE.JS</span></h2>
</header>

<div id="appMoviles">
    <div class="container">
        <div class="row">
            <div class="col">
                <button @click="btnAlta" class="btn btn-success" title="Nuevo"><i class="fas fa-plus-circle fa-2x"></i></button>
            </div>
            <div class="col text-right">
                <h5>Stock total:<span class="badge badge-success">{{ totalStock }}</span></h5>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12">
                <table class="table table-striped">
                <thead>
                <tr class="bg-primary text-light">
                    <th>ID</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Stock</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                    <tbody>
                        <tr v-for="(movil,indice) of moviles">
                            <td>{{ movil.id }}</td>
                            <td>{{ movil.marca }}</td>
                            <td>{{ movil.modelo }}</td>
                            <td>
                                <div class="col-md-8">
                                    <input type="number" v-model.number="movil.stock" class="form-control text-right" disable>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-secondary" title="Editar" @click="btnEditar(movil.id,movil.marca,movil.modelo,movil.stock)"><i class="fas fa-pencil-alt"></i></button>
                                    <button class="btn btn-danger" title="Eliminar" @click="btnBorrar(movil.id)"><i class="fas fa-trash-alt"></i></button>
                                </div> 
                            </td>
                            
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<script src="jquery/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js" integrity="sha512-nnzkI2u2Dy6HMnzMIkh7CPd1KX445z38XIu4jG1jGw7x5tSL3VBjE44dY4ihMU1ijAQV930SPM12cCFrB18sVw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.15.2/axios.js" integrity="sha512-jTuRnxS54NOgIMRSoc0twEa2U5GUPUFWgKrNJyGkWHY4UQf0UQpavg4gLYYL2xq+EY5thsU3rdykvv74GVqKFA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>
<script src="main.js"></script>


</body>
</head>
</html>