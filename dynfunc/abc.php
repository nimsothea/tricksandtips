<?php

echo 'abc';

Base::setInstance($name, function($args)
{
    print_r($args);
});