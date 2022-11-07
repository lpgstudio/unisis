<section id="clientes" class="main">
    <div class="container">

        <h2>Lista de Clientes</h2>

        <div class="tabela">
            <table>
                <thead>
                    <th scope="col">Código</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Opções</th>
                </thead>
                <tbody>
                    <?php foreach ($clientes as $cliente):?>
                    <tr scope="row">
                        <td data-title="codigo"><?php echo $cliente['id']?></td>
                        <td data-title="nome"><?php echo $cliente['nome']?></td>
                        <td data-title="telefone"><?php echo $cliente['telefone']?></td>
                        <td data-title="endereco"><?php echo $cliente['endereco'].", " . $cliente['numero']?></td>
                        <td data-title="opcoes" class="tabela-menu" onclick="toggleModalProduct('client-<?= htmlentities($cliente['id'],ENT_QUOTES); ?>')">
                            <span><i class="fas fa-ellipsis-h"></i></span>
                            <div id="client-<?= htmlentities($cliente['id'],ENT_QUOTES); ?>">

                                <a href="#" title="Vender">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>

                                <a href="#" title="Historico">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>

                                <button title="Visualizar" style="background-color: var(--info);" onclick="modalInfoOpen('info-client-<?php echo htmlentities($cliente['id'],ENT_QUOTES);?>')">
                                    <i class="far fa-eye"></i>
                                </button>

                                <a href="#" title="Whatsapp">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>

                                <a href="#" title="Rota">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>

                                <a href="editar-cliente.php?codigo=<?php echo htmlentities($cliente['id'],ENT_QUOTES);?>" title="Editar" style="background-color: var(--edit);">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <a href="#" title="Deletar" style="background-color: var(--delete);">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>

                    <dialog id="info-client-<?php echo htmlentities($cliente['id'],ENT_QUOTES);?>">
                        <span onclick="modalInfoClose('info-client-<?php echo htmlentities($cliente['id'],ENT_QUOTES);?>'); "><i class="far fa-times-circle"></i></span>
                        <div class="modal-info-container">
                            <p><b>Nome:</b> <?php echo  htmlentities($cliente['nome'],ENT_QUOTES);?></p>
                            <p><b>E-amil:</b> <?php echo htmlentities($cliente['email'],ENT_QUOTES); ?></p>
                            <p><b>Telefone:</b> <?php echo  htmlentities($cliente['telefone'],ENT_QUOTES);?></p>
                            <p><b>Endereço:</b> <?php echo  htmlentities($cliente['endereco'],ENT_QUOTES). ", " .htmlentities($cliente['numero'],ENT_QUOTES);?></p>
                            <p><b>Complemento:</b> <?php echo  htmlentities($cliente['complemento'],ENT_QUOTES);?></p>
                            <p><b>Bairro:</b> <?php echo  htmlentities($cliente['bairro'],ENT_QUOTES);?></p>
                            <p><b>Cidade:</b> <?php echo  htmlentities($cliente['cidade'],ENT_QUOTES);?></p>
                            <p><b>Aniversário:</b> <?php echo htmlentities($cliente['birthday'],ENT_QUOTES);?></p>
                        </div>
                    </dialog>

                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</section>