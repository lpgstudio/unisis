<section id="produtos" class="main">
    <div class="container">

        <h2>Lista de Clientes</h2>

        <div class="tabela">
            <table>
                <thead>
                    <th scope="col">Código</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Opções</th>
                </thead>
                <tbody>
                    <?php 
                    foreach ($marcas as $marca):
                    ?>
                    <tr scope="row">
                        <td data-title="codigo"><?php echo $marca['id']?></td>

                        <td data-title="marca"><?php echo $marca['nome'] ; ?></td>

                        <td data-title="opcoes" class="tabela-menu" onclick="toggleModalProduct('modal-marca-<?= htmlentities($marca['id'],ENT_QUOTES); ?>')">
                            <span><i class="fas fa-ellipsis-h"></i></span>
                            <div id="modal-marca-<?= htmlentities($marca['id'],ENT_QUOTES); ?>">
                                <a href="#" title="Vender" style="background-color: var(--seller);">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                                <button title="Visualizar" style="background-color: var(--info);" onclick="modalInfoOpen('info-modal-<?php echo htmlentities($marca['id'],ENT_QUOTES);?>')">
                                    <i class="far fa-eye"></i>
                                </button>
                                <a href="editar-marca.php?codigo=<?php echo htmlentities($marca['id'],ENT_QUOTES);?>" title="Editar" style="background-color: var(--edit);">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="marca/deletar-marca.php?codigo=<?php echo htmlentities($marca['id'],ENT_QUOTES);?>" title="Deletar" style="background-color: var(--delete);">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>

                    <dialog id="info-modal-<?php echo htmlentities($marca['id'],ENT_QUOTES);?>">
                        <span onclick="modalInfoClose('info-modal-<?php echo htmlentities($marca['id'],ENT_QUOTES);?>'); "><i class="far fa-times-circle"></i></span>
                        <div class="modal-info-container">
                            <p><b>Marca:</b> <?php echo htmlentities($marca['nome'],ENT_QUOTES); ?></p>
                        </div>
                    </dialog>


                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>