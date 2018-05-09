<?php include('header.php');?>

<?php
$csv = array_map('str_getcsv', file('https://raw.githubusercontent.com/auguslatorre/decima_clase/master/data/CSV_series.csv'));
      array_walk($csv, function(&$a) use ($csv) {
      $a = array_combine($csv[0], $a);
      });
      array_shift($csv);
?>

<main role="main" class="container">
<h1 class="mb-4">Series</h1>
<div class="row">

<?php for($t = 0; $t < count($csv); $t++){?>
    <div class="col-sm-4 col-md-3 py-3">
    <h3 class="border-top pt-3"><?php print($csv[$t]['Nombre'])?></h3>

    <figure style="height:120px; overflow:hidden;">

    <img src="
    <?php if ($csv[$t]['Imagen'] == NULL){
        print ("img/gris.png");
    } else {
        print ($csv[$t]['Imagen']);
    };?>"

    class="img-fluid">
    </figure>
    <div>
      <?php print "Estreno en ".($csv)[$t]["Año"];?>
    </div>
    <div>
      <?php print ($csv)[$t]["Temporadas"]. " temporadas";?>
    </div>
    </div>
<?php };?>
</div>

</main>
<?php include('footer.php');?>
