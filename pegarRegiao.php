<?php
include './RegiaoPorCep.php';
$extra = Regiao::detectaRegiao($_POST["cep"]);
echo <<<EOF
      Estado : {$extra["State"]} <br>
      UF : {$extra["StateCode"]} <br>
      Região : {$extra["Region"]} <br>
      Região Estado : {$extra["StateRegion"]} <hr>
<a href="index.html"> Voltar </a>
EOF;
