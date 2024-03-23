<?php

function obterIniciais(string $nomeCompleto) {
    $partes = explode(" ", $nomeCompleto);
    $iniciais = array_map(function($nome) { 
        return $nome[0]; 
    }, $partes);

    return strtolower(implode("", $iniciais));
}