<?php
# modifier.price.php
function smarty_modifier_price($string)
{
    if (!is_numeric($string)) {
        return $string;
    }

    return Tools::displayPrice($string);
}