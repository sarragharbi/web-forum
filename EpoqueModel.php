<?php
class chrono
{
    private ?int $id_epoque;
    private ?string $nom_epoque;
    private ?string $description;
    private ?DateTime $periode_debut; 
    private ?DateTime   $periode_fin;
    private ?string $groupes_sociaux;
    private ?string $patrimoine;
    private ?string $realisation_majeures;
    private ?string $faits_interessants;
    

    public function  __construct(?int $id_epoque, ?string $nom_epoque,?string $description,?DateTime $periode_debut,?DateTime $periode_fin,?string $groupes_sociaux,?string $patrimoine,?string $realisation_majeures,?string $faits_interessants) {
        $this->id_epoque= $id_epoque;
        $this->nom_epoque = $nom_epoque;
        $this->description = $description;
        $this->periode_debut = $periode_debut;
        $this->periode_fin = $periode_fin;
        $this->groupes_sociaux = $groupes_sociaux;
        $this->patrimoine = $patrimoine;
        $this->realisation_majeures = $realisation_majeures;
        $this->faits_interessants = $faits_interessants;
      
    }

    public function get_id_epoque():?int
    {
        return $this->id_epoque;
    }
    public function set_id_epoque(int $id_epoque):void
    {
        $this->id_epoque=$id_epoque;
    }
    public function get_name(): ?string {
        return $this->nom_epoque;
    }
    public function set_name (string $nom_epoque):void
    {
        $this->nom_epoque = $nom_epoque;
    }
    public function get_description(): ?string {
        return $this->description;
    }
    public function set_description (string $description):void
    {
        $this->description = $description;
    }
    public function get_periode_debut():?DateTime
    {
        return $this->periode_debut;
    }
    public function set_periode_debut(?DateTime $periode_debut):void
    {
        $this->periode_debut=$periode_debut;
    }
    public function get_periode_fin():?DateTime
    {
        return $this->periode_fin;
    }
    public function set_periode_fin(?DateTime $periode_fin):void
    {
        $this->periode_fin=$periode_fin;
    }
    public function get_groupes_sociaux():?string
    {
        return $this->groupes_sociaux;
    }
     
    public function set_groupes_sociaux(string $groupes_sociaux):void
    {
        $this->groupes_sociaux=$groupes_sociaux;
    }
    
    public function get_patrimoine():?string
    {
        return $this->patrimoine;
    }
    public function set_patrimoine(string $patrimoine):void
    {
        $this->patrimoine=$patrimoine;
    }
    public function get_realisation_majeures():?string
    {
        return $this->realisation_majeures;
    }
    public function set_realisation_majeures(string $realisation_majeures):void
    {
        $this->realisation_majeures=$realisation_majeures;
    }
    public function get_faits_interessants():?string
    {
        return $this->faits_interessants;
    }
    public function set_faits_interessants(string $faits_interessants):void
    {
        $this->faits_interessants=$faits_interessants;
    }
   
}




?>