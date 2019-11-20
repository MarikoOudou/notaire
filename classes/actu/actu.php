<?php

class Actualite {

    //les attributs du preneur de RDV
    private $_id;
    private $_titre;
    private $_ladate;
    private $_description;
    private $_photo;

    //le constructeur
    public function __construct($donner) 
    {
        if (isset($donner['id'])) {
            $this->_id = $donner['id'];
        }
        $this->_titre = $donner['titre'];
        $this->_ladate = $donner['ladate'];
        $this->_description = $donner['description'];
        $this->_photo = $donner['photo'];
    }


    //Les methodes setters
    public function setId($id) {
        return $this->_id = $id;
    }

    public function seTitre($titre) {
        return $this->_titre = $titre;
    }
    public function setLadate($ladate) {
        return $this->_ladate = $ladate;
    }

    public function setDescription($description) {
        return $this->_description = $description;
    }

    public function setPhoto($photo) {
        return $this->_photo = $photo;
    }



    //Les methodes getters

    public function getId() {
        return $this->_id;
    }

    public function getTitre() {
        return $this->_titre;
    }
    
    public function getLadate() {
        return $this->_ladate;
    }

    public function getDescription() {
        return $this->_description;
    }

    public function getPhoto() {
        return $this->_photo;
    }


}
?>