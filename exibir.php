<?php 

function exibirSeculo($ano){
    switch($ano){
        case $ano >= 1 && $ano <=100: 
            $seculo = 'Século I';
        break;
        case $ano >100 && $ano <=200:
            $seculo = 'Século II';
        break;
        case $ano >200 && $ano <=300:
            $seculo = 'Século III';
        break;
        case $ano >300 && $ano <=400: 
            $seculo = 'Século IV';
        break;
        case $ano >400 && $ano <=500: 
            $seculo = 'Século V';
        break;
        case $ano >500 && $ano <=600: 
            $seculo = 'Século VI';
        break;
        case $ano >600 && $ano <=700: 
            $seculo = 'Século VII';
        break;
        case $ano >700 && $ano <=800: 
            $seculo = 'Século VIII';
        break;
        case $ano >800 && $ano <=900: 
            $seculo = 'Século IX';
        break;
        case $ano >900 && $ano <=1000: 
            $seculo = 'Século X';
        break;
        case $ano >1000 && $ano <=1100: 
            $seculo = 'Século XI';
        break;
        case $ano >1100 && $ano <=1200: 
            $seculo = 'Século XII';
        break;
        case $ano >1200 && $ano <=1300: 
            $seculo = 'Século XIII';
        break;
        case $ano >1300 && $ano <=1400: 
            $seculo = 'Século XIV';
        break;
        case $ano >1400 && $ano <=1500: 
            $seculo = 'Século XV';
        break;
        case $ano >1500 && $ano <=1600: 
            $seculo = 'Século XVI';
        break;
        case $ano >1600 && $ano <=1700: 
            $seculo = 'Século XVII';
        break;
        case $ano >1700 && $ano <=1800: 
            $seculo = 'Século XVIII';
        break;
        case $ano >1800 && $ano <=1900: 
            $seculo = 'Século XIX';
        break;
        case $ano >1900 && $ano <=2000: 
            $seculo = 'Século XX';
        break;
        case $ano >2000 && $ano <=2100: 
            $seculo = 'Século XXI';
        break;

       

    }

    return $seculo;
}

?>