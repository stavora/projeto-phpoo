<?php
/** 
* Chamando o controller digitado na url
* http://localhost:8000/controller
*/
$callController = new App\Controllers\Controller;
$calledController = $callController->controller();
$controller = new $calledController();

/** 
* Chamando o metodo digitado na url
* http://localhost:8000/controller/metodo
*/
$callMethod = new App\Controllers\Method;
$method = $callMethod->method($controller);

/** 
* Chamando o controller atraves da classe controller e da classe method
*/
$controller->$method();

?>