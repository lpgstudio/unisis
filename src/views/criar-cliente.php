<section id="criar-cliente" class="main">
    <div class="container">
        <h2>Cadastrar Cliente</h2>
        <form action="criar-cliente.php" class="formBx">
            <div class="input">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome do cliente." value="<?= @$nome ?>" title="Nome do cliente" autofocus required >
            </div>

            <div class="input">
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="E-mail do cliente." value="<?= @$email ?>" title="E-mail do cliente" autofocus >
            </div>

            <div class="input">
                <label for="telefone">Telefone:</label>
                <input type="text" name="telefone" id="telefone" class="form-control" placeholder="19 9999-9999" value="<?= @$telefone ?>" title="Telefone do cliente" autofocus required >
            </div>

            <div class="input">
                <label for="endereco">Endereço:</label>
                <input type="text" name="endereco" id="endereco" class="form-control" placeholder="Alameda dos Anjos" value="<?= @$endereco ?>" title="Endereço do cliente" autofocus >
            </div>
            
            <div class="input">
                <label for="numero">Numero:</label>
                <input type="text" name="numero" id="numero" class="form-control" placeholder="50" value="<?= @$numero ?>" title="numero da casa" autofocus >
            </div>

            <div class="input">
                <label for="complemento">Complemento:</label>
                <input type="text" name="complemento" id="complemento" class="form-control" placeholder="Bloco 2 Ap 10" value="<?= @$complemento ?>" title="complemento" autofocus >
            </div>

            <div class="input">
                <label for="bairro">Bairro:</label>
                <input type="text" name="bairro" id="bairro" class="form-control" placeholder="Centro" value="<?= @$bairro ?>" title="bairro" autofocus >
            </div>

            <div class="input">
                <label for="cidade">Cidade:</label>
                <input type="text" name="cidade" id="cidade" class="form-control" placeholder="Piracicaba" value="<?= @$cidade ?>" title="cidade" autofocus >
            </div>

            <div class="input">
                <label for="aniversario">Aniversário:</label>
                <input type="text" name="aniversario" id="aniversario" class="form-control" placeholder="10/02" value="<?= @$aniversario ?>" title="aniversario" autofocus >
            </div>

            <button type="submit">Cadastrar</button>
        </form>
    </div>
</section>