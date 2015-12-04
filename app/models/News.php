<div class="row">
	<div class="col-md-3 col-lg-offset-2">

		
	</div>
	
</div>
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Values
 *
 * @author vava
 */
class App_Model_News extends App_Model_Db_Abstract{
   //Le nom et champs de la table Values
    protected $base_table ='news';
    protected $fields = array(
        'id'=> 'id_news','titre'=> 'titre_news','description'=>'description_news', 'date'=>"date_news", 'image' =>'image_news');
    
    //Retourne les news
    public function getNews()
    {
         $query = 'SELECT ' . $this->formatFieldsToSelect()
            . ' FROM ' . $this->base_table
			. ' order by date';
        $statement = Db::getInstance()->query($query);
        return $statement->fetchAll(PDO::FETCH_CLASS,get_called_class());
     }
}
?>