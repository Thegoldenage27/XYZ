<?php
Include 'web/conexion.php';
class MySQL
{
    private $oConBD = null;

    public function __construct()
    {
        global $usuarioBD, $passBD, $ipBD, $nombreBD;
        $this->usuarioBD = $usuarioBD;
        $this->passBD = $passBD;
        $this->ipBD = $ipBD;
        $this->nombreBD = $nombreBD;
    }

    /**
     * Conexión BD por PDO
     */
    public function conBDPDO()
    {
        try {
            $this->oConBD = new PDO("mysql:host=" . $this->ipBD . ";dbname=" . $this->nombreBD, $this->usuarioBD, $this->passBD);
            return true;
        } catch (PDOException $e) {
            echo "Error al conectar a la base de datos: " . $e->getMessage() . "\n";
            return false;
        }
    }

    public function getPeticionesConsultadas()
    {
        $peticionesConsultadas = 0;
        try {
            $strQuery = "SELECT COUNT(*) as total FROM Incidencias WHERE tipo = 'Consultada'";
            if ($this->conBDPDO()) {
                $pQuery = $this->oConBD->prepare($strQuery);
                $pQuery->execute();
                $peticionesConsultadas = $pQuery->fetchColumn();
            }
        } catch (PDOException $e) {
            echo "MySQL.getPeticionesConsultadas: " . $e->getMessage() . "\n";
            return -1;
        }
        return $peticionesConsultadas;
    }

    public function getPeticionesInsertadas()
    {
        $peticionesInsertadas = 0;
        try {
            $strQuery = "SELECT COUNT(*) as total FROM Incidencias WHERE tipo = 'Insertada'";
            if ($this->conBDPDO()) {
                $pQuery = $this->oConBD->prepare($strQuery);
                $pQuery->execute();
                $peticionesInsertadas = $pQuery->fetchColumn();
            }
        } catch (PDOException $e) {
            echo "MySQL.getPeticionesInsertadas: " . $e->getMessage() . "\n";
            return -1;
        }
        return $peticionesInsertadas;
    }

    public function getPeticionesResueltas()
    {
        $peticionesResueltas = 0;
        try {
            $strQuery = "SELECT COUNT(*) as total FROM Incidencias WHERE estado = 'Resuelta'";
            if ($this->conBDPDO()) {
                $pQuery = $this->oConBD->prepare($strQuery);
                $pQuery->execute();
                $peticionesResueltas = $pQuery->fetchColumn();
            }
        } catch (PDOException $e) {
            echo "MySQL.getPeticionesResueltas: " . $e->getMessage() . "\n";
            return -1;
        }
        return $peticionesResueltas;
    }

    public function getPeticionesAbiertas()
    {
        $peticionesAbiertas = 0;
        try {
            $strQuery = "SELECT COUNT(*) as

total FROM Incidencias WHERE estado = 'Abierta'";
if ($this->conBDPDO()) {
$pQuery = $this->oConBD->prepare($strQuery);
$pQuery->execute();
$peticionesAbiertas = $pQuery->fetchColumn();
}
} catch (PDOException $e) {
echo "MySQL.getPeticionesAbiertas: " . $e->getMessage() . "\n";
return -1;
}
return $peticionesAbiertas;
}

public function getPeticionesEnProgreso()
{
    $peticionesEnProgreso = 0;
    try {
        $strQuery = "SELECT COUNT(*) as total FROM Incidencias WHERE estado = 'En Progreso'";
        if ($this->conBDPDO()) {
            $pQuery = $this->oConBD->prepare($strQuery);
            $pQuery->execute();
            $peticionesEnProgreso = $pQuery->fetchColumn();
        }
    } catch (PDOException $e) {
        echo "MySQL.getPeticionesEnProgreso: " . $e->getMessage() . "\n";
        return -1;
    }
    return $peticionesEnProgreso;
}


}
class Grafica{
    public $totalInsertadas = 0;
    public $totalResueltas = 0;
    public $totalEnProgreso = 0;
    public $totalAbiertas = 0;  
}
?>