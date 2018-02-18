<?php
namespace App\Controllers;

class View
{
private $data = array();

private $render = FALSE;

public function __construct($template)
{
    try {
        $file = './views/' . strtolower($template) . '.php';

        if (file_exists($file)) {
            $this->render = $file;
        } else {
            throw new customException('Template ' . $template . ' not found!');
        }
    }
    catch (customException $e) {
        echo $e->errorMessage();
    }
}

public function assign($variable, $value)
{
    $this->data[$variable] = $value;
}

public function __destruct()
{
    extract($this->data);
    include($this->render);

}
}
?>