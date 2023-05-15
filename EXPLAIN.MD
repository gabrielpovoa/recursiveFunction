FUNÇÕES RECURSIVAS
- POUCO USADAS
- EXECUTA ELA MESMA INTERNAMENTE;

**********EXEMPLO**********
````
<?php

function dividir($number) {
    $metade = $number / 2;
    echo $metade . "<br>";
    if(round($metade) > 0) {
        dividir($metade);
    }
}

dividir(520);
````
***************************
ONDE PODE SER USADO?
    - Por exemplo, em sistemas de navegação em pastas
***************************
<hr/>
<br/>
**********MATH-FUNCTION**********
1. Pegar valor absoluto de um número:

````
<?php
$number = -8.4;
echo abs($number);

````

2. Pegar o PI

````
<?php
echo pi();

````

3. Arredondar o Número sempre para baixo
````
<?php

$number = 2.7;
echo floor($number);

````

4. Arredondar o Número para cima
````

<?php

$number = 2.7;
echo ceil($number);

````

5. Arredondar para o que depende do próprio número, se for possivel aumenta ou diminui mas o mantém inteiro. Nesta função, podemos passar o número de casas decimais que queremos que seja mantida

````

<?php
$number = 2.7;
echo round($number);

````

6. Função que mostra número aleatório, nela, podemos passar um número mínimo ou máximo

````
<?php

$randon = rand(3,9);
echo $randon;

````

7. Função para mostrar o maior e menor número;

````
<?php

$list = [1,4,9,52]

$max = max($list);
echo $max;
 
$min = min($list);
echo $min;

````

*********************************
