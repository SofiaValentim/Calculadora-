
    <?php
 
 $numero=(int)$_GET['numero'];
  
 if($numero >0 and $numero <11){
     for ($i =0; $i<11;$i++){
         echo "$i X $numero = " .$i*$numero ."<br>";
     }
 }
  
 else{
  
     $numero = 0;
     while ($numero <= 10) {
         $i = 1;
        
         while ($i <= 10) {
             echo "$i X $numero = " .$i*$numero ."<br>";
             $i += 1;
         }
         echo "<br>";
         $numero += 1;
     }
 }
 ?>