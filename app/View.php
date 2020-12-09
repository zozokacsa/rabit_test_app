<?php

namespace App;

class View
{
    /**
     * Method for rendering view file.
     *
     * @param string $view
     * @param array $args
     * @return void
     */
    public static function render($view, $data = [])
    {
        // Extract all data for the template.
        extract($data, EXTR_SKIP);
        // Set path for the view file.
        $file = dirname(__DIR__) . "/views/$view.php";
        // If is existing, than render the output, otherwise throw error.
        if(is_readable($file)) {
            require_once $file;
        } else {
            throw new \Exception("$file not found");
        }
    }
}
