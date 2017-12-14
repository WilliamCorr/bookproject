<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Itb\ProductRepository;

$productRepository = new ProductRepository();

$productRepository->deleteAll();

$productRepository->createTable();


$productRepository->insertProduct('T Shirt', 19.99);
$productRepository->insertProduct('Hoodie', 34.50);
$productRepository->insertProduct('Mug', 9.99);
$productRepository->insertProduct('Poster', 4.99 );

$UserRepository = new \Itb\UserRepository();

$UserRepository->createTableUsers();

$UserRepository->insertDetails('Bill Smith','kitchen123');
$UserRepository->insertDetails('James Woods','qwerty');
$UserRepository->insertDetails('Frank Pucci','bonjourno459');
$UserRepository->insertDetails('Tim Dylan','ManchesterUnited94');
