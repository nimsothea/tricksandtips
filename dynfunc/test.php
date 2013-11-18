<?php

echo 'test';

Base::setInstance($name, function($args)
{
    print_r($args);
});