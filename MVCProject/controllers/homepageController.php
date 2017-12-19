<?php

class homepageController extends http\controller
{

    public static function show()
    {
//this is the show method that is called to show the sites name in a template any array passed in will be accepted by the template function as a model
//You could get fancy with the homepage and check for the userID in the session and hide/show the login / registration links when no session
//If there is a session then you should show the user profile link
//the template is an HTML page with PHP inserted in it.  just put an if/else statement to check for the session and show correct links


        $templateData['site_name'] = 'mysite';

//template data contains what will show up in the $data variable in the homepage template
//the name of the template 'homepage' becomes 'homepage.php' in the pages directory

        self::getTemplate('homepage', $templateData);
    }

    public static function create()
    {


//I just put a $_POST here but this is where you would put the code to add a record
        print_r($_POST);
    }

}
