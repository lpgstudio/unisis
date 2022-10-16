<?php echo $_SESSION['error'] ;?>

<section id="dashboard" class="main">
    <h2>Olá <?php print_r($nome); ?>,</h2>
    <p>Esse é o seu dashboard.</p>
    <hr>
    
    <div class="dash-cards-produtos">
        <div class="card">
            <h3>Produtos Cadastrados</h3>
            <p><?php echo count($produtos); ?></p>
        </div>
        <div class="card">
            Produtos Top 5
        </div>
        <div class="card">
            <h3>Produtos baixo estoque</h3>
            <p><?php echo count($estoque); ?></p>
        </div>
        <div class="card">
            Produtos Vencendo
        </div>
    </div>

    <div class="dash-cards-clientes">
        <div class="card">
            <h3>Clientes cadastrados</h3>
            <p><?php echo count($clientes); ?></p>
        </div>
        <div class="card">
            Top 5
        </div>
        <div class="card">
            Aniversários proximo
        </div>
    </div>
</section>