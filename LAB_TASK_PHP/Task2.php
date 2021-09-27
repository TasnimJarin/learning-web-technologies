<?php
    $value=300;
    $vat=15;
    
    $vatToAdd =($value/100)*$vat;
    $price=($value+$vatToAdd);

    echo "Vat  :".$vatToAdd."<br/>";
    echo " Total price: ".$price;








?>