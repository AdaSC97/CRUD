<?php
$usuarios = ControladorFormularios::ctrSeleccionarRegistros();

?>

<table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Fecha de creación</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                        <td>23/10/2019</td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button>
                                <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>

                            </div>
                        </td>
                </tbody>
            </table>