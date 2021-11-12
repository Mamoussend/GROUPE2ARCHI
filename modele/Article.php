<?php 
    include 'DBConnect.php';
  //Classe metier Article
  class Article
  {
      public $id;
      public $titre;
      public $contenu;
      public $datecreation;
      public $datemodif;
      public $categorie;

     //la liste de toutes les articles dispo


      public static function getListArticle(){
        include 'DBConnect.php';
          $req=$pdo->prepare('SELECT * FROM article');
          $req->execute();
          $articles=$req->fetchAll(PDO::FETCH_CLASS,'Article');
          $req->closeCursor();
          return $articles;
      }
      //fonction qui retourn l article avec l'id correspondant
      public static function getArtById($id){
         
          $req=$pdo->prepare('SELECT * FROM article WHERE id= ' .$id);
          $req->execute();
          $article=$req->fetch(PDO::FETCH_OBJ);
          $req->closeCursor();
          return article;

        //la liste de toutes les articles qui sont dans la meme categorie
      }
      public static function getArtByCategori(){
  
        $req=$pdo->prepare('SELECT * FROM article WHERE categorie= ' .$id);
        $req->execute();
        $article=$req->fetchAll(PDO::FETCH_CLASS,'Article');
        $req->closeCursor();
        return article;
      }

  }

?>