<?php
/**
 * Created by PhpStorm.
 * User: fredp
 * Date: 7/26/2017
 * Time: 1:01 PM
 */

namespace Router;


class Params
{
    public function checkParams($route)
    {
        $input = $this->cutUrl($route->url);

        $url = $this->cutUrl($this->uri);

        $this->getVariable($input, $url,$route);


        return $this;
    }

    public function getVariable($url_array,$url, $route)
    {
        $variables = [];
        if(count($url_array) == count($url)) {
            foreach ($url as $key => $item) {
                if($item != $url_array[$key]){
                    preg_match("/{(.*)}/", $url_array[$key], $output);
                    if (isset($output[1])) {
                        $variables[] = $item;
                        $url[$key] = $output[0];
                    }
                }

            }
        }

        $url = ROOT_URL. implode('/', $url);

        if($route->url == $url){
            $this->variables = $variables;
            $this->uri = $url;
            return $this;
        }else{
            return false;
        }
    }

    public function cutUrl($url)
    {
        $url = str_replace(ROOT_URL, '', $url);

        $url_array = explode('/', $url);

        return $url_array;
    }

    public function setVariables($url, $variables)
    {
        $cutted_url = $this->cutUrl($url);

        foreach ($cutted_url as $key => $item) {
                preg_match("/{(.*)}/", $item, $output);
                if (isset($output[1])) {
                    $cutted_url[$key] = $variables[0];
                    unset($variables[0]);
                }
        }

        $url = ROOT_URL. implode('/', $cutted_url);

        return $url;

    }
}