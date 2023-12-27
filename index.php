<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<form class='container mt-5' method='post'>
<div class="m-3 text-end">
  <input type="text" class="form-control" name="text" placeholder="Enter word">
  <button class='btn btn-primary mt-4' type='submit' name='submit'>Ok</button>
</div>
</form>


<?php
    $filename = 'imlo_lugat.txt';
    $content = file_get_contents($filename);
    $text = explode(" ",$content);

    $soz = $_POST['text'];
    $i = 0;

    $arr = array($soz);
    $massiv = factorial(strlen($soz),$text);

    echo "<table class='table container'>";
    echo "<tr>";
    echo "<th class='text-center col-1 bg-primary'>".$i++."</th>";
    echo "<th class='col bg-primary'>".$soz."</th>";
    echo "</tr>";
    
    $mas = str_split($soz);
    sort($mas);
    $a = implode("",$mas);
    foreach ($massiv as $item){
        $item1 = str_split($item);
        sort($item1);
        $b = implode("",$item1);
        if($a == $b){
            echo "<tr class='bg-primary'>";
            echo "<th class='text-center col-1 bg-success'>".$i++."</th>";
            echo "<th class='col bg-success'>".$item."</th>";
            echo "</tr>";
        }
    }
    echo "</table>";
  
    function factorial($n, $text) {
        $arr = array();
        foreach($text as $item) {
            if(strlen($item) == $n){
                array_push($arr, $item);
            }
        }
        return  $arr;
    }
?>