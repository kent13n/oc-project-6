<?php
spl_autoload_register('PlantyAutoloader');

function PlantyAutoloader($class)
{
    $namespace = 'Planty\Theme';

    if (strpos($class, $namespace) !== 0) {
        return;
    }
    $class = str_replace($namespace, '', $class);

    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    $directory = get_stylesheet_directory();
    $path = $directory . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . $class;
    if (file_exists($path)) {
        require_once($path);
    }
}
