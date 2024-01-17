
<?php 

$listaSpesa = [
    'pera',
    'mela',
    'banana',
    'ananas',
    'arancia',
    'melograno',
    'zucchine',
    'patate',
    'formaggio',
    'nutella',
    'cioccolato',
    'zucchero',
    'sale',
]

?>

<form action="./script2.php">

    <label for="oggetto">inserisci elemento lista della spesa</label>
    <input type="text" name="elemento" id="oggetto">
    <button type="submit">invia</button>

</form>

<?php 

if (empty($_GET['elemento'])){
    echo 'Inserisci una parola da cercare';
} else {
    if ( in_array($_GET['elemento'], $listaSpesa)){
        echo 'la parola è stata trovata';
    } else {
        echo 'la parola non è stata trovata';
    }
}

?>