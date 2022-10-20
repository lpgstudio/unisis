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
                    <th scope="col">Opções</th>
                </thead>
                <tbody>
                    <?php 
                    foreach ($produtos as $produto):
                        $marca = Marca::oneMarca($user->id, $produto['marca_id']);
                        foreach ($marca as $mrk):
                    ?>
                    <tr scope="row">
                        <td data-title="codigo"><?php echo $produto['id']?></td>
                        <td data-title="marca"><?php echo $mrk['nome'] ; ?></td>
                        <td data-title="nome do produto"><?php echo $produto['nome']?></td>
                        <td data-title="Quantidade em estoque"><?php echo $produto['estoque']?></td>
                        <td data-title="Valor de venda"><?php echo $produto['valor_venda']?></td>
                        <td data-title="opcoes">
                            <a href="#" title="Vender"><i class="fas fa-shopping-cart"></i></a>
                            <a href="#" title="Editar"><i class="fas fa-edit"></i></a>
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