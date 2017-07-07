<?php

//configuration settings
require 'includes/config.php';

//initialisation
require 'includes/bootstrap.php';

// head

$templateParser->display('head.tpl');

// header
$templateParser->display('header.tpl');

// menu
include 'views/menu.tpl';



$action = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($action) {
    case 'home':

        include 'views/home.tpl';
        break;
    case 'articles':
        include 'model/get_pagination.php';
        $templateParser->assign('page', $page);
        include 'model/get_data.php';
        $templateParser->assign('number_of_pages',$number_of_pages);
        $templateParser->assign('result',$result);


        require_once 'model/getarticles.php';

        $templateParser->assign('article_list', $result_list);
        $templateParser->display('articles.tpl');
        break;
    case 'about':
        require_once('model/getabout.php');
        $templateParser->assign('about_list', $result_list);
        //use 'display' to show a template
        $templateParser->display('about.tpl');
        break;
    case 'contact':
        //contact
        $templateParser->display('contact.tpl');
        break;
}


// footer
$templateParser->assign('footer', $footer);
$templateParser->display('footer.tpl');

?>
