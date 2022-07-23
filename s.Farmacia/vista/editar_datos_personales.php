<?php
session_start();
if($_SESSION['us_tipo']==1){
    include_once 'layouts/header.php';
?>

    <title>Adm | Editar Datos</title>
<?php
    include_once 'layouts/nav.php';
?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Datos Personales</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="../vista/adm_catalogo.php">Home</a></li>
                <li class="breadcrumb-item active">Datos Personales</li>
            </ol>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section> 
    <section>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card card-success card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img src="../img/doctora0.png" class="profile-user-img img-fluid img-circle">
                                    <h3 class="profile-username text-center text-black">Nombre</h3>
                                    <p class="text-muted text-center">Apellidos</p>
                                </div>
                                <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b style="color: #8F00FF;">Edad</b><a class="float-right">12</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b style="color: #8F00FF;">DNI</b><a class="float-right">12</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b style="color: #8F00FF;">Tipo De Usuario</b>
                                            <span class="float-right badge badge-primary">Administrador</span>
                                        </li>
                                </ul>
                            </div>

                        </div>
                        <div class="card card-fuchsia">
                            <div class="card-header">
                                <h3 class="card-title">Sobr Mi</h3>

                            </div>
                            <div class="card-body">
                                <strong style="color: #3349FF;">
                                    <i class="fas fa-phone mr-1">Telefono</i>
                                </strong>
                                <p class="text-muted">9898789</p>

                                <strong style="color: #3349FF;">
                                    <i class="fas fa-map-marker-alt mr-1">Residencia</i>
                                </strong>
                                <p class="text-muted">9898789</p>

                                <strong style="color: #3349FF;">
                                    <i class="fas fa-at mr-1">Correo</i>
                                </strong>
                                <p class="text-muted">9898789</p>

                                <strong style="color: #3349FF;">
                                    <i class="fas fa-smile-wink mr-1">Sexo</i>
                                </strong>
                                <p class="text-muted">9898789</p>

                                <strong style="color: #3349FF;">
                                    <i class="fas fa-pencil-alt mr-1"></i>Informacion Internacional
                                </strong>
                                <p class="text-muted">9898789</p>

                                <button class="btn btn-block bg-gradient-danger">Editar</button>

                            </div>

                            <div class="card-footer">

                            </div>

                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Editar Datos Personales</h3>


                            </div>
                            <div class="card-body">
                                <form  class="form-horizontal">
                                    <div class="form-group row">
                                        <label for="telefono" class="col-sm-2 col-form-label">Telefono</label>
                                        <div class="col-sm-10">
                                        <input type="number" id="telefono" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for=residencia" class="col-sm-2 col-form-label">Residencia</label>
                                        <div class="col-sm-10">
                                        <input type="text" id="residencia" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for=Correo" class="col-sm-2 col-form-label">Correo</label>
                                        <div class="col-sm-10">
                                        <input type="text" id="Correo" class="form-control">
                                        </div>
                                    </div> 
                                    
                                    <div class="form-group row">
                                        <label for=adicional" class="col-sm-2 col-form-label">Informacion Adicional</label>
                                        <div class="col-sm-10">
                                        <textarea class="form-control" name="" id="adisional" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10 float-right">
                                            <button class="btn btn-block btn-outline-success">Guardar</button>
                                        </div>

                                    </div>
                                </form>

                            </div>

                            <div class="card-footer">
                                <p class="text-muted">Cuidado con Ingresar Datos Erroneos</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>   
    </div>
    <!-- /.content-wrapper -->

<?php
include_once 'layouts/footer.php';
}
else{
    header('Location:../index.php');
}
?>
