<?php
function display_navigation_links($page_id): string
{
    $return_value = "<ul>";
    if ($page_id != 0) {
        $return_value .= '<li><a href="http://127.0.0.2/">Accueil</a></li>';
    }
    if ($page_id != 1) {
        $return_value .= '<li><a href="http://127.0.0.2/?page=view">Consultation</a></li>';
    }
    if ($page_id != 2) {
        $return_value .= '<li><a href="http://127.0.0.2/?page=edit">Modification</a></li>';
    }
    return $return_value . "</ul>";
}
