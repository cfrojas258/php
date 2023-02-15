<?php
print ("<UL>?\n");
$i=1;
$vartab=2;
while ($i <=10)
{
$resultado =$vartab*$i;
print ("<LI>Para la tabla $vartab X $i=$resultado </LI>\n");
$i++;
}
print ("</UL>\n");
?>