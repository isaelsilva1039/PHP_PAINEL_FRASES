<?php


class desafio
{

    public function raciocino()
    {
        $idades = [15, 16, 17, 18, 19, 20, 11, 28, 35,36,65,14,65,12,65,26,19,55];
        $idade_maxima      = max($idades);
        $idade_minima      = min($idades);
        $somaidades        = array_sum($idades);
        $quantidadePessoas = count($idades);
        $media_idade       = $somaidades / $quantidadePessoas;

        echo "Idade Minima : " .$idade_minima . "<br>";
        echo "Idade Maxima : " .$idade_maxima . "<br>";
        echo "Idade Media  : " .ceil($media_idade)."<br>";
    }
}



$desafio = new desafio();
$desafio->raciocino();
