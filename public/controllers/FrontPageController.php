<?php
/**
 * Created by PhpStorm.
 * User: fredp
 * Date: 7/26/2017
 * Time: 12:07 PM
 */

namespace Controller;


class FrontPageController
{

    public function show()
    {
        return view('layout', 'resources');
    }

}