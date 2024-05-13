<?php
//Criação de arrays e utilização
$cidade =       array('Santos' => array('fundacao' => 1546,
                                        'populacao' => '433,656 mil',
                                        'estado' => 'SP'),
                'Rio de Janeiro' => array('fundacao' => 1565,
                                        'populacao' => '6,748 milhões',
                                        'estado' => 'RJ'),
                'Belo Horizonte' => array('fundacao' => 1897,
                                        'populacao' => '2,722 milhões',
                                        'estado' => 'MG')
);

echo nl2br ($cidade['Belo Horizonte']['populacao']."\n");
echo nl2br ($cidade['Santos']['estado']."\n");
echo nl2br ($cidade['Rio de Janeiro']['fundacao']."\n");
?>