<section id="criar-cliente" class="main">
    <div class="container">
        <?php print_r($editClientList);?>

        <h2>Cadastrar Cliente</h2>

        <form action="cliente/editar-cliente.php" class="formBx" method="post">
            <?php foreach($editClientList as $cliente): ?>
            <input type="number" name="cliente_id" value="<?php echo htmlentities($cliente['id'], ENT_QUOTES); ?>" hidden> 
            <div class="input">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control" value="<?php echo htmlentities($cliente['nome'], ENT_QUOTES); ?>" title="Nome do cliente" autofocus required >
            </div>
                <?= htmlentities($cliente['id'], ENT_QUOTES);?>
            <div class="input">
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" class="form-control" value="<?php echo htmlentities($cliente['email'], ENT_QUOTES); ?>" title="E-mail do cliente" autofocus >
            </div>

            <div class="input">
                <label for="telefone">Telefone:</label>
                <input type="text" name="telefone" id="telefone" class="form-control" value="<?php echo htmlentities($cliente['telefone'], ENT_QUOTES); ?>" title="Telefone do cliente" autofocus required >
            </div>

            <div class="input">
                <label for="endereco">Endereço:</label>
                <input type="text" name="endereco" id="endereco" class="form-control" value="<?php echo htmlentities($cliente['endereco'], ENT_QUOTES); ?>" title="Endereço do cliente" autofocus >
            </div>
            
            <div class="input">
                <label for="numero">Numero:</label>
                <input type="text" name="numero" id="numero" class="form-control" value="<?php echo htmlentities($cliente['numero'], ENT_QUOTES); ?>" title="numero da casa" autofocus >
            </div>

            <div class="input">
                <label for="complemento">Complemento:</label>
                <input type="text" name="complemento" id="complemento" class="form-control" value="<?php echo htmlentities($cliente['complemento'], ENT_QUOTES); ?>" title="complemento" autofocus >
            </div>

            <div class="input">
                <label for="bairro">Bairro:</label>
                <input type="text" name="bairro" id="bairro" class="form-control" value="<?php echo htmlentities($cliente['bairro'], ENT_QUOTES); ?>" title="bairro" autofocus >
            </div>

            <div class="input">
                <label for="cidade">Cidade:</label>
                <input type="text" name="cidade" id="cidade" class="form-control" value="<?php echo htmlentities($cliente['cidade'], ENT_QUOTES); ?>" title="cidade" autofocus >
            </div>

            <div class="input">
                <label for="aniversario">Aniversário:</label>
                <input type="text" name="aniversario" id="aniversario" class="form-control" value="<?php echo htmlentities($cliente['birthday'], ENT_QUOTES); ?>" title="aniversario" autofocus >
            </div>

            <?php endforeach; ?>
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</section>