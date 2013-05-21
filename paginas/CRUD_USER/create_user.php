<div>
<?php

    if(isset($_POST['btn_env_user'])){
        $NewUser = new Classes_subclasses_bdusuario();
        $NewUser->gravauser($_POST['nome'],$_POST['login'],sha1($_POST['senha']));
        
        echo "{$NewUser->getMsg()}";
    }
?>
    <form action="?menu=users&ruser=nv" method="POST">
        <div>
            <label>Nome</label><br/>
            <input type="text" name="nome">
        </div>
        <div>
            <label>Login</label><br/>
            <input type="text" name="login">
        </div>
        <div>
            <label>Senha</label><br/>
            <input type="pasword" name="senha">
        </div>
        <div>
            <input type="submit" name="btn_env_user" value="salvar">   
        </div>
    </form>
</div>