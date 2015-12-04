<?php

/**
 * Classe utilisateur de l'application
 *
 * @author Valentin AUDON
 */
class App_Model_User 
{
    public $id;
    public $name;
	public $prenom;
    public $login;
	public $mdp;
    public $mail;
    public $photo;
    public $role;
    
    
    /**
     * Authentification d'un utilisateur
     * @param string $login
     * @param string $password
     * @return boolean|\App_Model_User
     */
    public function authenticate($login, $password)
    {
        $utilisateurs = Db::getInstance()->query("Select id_user as id ,nom_user as name,prenom_user as prenom,pseudo_user as login,mdp_user as mdp,
                                                            mail_user as mail,photo_user as photo, role_user as role
													from user ");
		$users=$utilisateurs->fetchAll();
        foreach ($users as $key => $user) {
            if ($user['login'] == $login && $user['mdp'] == md5($password)) {
                $this->setData($user);
                return $this;
            }
        }
        return false;
    }
        
    /**
     * Instaure les données $data dans les propriétés de l'objet
     * @param array $data
     * @return \App_Model_User
     */
    public function setData($data)
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
        return $this;
    }
}
