<?php
function smarty_function_hello($params, &$smarty)
{
    $who = '';

    if (!empty($params['to'])) {
        $who = $params['to'];
    }

    return 'Hello '.$who.' !';
}