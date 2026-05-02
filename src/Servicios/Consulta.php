<?php

// El namespace refleja la carpeta física: src/Servicios/
namespace Veterinaria\Servicios;

// Importamos las clases de otros namespaces con "use"
use Veterinaria\Modelos\Mascota;
use Veterinaria\Modelos\Veterinario;
use Veterinaria\Modelos\Propietario;

/**
 * Clase Consulta
 * Agrupa la información de una consulta veterinaria completa.
 * Demuestra cómo una clase en Servicios puede usar clases de Modelos
 * únicamente con "use", sin requires manuales.
 */
class Consulta
{
    // Propiedades tipadas con las clases importadas
    private Mascota     $mascota;
    private Veterinario $veterinario;
    private Propietario $propietario;
    private string      $motivo;

    /**
     * Constructor: recibe los objetos ya instanciados.
     *
     * @param Mascota     $mascota      Mascota atendida
     * @param Veterinario $veterinario  Veterinario que atiende
     * @param Propietario $propietario  Dueño de la mascota
     * @param string      $motivo       Motivo de la consulta
     */
    public function __construct(
        Mascota     $mascota,
        Veterinario $veterinario,
        Propietario $propietario,
        string      $motivo
    ) {
        $this->mascota     = $mascota;
        $this->veterinario = $veterinario;
        $this->propietario = $propietario;
        $this->motivo      = $motivo;
    }

    /**
     * Genera un resumen completo de la consulta.
     * Llama al método getInfo() de cada objeto relacionado.
     *
     * @return string
     */
    public function getResumen(): string
    {
        return implode("\n", [
            "===== CONSULTA VETERINARIA =====",
            $this->mascota->getInfo(),
            $this->veterinario->getInfo(),
            $this->propietario->getInfo(),
            "Motivo: {$this->motivo}",
            "================================",
        ]);
    }
}