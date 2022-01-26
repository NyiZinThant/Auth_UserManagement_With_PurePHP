<?php
namespace Helpers;

class Security
{
    static function h($context){
        return htmlspecialchars($context);
    }
}
