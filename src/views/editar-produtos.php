<section id="criar-produto" class="main">
    <div class="container">
        <?php print_r(@$teste);?>
        
        <h2>Editar Produto</h2>
        
        <form action="produto/editar-produto.php" class="formBx" method="post">
            
            <?php foreach($editProductList as $product): ?>
            <input type="text" hidden name="produto_id" value="<?php echo htmlentities($produto, ENT_QUOTES); ?>">
            <div class="input">
                <label for="marca">Selecione a marca:</label>
                <select name="marca" id="marca" value="<?php echo htmlentities($product['marca_id'], ENT_QUOTES); ?>"required>
                    <option disabled >Selecionar</option>
                    <option value="<?php echo htmlentities($product['marca_id'], ENT_QUOTES); ?>" disabled selected><?php echo htmlentities($marcas[0]['nome'], ENT_QUOTES); ?></option>
                    <?php foreach($marcas as $marca) :?>
                    <option value="<?php echo htmlentities($marca['id'], ENT_QUOTES);?>" ><?php echo htmlentities($marca['nome'], ENT_QUOTES);?></option>
                    <?php endforeach;?>
                    <!-- loop da marca -->
                </select>
                <a href="cadastrar-marca.php">Cadastrar Marca</a>
            </div>
            <div class="input">
                <label for="categoria">Selecione a Categoria:</label>
                <select name="categoria" id="categoria">
                    <option value="Selecionar" disabled selected>Selecionar</option>
                    <!-- loop da marca -->
                </select>
                <a href="#">Cadastrar Categoria</a>
            </div>
            
            <div class="input">
                <label for="nome">Nome do Produto:</label>
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome do Produto." value="<?= htmlentities(@$product['nome'], ENT_QUOTES) ?>" title="Nome do Produto" autofocus required >
            </div>

            <div class="input">
                <label for="EAR">Código de Barras:</label>
                <input type="text" name="codigo-de-barras" id="EAR" class="form-control" placeholder="codigo-de-barras do Produto." value="<?= htmlentities(@$product['ean'], ENT_QUOTES) ?>" title="codigo-de-barras do Produto" autofocus >
            </div>
            
            <div class="input">
                <label for="estoque">Qnt em Estoque:</label>
                <input type="number" name="estoque" id="estoque" class="form-control" placeholder="0" value="<?= htmlentities(@$product['estoque'], ENT_QUOTES) ?>" title="Quantidade em estoque" min="0" autofocus >
            </div>

            <div class="input">
                <label for="estoque_min">Qnt mínima em Estoque:</label>
                <input type="number" name="estoque_min" id="estoque_min" class="form-control" placeholder="0" value="<?= htmlentities(@$product['estoque_min'], ENT_QUOTES) ?>" title="Quantidade mínima em estoque" min="0" autofocus >
            </div>

            <div class="input">
                <label for="valor-custo">Valor de Custo:</label>
                <input type="text" name="valor-custo" id="valor-custo" class="form-control" placeholder="10,00" value="<?= htmlentities(@$product['valor_custo'], ENT_QUOTES) ?>" title="Valor de custo do produto" autofocus >
            </div>
            
            <div class="input">
                <label for="valor-venda">Valor de venda:</label>
                <input type="text" name="valor-venda" id="valor-venda" class="form-control" placeholder="20,00" value="<?= htmlentities(@$product['valor_venda'], ENT_QUOTES) ?>" title="Valor de venda do produto" autofocus >
            </div>

            <div class="input">
                <label for="data-compra">Data da compra:</label>
                <input type="date" name="data-compra" id="data-compra" class="form-control" placeholder="31/12" value="<?= htmlentities(@$product['data_compra'], ENT_QUOTES) ?>" title="Data da compra do produto." autofocus >
            </div>

            <div class="input">
                <label for="data-validade">Data de Validade:</label>
                <input type="date" name="data-validade" id="data-validade" class="form-control" placeholder="31/12" value="<?= htmlentities(@$product['validade'], ENT_QUOTES) ?>" title="Data da validade do produto." autofocus >
            </div>
            
            <div class="input">
                <label for="estimativa">Meses para Revenda:</label>
                <input type="number" name="estimativa" id="estimativa" class="form-control" placeholder="3" value="<?= htmlentities(@$product['estimativa'], ENT_QUOTES) ?>" title="Estimativa de duração do produto para oferecer novamente ao cliente." min="0" autofocus >
            </div>
            <?php endforeach; ?>
            <button type="submit">Salvar</button>
        </form>
    </div>
</section>