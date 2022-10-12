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
                        <td data-title="opcoes">Opções</td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</section>