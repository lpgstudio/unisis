<section id="produtos" class="main">
    <div class="container">

        <h2>Lista de Clientes</h2>

        <div class="tabela">
            <table>
                <thead>
                    <th scope="col">Código</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Qnt</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Validade</th>
                    <th scope="col">Opções</th>
                </thead>
                <tbody>
                    <?php 
                    foreach ($produtos as $produto):
                        // em produção é $user só
                        $marca = Marca::oneMarca($user->id, $produto['marca_id']);
                        foreach ($marca as $mrk):
                    ?>
                    <tr scope="row">
                        <td data-title="codigo"><?php echo  htmlentities($produto['id'],ENT_QUOTES);?></td>
                        <td data-title="marca"><?php echo htmlentities($mrk['nome'],ENT_QUOTES); ?></td>
                        <td data-title="nome do produto"><?php echo htmlentities($produto['nome'],ENT_QUOTES);?></td>
                        <td data-title="Quantidade em estoque"><?php echo htmlentities($produto['estoque'],ENT_QUOTES);?></td>
                        <td data-title="Valor de venda"><?php echo "R$ ". htmlentities($produto['valor_venda'],ENT_QUOTES);?></td>
                        <td data-title="Validade"><?php
                            $dateValidade = date_create($produto['validade']) ; 
                         echo htmlentities(date_format($dateValidade,'d/m/Y'),ENT_QUOTES);?></td>
                        <td data-title="opcoes">
                            <a href="#" title="Vender"><i class="fas fa-shopping-cart"></i></a>
                            <a href="editar-produto.php?codigo=<?php echo htmlentities($produto['id'],ENT_QUOTES);?>" title="Editar"><i class="fas fa-edit"></i></a>
                            <a href="#" title="Deletar"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php endforeach;
                    endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</section>