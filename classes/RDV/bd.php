<?php

class BaseD {

    //les attributs de la Base de donnée
    private $_bd;
    //private $_tableName;

    public function __construct($bd) 
    {
        $this->setDb($bd);
    }

    public function add(RendeVous $champs) {
        $q = $this->_bd->prepare('INSERT INTO rdv(nom, prenom, contact, profession, email, motif, ladate)
        VALUES(:nom, :prenom, :contact, :profession, :email, :motif, :ladate)');
        $q->bindValue(':nom', $champs->getNom());
        $q->bindValue(':prenom', $champs->getPrenom());
        $q->bindValue(':contact', $champs->getContact());
        $q->bindValue(':profession', $champs->getProfession());
        $q->bindValue(':email', $champs->getEmail());
        $q->bindValue(':motif', $champs->getMotif());
        $q->bindValue(':ladate', $champs->getLadate());
        $q->execute();
    }

    public function delect($id) {
        $this->_bd->exec('DELETE FROM rdv WHERE id = '.$id);
    }

    public function update(RendeVous $champs) {
        
        $q = $this->_bd->prepare('UPDATE rdv SET nom = :nom, prenom = :prenom, profession = :profession, contact = :contact, email = :email, motif = :motif, ladate = :ladate WHERE id = :id');
    
        $q->bindValue(':nom', $champs->getNom());
        $q->bindValue(':prenom', $champs->getPrenom()());
        $q->bindValue(':profession', $champs->getProfession()());
        $q->bindValue(':contact', $champs->getContact());
        $q->bindValue(':email', $champs->getEmail());
        $q->bindValue(':motif', $champs->getMotif());
        $q->bindValue(':ladate', $champs->getLadate());
        $q->bindValue(':id', $champs->getId());
    
        $q->execute();
    }

    public function list() {
        $test = [];

        $q = $this->_bd->query('SELECT id, nom, prenom, profession, contact, email, motif, ladate FROM rdv ORDER BY `rdv`.`ladate` DESC');
    
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
          $test[] = new RendeVous($donnees);
        }
    
        return $test;
    }

    public function setDb(PDO $bd)
    {
      $this->_bd = $bd;
    }

}
?>