<html>
<head>
  <title> TABLA FIBONACCI </title>
</head>
<body>
  <table style = "border-style : inset; ">
    <thead> <h1>TABLA DE FIBONACCI </h1>   </thead>
  <tbody>
  
     <?php include ("./fibonacci.php");   // include_once si muchos archivos llaman a fibonacci , se cargara  todas las veces q se llame con esto se carga solo una vez.
      // require  se usa para lo mismo que include ,  solamente que si hay un error en el codigo va a detener la ejecucion y te va a avisar.
     //require_once  agrega la caracteristica del once 
      $ser = fibonacci ("lalala");  
               echo $ser ;
     foreach ($ser as $x){  ?> 
       
     <tr><td style = "border-style: solid;"> <h3> 
      <?php echo $x ; ?> </h3> </td></tr>
      <?php
     }
     ?>
    
  </tbody>

</table>
</body>
</html>


