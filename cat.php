
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

class File {
    public $name;
    public $color;
    public $filehandle;

    function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
        $this->filehandle = fopen("toy.txt", "a");
    }

    function __destruct() {
        if ($this->filehandle) {
            fclose($this->filehandle);
        }
    }

    function get_name() {
        return $this->name;
    }

    function get_color() {
        return $this->color;
    }
}

$apple = new File("apple", "red");

    fwrite($apple->filehandle, $apple->get_name() . "\n");
    fwrite($apple->filehandle, $apple->get_color() . "\n");


echo "dfgh";
?>
