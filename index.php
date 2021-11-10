<form action="" method="post">

choose your Birthday :
<input type="date" name='d'><br>
<input type="submit" value="Calculate" name="s">

</form>

<?php
 if(isset($_POST['s']))
  {
    $Bith = $_POST['d'];
    $today = date("m-d-Y");
    $diff = date_diff(date_create($Bith), date_create($today));
    echo "You are " . $diff->format('%Y') . " years old.";
  }

?>
