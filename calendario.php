
<?php
    $week = 1;
   
    for($i=1;$i<=date('t');$i++) {

    	//dia de la semana: 
        $day_week = date('N', strtotime(date('Y-m').'-'.$i));	 
        $calendar[$week][$day_week] = $i; // i tiene el primer dia del mes 

        if ($day_week == 7){  //sumamos para cada 7 dias 
        	$week++; 
        };
       
        //Array para guardar los meses 
        $month = date('n'); // date nos da el mes actual 
        $meses = array(1=>"Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio","Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    }
?>

<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    	<div><h1 style = "text-align: center;" > <?php echo $meses[$month]; ?></></div>
	        <table  style = "margin:0 auto; border:1;" >
		        <thead style="background-color:#D2AED2">
		            <tr>
		            	<td>Lunes</td>
		                <td>Martes</td>   
		                <td>Miércoles</td>  
		                <td>Jueves</td>  
		                <td>Viernes</td>  
		                <td>Sábado</td>  
		                <td>Domingo</td>
		            </tr>	 
		        </thead>
		        <tbody>
		            <?php foreach ($calendar as $days) : ?>
		                <tr>
		                    <?php for ($i=1;$i<=7;$i++) : ?>
		                        <td style="background-color:#F6D3F6; text-align: center">
		                            <?php echo isset($days[$i]) ? $days[$i] : ''; ?>
		                        </td>
		                    <?php endfor; ?>
		                </tr>
		            <?php endforeach ?> 
		        </tbody>
        </table> 
    </body>
</html>
