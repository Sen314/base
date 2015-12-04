<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Profile
 *
 * @author vava
 */
class App_Model_Commentaire extends App_Model_Db_Abstract{
    //Le nom et champs de la table PROFILE
    protected $base_table ='commentaire';
    protected $fields = array(
        'id'=> 'id_com','texte'=> 'text_com','date'=> 'date_com','user'=> 'user_com','recette'=> 'recette_com');

	//Retourne les commentaires d'un user
    public function getCommentaireByUser($idUser)
    {
        $query = 'SELECT ' . $this->formatFieldsToSelect()
            . ' FROM ' . $this->base_table
			.' where user_com='.$idUser
			. ' order by date desc';
            
            $statement = Db::getInstance()->query($query);
            return $statement->fetchAll(PDO::FETCH_CLASS,get_called_class());
    }
	//Retourne les commentaires d'une recette
    public function getCommentaireByRecette($idRecette)
    {
        $query = 'SELECT ' . $this->formatFieldsToSelect()
            . ' FROM ' . $this->base_table
			.' where recette_com='.$idRecette
			. ' order by date desc';
            
            $statement = Db::getInstance()->query($query);
            return $statement->fetchAll(PDO::FETCH_CLASS,get_called_class());
    }
}
