<?php
require_once '../model/dto/usuariodto.php';
require_once '../model/dao/usuariodao.php';
    
# recebe os valores enviados do formulário via método post e evita sql injecton e validar o tipo de dados.
$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

$dao = new UsuarioDAO();            
$idUsu = $dao->getById($id);

//     echo '<pre>';
//     var_dump($idUsu);
?>
<main>
<section>
<table>

    <tbody>
                <?php if (!$idUsu) : ?>
                    <tr>
                        <td colspan="4">Não existem usuários cadastrados  com id = <?php echo $id; ?></td>

                    </tr>
                <?php else : ?>
                  <thead>
                        <tr>
                              <th>Id</th>
                              <th>Nome</th>
                              <th>E-mail</th>
                              <th>Status</th>
                              <th>Perfil</th>
                        </tr>
                  </thead>
                        <tr>
                            <td><?php echo $idUsu['id']; ?></td>
                            <td><?= htmlspecialchars($idUsu['nome']); ?></td>
                            <td><?= htmlspecialchars($idUsu['email']); ?></td>
                            <td><?= htmlspecialchars($idUsu['status']); ?></td>
                            <td><?= htmlspecialchars($idUsu['perfil_id']); ?></td>
                        </tr>
                <?php endif; ?>
      </tbody>
</table>
</section>
</main>
<br>

<a class="btn btn-voltar" href="../view/usuarios/index.php">Voltar</a>