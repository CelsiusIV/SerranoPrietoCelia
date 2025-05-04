<?php

/**
 * 
 * 
 * @author Celia Serrano Prieto
 * @version 1.0
 * 
 */


 /**
  * Funcion que calcula el area de un rectangulo
  *
  * @param float $ancho : Ancho del rectángulo
  * @param float $alto : Alto del rectángulo
  *
  * @return float : Area del rectangulo
  * @internal: anotacion solo visible para la documentacion para desarrolladores
  */

  function crearAreaRectangulo(float $ancho, float $alto): float{
    return $ancho * $alto;
  }

  /**
   * Funcion que calcula el area de un círculo
   * 
   * @param float $radio : Radio del círculo
   * 
   * @return float : Area del cículo
   */
  function crearAreaCirculo (float $radio): float{
    return 3.14 * ($radio * $radio);
  }

  ?>