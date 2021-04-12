<?php

#while
echo '<br>Laço....While: ';
$i = 0;
while ($i < 10){
    echo $i;
    $i++;
}
#Do.... While
echo '<br>Laço Do....While: ';
$i = 0;
do{
    echo $i;
    $i++;
}while($i < 10);

#For
echo '<br>Laço....for: ';
for ($i = 0; $i < 10; $i++){
    echo $i;
}

#Foreach
echo '<br>Laço....foreach: ';
$i = [0,1,3,4,5,6,7,8,9];
foreach ($i as $j){
    echo $j;
}