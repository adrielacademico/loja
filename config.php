<?php

/**
* ---------------------------------------------------------------------------
* config.php
* Script para centralizar includes e facilitar a manutenção do sistema.
* ---------------------------------------------------------------------------
**/

/**
* ===========================================================================
* helpers/helpers.php
* Script com funções criadas pelo programador
* para auxiliar no tratamento dos dados do sistema (datas, moedas, etc).
* ===========================================================================
**/

require_once("helpers/helpers.php");

/**
* ===========================================================================
* conexao/conexao.php
* Script com funções que realiza a comunicação entre o PHP e o Banco de Dados,
* em nosso caso o MySQL.
* Todos os arquivos que precisam realizar alguma consulta no banco de dados,
* precisaram acessar esse recurso.
* ===========================================================================
**/

require_once("conexao/conexao.php");

?>
