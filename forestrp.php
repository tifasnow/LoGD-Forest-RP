<?php
/* A Module for Legend of the Green Dragon that allow for limited roleplay within the Forest Grounds
    *
    * Version: 2021.11.17
    *
    * This module adds a roleplay area to the Forest Grounds.
    *
    */

function forestrp_getmoduleinfo(){
    $info = array(
        "name"=>"Forest Roleplay",
        "author"=>"`2Tifa Zabat",
        "version"=>"2021.11.17",
        "category"=>"Forest Grounds",
        "download"=>"https://www.github.com/tifasnow/LoGD-Forest-RP",
        "description"=>"This module adds a roleplay area to the Forest Grounds.",
        "settings"=>array(
            "Forest Roleplay Settings,title",
            "show_chat"=>"Show the chat window?,bool|1",
        ),
    );
    return $info;
}

function forestrp_install(){
    module_addhook("forest-desc");
    return true;
}

function forestrp_uninstall(){
    return true;
}

function forestrp_dohook($hookname,$args){
    global $session;
    switch($hookname){
        case "forest-desc":
            //debug("Forest Roleplay: Forest Grounds Hook. preference is ".get_module_pref("show_area"));
            require_once ("lib/commentary.php");
            addcommentary();
            commentdisplay("There are hushed whispers amongst the trees`0`n", "forestrp", "Speak softly to your fellow adventurers;", 10, "whispers" );
            break;
    }
    return $args;
}

function forestrp_run()
{

}

?>
