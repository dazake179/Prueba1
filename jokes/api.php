<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header('Content-Type: application/json');
header('Access-Control-Allow-Credentials: true');

ini_set('display_errors', 1);
error_reporting(E_ALL);

if (isset($_GET['url'])) {
    $url = $_GET['url'];
    switch ($_SERVER['REQUEST_METHOD']) {
        case 'GET':{
                $id = intval(preg_replace('/[^0-9]+/', '', $url), 10);
                echo $url;
                switch ($url) {
                    case "jokes/random":{
                            require_once 'controller/jokes.php';
                            $controller = new JokesController();
                            $response = $controller->getRandom();
                            http_response_code(200);
                            break;
                        }
                    case "jokes/random?category=$id":{
                            require_once 'controller/jokes.php';
                            $controller = new JokesController();
                            $response = $controller->getCategory($id);
                            http_response_code(200);
                            break;
                        }
                    case "jjokes/categories":{
                            require_once 'controller/jokes.php';
                            $controller = new JokesController();
                            $response = $controller->getAllCategory();
                            http_response_code(200);
                            break;
                        }
                    case "jokes/category/$id":{
                            require_once 'controller/jokes.php';
                            $controller = new JokesController();
                            $response = $controller->getCategory($id);
                            http_response_code(200);
                            break;
                        }
                    case "jokes/search/$id":{
                            require_once 'controller/jokes.php';
                            $controller = new JokesController();
                            $response = $controller->getCategory($id);
                            http_response_code(200);
                            break;
                        }
                    default:{
                            break;
                        }
                }
                break;
            }

        default:{
                break;
            }
    }
    echo json_encode($response);
}

?>