<?php
function insert(string $entidade, array $dados): string
{

    $campos = implode(', ', array_keys($dados));
    $valores = implode(', ', array_map(function($valor) {
        return "'" . addslashes($valor) . "'"; 
    }, array_values($dados)));

  
    $instrucao = "INSERT INTO {$entidade} ({$campos}) VALUES ({$valores})";

    return $instrucao;
}
  
function update (string $entidade, array $dados, array $criterio, 
{
$instrucao = "UPDATE {$entidade}";

foreach ($dados as $campo => $dado) {
}
$set[] = "{$campo} = {$dado}";

$instrucao .= ' SET ' . implode(', ', $set);

if (!empty($criterio)) 
{
$instrucao .= ' WHERE';
foreach ($criterio as $expressao) {
}
$instrucao .= ' '. implode('', $expressao);
}
}

return $instrucao;

?>
