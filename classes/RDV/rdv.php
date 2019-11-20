<?php

class RendeVous {

    //les attributs du preneur de RDV
    private $_id;
    private $_nom;
    private $_prenom;
    private $_contact;
    private $_profession;
    private $_email;
    private $_motif;
    private $_ladate;

    //le constructeur
    public function __construct($donner) 
    {
        if (isset($donner['id'])) {
            $this->_id = $donner['id'];
        }
        $this->_nom = $donner['nom'];
        $this->_prenom = $donner['prenom'];
        $this->_contact = $donner['contact'];
        $this->_profession = $donner['profession'];
        $this->_email = $donner['email'];
        $this->_motif = $donner['motif'];
        $this->_ladate = $donner['ladate'];
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

    public function setContact($contact) {
        return $this->_contact = $contact;
    }

    public function setProfession($profession) {
        return $this->_profession = $profession;
    }

    public function setEmail($email) {
        return $this->_email = $email;
    }

    public function setMotif($motif) {
        return $this->_motif = $motif;
    }

    public function setLadate($ladate) {
        return $this->_ladate = $ladate;
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

    public function getContact() {
        return $this->_contact;
    }

    public function getProfession() {
        return $this->_profession;
    }

    public function getEmail() {
        return $this->_email;
    }

    public function getMotif() {
        return $this->_motif;
    }

    public function getLadate() {
        return $this->_ladate;
    }

}
?>