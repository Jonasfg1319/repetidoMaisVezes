<?php

function repetidoMaisVezes(){
    
    //cria um array vazio
	$meu_array = array();
	// um contador para contar os repetidos  
	$contar_repetidos = 0;
	
	//gera o array com números aleatórios
	for($i = 0;$i < 20 ;$i++){
	    $gerar_numero = rand(1,10);
		array_push($meu_array, $gerar_numero);
	}
	
	//cria um array de valores únicos com base no array anterior 
	$array_temporario = array_unique($meu_array);
	//cria um array vazio que vai conter todos os numeros com a quantidade de suas repetições
	$array_definitivo = [];


	//passa por todos os valores do array unico verificando se ele se repete no array original, se for o caso, é acrescentado um valor a variável contar_repetidos
	foreach($array_temporario as $key => $value){
	  
		for($x = 0; $x < count($meu_array);$x++){
			if($value == $meu_array[$x]){
			  
				$contar_repetidos += 1;
			}
			
		   
		}
        // adiciona como chave o número repetido e como valor a quantidade de vezes que ele se repete
        $array_definitivo[$value] = $contar_repetidos;
        //zera o valor do contador de repetidos para iniciar novamente o laço com novos valores
		$contar_repetidos = 0;
	}
	
	
    //retorna nosso dicionário com os valores e a quantidade de vezes que eles se repetem
    //return $array_definitivo;

    $vezes_repetidos = max($array_definitivo);

    $valor_repetido = 0;

    //laço que passa por cada chave e valor do nosso array definitivo 
   foreach($array_definitivo as $key => $value){
   	 //se o valor do item do array for a maior quantidade de vezes que um número se repete, a variável valor_repetida receberá a key do item(que contém o número que é repetido)
     if($value == $vezes_repetidos){
        $valor_repetido = $key;
      }
     
   }
   
   //retorna o resultado
   echo "Valor Mais vezes repetidos $valor_repetido <br>";
   echo "Foi repetido $vezes_repetidos vezes";
   

}



//chama nossa função
repetidoMaisVezes();

?>
