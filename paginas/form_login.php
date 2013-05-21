<? 
    if(isset($_POST['btn_enviar'])){
        include_once 'Classes/subclasses/bdusuario.php';
        
        $usuario = new Classes_subclasses_bdusuario();
        $result = $usuario->login($_POST['user'],  sha1($_POST['pswd']));
        
        if($result){
            
            //se login aceito resgatar o registro do usuario logado
            $dados = $usuario->getLogin();
            $r_log = mysql_fetch_object($dados);
            
            //registrar a sessao
	    $_SESSION['id_user'] = $r_log->USER_ID; //id do isiario na tabela
	    $_SESSION['nome']    = $r_log->USER_NOME; //id do isiario na tabela
	    
            //redireciona direciona para index 
            header("LOCATE: index.php");
        }  else {
           echo "<div class='msg'> Mensagen:{$usuario->getMsg()} </div>";    
        }
    }
?>
<div id="formlogin">
    <form action="" method="post">
        <div>
            <label>Usuário:</label><br/>
            <input type="text" name="user" >  
        </div>
        <div>
            <label>Senha:</label><br/>
            <input type="password" name="pswd" >  
        </div>
        <div>
            <input type="submit" name="btn_enviar" value="Entrar" >  
        </div>
    </form>
</div>