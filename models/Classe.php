<?php
namespace App\Model;
use App\Core\Model;

class Classe extends Model{
    private int $id;
    private string $libelle;
    private string $niveau;
    private string $filliere;

    public function __construct()
    {
        
    }

    public static function findAll():array{      
        $sql="select * from classe ORDER BY `id` DESC";
        return parent::findBy($sql,[]);
    }

    public function professeurs():array|null{
        $sql="select...";
        return parent::findBy($sql,[$this->id]);
    }

    public function insert():int{
        $db=parent::dataBase();
        $db->connexionDB();
            $sql="INSERT INTO `classe` (`libelle`,`niveau`,`filliere`,`rpd_id`) VALUES (?,?,?,?)";
            //die("Ca marche");
            $result=$db->executeUpdate($sql,[$this->libelle, $this->niveau,$this->filliere,$_SESSION["user"]->id]);
        $db->closeConnexion();
        return $result;
    }

    public function update():int{
        $db=parent::dataBase();
        $db->connexionDB();
        $sql="UPDATE `classe` SET `libelle`=?,`niveau`=?,`filliere`=? WHERE id=?";
        $result=$db->executeUpdate($sql,[$this->libelle, $this->niveau,$this->filliere,$this->id]);
        $db->closeConnexion();
        return $result;
    }

   /* public function deleteClasse():array|null{
        $sql="select...";
        return parent::findBy($sql,[$this->id]);
    }*/

    




    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of niveau
     */ 
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set the value of niveau
     *
     * @return  self
     */ 
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get the value of filliere
     */ 
    public function getFilliere()
    {
        return $this->filliere;
    }

    /**
     * Set the value of filliere
     *
     * @return  self
     */ 
    public function setFilliere($filliere)
    {
        $this->filliere = $filliere;

        return $this;
    }
}