<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edad</title>
</head>
<body>
    <form action="" method="get">
     <label for="">
        <input type="number" name="edad" min="1" max="25">
        <input type="submit">
     </label>
    </form>
</body>
</html>


<?php
print ("<UL>?\n");
$i=1;
while ($i <=18)
{
    print ("<LI>Elemento $i</LI>\n");
    $i++;
}
print ("</UL>\n");
?>