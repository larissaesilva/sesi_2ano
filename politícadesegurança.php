<?php 

$opcao="";
while($opcao!=5){
echo"//MENU: 
1. Objetivos da PSI
2. Escopo da política
2. Responsabilidades
3. Boas práticas de segurança
4. Consequências do descumprimento
//8.sair"."\n";
$opcao= readline ("escolha uma opção: ")."\n";
   $opcao1= readline("Quando você cria e realiza uma política de segurança, você deve ter objetivos claros. 
   Os objetivos de segurança se enquadram em uma ou mais das seguintes categorias:
 5-Proteção de recurso 
 6-Autenticação
 7-Autorização
 8-sair ")."\n";

$opcao= readline ("escolha uma opção: ")."\n";

switch($opcao) {
    case 1:
        $opcao1= readline("Quando você cria e realiza uma política de segurança, você deve ter objetivos claros. Os objetivos de segurança se enquadram em uma ou mais das seguintes categorias:

5-Proteção de recurso 
6-Autenticação
7-Autorização
8-sair ")."\n";
                         
        $opcao2= readline ("ESCOLHA UM DOS TÓPICOS ")."\n";
        echo($opcao).("1-Proteção de recurso:

O seu esquema de proteção de recursos garante que apenas usuários autorizados 
possam acessar objetos no sistema. A capacidade de proteger todos os tipos de recursos do sistema é um IBM i.
 Você deve definir cuidadosamente as diferentes categorias de usuários que podem acessar o seu sistema. 
 Além disso, você deve definir qual a autorização de acesso que deseja dar a esses grupos de usuários como parte da criação de sua política de segurança.
"). "\n";
$opcao3=readline ("Quando você cria e realiza uma política de segurança, você deve ter objetivos claros. Os objetivos de               
                          segurança se enquadram em uma ou mais das seguintes categorias:

                         1-Proteção de recurso

                         2-Autenticação

                         3-Autorização

                         8-sair ")."\n".("ESCOLHA UM DOS TÓPICOS")."\n";

                         $opcao4=readline ("2-Autenticação:

                         A garantia ou a verificação de que o recurso (humano ou máquina) no outro extremo da sessão realmente é o que ele afirma ser. 
                         A autenticação sólida defende um sistema contra o risco de segurança da personalização, no qual um remetente ou receptor usa uma 
                         identidade falsa para acessar um sistema. Tradicionalmente, os sistemas utilizaram senhas e nomes de usuários para autenticação; os 
                         certificados digitais podem fornecer um método de autenticação mais seguro enquanto oferecem outros benefícios de segurança também. 
                         Quando você liga seu sistema a uma rede pública como a Internet, a autenticação do usuário assume novas dimensões. Uma diferença importante 
                         entre a Internet e a sua intranet é a sua capacidade de confiar na identidade de um usuário que assina. Consequentemente, você deve considerar 
                         seriamente a ideia de usar métodos de autenticação mais fortes do que os tradicionais procedimentos de logon de nome de usuário e senha. 
                         Os usuários autenticados podem ter diferentes tipos de permissões com base em seus níveis de autorização")."\n";
                         $opcao5=readline ("3-Autorização:

                         A garantia de que a pessoa ou o computador na outra extremidade da sessão tem permissão para realizar o pedido.
                          A autorização é o processo de determinar quem pode ou o que pode acessar recursos do sistema ou executar determinadas 
                          atividades em um sistema. Geralmente, a autorização é realizada em contexto de autenticação.

")."\n";


        break;
    case 2:
        $opcao1= readline("digite um número: ")."\n";
        $opcao2= readline ("digite outro número: ")."\n";
        echo "subtração: " .( $opcao1-$opcao2). "\n";
        break;
    case 3:
        $opcao1= readline("digite um número: ")."\n";
        $opcao2= readline ("digite outro número: ")."\n";
        echo"divisão: " . ( $opcao1/$opcao2). "\n";
        break;
    case 4:
        $opcao1= readline("digite um número: "). "\n";
        $opcao2= readline ("digite outro número: ")."\n";
        echo"multiplicação: " . ( $opcao1*$opcao2). "\n";
        break;
        case 5:
            $opcao1= readline("digite um número: "). "\n";
                    echo"Área-QUADRADO: ". ( $opcao1*$opcao1) . "\n";
        
        case 6:
        $opcao1= readline("digite um número: "). "\n";
        $opcao2= readline ("digite outro número: ")."\n";
        echo"Área-RETÂNGULO: " . ( $opcao1*$opcao2). "\n";
        break;
        case 7:
        $opcao1= readline("digite um número: "). "\n";
        $opcao2= readline ("digite outro número: ")."\n";
        echo"Área- TRIÂNGULO: " . ( $opcao1*$opcao2/2). "\n";
        break;
        case 8:
        $opcao1= readline("digite o raio do circulo: "). "\n";
        echo" Área- CIRCULO: " . ( 3.14 * ($opcao1*$opcao1) ). "\n";
        break;
    case 9:
        echo"sair" ."\n";
        break;
}
}