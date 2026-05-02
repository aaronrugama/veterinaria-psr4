<?php

// El namespace refleja la carpeta física: src/Modelos/
namespace Veterinaria\Modelos;

/**
 * Clase Propietario
 * Representa al dueño de la mascota registrado en la clínica.
 * Sigue PSR-4: una clase por archivo, nombre del archivo = nombre de la clase.
 */
class Propietario
{
    // Propiedades tipadas (PSR-1: nombres en camelCase)
    public string $nombre;
    public string $telefono;

    /**
     * Constructor: inicializa los datos del propietario.
     *
     * @param string $nombre   Nombre completo del propietario
     * @param string $telefono Teléfono de contacto
     */
    public function __construct(string $nombre, string $telefono)
    {
        $this->nombre   = $nombre;
        $this->telefono = $telefono;
    }

    /**
     * Retorna la información del propietario en formato legible.
     *
     * @return string
     */
    public function getInfo(): string
    {
        return "Propietario: {$this->nombre} | Tel: {$this->telefono}";
    }
}