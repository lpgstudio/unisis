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
                                <a href="#" title="Visualizar">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                                <a href="#" title="Whatsapp">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                                <a href="#" title="Rota">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                                <a href="editar-cliente.php?codigo=<?php echo htmlentities($cliente['id'],ENT_QUOTES);?>" title="Editar">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" title="Deletar">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</section>