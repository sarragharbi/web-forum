<?php
class chronogeo
{
    private ?int $id_geographique;
    private ?string $nom_lieu;
    private ?int $latitude;
    private ?int $longitude; 
    private ?string   $type_geographique;
    private ?string $importance_historique;
    private ?string $fait_culturel;
    private ?string $description;
    
    

    public function __construct(
        ?int $id_geographique,
        ?string $nom_lieu,
        ?float $latitude,
        ?float $longitude,
        ?string $type_geographique,
        ?string $importance_historique,
        ?string $fait_culturel,
        ?string $description,
        ?string $faits_interessants
    ){
        $this->id_geographique= $id_geographique;
        $this->nom_lieu = $nom_lieu;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->type_geographique = $type_geographique;
        $this->importance_historique = $importance_historique;
        $this->fait_culturel = $fait_culturel;
        $this->description = $description;
     
      
    }

    public function get_id_geographique():?int
    {
        return $this->id_geographique;
    }
    public function set_id_geographique(int $id_geographique):void
    {
        $this->id_geographique=$id_geographique;
    }
    public function get_name(): ?string {
        return $this->nom_lieu;
    }
    public function set_name (string $nom_lieu):void
    {
        $this->nom_lieu = $nom_lieu;
    }
    public function get_latitude(): ?int {
        return $this->latitude;
    }
    public function set_latitude (int $latitude):void
    {
        $this->latitude = $latitude;
    }
    public function get_longitude():?int
    {
        return $this->longitude;
    }
    public function set_longitude(?int $longitude):void
    {
        $this->longitude=$longitude;
    }
    public function get_type():?string
    {
        return $this->type_geographique;
    }
    public function set_type(?string $type_geographique):void
    {
        $this->type_geographique=$type_geographique;
    }
    public function get_histoire():?string
    {
        return $this->importance_historique;
    }
     
    public function set_histoire(string $importance_historique):void
    {
        $this->importance_historique=$importance_historique;
    }
    
    public function get_culture():?string
    {
        return $this->fait_culturel;
    }
    public function set_culture(string $fait_culturel):void
    {
        $this->fait_culturel=$fait_culturel;
    }
    public function get_descri():?string
    {
        return $this->description;
    }
    public function set_descri(string $description):void
    {
        $this->description=$description;
    }
   
   
}




?>