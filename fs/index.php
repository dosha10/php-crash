<?php

//Magic constant
echo __DIR__.'<br>';
echo __FILE__.'<br>';
echo __LINE__.'<br>';

//Create directory
mkdir('test');

//Delete directory
rmdir('test');

//Read files 
echo file_get_contents('lorem.txt');