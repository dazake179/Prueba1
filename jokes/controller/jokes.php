<?php
require_once('model/jokes.php');
class JokesController extends JokesModel{
    public function getByCategory($category){
        $response = $this->getCategory($category);
        if (empty($response)) {
            return false;
        }
        return $response;
    }
    
    public function getAllCategory(){
        $response = $this->getAll();
        if (empty($response)) {
            return false;
        }
        return $response;
    }

    public function getRandom(){
        $category = rand(0,25);
        $response = $this->getCategory($category);
        if (empty($response)) {
            return false;
        }
        return $response;
    }
}
?>