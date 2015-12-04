<?php

/* 
 * Définition des vues de l'application
 * 
 * Les vues sont définies dans le tableau $config['views']
 * 
 * Pour chaque entrée, on déclare sa clé (ex: default), puis les caractéristiques de la vue.
 * Caractéristiques possibles ((*) indique une caractéristique obligatoire) :
 * - folder : dossier dans views/ (*)
 * - file : fichier de la vue dans views/{folder}/ (*)
 * - layout : template (gabarit) de la vue (templates définies dans layout/templates/) (*)
 * - page_title : titre de la page (va apparaître dans le <title> notamment)
 * - breadcrumbs : fil d'ariane. on indique autant de tableaux que de liens souhaités 
 *  => array(
 *      array('label' => 'lien1', 'link' => '{clé de la vue souhaité}'),
 *      array('label' => 'lien2', 'link' => null), => si null pas de lien href
 *  )
 * - roles : rôles qui ont accès à la page, * signifie tout le monde
 * - filters : filtres de type tree (arbre de checkbox) ou form (champ libre)
 * - dates : filtre de type date
 */

$config['views'] = array(
    // default
    'default' => array(
        'folder' => 'home', 
        'file' => 'index', 
        'layout' => 'admin',
        'page_title'  => 'Accueil',
        'breadcrumbs' => null,
        'roles' => '*'
    ), 
// -- AUTRES VUES    
// -- USER LOGIN/LOGOUT
    'user/login' => array(
        'folder' => 'user',
        'file' => 'login',
        'layout' => 'simple',
        'roles' => '*'
    ),
    'user/logout' => array(
        'folder' => 'user',
        'file' => 'logout',
        'layout' => 'simple',
        'roles' => '*'
    ),  
    
// -- Pages d'erreur    
    // 404
    '404' => array(
        'folder' => 'error', 
        'file' => '404', 
        'layout' => 'admin',
        'page_title'  => 'Page non trouvée',
        'roles' => '*'
    ),
    // 403
    '403' => array(
        'folder' => 'error', 
        'file' => '403', 
        'layout' => 'admin',
        'page_title'  => 'Interdit',
        'roles' => '*'
    ),
	// accueil
    'accueil' => array(
        'folder' => 'home', 
        'file' => 'index', 
        'layout' => 'admin',
        'page_title'  => 'Accueil',
        'roles' => '*'
    ),
	/********************************************************************************************/

	/*Inscription/Connexion*/
	'Log' => array(
        'folder' => 'home/vue/', 
        'file' => 'log', 
        'layout' => 'admin',
        'page_title'  => 'Connexion',
        'roles' => '*'
    ),
	/*Page accueil*/
	'Accueil' => array(
        'folder' => 'home/vue/', 
        'file' => 'accueil', 
        'layout' => 'admin',
        'page_title'  => 'Accueil',
        'roles' => '*'
    ),
	/*Page accueil*/
	'Accueil' => array(
        'folder' => 'home/vue/', 
        'file' => 'accueil', 
        'layout' => 'admin',
        'page_title'  => 'Accueil',
        'roles' => '*'
    ),
	
	/*Page A propos*/
	'Propos' => array(
        'folder' => 'home/vue/', 
        'file' => 'propos', 
        'layout' => 'admin',
        'page_title'  => 'Propos',
        'roles' => '*'
    ),
	
	/*Page Contact*/
	'Contact' => array(
        'folder' => 'home/vue/', 
        'file' => 'contact', 
        'layout' => 'admin',
        'page_title'  => 'Contact',
        'roles' => '*'
    ),
	/*Page news*/
	'News' => array(
        'folder' => 'home/vue/', 
        'file' => 'news', 
        'layout' => 'admin',
        'page_title'  => 'News',
        'roles' => '*'
    ),
	/*Page news*/
	'Recette' => array(
        'folder' => 'home/vue/', 
        'file' => 'recette', 
        'layout' => 'admin',
        'page_title'  => 'Recette',
        'roles' => '*'
    ),
	/*Page de test*/
	'test' => array(
        'folder' => 'home/vue/', 
        'file' => 'test', 
        'layout' => 'admin',
        'page_title'  => 'Page 1',
        'roles' => '*'
    ),
);

