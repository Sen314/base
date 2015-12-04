<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Activity
 *
 * @author vava
 */
class App_Model_Famille extends App_Model_Db_Abstract {
    //Le nom et champs de la table famille
    protected $base_table ='famille';
    protected $fields = array(
        'id'=> 'id_fam','libelle'=> 'lbl_fam');
    
    //Retourne les familles
    public function getFamille()
    {
            $query = 'SELECT ' . $this->formatFieldsToSelect()
            . ' FROM ' . $this->base_table;
            
            $statement = Db::getInstance()->query($query);
            return $statement->fetchAll(PDO::FETCH_CLASS,get_called_class());
    }
}
