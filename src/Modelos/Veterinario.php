<?php

// El namespace refleja la carpeta física: src/Modelos/
namespace Veterinaria\Modelos;

/**
 * Clase Veterinario
 * Representa al profesional que atiende la consulta.
 * Sigue PSR-4: una clase por archivo, nombre del archivo = nombre de la clase.
 */
class Veterinario
{
    // Propiedades tipadas (PSR-1: nombres en camelCase)
    public string $nombre;
    public string $especialidad;

    /**
     * Constructor: inicializa los datos del veterinario.
     *
     * @param string $nombre       Nombre del veterinario
     * @param string $especialidad Área de especialización
     */
    public function __construct(string $nombre, string $especialidad)
    {
        $this->nombre       = $nombre;
        $this->especialidad = $especialidad;
    }

    /**
     * Retorna la información del veterinario en formato legible.
     *
     * @return string
     */
    public function getInfo(): string
    {
        return "Veterinario: Dr. {$this->nombre} | Especialidad: {$this->especialidad}";
    }
}