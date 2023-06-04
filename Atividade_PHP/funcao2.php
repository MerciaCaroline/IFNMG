<?php
$cpf= $_POST["cpf"];
$nome = $_POST["nome"];
$senha = $_POST["senha"];
$senha2= $_POST["senha2"];
$endereco = $_POST["end"];
$mensagem = $_POST["mensagem"];
$inicio= 0;
$len= strlen($endereco);
$soma=0;

function validaCPF($cpf = null) {
 
    // Verifica se um número foi informado
    if(empty($cpf)) {
        return false;
    }
 
    // Elimina possivel mascara
    $cpf = ereg_replace('[^0-9]', '', $cpf);
    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
     
    // Verifica se o numero de digitos informados é igual a 11 
    if (strlen($cpf) != 11) {
        return false;
    }
    // Verifica se nenhuma das sequências invalidas abaixo 
    // foi digitada. Caso afirmativo, retorna falso
    else if ($cpf == '00000000000' || 
        $cpf == '11111111111' || 
        $cpf == '22222222222' || 
        $cpf == '33333333333' || 
        $cpf == '44444444444' || 
        $cpf == '55555555555' || 
        $cpf == '66666666666' || 
        $cpf == '77777777777' || 
        $cpf == '88888888888' || 
        $cpf == '99999999999') {
        return false;
     // Calcula os digitos verificadores para verificar se o
     // CPF é válido
     } else {   
         
        for ($t = 9; $t < 11; $t++) {
             
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                return false;
            }
        }
 
        return true;
    }
}

$resultado = validaCPF($cpf);

if(!isset($nome[5])){
     print"O nome deve possuir no mínimo 6 caracteres";}
	 
elseif($senha!=$senha2){
     print"Senha incorreta";}
elseif($resultado!=true){
     print"CPF inválido";}
else{	
$maiusculo = strtoupper($nome);
print $maiusculo."<br>";
while($inicio<$len){
	$verificar= substr($endereco,$inicio,1);
	if($verificar=="a"){
	$soma++;}
$inicio++;}
print"O endereço tem $len caracteres e a letra a aparece $soma vezes<br>" ;
$array = explode(' ',$mensagem);
$data = date("d/M/Y");
print $data."<br>";
}
?>