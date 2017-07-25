<?php
namespace Project;
/**
 * Created by PhpStorm.
 * User: fred.paist
 * Date: 16.05.2017
 * Time: 9:38
 */
class View
{

    protected $component;
    protected $values;
    protected $class;
    protected $array;


    public function __construct($component, $place)
    {
        $this->component =  ROOT_PATH .$place. DS. 'views' . DS. $component. ".php";
        $this->values = [];

    }

    public function checkArray($key, $value) {

        if(is_array($value)) {

            $this->array = $key;

            return $this;
        }

        return $this;
    }

    public function is($class) {

        $this->class = $class;

        return $this;

    }

    public function with($key, $value) {

        $this->checkArray($key, $value);

        $this->values[$key] = $value;

        return $this;

    }

    public function pushWhen($if, $value) {

        if($if == true) {

            array_push($this->values[$this->array], $value);

            return $this;
        }
        return $this;
    }

    public function push( $value) {

        array_push($this->values[$this->array], $value);

        return $this;
    }

    function render() {
        extract($this->values);
        global $session;
        
        ob_start();
        $class = $this->class;
        include $this->component;
        $renderedView = ob_get_clean();

        return $renderedView;
    }

    public function __toString()
    {
        return $this->render();
    }


}