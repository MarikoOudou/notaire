<?php

class User {

    //les attributs du preneur de RDV
    private $_id;
    private $_nom;
    private $_prenom;
    private $_fonction;
    private $_username;
    private $_mdp;

    //le constructeur
    public function __construct($donner) 
    {
        if (isset($donner['id'])) {
            $this->_id = $donner['id'];
        }
        $this->_nom = $donner['nom'];
        $this->_prenom = $donner['prenom'];
        $this->_fonction = $donner['fonction'];
        $this->_username = $donner['username'];
        $this->_mdp = $donner['mdp'];
    }


    //Les methodes setters
    public function setId($id) {
        return $this->_id = $id;
    }

    public function setNom($nom) {
        return $this->_nom = $nom;
    }
    public function setPrenom($prenom) {
        return $this->_prenom = $prenom;
    }

    public function setFonction($fonction) {
        return $this->_fonction = $fonction;
    }

    public function setUsername($username) {
        return $this->_username = $username;
    }

    public function setMdp($mdp) {
        return $this->_mdp = $mdp;
    }



    //Les methodes getters
    public function getId() {
        return $this->_id;
    }

    public function getNom() {
        return $this->_nom;
    }
    
    public function getPrenom() {
        return $this->_prenom;
    }

    public function getFonction() {
        return $this->_fonction;
    }

    public function getUsername() {
        return $this->_username;
    }
    public function getMdp() {
        return $this->_mdp;
    }


}
?>