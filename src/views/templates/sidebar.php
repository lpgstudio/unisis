<nav class="navigation">
    <a href="#" class="home-icon">
        <i class="fas fa-bars"></i>
    </a>
    <ul class="nav-menu">
        <li>
            <a href="#" title="Registrar venda" alt="Registrar venda">Registrar venda</a>
        </li>
        <li>
            <p class="accordion" id="content-2" onclick="toggleSideMenu('content-2')">Clientes</p>
            <div class="sidebar-menu activeMenu">
                <a href="clientes.php">Listar</a>
                <a href="cadastrar-cliente.php">Cadastrar</a>
            </div>
        </li>
        <li>
            <p class="accordion" id="content-3" onclick="toggleSideMenu('content-3')">Produtos</p>
            <div class="sidebar-menu activeMenu">
                <a href="produtos.php">Listar</a>
                <a href="cadastrar-produto.php">Cadastrar</a>
            </div>
        </li>
        <li>
            <p class="accordion" id="content-4" onclick="toggleSideMenu('content-4')">Fornecedor</p>
        </li>
    </ul>
</nav>