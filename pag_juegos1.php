<?php include "C:/xampp/htdocs/repo/include/header.php"?>
<?php
    if(!isset($_SESSION['admin']) && !isset($_SESSION['usuario'])){
        echo "<script language=javascript> location.href='/repo/login.php';</script>";
        die();
    }
    ?>
<title>Juegos - BestGamer</title>
<link rel="stylesheet" href="/repo/CSS/pag_juegos.css">
<?php
    // Número de juegos por página
    $limite = 9;

    // Obtener el número de página actual
    $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
    $offset = ($pagina - 1) * $limite;

    if (isset($_GET['text'])) {
        $busqueda = $_GET['text'];
        $sql = "SELECT * FROM juegos WHERE titulo LIKE '%$busqueda%' LIMIT $limite OFFSET $offset";
        $result = mysqli_query($con, $sql);

        $sql_total = "SELECT COUNT(*) as total FROM juegos WHERE titulo LIKE '%$busqueda%'";
    } else if (isset($_GET['desarrollador'])){
        $desarrollador = $_GET['desarrollador'];
        $sql = "SELECT * FROM juegos WHERE desarrollador LIKE '%$desarrollador%' LIMIT $limite OFFSET $offset";
        $result = mysqli_query($con, $sql);

        $sql_total = "SELECT COUNT(*) as total FROM juegos WHERE desarrollador LIKE '%$desarrollador%'";
    } else if(isset($_GET['genero'])){
        $genero = $_GET['genero'];
        $sql = "SELECT * FROM juegos WHERE generos LIKE '%$genero%' LIMIT $limite OFFSET $offset";
        $result = mysqli_query($con, $sql);

        $sql_total = "SELECT COUNT(*) as total FROM juegos WHERE generos LIKE '%$genero%'";
    } else {
        // Consulta para obtener los juegos
        $sql = "SELECT * FROM juegos LIMIT $limite OFFSET $offset";
        $result = mysqli_query($con, $sql);

        $sql_total = "SELECT COUNT(*) as total FROM juegos";
    }
    
    // Consulta para contar el total de juegos
    $result_total = mysqli_query($con, $sql_total);
    $row_total = mysqli_fetch_assoc($result_total);
    $total_juegos = $row_total['total'];
    $total_paginas = ceil($total_juegos / $limite); // Calcular el total de páginas
?>

<table id="example" style="width:100%">
    <tbody>
        <?php
        // if (empty(mysqli_fetch_assoc($result))) {
        //     echo '<p class="text-center">No hay juegos disponibles dentro de esta busqueda.</p>';
        // }
            $contador = 0;
            while ($row = mysqli_fetch_assoc($result)){
                if ($contador % 3 == 0) {
                    echo '<tr>';
                }
                echo '
                    <td class= mx-auto>
                        <div class="col-4">
                            <div class="carta">
                                <a href="/repo/Juegos/mostrar_juego.php?id='. $row['id_juego'] .'">
                                    <img src="/repo/img/juegos/' . str_replace(" ", "-" , $row['titulo']). '/' . $row["img_portada"] . '" alt="Portada de juego" class="img">
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
<?php include "C:/xampp/htdocs/repo/include/footer.php"?>