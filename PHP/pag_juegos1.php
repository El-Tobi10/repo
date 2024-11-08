<?php include "C:/xampp/htdocs/repo/PHP/include/header.php"?>
<?php
    include "C:/xampp/htdocs/repo/PHP/conexion/conexion.php";
    if(!isset($_SESSION['admin']) && !isset($_SESSION['usuario'])){
        echo "<script language=javascript> location.href='/repo/PHP/login.php';</script>";
        die();
    }
    ?>
<title>Juegos - BestGamer</title>
<link rel="stylesheet" href="/repo/CSS/pag_juegos.css">

<!-- <div class="card-header text-center"><strong>Listado de juegos </strong></div>
<table class="table">
    <thead>
        <tr>
            <th>Titulo</th>
            <th>desarrollador</th>
            <th>Foto</th>
            <th>link_trailer</th>
            <th>generos</th>
            <th>lanzamiento</th>
        </tr>
    </thead>

    <tbody>
        
    </tbody>
</table> -->
<?php
    // Número de juegos por página
    $limite = 9;

    // Obtener el número de página actual
    $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
    $offset = ($pagina - 1) * $limite;

    // Consulta para obtener los juegos
    $sql = "SELECT * FROM juegos LIMIT $limite OFFSET $offset";
    $result = mysqli_query($con, $sql);

    // Consulta para contar el total de juegos
    $sql_total = "SELECT COUNT(*) as total FROM juegos";
    $result_total = mysqli_query($con, $sql_total);
    $row_total = mysqli_fetch_assoc($result_total);
    $total_juegos = $row_total['total'];
    $total_paginas = ceil($total_juegos / $limite); // Calcular el total de páginas
?>

<table id="example" style="width:100%">
    <tbody>
        <?php
            $contador = 0;
            while ($row = mysqli_fetch_assoc($result)){
                if ($contador % 3 == 0) {
                    echo '<tr>';
                }
                echo '
                    <td class= mx-auto>
                        <div class="col-4">
                            <div class="carta">
                                <a href="/repo/PHP/Juegos/'. trim($row['titulo']) . '.php">
                                    <img src="/repo/img/juegos/' . pathinfo($row["img_portada"], PATHINFO_FILENAME). '/' . $row["img_portada"] . '" alt="Portada de juego" class="img">
                                    <div class="card__content">
                                        <p class="card__title">' . $row["titulo"] . '</p>
                                        <p class="card__description">'. $row["descripcion"] .'</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </td>
                    ';
                echo'';
                $contador++; // Incrementamos el contador

                // Si el contador es un múltiplo de 3, cerramos la fila
                if ($contador % 3 == 0) {
                    echo '</tr>'; // Cerramos la fila
                }
            }

            // Si el número total de juegos no es un múltiplo de 3, cerramos la última fila
            if ($contador % 3 != 0) {
                echo '</tr>'; // Cerramos la fila si no se cerró
            };
        ?>

    </tbody>
</table>

<!-- Paginación -->
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center mt-3">
        <?php if ($pagina > 1): ?><li class="page-item"><a href="?pagina=<?php echo $pagina - 1; ?>"
            class="page-link">&laquo; Anterior</a></li>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $total_paginas; $i++): ?><li class="page-item"><a href="?pagina=<?php echo $i; ?>" class="page-link <?php if ($i == $pagina) echo 'activar';?>" ><?php echo $i; ?></a></li>
        <?php endfor; ?>

        <?php if ($pagina < $total_paginas): ?>
        <li class="page-item"><a href="?pagina=<?php echo $pagina + 1; ?>" class="page-link">Siguiente &raquo;</a></li>
        <?php endif; ?>
    </ul>
</nav>

<script>
new DataTable('#example');
</script>
<?php include "C:/xampp/htdocs/repo/PHP/include/footer.php"?>