<?php
$str="string";

$bool= true;

$int= 42;

$float=1.4222;
?>

<table>
    <thead>
        <tr>
            <th>type</th>
            <th>nom</th>
            <th>valeur</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo 'string'; ?></td>
            <td><?php echo $str ?></td>
            <td>chaine de charactere</td>
        </tr>

        <tr>
            <td><?php echo 'Booléan'; ?></td>
            <td><?php echo $bool ?></td>
            <td> valeur vraie ou fausse</td>
        </tr>

        <tr>
        <td><?php echo 'integrer'; ?></td>
            <td><?php echo $int ?></td>
            <td>Détermine si une variable est de type nombre entier</td>
            </tr>

        <tr>
        <td><?php echo 'float'; ?></td>
            <td><?php echo $float ?></td>
            <td>Permet d'afficher les nombres à virgule</td>
        </tr>
    </tbody>

<style>
    table,
td {
    border: 5px solid #333;

    color: black;

}

th {
    border: 5px solid #333;
}
<style>

