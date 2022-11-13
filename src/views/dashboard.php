<?php echo @$_SESSION['error'] ;?>

<section id="dashboard" class="main">
    <?php include(TEMPLATE_PATH . '/messages.php') ?>
    <h2>Olá <?php print_r($nome); ?>,</h2>
    <p>Esse é o seu dashboard.</p>
    <hr>
    
    <div class="dash-cards-produtos">
        <div class="card">
            <h3>Produtos</h3>
            <p> Cadastrados: <?php if(isset($produtos)){echo count($produtos);}else{echo "0";} ?></p>
            <hr>
            <p> Total de itens: <?php if(isset($qntEstoque)){echo $qntEstoque;}else{echo "0";} ?></p>
            <hr>
            <p> 
                Valor em custo: R$ <?php if(isset($custo)){
                    echo number_format(htmlentities($custo,ENT_QUOTES), 2, ',', '.');
                    }else{echo "0,00";} ?>
            </p>
            <hr>
            <p> 
                Valor em venda: R$ <?php if(isset($venda)){
                    echo number_format(htmlentities($venda,ENT_QUOTES), 2, ',', '.');
                    }else{echo "0,00";} ?>
            </p>
            <hr>
            <p> 
                Lucro estimado: R$ <?php if(isset($lucro)){
                    echo number_format(htmlentities($lucro,ENT_QUOTES), 2, ',', '.');
                    }else{echo "0,00";} ?>
            </p>
        </div>
        <div class="card">
            <h3>Produtos Top 5</h3>
        </div>
        <div class="card">
            <h3>Produtos baixo estoque</h3>
            <p><?php if(isset($estoque)){echo count($estoque);}else{echo "0";} ?></p>
        </div>
        <div class="card">
            <h3>Produtos Vencendo</h3>
        </div>
    </div>

    <div class="dash-cards-clientes">
        <div class="card">
            <h3>Clientes cadastrados</h3>
            <p><?php if(isset($clientes)){echo count($clientes);}else{echo "0";} ?></p>
        </div>
        <div class="card">
            <h3>Top 5</h3>
        </div>
        <div class="card">
            <h3>Aniversários proximo</h3>
        </div>
    </div>
</section>