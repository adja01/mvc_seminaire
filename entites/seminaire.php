<?php

class Seminaire{
    private $id;
    private $id_intervenant;
    private $titre;    //titre_intervention
    private $resume;   //resume de l'intervention
    private $lieu;
    private $date;     //date et heure de l'intervention
    private $dateMise_a_jour;

    public function __construct( $id,  $id_intervenant,  $titre,  $resume,  $lieu,  $date,  $dateMise_a_jour){
        $this->id = $id;
        $this->id_intervenant = $id_intervenant;
        $this->titre = $titre;
        $this->resume = $resume;
        $this->lieu = $lieu;
        $this->date = $date;
        $this->dateMise_a_jour = $dateMise_a_jour;
    }
    

    public function getId() {return $this->id;}

	public function getIdIntervenant() {return $this->id_intervenant;}

	public function getTitre() {return $this->titre;}

	public function getResume() {return $this->resume;}

	public function getLieu() {return $this->lieu;}

	public function getDate() {return $this->date;}

	public function getDateMiseAJour() {return $this->dateMise_a_jour;}


	public function setId( $id): void {$this->id = $id;}

	public function setIdIntervenant( $id_intervenant): void {$this->id_intervenant = $id_intervenant;}

	public function setTitre( $titre): void {$this->titre = $titre;}

	public function setResume( $resume): void {$this->resume = $resume;}

	public function setLieu( $lieu): void {$this->lieu = $lieu;}

	public function setDate( $date): void {$this->date = $date;}

	public function setDateMiseAJour( $dateMise_a_jour): void {$this->dateMise_a_jour = $dateMise_a_jour;}

	
	


}