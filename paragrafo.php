<?php 

$name = $_GET['name'];
var_dump($_GET);

$p = 'Adoro il codice e le sue tecnologie. Mi diverto sempre a creare nuovissimi layout.Spesso utilizzo VueJS,Vite, Sass e Bootstrap';

?>

<h3>Ecco il tuo testo: <?php echo $name ?></h3>

<?php 


$p2 = str_replace('Bootstrap','***',$p);



echo '<br>';
echo $p2;

?>

<h1>ATTENZIONE: Un bel testo davvero. Ma attento ai termini utilizzati!</h1>
