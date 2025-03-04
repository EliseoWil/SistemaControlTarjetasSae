<?php
require_once "../../controlador/usuarioControlador.php";
require_once "../../modelo/usuarioModelo.php";

$id = $_GET["id"];

$usuario = ControladorUsuario::ctrInfoUsuario($id);

?>


<div class="modal-header">
    <h4 class="modal-title">Editar Usuario</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form id="FormEditUsuario" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">Nombre de Usuario</label>
                    <input type="text" class="form-control" id="nomUsuario" name="nomUsuario" value="<?php echo $usuario["nombre_usuario"]; ?>">
                    <input type="hidden" name="idUsuario" value="<?php echo $id; ?>">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">E-mail de Usuario</label>
                    <input type="email" class="form-control" id="emailUsuario" name="emailUsuario" value="<?php echo $usuario["email_usuario"]; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">Password de Usuario</label>
                    <input type="password" class="form-control" id="passUsuario" name="passUsuario" value="<?php echo $usuario["pass_usuario"]; ?>">
                    <p class="text-danger" id="error-pass"></p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">Repetir Password</label>
                    <input type="password" class="form-control" id="passUsuario2" name="passUsuario2" value="<?php echo $usuario["pass_usuario"]; ?>">
                    <input type="hidden" value="<?php echo $usuario["pass_usuario"]; ?>" name="passUsuario3">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">Rol de Usuario</label>
                    <select name="rolUsuario" id="rolUsuario" class="form-control">
                        <option value="Administrador" <?php if ($usuario["rol_usuario"] == "Administrador") : ?> selected <?php endif; ?>>Administrador</option>
                        <option value="Moderador" <?php if ($usuario["rol_usuario"] == "Moderador") : ?> selected <?php endif; ?>>Moderador</option>
                        <option value="Suscriptor" <?php if ($usuario["rol_usuario"] == "Suscriptor") : ?> selected <?php endif; ?>>Suscriptor</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">Estado</label>
                    <select name="estadoUsuario" id="estadoUsuario" class="form-control">
                        <option value="1" <?php if ($usuario["estado_usuario"] == "1") : ?> selected <?php endif; ?>>Activo</option>
                        <option value="0" <?php if ($usuario["estado_usuario"] == "0") : ?> selected <?php endif; ?>>Inactivo</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">Foto de Usuario</label>
                    <input type="file" class="form-control" id="imgUsuario" name="imgUsuario">
                    <input type="hidden" value="<?php echo $usuario["foto_usuario"]; ?>" name="imgUsuarioActual">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group text-center">

                    <?php
                    if ($usuario["foto_usuario"] == "") {
                    ?>
                        <img src="assest/dist/img/usuarios/user_default.png" alt="" width="100">

                    <?php
                    } else {
                    ?>
                        <img src="assest/dist/img/usuarios/<?php echo $usuario["foto_usuario"]; ?>" alt="" width="100">
                    <?php
                    } ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">Codigo Tecnico</label>
                    <input type="text" class="form-control" id="codUsuario" name="codUsuario" value="<?php echo $usuario["ci_usuario"]; ?>">
                </div>
            </div>
            <div class="col-sm-6">

            </div>
        </div>
    </form>

</div>
<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-primary" onclick="EditUsuario()">Guardar</button>
</div>