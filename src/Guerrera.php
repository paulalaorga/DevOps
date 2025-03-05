<?php

class Guerrera
{
    private $nombre; #Nombre de la guerrera
    private $puntosVida; #Valor de la vida que posee
    private $situacion; #La guerrera estará 'viva', 'muerta' o 'limbo', dependiendo de sus puntos de vida. >0 = viva;
                        #<0 = muerta; =0 = limbo

    public function __construct($a1,$a2=100,$a3='viva')
    {
        $this->nombre=$a1;
        $this->puntosVida=$a2;
        $this->situacion=$a3;
    }

    public function getSituacion(){
        return $this->situacion;
    }

    public function getVida(){
        return $this->puntosVida;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function heridaLeve(){
        #Se le quitan 10 puntos de vida a la guerrera y además se cambia el valor de situacion (si fuera necesario)
        $this->puntosVida-=10;
        if ($this->puntosVida<0) $this->situacion='muerta';
        elseif ($this->puntosVida==0) $this->situacion='limbo';

    }

    public function heridaGrave(){
        #Se le quita toda la vida que posea hasta tener 0 puntos de vida y cambiarle la situacion a limbo
    }

    public function pocima(){
        #Recupera 10 puntos de vida y además cambia el valor de situacion si así fuera necesario.
        #Si la Enana está en el limbo, la pocima no le afecta, seguirá en el limbo con 0 puntos de vida.
        #Solo pocimaExtra puede rescatarla del limbo.
    }

    public function pocimaExtra(){
        #Única manera de devolver a la vida del limbo. Además se otorgarán 50 puntos de vida.
    }
}
?>
