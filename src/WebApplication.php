<?php

namespace Itb;


class WebApplication
{
    const PATH_TO_TEMPLATES = __DIR__.'/../views';

    private $mainController;



    public function __construct()
    {
        require_once __DIR__ . '/../setup/setup_database.php';
        $twig = new\Twig\Environment(new \Twig_Loader_Filesystem(self::PATH_TO_TEMPLATES)); //is this file what I am seeing on my output or is this just broken
        $this->mainController = new MainController($twig);

    }



    public function run()
    {
        $action = filter_input(INPUT_GET,'action');
        if(empty($action)) {
            $action = filter_input(INPUT_POST,'action');
        }
        switch ($action){
            case 'userList':
                $this->mainController->userListAction();
                break;

            case'jokes':
                $this->mainController->jokesAction();
                break;

            case'list':
                $this->mainController->listAction();
                break;

            case'login':
                $this->mainController->loginAction();
                break;
            //8 cases below & THE DEFAULT AT THE END!

            case'johndeehomeYears': //keyword there in the MC is home, the rest are conventional
                $this->mainController->homeAction();
                break;

            case'educationYears'://this one isnt named like the rest
                $this->mainController->earlyAction();
                break;

            case'earlyYears':
                $this->mainController->earlyAction();
                break;

            case'middleYears':
                $this->mainController->middleAction();
                break;

            case'laterYears':
                $this->mainController->laterAction();
                break;

            case'influenceYears':
                $this->mainController->influenceAction();
                break;

            case'linkYears':
                $this->mainController->linkAction();
                break;

            case'aboutYears':
                $this->mainController->aboutAction();
                break;

            //end of content full webapp switch

            case 'index':
            default:
                $this->mainController->indexAction();

        }
    }
}