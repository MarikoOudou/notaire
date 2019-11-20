<?php

class BaseD {

    //les attributs de la Base de donnée
    private $_bd;
    //private $_tableName;

    public function __construct($bd) 
    {
        $this->setDb($bd);
    }

    public function add(Actualite $champs) {
        $q = $this->_bd->prepare('INSERT INTO actualites(titre, ladate, description, photo)
        VALUES(:titre, :ladate, :description, :photo)');
        $q->bindValue(':titre', $champs->getTitre());
        $q->bindValue(':ladate', $champs->getLadate());
        $q->bindValue(':description', $champs->getDescription());
        $q->bindValue(':photo', $champs->getPhoto());
        $q->execute();
    }

    public function delect($id) {
        $this->_bd->exec('DELETE FROM actualites WHERE id = '.$id);
    }

    public function update(Actualite $champs) {
        
        $q = $this->_bd->prepare('UPDATE actualites SET titre = :titre, ladate = :ladate, description = :description, photo = :photo
                                    WHERE id = '.$champs->getId());
    
    $q->bindValue(':titre', $champs->getTitre());
    $q->bindValue(':ladate', $champs->getLadate());
    $q->bindValue(':description', $champs->getDescription());
    $q->bindValue(':photo', $champs->getPhoto());
    
        $q->execute();
    }

    public function list() {
        $test = [];

        $q = $this->_bd->query('SELECT id, titre, ladate, description, photo FROM actualites ORDER BY `actualites`.`ladate` DESC ');
    
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
          $test[] = new Actualite($donnees);
        }
    
        return $test;
    }

    public function listLimite() {
        $test = [];

        $q = $this->_bd->query('SELECT id, titre, ladate, description, photo FROM actualites ORDER BY `actualites`.`ladate` DESC LIMIT 3');
    
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
          $test[] = new Actualite($donnees);
        }
    
        return $test;
    }

    public function listModif($id) {
        $test = [];

        $q = $this->_bd->query('SELECT id, titre, ladate, description, photo FROM actualites WHERE  id = '.$id);
    
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
          $test[] = new Actualite($donnees);
        }
    
        return $test;
    }

    public function setDb(PDO $bd)
    {
      $this->_bd = $bd;
    }

}
?>