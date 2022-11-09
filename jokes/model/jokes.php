<?php 
class JokesModel{

        private $categories = array('category1','category2','category3','category3','category3','category4','category5','category6','category7','category8','category9','category10','category11','category12','category13','category14','category15','category16','category17','category18','category19','category20','category21','category22','category23','category24','category25');

        public function getCategory($category){
            return $this->categories[$category];
        }

        public function getAll(){
            return $this->categories;
        }
}
?>
