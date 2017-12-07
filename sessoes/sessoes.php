<?php

// Inicia a sessão
session_start();

// Armazena dados na sessão
$_SESSION["cursos"] = array("PHP", "Zend", "Symfony", "Laravel");

// Armazena o id da sessão na variável.
$oldSessionId = session_id();

// Regenera o id da sessão.
session_regenerate_id(true);

// Armazena o id da nova sessão.
$newSessionId = session_id();

printf('<p>Antigo id: %s</p>', $oldSessionId);
printf('<p>Novo id: %s</p>', $newSessionId);

// Imprime os dados da sessão
print_r($_SESSION);