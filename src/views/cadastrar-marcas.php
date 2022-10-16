<section id="criar-marca" class="main">
    <div class="container">
        <?php print_r(@$teste);?>
        <h2>Cadastrar Marcas</h2>
        <form action="marca/criar-marca.php" class="formBx" method="post">
            
            <div class="input">
                <label for="nome">Nome da Marca:</label>
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome do Produto." value="<?= @$_POST['nome'] ?>" title="Nome do Produto" autofocus required >
            </div>

            <button type="submit">Cadastrar</button>
        </form>
    </div>
</section>