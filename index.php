<?php
    session_start("LOGIN");
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>SiteSegurança</title>
    </head>
    <body>
        <div>
           <?php if(isset($_SESSION['id_user'])):?>
               Olá <?=$_SESSION['nome']?>.
           <?php endif;?>
        </div>
        <?php
            if(isset($_SESSION['id_user']) && $_SESSION['id_user'] != ""){?>
                
                <p>Menu</p>
                <ul>
                    <li><a href="?menu=info">Senhas Gravadas</a></li>
                    <li><a href="?menu=users">Usuarios registrados</a></li>
                </ul>
                <div id="content">
                <?php
                  if(isset($_GET['menu'])){
                      if($_GET['menu'] == "info")
                          include_once 'paginas/CRUD_INFO/read_info.php';
                      elseif($_GET['menu'] == "users")
                          include_once 'paginas/CRUD_USER/read_user.php';
                      else
                          echo "<div> Menu não existe.</div>";
                  }
                ?>
                </div>
     <?php  }
            else{
                include_once 'paginas/form_login.php';
            }
        ?>
    </body>
</html>
