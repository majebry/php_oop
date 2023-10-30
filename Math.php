<?php

class Math
{
    public static function add()
    {
        return array_sum( func_get_args() );
    }
}


echo Math::add(4, 2, 10);