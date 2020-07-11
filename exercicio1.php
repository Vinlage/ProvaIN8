<?php
    $siglas = ['ES', 'MG', 'RJ', 'SP'];
    $cidades = ['São Paulo', 'Rio de Janeiro', 'Minas Gerais', 'Espírito Santo'];

    $final = array();

    $count = count($siglas);
    for($i=0; $i<$count; $i++){
        $final[$siglas[$i]] = $cidades[$count - $i -1];
    }

    foreach($final as $key => $value){
        print $key . " - " . $value . "</br>";
    }
?>
