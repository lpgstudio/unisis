<section id="produtos" class="main">
    <div class="container">

        <h2>Lista de Clientes</h2>

        <div class="tabela">
            <table>
                <thead>
                    <th scope="col">Código</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Opções</th>
                </thead>
                <tbody>
                    <?php 
                    foreach ($marcas as $marca):
                    ?>
                    <tr scope="row">
                        <td data-title="codigo"><?php echo $marca['id']?></td>
                        <td data-title="marca"><?php echo $marca['nome'] ; ?></td>
                        <td data-title="opcoes">Opções</td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>