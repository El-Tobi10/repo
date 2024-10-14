<?php
include "C:/xampp/htdocs/repo/PHP/conexion/conexion.php";

$limit = 2;
$page = 0;
$ouput = "";

if(isset($_POST['page'])) {
    $page = $_POST['page'];
}else{
    $page = 1;
}
$start_form = ($page - 1)*$limit;
$query = mysqli_query($con, "SELECT * FROM juegos ORDER BY id_juego DESC LIMIT $start_form, $limit");
$ouput .= "
        <tr class='row'>
";

if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_array($query)) {
        if (!empty($row["img_portada"])) {
            $img_portada = "<img src='/repo/img/juegos/".$row["img_portada"]."'>";
        }else {
            $img_portada = "<img src='/repo/img/juegos/default.png'>";
        }

        $ouput .= '
            <td class="col">
                <div class="carta">
                    <a href="/repo/PHP/Juegos/gtaV.php">
                        '.$img_portada.'
                        <div class="card__content">
                            <p class="card__title">'.ucfirst($row["titulo"]).'</p>
                            <p class="card__description">'.ucfirst($row["descripcion"]).'</p>
                        </div>
                    </a>
                </div>
            </td>
        ';
        if($row % 3 == 0){
            $ouput .= '
            </tr>
            <tr class="row">
            ';
        }
    }
}else {
    $ouput .= "<td colspan='3'>No hay resultados</td>";
}
$ouput .= '
            </tr>
';

//codigo de paginacion

$query = mysqli_query($con, "SELECT * FROM juegos");
$total_cargados = mysqli_num_rows($query);
$total_paginas = ceil($total_cargados/$limit);
$ouput .= '<ul class="pagination">';

if($page > 1) {
    $previous = $page - 1;
    $ouput .= '<li class="page-item" id="1"><span class="page-link">Primera Pag</span></li>';
    $ouput .= '<li class="page-item" id= "'.$previous.'"><span class="page-link"><i class="bi bi-arrow-left"></i></span></li>';
}

for($i=1; $i<=$total_paginas; $i++) {
    $active_class = '';
    if ($i == $page) {
        $active_class = 'active';
    }
    $ouput .= '<li class="page-item '.$active_class.'" id="'.$i.'"><span class="page-link">'.$i.'</span></li>';
}

if ($page < $total_paginas) {
    $page++;
    $ouput .= '<li class="page-item" id="'.$page.'"><span class="page-link"><i class="bi bi-arrow-right"></i></span></li>';
    $ouput .= '<li class="page-item" id="'.$total_paginas.'"><span class="page-link">Ultima Pag</span></li>';
}

$ouput .= '</ul>';

$jsonData = array(
    "html"  => $ouput,  
);
echo json_encode($jsonData);
?>