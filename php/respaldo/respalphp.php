<?php require('../fpdf/fpdf.php');
class PDF extends FPDF
{
   //Columna actual
   var $col=0;
   //Ordenada de comienzo de la columna
   var $y=0;
   //Cabecera de página
function Header()
{
//Logo

//Arial bold 15
$this->SetFont('Arial','B',15);
//Movernos a la derecha
$this->Cell(80);
//Título
$this->Cell(60,10,'MAESTROS',1,0,'C');
//Salto de línea
$this->Ln(20);
   
}

//Pie de página
function Footer()
{
//Posición: a 1,5 cm del final
$this->SetY(-15);
//Arial italic 8
$this->SetFont('Arial','I',8);
//Número de página
$this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
}
function SetCol($col)
   {
      //Establecer la posición de una columna dada
      $this->col=$col;
      $x=10+$col*75;
      $this->SetLeftMargin($x);
      $this->SetX($x);
   }
   function AcceptPageBreak()
   {
      //Método que acepta o no el salto automático de página
      if($this->col<2)
      {
      //Ir a la siguiente columna
       $this->SetCol($this->col+1);
      //Establecer la ordenada al principio
      $this->SetY($this->y0);
      //Seguir en esta página
      return false;
      }
      else
      {
      //Volver a la primera columna
      $this->SetCol(0);
      //Salto de página
      return true;
      }
   }
function TituloArchivo($num,$label)
{
   $this->SetY(55);
$this->SetFont('Arial','',12);
$this->SetFillColor(200,220,255);
$this->Cell(0,6,"Archivo $num : $label",0,1,'L',true);
$this->Ln(4);
//Guardar ordenada
$this->y0=$this->GetY();

}

function CuerpoArchivo($file)
{
//Leemos el fichero
$f=fopen($file,'r');
$txt=fread($f,filesize($file));
fclose($f);
//Times 12
$this->SetFont('Times','',12);
//Imprimimos el texto justificado
$this->MultiCell(60,5,$txt);
      //Salto de línea
      $this->Ln();
      //Volver a la primera columna
      $this->SetCol(0);

}

function ImprimirArchivo($num,$title,$file)
{
$this->AddPage();
$this->TituloArchivo($num,$title);
$this->CuerpoArchivo($file);
}
}

   include "conexion.php";

   class getrow
   {
      private $conn;
      private $link;
      function __construct()
      {
         $this->conn  = new conexion();
         $this->link  = $this->conn->conectar();
      }
   
      public function getRow()
      {
         $query  = "SHOW columns FROM maestro";
         $result = mysqli_query($this->link, $query);
         return $result; 
      } 
        public function getRows()
      {
         $query  = "SELECT * FROM maestro ";
         $result = mysqli_query($this->link, $query);
         return $result;
      } 
   
   }
$result = new getrow();
$result = $result->getRows();
$header = new getrow();
$header = $header->getRow();
$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',10);
foreach($header as $heading) {
}
foreach($result as $row) {
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(40,10,$column,
   1);
}
$pdf->Output();
?>