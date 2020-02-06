<?php
function get_all_stylesheets(){
    $css = glob('assets/css/*.css');
    foreach($css as $styles){
        echo "<link href='" . $styles . "' rel='stylesheet'> \n";
    }
}
function get_all_scripts(){
    $js = glob('assets/js/*.js');
    foreach($js as $scripts){
        echo "<script src='" . $scripts . "'></script>";
    }
}
function get_all_assets(){
    get_all_stylesheets();
    get_all_scripts();
}
?>