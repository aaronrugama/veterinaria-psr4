<?php

// ============================================================
// PUNTO DE ENTRADA DEL SISTEMA - index.php
// ============================================================
// Una sola línea reemplaza TODOS los require manuales.
// Composer se encarga de cargar cada clase automáticamente
// cuando se necesita, gracias al mapa PSR-4 generado.
// ============================================================
require_once __DIR__ . '/vendor/autoload.php';

// Importamos las clases con "use" — sin ningún include o require
// Composer sabrá exactamente en qué archivo está cada una.
use Veterinaria\Modelos\Mascota;
use Veterinaria\Modelos\Veterinario;
use Veterinaria\Modelos\Propietario;
use Veterinaria\Servicios\Consulta;

// ============================================================
// INSTANCIAMOS LOS OBJETOS
// PHP no lanza "Class not found" gracias al autoloader PSR-4
// ============================================================

// Creamos al propietario de la mascota
$propietario = new Propietario("Carlos Mendoza", "6123-4567");

// Creamos la mascota con su nombre, especie y edad
$mascota = new Mascota("Rocky", "Perro", 3);

// Creamos al veterinario con su especialidad
$veterinario = new Veterinario("Ana Pérez", "Cirugía General");

// Creamos la consulta uniendo todos los objetos anteriores
$consulta = new Consulta($mascota, $veterinario, $propietario, "Revisión anual y vacunas");

// ============================================================
// MOSTRAMOS EL RESULTADO
// ============================================================
echo $consulta->getResumen();