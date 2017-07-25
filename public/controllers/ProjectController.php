<?php
/**
 * Created by PhpStorm.
 * User: fredp
 * Date: 6/27/2017
 * Time: 12:49 PM
 */

namespace Controller;

use App\Project;
class ProjectController
{
    public function projects()
    {
        $projects = Project::find_all();

        return json_encode($projects);
    }
}