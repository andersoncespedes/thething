<?php ob_start();
include "../php/estudiantes/estudiante.php";
$estudiantes = new estudiante;
$estudiante = $estudiantes->getEstudiante();
?>
<html>
    <head>
		<title>Planilla escolar</title>
		<meta charset="utf-8">
		<meta name = "description" content="">
		<meta name= "keywords" content="">
		<meta name= "author" content="">
		 
		<style>
            th{
                background:red;
                padding:10px;
                border:1px solid black;
            }
            .tittle-m{
                width:100%;
                text-align:center;
            }

            .table{
                width:100%;

            }
            tr{
                border:1px solid black;
                padding: 10px;
     
            }
            header {
                display:inline-block;
                width:100%;
               margin:0;
               padding:0;
             
            }
            header img {
              width:100%;
             
            }
            footer {
                position: fixed; 
                bottom: 0cm; 
                left: 0cm; 
                right: 0cm;
                height: 2cm;



                text-align: center;

            }
        </style>
		<link rel="shortcut icon" href="img/madara-eternal.ico">
    </head>
    <body>
        <header>
            <div style = "width:30%;">
            <img src = "http://<?php echo $_SERVER['HTTP_HOST'];?>/TheThing/img/descarga.png" >
        </div>
        
      
        </header>
    <main class="container" style="width:100%;">
    
   
<div class="wall-p">
        <div class="title-m" >
        
        <center><h2>REPORTE DE ESTUDIANTES REGISTRADOS EN EL SISTEMA</h2></center>	
    <hr class="stylerf">
</div>

                    <table class="table">
                <tr class="bg">
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>CEDULA</th>
                    <th>GRADO</th>
                    <th>EDAD</th>
                    <th>SEXO</th>
            

                

                            
                </tr>
                    <?php  $i = 0;
        if (count($estudiante)>0) {
            foreach ($estudiante as $column => $value) {	
        $i++;
    ?>
            <tr class="elsegundo" style="text-align: center;">
                <td><?=$i?></td>
                <td><?php echo $value['nombres'];?></td>
                <td><?php echo $value['apellidos'];?></td>
                <td><?php echo $value['cedula'];?></td>
                <td><?php echo $value['grado'];?></td>
                
                <td><?php echo (date('Y') - $value['nacimiento']);?> Años</td>
                <td><?php echo $value['sexo'];?></td>

            </tr>
        <?php }
            } if($i == 0){?>
    <tr>
    
                <td>No hay datos</td>	
                
                    <?php }  ?>
    </tr>

        </table>
            </div>
            <footer>
            Copyright &copy;Anderson Cespedes <?php echo date("Y");?> 
        </footer>
        </body>
</html>
<?php 
$html = ob_get_clean();
include_once "../php/dompdf/autoload.inc.php";
use Dompdf\Dompdf;
$dompdf = new Dompdf;
$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true, 'isHtml5ParserEnabled' => true));

$dompdf->setOptions($options);
$dompdf->loadHtml($html);
$dompdf->setPaper('letter');
$dompdf->render();
$dompdf->stream('archivo.pdf', array('attachment' => true));



?>