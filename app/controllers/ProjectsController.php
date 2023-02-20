<?php

require('core/App.php');
require('core/bootstrap.php');

class ProjectsController {

    public function getblogslol () {

        $blogposts = App::get('database')->selectAll('blogi');

        return view('blogi', ['blogi' => $blogposts]);        

    }

}