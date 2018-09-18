<?php require_once(__DIR__ . "/../classes/modelo/Chat.class.php"); ?>
<?php require_once(__DIR__ . "/../classes/dao/ChatDAO.class.php"); ?>
<?php require_once(__DIR__ . "/../classes/modelo/Rtema.class.php"); ?>
<?php require_once(__DIR__ . "/../classes/dao/RtemaDAO.class.php"); ?>
<?php require_once(__DIR__ . "/../classes/modelo/Usuario.class.php"); ?>
<?php require_once(__DIR__ . "/../classes/dao/UsuarioDAO.class.php"); ?>


<?php

$dao = new RtemaDAO;

$dao->limparchat(18);

