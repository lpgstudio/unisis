<section id="criar-marca" class="main">
    <div class="container">
        <?php print_r(@$teste);?>
        <h2>Cadastrar Marcas</h2>
        <form action="marca/editar-marca.php" class="formBx" method="post">
            <?php foreach($editMarcaList as $marca) : ?>
            <input type="number" name="marca_id" value="<?php echo $marca['id'];?>" hidden >
            <div class="input">
                <label for="nome">Nome da Marca:</label>
                <input type="text" name="nome" id="nome" class="form-control" value="<?= $marca['nome'];?>" title="Nome do Produto" autofocus required >
            </div>
            <?php endforeach; ?>
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</section>