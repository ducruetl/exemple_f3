<?php

include('hello.class.php');
$f3=require(__DIR__.'../lib/base.php');

$test = new Test;

$hello = hello();

$test->expect(
	is_callable('hello'),
	'hello() est une fonction appelable'
);

$test->expect(
	!empty($hello),
	'hello() renvoie une valeur'
);

$test->expect(
	is_string($hello),
	'hello() renvoie une chaine de caractère'
);

$test->expect(
	strlen($hello)==13,
	'La longueur de la chaine retournée est 13'
);

foreach ($test->results() as $result) {
	echo $result['text'].PHP_EOL;
	if ($result['status'])
		echo 'Test réussi';
	else
		echo 'Test échoué ('.$result['source'].')';
	echo PHP_EOL;
}
