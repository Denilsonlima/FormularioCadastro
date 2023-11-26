<?php 


  
            if (isset($_POST['login'])) {

              $nome =$_POST['login'];
              $loginv2 ="";
            
            if ($nome =='Denilson')
                {
                  header("Location: Menu.php");
                   $loginv2 = login($nomev2,$nome);
                }
              
            else {
                $teste ="Usuário Não localizado";
                $loginv2 = login($teste);
                
            }
            echo $loginv2;
          }
         
        else
        {
            unset($mensagem);
        }
          
            function login($teste){

              $mensagem = "Usuário não localizado\n :(";
              return $mensagem;
            }
  
    ?>
