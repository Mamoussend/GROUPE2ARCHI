<?php
   	// require_once 'modele/dao/ArticleDao.php';
	// require_once 'modele/dao/CategorieDao.php';
	require_once 'modele/Article.php';
	//require_once 'modele/Categorie.php';
	require_once 'modele/DBConnect.php';
    class Controler{
        function __construct(){

        }
        public function showAcceuil(){
            $articles=Article::getListArticle();
            require_once 'vue/acceuil.php';
        }

    } 

?>