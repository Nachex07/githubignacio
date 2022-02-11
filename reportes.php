<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'Reporte de Productos',0,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}

    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',14);
    $pdf->SetTextColor(32);
    $pdf->Cell(0,6,"",0,1,'L');

    
$conexion = mysqli_connect("107.180.41.237", "usuariolatina05", "!0832", "grupo05") or die (mysqli_error($conexion));
$resultado = mysqli_query($conexion, "select Nombre, Descripcion, Precio from componentes")or die(mysqli_error($conexion));
$resultado2 = mysqli_query($conexion, "select Nombre, Descripcion, Precio from perifericos")or die(mysqli_error($conexion));
$resultado3 = mysqli_query($conexion, "select Nombre, Descripcion, Precio from smartphones")or die(mysqli_error($conexion));
$resultado4 = mysqli_query($conexion, "select Nombre, Descripcion, Precio from extras")or die(mysqli_error($conexion));

$pdf->Cell(195, 8,'Componentes', 1, 1, 'C',0);
$pdf->Cell(70, 8, 'Nombre ', 1, 0, 'C',0);
$pdf->Cell(85, 8, 'Descripcion', 1, 0, 'C',0);
$pdf->Cell(40, 8, 'Precio ',  1, 1, 'C',0);


while($fila = mysqli_fetch_array($resultado)){

   $nombre = $fila[0];
   $descripcion = $fila[1];
   $precio = $fila[2];
    
   
   $pdf->Cell(70, 8, $nombre, 1, 0, 'C',0);
   $pdf->Cell(85, 8, $descripcion, 1, 0, 'C',0);
   $pdf->Cell(40, 8, $precio, 1, 1, 'C',0);

}

$pdf->Cell(0,6,"",0,1,'L');
$pdf->Cell(0,6,"",0,1,'L');
$pdf->Cell(195, 8,'Perifericos', 1, 1, 'C',0);
$pdf->Cell(70, 8, 'Nombre ', 1, 0, 'C',0);
$pdf->Cell(85, 8, 'Descripcion', 1, 0, 'C',0);
$pdf->Cell(40, 8, 'Precio ',  1, 1, 'C',0);


while($fila = mysqli_fetch_array($resultado2)){

   $nombre = $fila[0];
   $descripcion = $fila[1];
   $precio = $fila[2];
    
   
   $pdf->Cell(70, 8, $nombre, 1, 0, 'C',0);
   $pdf->Cell(85, 8, $descripcion, 1, 0, 'C',0);
   $pdf->Cell(40, 8, $precio, 1, 1, 'C',0);

}

$pdf->Cell(0,6,"",0,1,'L');
$pdf->Cell(0,6,"",0,1,'L');
$pdf->Cell(195, 8,'SmartPhones', 1, 1, 'C',0);
$pdf->Cell(70, 8, 'Nombre ', 1, 0, 'C',0);
$pdf->Cell(85, 8, 'Descripcion', 1, 0, 'C',0);
$pdf->Cell(40, 8, 'Precio ',  1, 1, 'C',0);


while($fila = mysqli_fetch_array($resultado3)){

   $nombre = $fila[0];
   $descripcion = $fila[1];
   $precio = $fila[2];
    
   
   $pdf->Cell(70, 8, $nombre, 1, 0, 'C',0);
   $pdf->Cell(85, 8, $descripcion, 1, 0, 'C',0);
   $pdf->Cell(40, 8, $precio, 1, 1, 'C',0);

}

$pdf->Cell(0,6,"",0,1,'L');
$pdf->Cell(0,6,"",0,1,'L');
$pdf->Cell(195, 8,'Extras', 1, 1, 'C',0);
$pdf->Cell(70, 8, 'Nombre ', 1, 0, 'C',0);
$pdf->Cell(85, 8, 'Descripcion', 1, 0, 'C',0);
$pdf->Cell(40, 8, 'Precio ',  1, 1, 'C',0);


while($fila = mysqli_fetch_array($resultado4)){

   $nombre = $fila[0];
   $descripcion = $fila[1];
   $precio = $fila[2];
    
   
   $pdf->Cell(70, 8, $nombre, 1, 0, 'C',0);
   $pdf->Cell(85, 8, $descripcion, 1, 0, 'C',0);
   $pdf->Cell(40, 8, $precio, 1, 1, 'C',0);

}

$pdf->SetFont('Arial', '', 6);
    $pdf->Cell(0, 6, "Programado por grupo05", 0, 1, 'C');

    $filename  = "reporteProductos.pdf";
    $pdf->Output($filename,'I');

/*
$pdf->Cell(90,10,$row['Nombre'],1,0,'C',0);*/



?>