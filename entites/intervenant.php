<?php

class Intervenant{
    private $id;       //int
    private $nom;     //chaine de caractère
    private $prenom; //chaine de caractère
    private $affectation; //chaine de caractère
    private $url_page_web; //chaine de caractère

    public function __construct( $id,  $nom,  $prenom,  $affectation,  $url_page_web){
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->affectation = $affectation;
        $this->url_page_web = $url_page_web;
    }

    public function getId() {return $this->id;}

	public function getNom() {return $this->nom;}

	public function getPrenom() {return $this->prenom;}

	public function getAffectation() {return $this->affectation;}

	public function getUrlPageWeb() {return $this->url_page_web;}

	
    public function setId( $id): void {$this->id = $id;}

	public function setNom( $nom): void {$this->nom = $nom;}

	public function setPrenom( $prenom): void {$this->prenom = $prenom;}

	public function setAffectation( $affectation): void {$this->affectation = $affectation;}

	public function setUrlPageWeb( $url_page_web): void {$this->url_page_web = $url_page_web;}

	
	
}