
  <?php
  $jsonFile="drawing.json";
  $data = "";//lege var
//nog testen op geen data
  $data = $_GET['put'];//hier nog testen op geen data
  echo $data;


  $handle=fopen($jsonFile, "w") or die ("problems");
  fwrite($handle,$data);
  fclose($handle);
   ?>
