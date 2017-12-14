<?php

ob_start();

# Parte 1
echo "TreinaWeb";
printf('<br><b>Parte 1: conteúdo atual do buffer:</b> %s<br><br>', ob_get_contents());

ob_flush(); // Pega o conteúdo atual do buffer e envia para a saída.

# Parte 2
echo "Cursos";
printf('<br><b>Parte 2: conteúdo atual do buffer:</b> %s<br>', ob_get_contents());