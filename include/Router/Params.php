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

        $this->uri = $this->cutUrl($this->uri);

        $this->getVariable($input);

        $this->uri = ROOT_URL. implode('/', $this->uri);

        return $this;
    }

    public function getVariable($url_array)
    {
        foreach ($url_array as $key => $item){

            preg_match("/{(.*)}/", $item, $output);
            if(isset($output[1]))
            {
                $this->variables[] =  $this->uri[$key];
                $this->uri[$key] = $output[0];
            }
        }

        return $this;
    }

    public function cutUrl($url)
    {
        $url = str_replace(ROOT_URL, '', $url);

        $url_array = explode('/', $url);

        return $url_array;
    }
}