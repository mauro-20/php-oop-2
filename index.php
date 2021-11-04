<!-- provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
$c = new CreditCard(..);
$user->insertCreditCard($c);
BONUS:
Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta). -->

<?php

require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/Address.php";
require_once __DIR__ . "/classes/PremiumUser.php";
require_once __DIR__ . "/classes/Shoe.php";

$user1 = new User('John', 'Snow', 1, 'johnsnow@mail.uk');
$user2 = new User('Daenerys', 'Targaryen', 2, 'daenerys@mail.uk', '1974-02-15', 'female');
$user3 = new PremiumUser('Tyrion', 'Lannister', 3, 'tyrion@mail.com', 'gold');

var_dump($user1, $user2);
echo "<hr>";

$addressU2 = new Address('Dragon Rock', 'Dragonia');
$user2->setAddress($addressU2);
var_dump($user2, $user3);

$shoe1 = new Shoe('Coverse', 'All Star', 60,);
$size1 = 42;
$shoe1->setSize($size1);
var_dump($shoe1);

$discountGold = $shoe1->getDiscount('gold');
var_dump($discountGold);