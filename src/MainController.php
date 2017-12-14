<?php

namespace Itb;

use Itb\ProductRepository;

class MainController
{
    private $twig;


    public function __construct(\Twig\Environment $twig)
    {
        $this->twig = $twig;

    }
   public function loginAction()

    {
        $userRepository = new UserRepository();
        $user = $userRepository->getAll();

        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        $loggedIn = false;


        if(('admin' == $username) & ('admin' == $password)){
            $loggedIn = true;

        $template = 'login.html.twig';
        $argsArray = [
            'users' => $user,
            'loggedIn' => true,
            'username' => $username,
            'password' => $password
        ];

        }

        $html = $this->twig->render($template, $argsArray);
        print $html;

    }

    public function userListAction()
    {
        $userRepository = new UserRepository();
        $users = $userRepository->getAll();

        $template = 'userList.html.twig';
        $argsArray = [
            'users' => $users,
            'loggedIn' => true,
            'username' => 'will'
        ];
        $html = $this->twig->render($template, $argsArray);
        print $html;
    }

    public function indexAction()
    {
        $productRepository = new ProductRepository();
        //$productRepository->createTable() . $productRepository->getAllProducts();


        $template = 'home.html.twig';
        $argsArray = [
            'pageTitle' => 'home'
        ];
        $html = $this->twig->render($template, $argsArray);
        print $html;

        // include __DIR__ . '/../views/home.html.twig';
    }

    public function jokesAction()
    {
        $template = 'jokes.html.twig';
        $argsArray = [
            'pageTitle' => 'jokes'
        ];
        $html = $this->twig->render($template, $argsArray);
        print $html;
        //  include __DIR__ . '/../views/jokes.html.twig';
    }

    public function page1Action()
    {
        $template = 'page1.html.twig';
        $argsArray = [
            'pageTitle' => 'page1'
        ];
        $html = $this->twig->render($template, $argsArray);
        print $html;

    }


    //Beginning of functions used on website files already built,
    //functions will appear in order as they appear on the original navigation bar
/*
    public function Action()
    {
        $template = 'FileName.html.twig';
        $argsArray = [
            'pageTitle' => 'FileName'
        ];
        $html = $this->twig->render($template, $argsArray);
        print $html;
    }
        public function listAction()
    {
        $productRepository = new ProductRepository();
        $products = $productRepository->getAllProducts();

        $template = 'list.html.twig';
        $argsArray = [
           'product' => $product
        ];
        html = $this->twig->render($template, $argsArray);
        print html;
    }

       public function userListAction()
    {
        $userRepository = new UserRepository();
        $users = $userRepository->getAll();

        $template = 'userList.html.twig';
        $argsArray = [
            'users' => $users,
            'loggedIn' => true,
            'username' => 'will'
        ];
        $html = $this->twig->render($template, $argsArray);
        print $html;
    }

      public function homeAction()
    {
        include __DIR__ . '/../views/homepage.php';
    }
*/









  //testing

    public function listAction()
    {
        $productRepository = new ProductRepository();
        $products = $productRepository->getAllProducts();

        $template = 'list.html.twig';
        $argsArray = [
            'product' => $products
        ];
        $html = $this->twig->render($template, $argsArray);
        print $html;
    }

    //1 home
    public function homeAction()
    {
        $template = 'johndeehomeYears.html.twig';
        $argsArray = [
            'pageTitle' => 'johndeehomeYears'
        ];
        $html = $this->twig->render($template, $argsArray);
        print $html;
    }

    //2 intro
    public function introductionAction()
    {
        $template = 'educationYears.html.twig';
        $argsArray = [
            'pageTitle' => 'educationYears'
        ];
        $html = $this->twig->render($template, $argsArray);
        print $html;
    }

    //3 early
    public function earlyAction()
    {
        $template = 'earlyYears.html.twig';
        $argsArray = [
            'pageTitle' => 'earlyYears'
        ];
        $html = $this->twig->render($template, $argsArray);
        print $html;
    }
    //4 middle
    public function middleAction()
    {
        $template = 'middleYears.html.twig';
        $argsArray = [
            'pageTitle' => 'middleYears'
        ];
        $html = $this->twig->render($template, $argsArray);
        print $html;
    }
    //5 later
    public function laterAction()
    {
        $template = 'laterYears.html.twig';
        $argsArray = [
            'pageTitle' => 'laterYears'
        ];
        $html = $this->twig->render($template, $argsArray);
        print $html;
    }
    //6 influence
    public function influenceAction()
    {
        $template = 'influenceYears.html.twig';
        $argsArray = [
            'pageTitle' => 'influenceYears'
        ];
        $html = $this->twig->render($template, $argsArray);
        print $html;
    }
    //7 link
    public function linkAction()
    {
        $template = 'linkYears.html.twig';
        $argsArray = [
            'pageTitle' => 'linkYears'
        ];
        $html = $this->twig->render($template, $argsArray);
        print $html;
    }
    //8 about
    public function aboutAction()
    {
        $template = 'aboutYears.html.twig';
        $argsArray = [
            'pageTitle' => 'aboutYears'
        ];
        $html = $this->twig->render($template, $argsArray);
        print $html;
    }
}