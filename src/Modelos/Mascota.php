<?php

// El namespace refleja la carpeta física: src/Modelos/
namespace Veterinaria\Modelos;

/**
 * Clase Mascota
 * Representa al animal atendido en la clínica veterinaria.
 * Sigue PSR-4: una clase por archivo, nombre del archivo = nombre de la clase.
 */
class Mascota
{
    // Propiedades tipadas (PSR-1: nombres en camelCase)
    public string $nombre;
    public string $especie;
    public int    $edad;

    /**
     * Constructor: inicializa los datos de la mascota.
     *
     * @param string $nombre  Nombre de la mascota
     * @param string $especie Especie (perro, gato, etc.)
     * @param int    $edad    Edad en años
     */
    public function __construct(string $nombre, string $especie, int $edad)
    {
        $this->nombre  = $nombre;
        $this->especie = $especie;
        $this->edad    = $edad;
    }

    /**
     * Retorna la información de la mascota en formato legible.
     *
     * @return string
     */
    public function getInfo(): string
    {
        return "Mascota: {$this->nombre} | Especie: {$this->especie} | Edad: {$this->edad} años";
    }
}