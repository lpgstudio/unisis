<nav class="navigation">
    <span class="home-icon" onclick="menuToggle()">
        <i class="fas fa-bars"></i>
    </span>
    <ul class="nav-menu" >
        <li>
            <a href="#" title="Registrar venda" alt="Registrar venda"> <i class="fas fa-cash-register"></i>
            Registrar venda</a>
        </li>
        <li class="accordion" id="content-2" onclick="toggleSideMenu('content-2')">
            <div class="info">
                <i class="fas fa-address-book"></i>
                <p>Clientes</p>
            </div>
            <div class="sidebar-menu">
                
                <a href="clientes.php"><i class="far fa-list-alt"></i> Listar</a>
                <a href="cadastrar-cliente.php"> <i class="fas fa-plus"></i> Cadastrar</a>
            </div>
        </li>
        <li class="accordion" id="content-3" onclick="toggleSideMenu('content-3')">
            <div class="info">
                <i class="fas fa-store"></i>
                <p>Produtos</p>
            </div>
            <div class="sidebar-menu">
                <a href="produtos.php">Listar</a>
                <a href="cadastrar-produto.php">Cadastrar</a>
            </div>
        </li>
        <li class="accordion" id="content-4" onclick="toggleSideMenu('content-4')"> 
            <div class="info">
                <i class="fas fa-dolly"></i>
                <p>Fornecedor</p>
            </div>
            <div class="sidebar-menu">
                <a href="marcas.php">Listar</a>
                <a href="cadastrar-marca.php">Cadastrar</a>
            </div>
        </li>
    </ul>
</nav>