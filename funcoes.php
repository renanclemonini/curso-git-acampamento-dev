<?php

function obterIniciais(string $nomeCompleto) {
    $partes = explode(" ", $nomeCompleto);
    $iniciais = array_map(function($nome) { 
        return $nome[0]; 
    }, $partes);

    return strtolower(implode("", $iniciais));
}

function calcularPercentual($total, $percentual) {
    return $total * $percentual / 100;
}

function calcularArea($base, $altura) {
    return $base * $altura;
}

function calcularPrecoComDesconto(float $precoProduto) {
    $desconto = 15;
    return $precoProduto - ($precoProduto * $desconto / 100);
}

function calcularPrecoComDesconto(float $precoProduto, $desconto) {
    return $precoProduto - ($precoProduto * $desconto / 100);
}
