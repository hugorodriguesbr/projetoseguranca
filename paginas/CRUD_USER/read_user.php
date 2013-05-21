<div>
<?php
    include_once 'Classes/subclasses/bdusuario.php';
    
    $usuario = new Classes_subclasses_bdusuario();
    $result = $usuario->listausuarios();
    if($result){
        $array_users = $usuario->getListausers();
    }
    else{
        echo "<div> {$usuario->getMsg()} </div>";
    }
    
    //caso for editar ou excluir
    if(isset($_GET['ruser'])){
        if($_GET['ruser'] == "nv"){
            include_once 'paginas/CRUD_USER/create_user.php';
        }elseif($_GET['ruser'] == "ed"){
            include_once 'paginas/CRUD_USER/update_user.php';
        }elseif($_GET['ruser'] == "ex"){
            include_once 'paginas/CRUD_USER/delete_user.php';
        }
    }
?> 
    <div>
        <a href="?menu=users&ruser=nv">Novo Usuario</a>
    </div>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>USUARIO</th>
            <th>SENHA</th>
            <th>EDITAR</th>
            <th>EXCLUIR</th>
        <tr>
    </thead>
    <tbody>
         <tr>
            <?php foreach ($array_users as $usr):?>
                <td><?=$usr->USER_ID?></td>
                <td><?=$usr->USER_NOME?></td>
                <td><?=$usr->USER_LOGIN?></td>
                <td><?=$usr->USER_SENHA?></td>
                <td><a href="?menu=users&ruser=ed">ED</a></td>
                <td><a href="?menu=users&ruser=ex">EX</a></td>
            <?php endforeach;?>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <tr colspan="6">Tabela de usuários</td>
        </tr>
    </tfoot>
</table>
</div>