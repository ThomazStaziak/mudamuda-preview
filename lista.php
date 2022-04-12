<?php
    if ($_POST) {
        try {
                require "conexao.php";
                
                 $id = explode("/", $_SERVER['REQUEST_URI'])[2];
                
                $consulta = $conexao->prepare("UPDATE pedidos SET lista = :lista WHERE id = :id");
                $inseriu = $consulta->execute([
                        ':lista' => print_r($_POST, true),
                        ':id' => $id
                ]);
        
                $conexao = null;
    
                if ($inseriu) {
                        header("Location: /sucesso.php");
                }
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/test.css">
    <title>Document</title>
</head>

<body>

    <main>
        <form method="post" action="" class="Grid blocos-grid cor-bg" onclick="colorBlocoOrcamento(2,2)">
            <p style="margin: 3px 0; font-size:10pt;color:#989898;width:100%"><strong>Sala de estar</strong></p>
            <div class="bloco-grid-fix coluna-itens-orcamento-1-3">
                <div style="margin-bottom: 6px;"><input id="it0-0" class="lista-input" value="" placeholder="0"
                        data-pai="Sala de estar" name="Abajur" onfocus="colorBlocoOrcamento(2,2)"><label
                        for="it0-0" class="label-spinner" style="margin-top:15px">Abajur</label></div>
                <div style="margin-bottom: 6px;"><input id="it0-1" class="lista-input" value="" placeholder="0"
                        data-pai="Sala de estar" name="Aparador" onfocus="colorBlocoOrcamento(2,2)"><label
                        for="it0-1" class="label-spinner" style="margin-top:15px">Aparador</label></div>
                <div style="margin-bottom: 6px;"><input id="it0-2" class="lista-input" value="" placeholder="0"
                        data-pai="Sala de estar" name="Banco Alto" onfocus="colorBlocoOrcamento(2,2)"><label
                        for="it0-2" class="label-spinner" style="margin-top:15px">Banco Alto</label></div>
                <div style="margin-bottom: 6px;"><input id="it0-3" class="lista-input" value="" placeholder="0"
                        data-pai="Sala de estar" name="Bar" onfocus="colorBlocoOrcamento(2,2)"><label for="it0-3"
                        class="label-spinner" style="margin-top:15px">Bar</label></div>
                <div style="margin-bottom: 6px;"><input id="it0-4" class="lista-input" value="" placeholder="0"
                        data-pai="Sala de estar" name="Biombo" onfocus="colorBlocoOrcamento(2,2)"><label
                        for="it0-4" class="label-spinner" style="margin-top:15px">Biombo</label></div>
                <div style="margin-bottom: 6px;"><input id="it0-5" class="lista-input" value="" placeholder="0"
                        data-pai="Sala de estar" name="Cadeira de Balanço"
                        onfocus="colorBlocoOrcamento(2,2)"><label for="it0-5" class="label-spinner"
                        style="margin-top:15px">Cadeira de Balanço</label></div>
                <div style="margin-bottom: 6px;"><input id="it0-6" class="lista-input" value="" placeholder="0"
                        data-pai="Sala de estar" name="Cadeira c/ Braço" onfocus="colorBlocoOrcamento(2,2)"><label
                        for="it0-6" class="label-spinner" style="margin-top:15px">Cadeira c/ Braço</label></div>
                <div style="margin-bottom: 6px;"><input id="it0-7" class="lista-input" value="" placeholder="0"
                        data-pai="Sala de estar" name="Cadeira Massagem" onfocus="colorBlocoOrcamento(2,2)"><label
                        for="it0-7" class="label-spinner" style="margin-top:15px">Cadeira Massagem</label></div>
                <div style="margin-bottom: 6px;"><input id="it0-8" class="lista-input" value="" placeholder="0"
                        data-pai="Sala de estar" name="Cadeira Simples" onfocus="colorBlocoOrcamento(2,2)"><label
                        for="it0-8" class="label-spinner" style="margin-top:15px">Cadeira Simples</label></div>
            </div>
            <div class="bloco-grid-fix coluna-itens-orcamento-1-3">
                <div style="margin-bottom: 6px;"><input id="it0-9" class="lista-input" value="" placeholder="0"
                        data-pai="Sala de estar" name="Caixa grande" onfocus="colorBlocoOrcamento(2,2)"><label
                        for="it0-9" class="label-spinner" style="margin-top:15px">Caixa grande</label></div>
                <div style="margin-bottom: 6px;"><input id="it0-10" class="lista-input" value="" placeholder="0"
                        data-pai="Sala de estar" name="Caixa pequena" onfocus="colorBlocoOrcamento(2,2)"><label
                        for="it0-10" class="label-spinner" style="margin-top:15px">Caixa pequena</label></div>
                <div style="margin-bottom: 6px;"><input id="it0-11" class="lista-input" value="" placeholder="0"
                        data-pai="Sala de estar" name="Console/aparador" onfocus="colorBlocoOrcamento(2,2)"><label
                        for="it0-11" class="label-spinner" style="margin-top:15px">Console/aparador</label></div>
                <div style="margin-bottom: 6px;"><input id="it0-12" class="lista-input" value="" placeholder="0"
                        data-pai="Sala de estar" name="Estante / Rack Grande"
                        onfocus="colorBlocoOrcamento(2,2)"><label for="it0-12" class="label-spinner"
                        style="margin-top:15px">Estante / Rack Grande</label></div>
                <div style="margin-bottom: 6px;"><input id="it0-13" class="lista-input" value="" placeholder="0"
                        data-pai="Sala de estar" name="Estante / Rack Pequeno"
                        onfocus="colorBlocoOrcamento(2,2)"><label for="it0-13" class="label-spinner"
                        style="margin-top:15px">Estante / Rack Pequeno</label></div>
                <div style="margin-bottom: 6px;"><input id="it0-14" class="lista-input" value="" placeholder="0"
                        data-pai="Sala de estar" name="Mesa Centro / lateral"
                        onfocus="colorBlocoOrcamento(2,2)"><label for="it0-14" class="label-spinner"
                        style="margin-top:15px">Mesa Centro / lateral</label></div>
                <div style="margin-bottom: 6px;"><input id="it0-15" class="lista-input" value="" placeholder="0"
                        data-pai="Sala de estar" name="Mesa Telefone" onfocus="colorBlocoOrcamento(2,2)"><label
                        for="it0-15" class="label-spinner" style="margin-top:15px">Mesa Telefone</label></div>
                <div style="margin-bottom: 6px;"><input id="it0-16" class="lista-input" value="" placeholder="0"
                        data-pai="Sala de estar" name="Poltrona Grande" onfocus="colorBlocoOrcamento(2,2)"><label
                        for="it0-16" class="label-spinner" style="margin-top:15px">Poltrona Grande</label></div>
                <div style="margin-bottom: 6px;"><input id="it0-17" class="lista-input" value="" placeholder="0"
                        data-pai="Sala de estar" name="Pufe" onfocus="colorBlocoOrcamento(2,2)"><label for="it0-17"
                        class="label-spinner" style="margin-top:15px">Pufe</label></div>
            </div>
            <div class="bloco-grid-fix coluna-itens-orcamento-1-3">
                <div style="margin-bottom: 6px;"><input id="it0-18" class="lista-input" value="" placeholder="0"
                        data-pai="Sala de estar" name="Quadro Grande" onfocus="colorBlocoOrcamento(2,2)"><label
                        for="it0-18" class="label-spinner" style="margin-top:15px">Quadro Grande</label></div>
                <div style="margin-bottom: 6px;"><input id="it0-19" class="lista-input" value="" placeholder="0"
                        data-pai="Sala de estar" name="Quadro Pequeno" onfocus="colorBlocoOrcamento(2,2)"><label
                        for="it0-19" class="label-spinner" style="margin-top:15px">Quadro Pequeno</label></div>
                <div style="margin-bottom: 6px;"><input id="it0-20" class="lista-input" value="" placeholder="0"
                        data-pai="Sala de estar" name="Sofá 2 Lugares" onfocus="colorBlocoOrcamento(2,2)"><label
                        for="it0-20" class="label-spinner" style="margin-top:15px">Sofá 2 Lugares</label></div>
                <div style="margin-bottom: 6px;"><input id="it0-21" class="lista-input" value="" placeholder="0"
                        data-pai="Sala de estar" name="Sofá 3 Lugares" onfocus="colorBlocoOrcamento(2,2)"><label
                        for="it0-21" class="label-spinner" style="margin-top:15px">Sofá 3 Lugares</label></div>
                <div style="margin-bottom: 6px;"><input id="it0-22" class="lista-input" value="" placeholder="0"
                        data-pai="Sala de estar" name="Sofá 4 Lugares" onfocus="colorBlocoOrcamento(2,2)"><label
                        for="it0-22" class="label-spinner" style="margin-top:15px">Sofá 4 Lugares</label></div>
                <div style="margin-bottom: 6px;"><input id="it0-23" class="lista-input" value="" placeholder="0"
                        data-pai="Sala de estar" name="Sofá chaise" onfocus="colorBlocoOrcamento(2,2)"><label
                        for="it0-23" class="label-spinner" style="margin-top:15px">Sofá chaise</label></div>
                <div style="margin-bottom: 6px;"><input id="it0-24" class="lista-input" value="" placeholder="0"
                        data-pai="Sala de estar" name="Sofá em L" onfocus="colorBlocoOrcamento(2,2)"><label
                        for="it0-24" class="label-spinner" style="margin-top:15px">Sofá em L</label></div>
                <div style="margin-bottom: 6px;"><input id="it0-25" class="lista-input" value="" placeholder="0"
                        data-pai="Sala de estar" name="Sofá cama" onfocus="colorBlocoOrcamento(2,2)"><label
                        for="it0-25" class="label-spinner" style="margin-top:15px">Sofá cama</label></div>
                <div class="Grid blocos-grid" onclick="colorBlocoOrcamento(2,3)">
                    <p style="margin: 3px 0; font-size:10pt;color:#989898;width:100%"><strong>Sala de jantar</strong>
                    </p>
                    <div class="bloco-grid-fix coluna-itens-orcamento-1-3">
                        <div style="margin-bottom: 6px;"><input id="it1-0" class="lista-input" value=""
                                placeholder="0" data-pai="Sala de jantar" name="Arca 2 portas"
                                onfocus="colorBlocoOrcamento(2,3)" onfocusout="validaEnvio()"><label for="it1-0"
                                class="label-spinner" style="margin-top:15px">Arca 2 portas</label></div>
                        <div style="margin-bottom: 6px;"><input id="it1-1" class="lista-input" value=""
                                placeholder="0" data-pai="Sala de jantar" name="Arca 3 portas"
                                onfocus="colorBlocoOrcamento(2,3)" onfocusout="validaEnvio()"><label for="it1-1"
                                class="label-spinner" style="margin-top:15px">Arca 3 portas</label></div>
                        <div style="margin-bottom: 6px;"><input id="it1-2" class="lista-input" value=""
                                placeholder="0" data-pai="Sala de jantar" name="Arca 4 portas"
                                onfocus="colorBlocoOrcamento(2,3)" onfocusout="validaEnvio()"><label for="it1-2"
                                class="label-spinner" style="margin-top:15px">Arca 4 portas</label></div>
                        <div style="margin-bottom: 6px;"><input id="it1-3" class="lista-input" value=""
                                placeholder="0" data-pai="Sala de jantar" name="Arca Vitrine"
                                onfocus="colorBlocoOrcamento(2,3)" onfocusout="validaEnvio()"><label for="it1-3"
                                class="label-spinner" style="margin-top:15px">Arca Vitrine</label></div>
                        <div style="margin-bottom: 6px;"><input id="it1-4" class="lista-input" value=""
                                placeholder="0" data-pai="Sala de jantar" name="Buffet"
                                onfocus="colorBlocoOrcamento(2,3)" onfocusout="validaEnvio()"><label for="it1-4"
                                class="label-spinner" style="margin-top:15px">Buffet</label></div>
                        <div style="margin-bottom: 6px;"><input id="it1-5" class="lista-input" value=""
                                placeholder="0" data-pai="Sala de jantar" name="Cadeira"
                                onfocus="colorBlocoOrcamento(2,3)" onfocusout="validaEnvio()"><label for="it1-5"
                                class="label-spinner" style="margin-top:15px">Cadeira</label></div>
                    </div>
                    <div class="bloco-grid-fix coluna-itens-orcamento-1-3">
                        <div style="margin-bottom: 6px;"><input id="it1-6" class="lista-input" value=""
                                placeholder="0" data-pai="Sala de jantar" name="Cadeira Criança"
                                onfocus="colorBlocoOrcamento(2,3)" onfocusout="validaEnvio()"><label for="it1-6"
                                class="label-spinner" style="margin-top:15px">Cadeira Criança</label></div>
                        <div style="margin-bottom: 6px;"><input id="it1-7" class="lista-input" value=""
                                placeholder="0" data-pai="Sala de jantar" name="Caixa grande"
                                onfocus="colorBlocoOrcamento(2,3)" onfocusout="validaEnvio()"><label for="it1-7"
                                class="label-spinner" style="margin-top:15px">Caixa grande</label></div>
                        <div style="margin-bottom: 6px;"><input id="it1-8" class="lista-input" value=""
                                placeholder="0" data-pai="Sala de jantar" name="Caixa pequena"
                                onfocus="colorBlocoOrcamento(2,3)" onfocusout="validaEnvio()"><label for="it1-8"
                                class="label-spinner" style="margin-top:15px">Caixa pequena</label></div>
                        <div style="margin-bottom: 6px;"><input id="it1-9" class="lista-input" value=""
                                placeholder="0" data-pai="Sala de jantar" name="Carrinho de Chá"
                                onfocus="colorBlocoOrcamento(2,3)" onfocusout="validaEnvio()"><label for="it1-9"
                                class="label-spinner" style="margin-top:15px">Carrinho de Chá</label></div>
                        <div style="margin-bottom: 6px;"><input id="it1-10" class="lista-input" value=""
                                placeholder="0" data-pai="Sala de jantar" name="Cristaleira 1 porta"
                                onfocus="colorBlocoOrcamento(2,3)" onfocusout="validaEnvio()"><label for="it1-10"
                                class="label-spinner" style="margin-top:15px">Cristaleira 1 porta</label></div>
                        <div style="margin-bottom: 6px;"><input id="it1-11" class="lista-input" value=""
                                placeholder="0" data-pai="Sala de jantar" name="Cristaleira 2 / 4 portas"
                                onfocus="colorBlocoOrcamento(2,3)" onfocusout="validaEnvio()"><label for="it1-11"
                                class="label-spinner" style="margin-top:15px">Cristaleira 2 / 4 portas</label></div>
                    </div>
                    <div class="bloco-grid-fix coluna-itens-orcamento-1-3">
                        <div style="margin-bottom: 6px;"><input id="it1-12" class="lista-input" value=""
                                placeholder="0" data-pai="Sala de jantar" name="Mesa para 4 cadeiras"
                                onfocus="colorBlocoOrcamento(2,3)" onfocusout="validaEnvio()"><label for="it1-12"
                                class="label-spinner" style="margin-top:15px">Mesa para 4 cadeiras</label></div>
                        <div style="margin-bottom: 6px;"><input id="it1-13" class="lista-input" value=""
                                placeholder="0" data-pai="Sala de jantar" name="Mesa para 6 cadeiras"
                                onfocus="colorBlocoOrcamento(2,3)" onfocusout="validaEnvio()"><label for="it1-13"
                                class="label-spinner" style="margin-top:15px">Mesa para 6 cadeiras</label></div>
                        <div style="margin-bottom: 6px;"><input id="it1-14" class="lista-input" value=""
                                placeholder="0" data-pai="Sala de jantar" name="Mesa para 8 ou mais cadeiras"
                                onfocus="colorBlocoOrcamento(2,3)" onfocusout="validaEnvio()"><label for="it1-14"
                                class="label-spinner" style="margin-top:15px">Mesa para 8 ou mais cadeiras</label></div>
                        <div style="margin-bottom: 6px;"><input id="it1-15" class="lista-input" value=""
                                placeholder="0" data-pai="Sala de jantar" name="Tampo de mármore/granito"
                                onfocus="colorBlocoOrcamento(2,3)" onfocusout="validaEnvio()"><label for="it1-15"
                                class="label-spinner" style="margin-top:15px">Tampo de mármore/granito</label></div>
                        <div style="margin-bottom: 6px;"><input id="it1-16" class="lista-input" value=""
                                placeholder="0" data-pai="Sala de jantar" name="Tampo de vidro"
                                onfocus="colorBlocoOrcamento(2,3)" onfocusout="validaEnvio()"><label for="it1-16"
                                class="label-spinner" style="margin-top:15px">Tampo de vidro</label></div>
                    </div>
                </div>
                <div class="Grid blocos-grid" onclick="colorBlocoOrcamento(2,4)">
                    <p style="margin: 3px 0; font-size:10pt;color:#989898;width:100%"><strong>Cozinha/Área de
                            serviço</strong></p>
                    <div class="bloco-grid-fix coluna-itens-orcamento-1-3">
                        <div style="margin-bottom: 6px;"><input id="it2-0" class="lista-input" value=""
                                placeholder="0" data-pai="Cozinha/Área de serviço" name="Armário 2 portas"
                                onfocus="colorBlocoOrcamento(2,4)" onfocusout="validaEnvio()"><label for="it2-0"
                                class="label-spinner" style="margin-top:15px">Armário 2 portas</label></div>
                        <div style="margin-bottom: 6px;"><input id="it2-1" class="lista-input" value=""
                                placeholder="0" data-pai="Cozinha/Área de serviço" name="Armário 3 portas"
                                onfocus="colorBlocoOrcamento(2,4)" onfocusout="validaEnvio()"><label for="it2-1"
                                class="label-spinner" style="margin-top:15px">Armário 3 portas</label></div>
                        <div style="margin-bottom: 6px;"><input id="it2-2" class="lista-input" value=""
                                placeholder="0" data-pai="Cozinha/Área de serviço" name="Armário 4 portas"
                                onfocus="colorBlocoOrcamento(2,4)" onfocusout="validaEnvio()"><label for="it2-2"
                                class="label-spinner" style="margin-top:15px">Armário 4 portas</label></div>
                        <div style="margin-bottom: 6px;"><input id="it2-3" class="lista-input" value=""
                                placeholder="0" data-pai="Cozinha/Área de serviço" name="Armário 6 portas"
                                onfocus="colorBlocoOrcamento(2,4)" onfocusout="validaEnvio()"><label for="it2-3"
                                class="label-spinner" style="margin-top:15px">Armário 6 portas</label></div>
                        <div style="margin-bottom: 6px;"><input id="it2-4" class="lista-input" value=""
                                placeholder="0" data-pai="Cozinha/Área de serviço" name="Armário Aéreo / Parede"
                                onfocus="colorBlocoOrcamento(2,4)" onfocusout="validaEnvio()"><label for="it2-4"
                                class="label-spinner" style="margin-top:15px">Armário Aéreo / Parede</label></div>
                        <div style="margin-bottom: 6px;"><input id="it2-5" class="lista-input" value=""
                                placeholder="0" data-pai="Cozinha/Área de serviço" name="Armário Paneleiro"
                                onfocus="colorBlocoOrcamento(2,4)" onfocusout="validaEnvio()"><label for="it2-5"
                                class="label-spinner" style="margin-top:15px">Armário Paneleiro</label></div>
                        <div style="margin-bottom: 6px;"><input id="it2-6" class="lista-input" value=""
                                placeholder="0" data-pai="Cozinha/Área de serviço" name="Balcão"
                                onfocus="colorBlocoOrcamento(2,4)" onfocusout="validaEnvio()"><label for="it2-6"
                                class="label-spinner" style="margin-top:15px">Balcão</label></div>
                        <div style="margin-bottom: 6px;"><input id="it2-7" class="lista-input" value=""
                                placeholder="0" data-pai="Cozinha/Área de serviço" name="Batedeira"
                                onfocus="colorBlocoOrcamento(2,4)" onfocusout="validaEnvio()"><label for="it2-7"
                                class="label-spinner" style="margin-top:15px">Batedeira</label></div>
                        <div style="margin-bottom: 6px;"><input id="it2-8" class="lista-input" value=""
                                placeholder="0" data-pai="Cozinha/Área de serviço" name="Bebedouro"
                                onfocus="colorBlocoOrcamento(2,4)" onfocusout="validaEnvio()"><label for="it2-8"
                                class="label-spinner" style="margin-top:15px">Bebedouro</label></div>
                        <div style="margin-bottom: 6px;"><input id="it2-9" class="lista-input" value=""
                                placeholder="0" data-pai="Cozinha/Área de serviço" name="Botijão de Gás"
                                onfocus="colorBlocoOrcamento(2,4)" onfocusout="validaEnvio()"><label for="it2-9"
                                class="label-spinner" style="margin-top:15px">Botijão de Gás</label></div>
                        <div style="margin-bottom: 6px;"><input id="it2-10" class="lista-input" value=""
                                placeholder="0" data-pai="Cozinha/Área de serviço" name="Cadeira"
                                onfocus="colorBlocoOrcamento(2,4)" onfocusout="validaEnvio()"><label for="it2-10"
                                class="label-spinner" style="margin-top:15px">Cadeira</label></div>
                    </div>
                    <div class="bloco-grid-fix coluna-itens-orcamento-1-3">
                        <div style="margin-bottom: 6px;"><input id="it2-11" class="lista-input" value=""
                                placeholder="0" data-pai="Cozinha/Área de serviço" name="Caixa grande"
                                onfocus="colorBlocoOrcamento(2,4)" onfocusout="validaEnvio()"><label for="it2-11"
                                class="label-spinner" style="margin-top:15px">Caixa grande</label></div>
                        <div style="margin-bottom: 6px;"><input id="it2-12" class="lista-input" value=""
                                placeholder="0" data-pai="Cozinha/Área de serviço" name="Caixa pequena"
                                onfocus="colorBlocoOrcamento(2,4)" onfocusout="validaEnvio()"><label for="it2-12"
                                class="label-spinner" style="margin-top:15px">Caixa pequena</label></div>
                        <div style="margin-bottom: 6px;"><input id="it2-13" class="lista-input" value=""
                                placeholder="0" data-pai="Cozinha/Área de serviço" name="Exaustor"
                                onfocus="colorBlocoOrcamento(2,4)" onfocusout="validaEnvio()"><label for="it2-13"
                                class="label-spinner" style="margin-top:15px">Exaustor</label></div>
                        <div style="margin-bottom: 6px;"><input id="it2-14" class="lista-input" value=""
                                placeholder="0" data-pai="Cozinha/Área de serviço" name="Fogão 4 bocas"
                                onfocus="colorBlocoOrcamento(2,4)" onfocusout="validaEnvio()"><label for="it2-14"
                                class="label-spinner" style="margin-top:15px">Fogão 4 bocas</label></div>
                        <div style="margin-bottom: 6px;"><input id="it2-15" class="lista-input" value=""
                                placeholder="0" data-pai="Cozinha/Área de serviço" name="Fogão 6 bocas"
                                onfocus="colorBlocoOrcamento(2,4)" onfocusout="validaEnvio()"><label for="it2-15"
                                class="label-spinner" style="margin-top:15px">Fogão 6 bocas</label></div>
                        <div style="margin-bottom: 6px;"><input id="it2-16" class="lista-input" value=""
                                placeholder="0" data-pai="Cozinha/Área de serviço" name="Forno Elétrico"
                                onfocus="colorBlocoOrcamento(2,4)" onfocusout="validaEnvio()"><label for="it2-16"
                                class="label-spinner" style="margin-top:15px">Forno Elétrico</label></div>
                        <div style="margin-bottom: 6px;"><input id="it2-17" class="lista-input" value=""
                                placeholder="0" data-pai="Cozinha/Área de serviço" name="Freezer horizontal"
                                onfocus="colorBlocoOrcamento(2,4)" onfocusout="validaEnvio()"><label for="it2-17"
                                class="label-spinner" style="margin-top:15px">Freezer horizontal</label></div>
                        <div style="margin-bottom: 6px;"><input id="it2-18" class="lista-input" value=""
                                placeholder="0" data-pai="Cozinha/Área de serviço" name="Freezer vertical"
                                onfocus="colorBlocoOrcamento(2,4)" onfocusout="validaEnvio()"><label for="it2-18"
                                class="label-spinner" style="margin-top:15px">Freezer vertical</label></div>
                        <div style="margin-bottom: 6px;"><input id="it2-19" class="lista-input" value=""
                                placeholder="0" data-pai="Cozinha/Área de serviço" name="Frigobar"
                                onfocus="colorBlocoOrcamento(2,4)" onfocusout="validaEnvio()"><label for="it2-19"
                                class="label-spinner" style="margin-top:15px">Frigobar</label></div>
                        <div style="margin-bottom: 6px;"><input id="it2-20" class="lista-input" value=""
                                placeholder="0" data-pai="Cozinha/Área de serviço" name="Galão Água"
                                onfocus="colorBlocoOrcamento(2,4)" onfocusout="validaEnvio()"><label for="it2-20"
                                class="label-spinner" style="margin-top:15px">Galão Água</label></div>
                        <div style="margin-bottom: 6px;"><input id="it2-21" class="lista-input" value=""
                                placeholder="0" data-pai="Cozinha/Área de serviço" name="Geladeira Biplex / Duplex"
                                onfocus="colorBlocoOrcamento(2,4)" onfocusout="validaEnvio()"><label for="it2-21"
                                class="label-spinner" style="margin-top:15px">Geladeira Biplex / Duplex</label></div>
                    </div>
                    <div class="bloco-grid-fix coluna-itens-orcamento-1-3">
                        <div style="margin-bottom: 6px;"><input id="it2-22" class="lista-input" value=""
                                placeholder="0" data-pai="Cozinha/Área de serviço" name="Geladeira Side by Side"
                                onfocus="colorBlocoOrcamento(2,4)" onfocusout="validaEnvio()"><label for="it2-22"
                                class="label-spinner" style="margin-top:15px">Geladeira Side by Side</label></div>
                        <div style="margin-bottom: 6px;"><input id="it2-23" class="lista-input" value=""
                                placeholder="0" data-pai="Cozinha/Área de serviço" name="Geladeira Simples"
                                onfocus="colorBlocoOrcamento(2,4)" onfocusout="validaEnvio()"><label for="it2-23"
                                class="label-spinner" style="margin-top:15px">Geladeira Simples</label></div>
                        <div style="margin-bottom: 6px;"><input id="it2-24" class="lista-input" value=""
                                placeholder="0" data-pai="Cozinha/Área de serviço" name="Máquina Lavar louça"
                                onfocus="colorBlocoOrcamento(2,4)" onfocusout="validaEnvio()"><label for="it2-24"
                                class="label-spinner" style="margin-top:15px">Máquina Lavar louça</label></div>
                        <div style="margin-bottom: 6px;"><input id="it2-25" class="lista-input" value=""
                                placeholder="0" data-pai="Cozinha/Área de serviço" name="Máquina Lavar roupa"
                                onfocus="colorBlocoOrcamento(2,4)" onfocusout="validaEnvio()"><label for="it2-25"
                                class="label-spinner" style="margin-top:15px">Máquina Lavar roupa</label></div>
                        <div style="margin-bottom: 6px;"><input id="it2-26" class="lista-input" value=""
                                placeholder="0" data-pai="Cozinha/Área de serviço" name="Máquina secar roupa"
                                onfocus="colorBlocoOrcamento(2,4)" onfocusout="validaEnvio()"><label for="it2-26"
                                class="label-spinner" style="margin-top:15px">Máquina secar roupa</label></div>
                        <div style="margin-bottom: 6px;"><input id="it2-27" class="lista-input" value=""
                                placeholder="0" data-pai="Cozinha/Área de serviço" name="Micro-Ondas"
                                onfocus="colorBlocoOrcamento(2,4)" onfocusout="validaEnvio()"><label for="it2-27"
                                class="label-spinner" style="margin-top:15px">Micro-Ondas</label></div>
                        <div style="margin-bottom: 6px;"><input id="it2-28" class="lista-input" value=""
                                placeholder="0" data-pai="Cozinha/Área de serviço" name="Panelas"
                                onfocus="colorBlocoOrcamento(2,4)" onfocusout="validaEnvio()"><label for="it2-28"
                                class="label-spinner" style="margin-top:15px">Panelas</label></div>
                        <div style="margin-bottom: 6px;"><input id="it2-29" class="lista-input" value=""
                                placeholder="0" data-pai="Cozinha/Área de serviço" name="Pia"
                                onfocus="colorBlocoOrcamento(2,4)" onfocusout="validaEnvio()"><label for="it2-29"
                                class="label-spinner" style="margin-top:15px">Pia</label></div>
                        <div style="margin-bottom: 6px;"><input id="it2-30" class="lista-input" value=""
                                placeholder="0" data-pai="Cozinha/Área de serviço" name="Tábua Passar"
                                onfocus="colorBlocoOrcamento(2,4)" onfocusout="validaEnvio()"><label for="it2-30"
                                class="label-spinner" style="margin-top:15px">Tábua Passar</label></div>
                        <div style="margin-bottom: 6px;"><input id="it2-31" class="lista-input" value=""
                                placeholder="0" data-pai="Cozinha/Área de serviço" name="Tanque Lavar Roupa"
                                onfocus="colorBlocoOrcamento(2,4)" onfocusout="validaEnvio()"><label for="it2-31"
                                class="label-spinner" style="margin-top:15px">Tanque Lavar Roupa</label></div>
                        <div style="margin-bottom: 6px;"><input id="it2-32" class="lista-input" value=""
                                placeholder="0" data-pai="Cozinha/Área de serviço" name="Varal de Chão / Pendurar"
                                onfocus="colorBlocoOrcamento(2,4)" onfocusout="validaEnvio()"><label for="it2-32"
                                class="label-spinner" style="margin-top:15px">Varal de Chão / Pendurar</label></div>
                    </div>
                </div>
                <div class="Grid blocos-grid" onclick="colorBlocoOrcamento(2,5)">
                    <p style="margin: 3px 0; font-size:10pt;color:#989898;width:100%"><strong>Quarto/Dormitório</strong>
                    </p>
                    <div class="bloco-grid-fix coluna-itens-orcamento-1-3">
                        <div style="margin-bottom: 6px;"><input id="it3-0" class="lista-input" value=""
                                placeholder="0" data-pai="Quarto/Dormitório" name="Baú"
                                onfocus="colorBlocoOrcamento(2,5)" onfocusout="validaEnvio()"><label for="it3-0"
                                class="label-spinner" style="margin-top:15px">Baú</label></div>
                        <div style="margin-bottom: 6px;"><input id="it3-1" class="lista-input" value=""
                                placeholder="0" data-pai="Quarto/Dormitório" name="Berço / cama bebê"
                                onfocus="colorBlocoOrcamento(2,5)" onfocusout="validaEnvio()"><label for="it3-1"
                                class="label-spinner" style="margin-top:15px">Berço / cama bebê</label></div>
                        <div style="margin-bottom: 6px;"><input id="it3-2" class="lista-input" value=""
                                placeholder="0" data-pai="Quarto/Dormitório" name="Box p/ Colchão Casal"
                                onfocus="colorBlocoOrcamento(2,5)" onfocusout="validaEnvio()"><label for="it3-2"
                                class="label-spinner" style="margin-top:15px">Box p/ Colchão Casal</label></div>
                        <div style="margin-bottom: 6px;"><input id="it3-3" class="lista-input" value=""
                                placeholder="0" data-pai="Quarto/Dormitório" name="Box p/ Colchão Solteiro"
                                onfocus="colorBlocoOrcamento(2,5)" onfocusout="validaEnvio()"><label for="it3-3"
                                class="label-spinner" style="margin-top:15px">Box p/ Colchão Solteiro</label></div>
                        <div style="margin-bottom: 6px;"><input id="it3-4" class="lista-input" value=""
                                placeholder="0" data-pai="Quarto/Dormitório" name="Cabeceira de Cama"
                                onfocus="colorBlocoOrcamento(2,5)" onfocusout="validaEnvio()"><label for="it3-4"
                                class="label-spinner" style="margin-top:15px">Cabeceira de Cama</label></div>
                        <div style="margin-bottom: 6px;"><input id="it3-5" class="lista-input" value=""
                                placeholder="0" data-pai="Quarto/Dormitório" name="Cabideiro / Arara"
                                onfocus="colorBlocoOrcamento(2,5)" onfocusout="validaEnvio()"><label for="it3-5"
                                class="label-spinner" style="margin-top:15px">Cabideiro / Arara</label></div>
                        <div style="margin-bottom: 6px;"><input id="it3-6" class="lista-input" value=""
                                placeholder="0" data-pai="Quarto/Dormitório" name="Caixa Cabideiro"
                                onfocus="colorBlocoOrcamento(2,5)" onfocusout="validaEnvio()"><label for="it3-6"
                                class="label-spinner" style="margin-top:15px">Caixa Cabideiro</label></div>
                        <div style="margin-bottom: 6px;"><input id="it3-7" class="lista-input" value=""
                                placeholder="0" data-pai="Quarto/Dormitório" name="Caixa grande"
                                onfocus="colorBlocoOrcamento(2,5)" onfocusout="validaEnvio()"><label for="it3-7"
                                class="label-spinner" style="margin-top:15px">Caixa grande</label></div>
                        <div style="margin-bottom: 6px;"><input id="it3-8" class="lista-input" value=""
                                placeholder="0" data-pai="Quarto/Dormitório" name="Caixa pequena"
                                onfocus="colorBlocoOrcamento(2,5)" onfocusout="validaEnvio()"><label for="it3-8"
                                class="label-spinner" style="margin-top:15px">Caixa pequena</label></div>
                        <div style="margin-bottom: 6px;"><input id="it3-9" class="lista-input" value=""
                                placeholder="0" data-pai="Quarto/Dormitório" name="Cama beliche"
                                onfocus="colorBlocoOrcamento(2,5)" onfocusout="validaEnvio()"><label for="it3-9"
                                class="label-spinner" style="margin-top:15px">Cama beliche</label></div>
                    </div>
                    <div class="bloco-grid-fix coluna-itens-orcamento-1-3">
                        <div style="margin-bottom: 6px;"><input id="it3-10" class="lista-input" value=""
                                placeholder="0" data-pai="Quarto/Dormitório" name="Cama casal Box"
                                onfocus="colorBlocoOrcamento(2,5)" onfocusout="validaEnvio()"><label for="it3-10"
                                class="label-spinner" style="margin-top:15px">Cama casal Box</label></div>
                        <div style="margin-bottom: 6px;"><input id="it3-11" class="lista-input" value=""
                                placeholder="0" data-pai="Quarto/Dormitório" name="Cama Casal King"
                                onfocus="colorBlocoOrcamento(2,5)" onfocusout="validaEnvio()"><label for="it3-11"
                                class="label-spinner" style="margin-top:15px">Cama Casal King</label></div>
                        <div style="margin-bottom: 6px;"><input id="it3-12" class="lista-input" value=""
                                placeholder="0" data-pai="Quarto/Dormitório" name="Cama Casal Queen"
                                onfocus="colorBlocoOrcamento(2,5)" onfocusout="validaEnvio()"><label for="it3-12"
                                class="label-spinner" style="margin-top:15px">Cama Casal Queen</label></div>
                        <div style="margin-bottom: 6px;"><input id="it3-13" class="lista-input" value=""
                                placeholder="0" data-pai="Quarto/Dormitório" name="Cama Hospitalar"
                                onfocus="colorBlocoOrcamento(2,5)" onfocusout="validaEnvio()"><label for="it3-13"
                                class="label-spinner" style="margin-top:15px">Cama Hospitalar</label></div>
                        <div style="margin-bottom: 6px;"><input id="it3-14" class="lista-input" value=""
                                placeholder="0" data-pai="Quarto/Dormitório" name="Cama Solteiro"
                                onfocus="colorBlocoOrcamento(2,5)" onfocusout="validaEnvio()"><label for="it3-14"
                                class="label-spinner" style="margin-top:15px">Cama Solteiro</label></div>
                        <div style="margin-bottom: 6px;"><input id="it3-15" class="lista-input" value=""
                                placeholder="0" data-pai="Quarto/Dormitório" name="Colchão Casal Avulso"
                                onfocus="colorBlocoOrcamento(2,5)" onfocusout="validaEnvio()"><label for="it3-15"
                                class="label-spinner" style="margin-top:15px">Colchão Casal Avulso</label></div>
                        <div style="margin-bottom: 6px;"><input id="it3-16" class="lista-input" value=""
                                placeholder="0" data-pai="Quarto/Dormitório" name="Colchão Solteiro Avulso"
                                onfocus="colorBlocoOrcamento(2,5)" onfocusout="validaEnvio()"><label for="it3-16"
                                class="label-spinner" style="margin-top:15px">Colchão Solteiro Avulso</label></div>
                        <div style="margin-bottom: 6px;"><input id="it3-17" class="lista-input" value=""
                                placeholder="0" data-pai="Quarto/Dormitório" name="Cômoda"
                                onfocus="colorBlocoOrcamento(2,5)" onfocusout="validaEnvio()"><label for="it3-17"
                                class="label-spinner" style="margin-top:15px">Cômoda</label></div>
                        <div style="margin-bottom: 6px;"><input id="it3-18" class="lista-input" value=""
                                placeholder="0" data-pai="Quarto/Dormitório" name="Criado Mudo"
                                onfocus="colorBlocoOrcamento(2,5)" onfocusout="validaEnvio()"><label for="it3-18"
                                class="label-spinner" style="margin-top:15px">Criado Mudo</label></div>
                        <div style="margin-bottom: 6px;"><input id="it3-19" class="lista-input" value=""
                                placeholder="0" data-pai="Quarto/Dormitório" name="Escrivaninha"
                                onfocus="colorBlocoOrcamento(2,5)" onfocusout="validaEnvio()"><label for="it3-19"
                                class="label-spinner" style="margin-top:15px">Escrivaninha</label></div>
                    </div>
                    <div class="bloco-grid-fix coluna-itens-orcamento-1-3">
                        <div style="margin-bottom: 6px;"><input id="it3-20" class="lista-input" value=""
                                placeholder="0" data-pai="Quarto/Dormitório" name="Estante / Rack Grande"
                                onfocus="colorBlocoOrcamento(2,5)" onfocusout="validaEnvio()"><label for="it3-20"
                                class="label-spinner" style="margin-top:15px">Estante / Rack Grande</label></div>
                        <div style="margin-bottom: 6px;"><input id="it3-21" class="lista-input" value=""
                                placeholder="0" data-pai="Quarto/Dormitório" name="Estante / Rack Pequeno"
                                onfocus="colorBlocoOrcamento(2,5)" onfocusout="validaEnvio()"><label for="it3-21"
                                class="label-spinner" style="margin-top:15px">Estante / Rack Pequeno</label></div>
                        <div style="margin-bottom: 6px;"><input id="it3-22" class="lista-input" value=""
                                placeholder="0" data-pai="Quarto/Dormitório" name="Guarda-roupa 2 P"
                                onfocus="colorBlocoOrcamento(2,5)" onfocusout="validaEnvio()"><label for="it3-22"
                                class="label-spinner" style="margin-top:15px">Guarda-roupa 2 P</label></div>
                        <div style="margin-bottom: 6px;"><input id="it3-23" class="lista-input" value=""
                                placeholder="0" data-pai="Quarto/Dormitório" name="Guarda-roupa 3 P"
                                onfocus="colorBlocoOrcamento(2,5)" onfocusout="validaEnvio()"><label for="it3-23"
                                class="label-spinner" style="margin-top:15px">Guarda-roupa 3 P</label></div>
                        <div style="margin-bottom: 6px;"><input id="it3-24" class="lista-input" value=""
                                placeholder="0" data-pai="Quarto/Dormitório" name="Guarda-roupa 4 P"
                                onfocus="colorBlocoOrcamento(2,5)" onfocusout="validaEnvio()"><label for="it3-24"
                                class="label-spinner" style="margin-top:15px">Guarda-roupa 4 P</label></div>
                        <div style="margin-bottom: 6px;"><input id="it3-25" class="lista-input" value=""
                                placeholder="0" data-pai="Quarto/Dormitório" name="Guarda-roupa 6 P"
                                onfocus="colorBlocoOrcamento(2,5)" onfocusout="validaEnvio()"><label for="it3-25"
                                class="label-spinner" style="margin-top:15px">Guarda-roupa 6 P</label></div>
                        <div style="margin-bottom: 6px;"><input id="it3-26" class="lista-input" value=""
                                placeholder="0" data-pai="Quarto/Dormitório" name="Guarda-roupa duplex"
                                onfocus="colorBlocoOrcamento(2,5)" onfocusout="validaEnvio()"><label for="it3-26"
                                class="label-spinner" style="margin-top:15px">Guarda-roupa duplex</label></div>
                        <div style="margin-bottom: 6px;"><input id="it3-27" class="lista-input" value=""
                                placeholder="0" data-pai="Quarto/Dormitório" name="Lustre/Luminária"
                                onfocus="colorBlocoOrcamento(2,5)" onfocusout="validaEnvio()"><label for="it3-27"
                                class="label-spinner" style="margin-top:15px">Lustre/Luminária</label></div>
                        <div style="margin-bottom: 6px;"><input id="it3-28" class="lista-input" value=""
                                placeholder="0" data-pai="Quarto/Dormitório" name="Mesa Cabeceira"
                                onfocus="colorBlocoOrcamento(2,5)" onfocusout="validaEnvio()"><label for="it3-28"
                                class="label-spinner" style="margin-top:15px">Mesa Cabeceira</label></div>
                    </div>
                </div>
                <div class="Grid blocos-grid" onclick="colorBlocoOrcamento(2,6)">
                    <p style="margin: 3px 0; font-size:10pt;color:#989898;width:100%"><strong>Eletrônicos</strong></p>
                    <div class="bloco-grid-fix coluna-itens-orcamento-1-3">
                        <div style="margin-bottom: 6px;"><input id="it4-0" class="lista-input" value=""
                                placeholder="0" data-pai="Eletrônicos" name="Aparelho de som"
                                onfocus="colorBlocoOrcamento(2,6)" onfocusout="validaEnvio()"><label for="it4-0"
                                class="label-spinner" style="margin-top:15px">Aparelho de som</label></div>
                        <div style="margin-bottom: 6px;"><input id="it4-1" class="lista-input" value=""
                                placeholder="0" data-pai="Eletrônicos" name="Aspirador"
                                onfocus="colorBlocoOrcamento(2,6)" onfocusout="validaEnvio()"><label for="it4-1"
                                class="label-spinner" style="margin-top:15px">Aspirador</label></div>
                        <div style="margin-bottom: 6px;"><input id="it4-2" class="lista-input" value=""
                                placeholder="0" data-pai="Eletrônicos" name="Caixa de Som"
                                onfocus="colorBlocoOrcamento(2,6)" onfocusout="validaEnvio()"><label for="it4-2"
                                class="label-spinner" style="margin-top:15px">Caixa de Som</label></div>
                        <div style="margin-bottom: 6px;"><input id="it4-3" class="lista-input" value=""
                                placeholder="0" data-pai="Eletrônicos" name="Computador"
                                onfocus="colorBlocoOrcamento(2,6)" onfocusout="validaEnvio()"><label for="it4-3"
                                class="label-spinner" style="margin-top:15px">Computador</label></div>
                        <div style="margin-bottom: 6px;"><input id="it4-4" class="lista-input" value=""
                                placeholder="0" data-pai="Eletrônicos" name="DVD / Blu-ray aparelho"
                                onfocus="colorBlocoOrcamento(2,6)" onfocusout="validaEnvio()"><label for="it4-4"
                                class="label-spinner" style="margin-top:15px">DVD / Blu-ray aparelho</label></div>
                    </div>
                    <div class="bloco-grid-fix coluna-itens-orcamento-1-3">
                        <div style="margin-bottom: 6px;"><input id="it4-5" class="lista-input" value=""
                                placeholder="0" data-pai="Eletrônicos" name="Home Theater"
                                onfocus="colorBlocoOrcamento(2,6)" onfocusout="validaEnvio()"><label for="it4-5"
                                class="label-spinner" style="margin-top:15px">Home Theater</label></div>
                        <div style="margin-bottom: 6px;"><input id="it4-6" class="lista-input" value=""
                                placeholder="0" data-pai="Eletrônicos" name="Impressora"
                                onfocus="colorBlocoOrcamento(2,6)" onfocusout="validaEnvio()"><label for="it4-6"
                                class="label-spinner" style="margin-top:15px">Impressora</label></div>
                        <div style="margin-bottom: 6px;"><input id="it4-7" class="lista-input" value=""
                                placeholder="0" data-pai="Eletrônicos" name="Projetor"
                                onfocus="colorBlocoOrcamento(2,6)" onfocusout="validaEnvio()"><label for="it4-7"
                                class="label-spinner" style="margin-top:15px">Projetor</label></div>
                        <div style="margin-bottom: 6px;"><input id="it4-8" class="lista-input" value=""
                                placeholder="0" data-pai="Eletrônicos" name="TV LCD - 20“ a 29“"
                                onfocus="colorBlocoOrcamento(2,6)" onfocusout="validaEnvio()"><label for="it4-8"
                                class="label-spinner" style="margin-top:15px">TV LCD - 20“ a 29“</label></div>
                        <div style="margin-bottom: 6px;"><input id="it4-9" class="lista-input" value=""
                                placeholder="0" data-pai="Eletrônicos" name="TV LCD - 32“ a 42“"
                                onfocus="colorBlocoOrcamento(2,6)" onfocusout="validaEnvio()"><label for="it4-9"
                                class="label-spinner" style="margin-top:15px">TV LCD - 32“ a 42“</label></div>
                    </div>
                    <div class="bloco-grid-fix coluna-itens-orcamento-1-3">
                        <div style="margin-bottom: 6px;"><input id="it4-10" class="lista-input" value=""
                                placeholder="0" data-pai="Eletrônicos" name="TV LCD - 46“ a 60“"
                                onfocus="colorBlocoOrcamento(2,6)" onfocusout="validaEnvio()"><label for="it4-10"
                                class="label-spinner" style="margin-top:15px">TV LCD - 46“ a 60“</label></div>
                        <div style="margin-bottom: 6px;"><input id="it4-11" class="lista-input" value=""
                                placeholder="0" data-pai="Eletrônicos" name="TV Tubo - 20“ a 29“"
                                onfocus="colorBlocoOrcamento(2,6)" onfocusout="validaEnvio()"><label for="it4-11"
                                class="label-spinner" style="margin-top:15px">TV Tubo - 20“ a 29“</label></div>
                        <div style="margin-bottom: 6px;"><input id="it4-12" class="lista-input" value=""
                                placeholder="0" data-pai="Eletrônicos" name="TV Tubo - 32“ a 42“"
                                onfocus="colorBlocoOrcamento(2,6)" onfocusout="validaEnvio()"><label for="it4-12"
                                class="label-spinner" style="margin-top:15px">TV Tubo - 32“ a 42“</label></div>
                        <div style="margin-bottom: 6px;"><input id="it4-13" class="lista-input" value=""
                                placeholder="0" data-pai="Eletrônicos" name="TV Tubo - 46“ a 60“"
                                onfocus="colorBlocoOrcamento(2,6)" onfocusout="validaEnvio()"><label for="it4-13"
                                class="label-spinner" style="margin-top:15px">TV Tubo - 46“ a 60“</label></div>
                    </div>
                </div>
            </div>
            <div class="Grid blocos-grid" onclick="colorBlocoOrcamento(2,7)"><p style="margin: 3px 0; font-size:10pt;color:#989898;width:100%"><strong>Veículos</strong></p><div class="bloco-grid-fix coluna-itens-orcamento-1-3"><div style="margin-bottom: 6px;"><input id="it5-0" class="lista-input" value="" placeholder="0" data-pai="Veículos" name="Moto" onfocus="colorBlocoOrcamento(2,7)" onfocusout="validaEnvio()"><label for="it5-0" class="label-spinner" style="margin-top:15px">Moto</label></div><div style="margin-bottom: 6px;"><input id="it5-1" class="lista-input" value="" placeholder="0" data-pai="Veículos" name="Veíc. camionete (Ex. Hylux)" onfocus="colorBlocoOrcamento(2,7)" onfocusout="validaEnvio()"><label for="it5-1" class="label-spinner" style="margin-top:15px">Veíc. camionete (Ex. Hylux)</label></div></div><div class="bloco-grid-fix coluna-itens-orcamento-1-3"><div style="margin-bottom: 6px;"><input id="it5-2" class="lista-input" value="" placeholder="0" data-pai="Veículos" name="Veíc. grande (Ex. Vectra)" onfocus="colorBlocoOrcamento(2,7)" onfocusout="validaEnvio()"><label for="it5-2" class="label-spinner" style="margin-top:15px">Veíc. grande (Ex. Vectra)</label></div><div style="margin-bottom: 6px;"><input id="it5-3" class="lista-input" value="" placeholder="0" data-pai="Veículos" name="Veíc. médio (Ex. Gol)" onfocus="colorBlocoOrcamento(2,7)" onfocusout="validaEnvio()"><label for="it5-3" class="label-spinner" style="margin-top:15px">Veíc. médio (Ex. Gol)</label></div></div><div class="bloco-grid-fix coluna-itens-orcamento-1-3"><div style="margin-bottom: 6px;"><input id="it5-4" class="lista-input" value="" placeholder="0" data-pai="Veículos" name="Veíc. pequeno (Ex. Ka)" onfocus="colorBlocoOrcamento(2,7)" onfocusout="validaEnvio()"><label for="it5-4" class="label-spinner" style="margin-top:15px">Veíc. pequeno (Ex. Ka)</label></div></div></div>
            <div class="Grid blocos-grid" onclick="colorBlocoOrcamento(2,8)"><p style="margin: 3px 0; font-size:10pt;color:#989898;width:100%"><strong>Diversos</strong></p><div class="bloco-grid-fix coluna-itens-orcamento-1-3"><div style="margin-bottom: 6px;"><input id="it6-0" class="lista-input" value="" placeholder="0" data-pai="Diversos" name="Adega 20 garrafas" onfocus="colorBlocoOrcamento(2,8)" onfocusout="validaEnvio()"><label for="it6-0" class="label-spinner" style="margin-top:15px">Adega 20 garrafas</label></div><div style="margin-bottom: 6px;"><input id="it6-1" class="lista-input" value="" placeholder="0" data-pai="Diversos" name="Adega 40 garrafas" onfocus="colorBlocoOrcamento(2,8)" onfocusout="validaEnvio()"><label for="it6-1" class="label-spinner" style="margin-top:15px">Adega 40 garrafas</label></div></div><div class="bloco-grid-fix coluna-itens-orcamento-1-3"><div style="margin-bottom: 6px;"><input id="it6-2" class="lista-input" value="" placeholder="0" data-pai="Diversos" name="Adega 80 garrafas" onfocus="colorBlocoOrcamento(2,8)" onfocusout="validaEnvio()"><label for="it6-2" class="label-spinner" style="margin-top:15px">Adega 80 garrafas</label></div><div style="margin-bottom: 6px;"><input id="it6-3" class="lista-input" value="" placeholder="0" data-pai="Diversos" name="Adega 200 garrafas" onfocus="colorBlocoOrcamento(2,8)" onfocusout="validaEnvio()"><label for="it6-3" class="label-spinner" style="margin-top:15px">Adega 200 garrafas</label></div></div><div class="bloco-grid-fix coluna-itens-orcamento-1-3"><div style="margin-bottom: 6px;"><input id="it6-4" class="lista-input" value="" placeholder="0" data-pai="Diversos" name="Aquecedor" onfocus="colorBlocoOrcamento(2,8)" onfocusout="validaEnvio()"><label for="it6-4" class="label-spinner" style="margin-top:15px">Aquecedor</label></div><div style="margin-bottom: 6px;"><input id="it6-5" class="lista-input" value="" placeholder="0" data-pai="Diversos" name="Ar. Cond. Pequeno" onfocus="colorBlocoOrcamento(2,8)" onfocusout="validaEnvio()"><label for="it6-5" class="label-spinner" style="margin-top:15px">Ar. Cond. Pequeno</label></div></div></div>
            <div class="blocos-grid" style="margin-top:20px; margin-bottom:15px; padding-bottom: 1px;" onclick="colorBlocoOrcamento(2,9)">
                <p style="margin: 3px 0; font-size:10pt;color:#989898;width:100%"><strong>Outros</strong> - <i>Insira a quantidade, digite qual será o item e clique em + para incluir</i></p>
                <div class="Grid spinner-muitos">
                    <input id="ito-1" class="lista-input" value="" placeholder="0" data-itorc="nome do item" onfocus="colorBlocoOrcamento(2,9)">
                    <input id="campo-novo-outro-item" type="text" class="formulario-txt formulario-campos campo-justifica campo-orcamento-outros" name="txt-ito-1" data-aceito-min="2" placeholder="Digite o item" onfocus="colorBlocoOrcamento(2,9)">
                    <div class="bt-novos-itens" onmouseover="checkNovoItem(true)" onmouseout="checkNovoItem()" onclick="insereRemoveNovoItemOrc()">+</div>
                    <div class="msg-erro-item">Defina a quantide e digite o item antes de inserir na lista</div>
                </div>
                
                <div id="outros-novos-itens" style="margin-top:20px;"></div>
            </div>
            <button type="submit"> Enviar </button>
        </form>
    </main>


</body>

</html>