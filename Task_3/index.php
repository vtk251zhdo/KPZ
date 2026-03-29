<?php

require_once 'Authenticator.php';

echo "=== Тест Singleton ===" . PHP_EOL;

$auth1 = Authenticator::getInstance();
$auth2 = Authenticator::getInstance();

$auth1->login("admin");
$auth2->login("user");

if ($auth1 === $auth2) {
    echo "Це один і той самий екземпляр!" . PHP_EOL;
} else {
    echo "Різні екземпляри!" . PHP_EOL;
}

print_r($auth1->getUsers());