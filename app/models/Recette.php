<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Item
 *
 * @author vava
 */
class App_Model_Recette extends App_Model_Db_Abstract {
    //Le nom et champs de la table Site
    protected $base_table ='recette';
    protected $fields = array(
        'id'=> 'id_rec','nom'=>'nom_rec','maturation'=> 'tpsMaturation_rec' ,'description'=>'description_rec',
        'date'=>'date_rec', 'pg'=>'pg_rec','veg'=>'veg_rec', 
        'image'=>'image_rec','famille'=>'famille_rec','user'=>'user_rec');
    
     //Retourne les recettes
    public function getRecette()
    {
        $query = 'SELECT ' . $this->formatFieldsToSelect()
            . ' FROM ' . $this->base_table
			. ' order by date';
			
            $statement = Db::getInstance()->query($query);
            return $statement->fetchAll(PDO::FETCH_CLASS,get_called_class());
    }
	//Retourne les recettes d'un user
	public function getRecetteByUser($idUser)
    {
        $query = 'SELECT ' . $this->formatFieldsToSelect()
            . ' FROM ' . $this->base_table
			.' Where user_rec='.$idUser
			. ' order by date';
            
            $statement = Db::getInstance()->query($query);
            return $statement->fetchAll(PDO::FETCH_CLASS,get_called_class());
    }
	
	//Retourne les recettes d'une famille
	public function getRecetteByFamille($idFamille)
    {
        $query = 'SELECT ' . $this->formatFieldsToSelect()
            . ' FROM ' . $this->base_table
			.' Where famille_rec='.$idFamille
			. ' order by date';
            
            $statement = Db::getInstance()->query($query);
            return $statement->fetchAll(PDO::FETCH_CLASS,get_called_class());
    }
	
	//Retourne les recettes d'un arome
	public function getRecetteByArome($idArome)
    {
        $query = 'SELECT ' . $this->formatFieldsToSelect()
            . ' FROM qtearome,' . $this->base_table
			.' Where arome_qte='.$idArome
			. ' order by date';
            
            $statement = Db::getInstance()->query($query);
            return $statement->fetchAll(PDO::FETCH_CLASS,get_called_class());
    }
}
