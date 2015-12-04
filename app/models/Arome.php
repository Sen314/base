<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Site
 *
 * @author vava
 */
class App_Model_Arome extends App_Model_Db_Abstract {
    //Le nom et champs de la table Site
    protected $base_table ='arome';
    protected $fields = array(
        'id'=> 'id_aro','name'=> 'nom_aro', 'famille'=>'famille_aro');
    
    //Retourne les aromes
    public function getArome()
    {
        $query = 'SELECT ' . $this->formatFieldsToSelect()
            . ' FROM ' . $this->base_table;
            
            $statement = Db::getInstance()->query($query);
            return $statement->fetchAll(PDO::FETCH_CLASS,get_called_class());
    }
    //Retourne les aromes de la famille
    public function getAromeByFamily($idFamily)
    {
        $query = 'SELECT ' . $this->formatFieldsToSelect()
            . ' FROM ' . $this->base_table
			.' Where famille_aro = '.$idFamily;
        
        $statement = Db::getInstance()->query($query);
        return $statement->fetchAll(PDO::FETCH_CLASS, get_called_class());
    }
}