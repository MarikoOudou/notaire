<?php

class BaseD {

    //les attributs de la Base de donnée
    private $_bd;
    //private $_tableName;

    public function __construct($bd) 
    {
        $this->setDb($bd);
    }

    public function add(User $champs) {
        $q = $this->_bd->prepare('INSERT INTO user(nom, prenom, fonction, username, mdp)
        VALUES(:nom, :prenom, :fonction, :username, :mdp)');
        $q->bindValue(':nom', $champs->getNom());
        $q->bindValue(':prenom', $champs->getPrenom());
        $q->bindValue(':fonction', $champs->getFonction());
        $q->bindValue(':username', $champs->getUsername());
        $q->bindValue(':mdp', $champs->getMdp());
        $q->execute();
    }

    public function delect($id) {
        $this->_bd->exec('DELETE FROM user WHERE id = '.$id);
    }

    public function update(User $champs) {
        
    $q = $this->_bd->prepare('UPDATE user SET nom = :nom, prenom = :prenom, fonction = :fonction, username = :username, mdp = :mdp WHERE id = '.$champs->getId());
    
    $q->bindValue(':nom', $champs->getNom());
    $q->bindValue(':prenom', $champs->getPrenom());
    $q->bindValue(':fonction', $champs->getFonction());
    $q->bindValue(':username', $champs->getUsername());
    $q->bindValue(':mdp', $champs->getMdp());
    $q->execute();
    }

    public function list() {
        $test = [];

        $q = $this->_bd->query('SELECT id, nom, prenom, fonction, username, mdp FROM user');
    
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
          $test[] = new User($donnees);
        }
    
        return $test;
    }

    public function listModif($id) {
        $test = [];

        $q = $this->_bd->query('SELECT id, nom, prenom, fonction, username, mdp FROM user WHERE  id = '.$id);
    
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
          $test[] = new User($donnees);
        }
    
        return $test;
    }

    public function connexion($username, $mdp) {

      

      $q = $this->_bd->query('SELECT id, nom, prenom, fonction, username, mdp FROM user WHERE username="'.$username.'" AND mdp = "'.$mdp.'"');
  
      //var_dump($q->fetch(PDO::FETCH_ASSOC));

      $donnees = $q->fetch(PDO::FETCH_ASSOC);
      $test = new User($donnees);
      
  
      return $test;

    }

    public function setDb(PDO $bd)
    {
      $this->_bd = $bd;
    }

}
?>