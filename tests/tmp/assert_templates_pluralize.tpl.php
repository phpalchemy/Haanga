<?php
/* Generated from /home/crodas/projects/playground/haanga/tests/assert_templates/pluralize.tpl */
function haanga_c69591f8d5c6ad2382924f6ea8221fe3ec546300($vars, $return=FALSE, $blocks=array())
{
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo "message".($num1 <= 1 ? "" : "s")."\nwalrus".($num1 <= 1 ? "" : "es")."\ncherr".($num1 <= 1 ? "y" : "ies")."\nmessage".($num2 <= 1 ? "" : "s")."\nwalrus".($num2 <= 1 ? "" : "es")."\ncherr".($num2 <= 1 ? "y" : "ies")."\n";
    if ($return == TRUE) {
        return ob_get_clean();
    }
}