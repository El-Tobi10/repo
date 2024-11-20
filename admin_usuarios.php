<?php include "C:/xampp/htdocs/repo/include/header.php";?>
<?php
if(!isset($_SESSION['admin'])){
    echo "<script language=javascript> location.href='/repo/index.php';</script>";
    die();
}

if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM usuarios INNER JOIN roles ON roles.id_rol = usuarios.id_rol";
$result = mysqli_query($con, $sql);
?>
<link rel="stylesheet" href="CSS/form.css">
<title>Gestión de Usuarios - Bestgamer</title>



<h2 class="admin-table-title text-center">Gestión de Usuarios</h2>
<div class="formulario">
    <div class="container-fluid admin-table-container text-dark">
        <div class="table-responsive">
            <table id="usuariosTable" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID Usuario</th>
                        <th>Email</th>
                        <th>Nombre Usuario</th>
                        <th>Rol</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr data-id='" . $row["id_usuario"] . "'>
                                <td>" . htmlspecialchars($row["id_usuario"]) . "</td>
                                <td>" . htmlspecialchars($row["mail"]) . "</td>
                                <td>" . htmlspecialchars($row["usuario"]) . "</td>
                                <td>" . htmlspecialchars($row["rol"]) . "</td>
                                <td>
                                <button class='btn btn-edit' data-id='" . $row["id_usuario"] . "'>Editar</button>
                                <button class='btn btn-delete' data-id='" . $row["id_usuario"] . "'>Eliminar</button>
                            </td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='10'>No hay usuarios registrados</td></tr>";
                }
                ?>
                </tbody>
            </table>
            <div class="modal fade text-black" id="editReservaModal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Editar Usuario</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <form id="editReservaForm">
                                <input type="hidden" id="edit-id-usuario" name="id_usuario">
                                <div class="mb-3">
                                    <label>Username</label>
                                    <input type='text' class='form-control' placeholder='Ingrese el nuevo nombre de usuario' id='edit-username' name='user'>
                                </div>
                                <div class="mb-3">
                                    <label>Rol</label>
                                    <select name="rol" class="form-control" id="rol-select">
                                        <option value="0">--Seleccione un Rol--</option>
                                        <?php
                                    $queryRol = "SELECT DISTINCT rol FROM roles";
                                    $result = mysqli_query($con, $queryRol);
                                    
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<option value='" . $row['rol'] . "'>" . $row['rol'] . "</option>";
                                    }
                                ?>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary" id="guardarCambios">Guardar Cambios</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    var table = $('#usuariosTable').DataTable({
        responsive: true,
        pageLength: 10,
        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json'
        },
        columnDefs: [{
            targets: -1,
            orderable: false,
            searchable: false
        }],
        drawCallback: function() {
            $('.dataTables_paginate .paginate_button').addClass(
                'btn btn-sm btn-outline-primary mx-1');
        }
    });

    // Evento para editar usuario
    $('#usuariosTable').on('click', '.btn-edit', function() {
        var idUsuario = $(this).data('id');

        $.ajax({
            url: 'editar_usuario.php',
            method: 'GET',
            data: {
                id_usuario: idUsuario
            },
            dataType: 'json',
            success: function(data) {
                console.log('Datos recibidos:', data); // Depuración x1 

                if (data.success === false) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: data.message
                    });
                    return;
                }

                $('#edit-id-usuario').val(data.id_usuario);
                $('#edit-username').val(data.user);

                $('#editReservaModal').modal('show');
            },
            error: function(xhr, status, error) {
                console.error('Error en la solicitud:', status, error);
                console.log('Respuesta del servidor:', xhr.responseText);
                Swal.fire({
                    icon: 'error',
                    title: 'Error de conexión',
                    text: 'No se pudo cargar el usuario: ' + error
                });
            }
        });
    });

    // Evento para guardar cambios
    $('#guardarCambios').click(function() {
        $.ajax({
            url: 'editar_usuario.php',
            method: 'POST',
            data: $('#editReservaForm').serialize(),
            dataType: 'json',
            success: function(response) {
                console.log('Respuesta del servidor:', response); // Depuración x1000

                if (response.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Usuario Actualizado',
                        text: response.message,
                        timer: 2000,
                        showConfirmButton: false
                    }).then(() => {
                        location.reload();
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: response.message
                    });
                }
            },
            error: function(xhr, status, error) {
                console.error('Error en la solicitud:', status, error);
                console.log('Respuesta del servidor:', xhr.responseText);
                Swal.fire({
                    icon: 'error',
                    title: 'Error de conexión',
                    text: 'No se pudo guardar los cambios: ' + error
                });
            }
        });
    });

    // Evento para eliminar usuario
    $('#usuariosTable').on('click', '.btn-delete', function() {
        var idUsuario = $(this).data('id');
        var $row = $(this).closest('tr');

        Swal.fire({
            title: '¿Estás seguro?',
            text: "No podrás revertir esta acción",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: 'eliminar_usuario.php',
                    method: 'POST',
                    data: {
                        id_usuario: idUsuario
                    },
                    dataType: 'json',
                    success: function(response) {
                        console.log('Respuesta del servidor:', response);

                        if (response.success) {
                            // Eliminar la fila de la tabla
                            table.row($row).remove().draw();

                            Swal.fire({
                                icon: 'success',
                                title: 'Usuario eliminado',
                                text: response.message,
                                timer: 2000,
                                showConfirmButton: false
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: response.message
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error en la solicitud:', status, error);
                        console.log('Respuesta del servidor:', xhr.responseText);

                        Swal.fire({
                            icon: 'error',
                            title: 'Error de conexión',
                            text: 'No se pudo eliminar el usuario: ' + error
                        });
                    }
                });
            }
        });
    });
});
</script>

<?php include "C:/xampp/htdocs/repo/include/footer.php" ?>