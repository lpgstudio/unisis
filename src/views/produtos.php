<section id="produtos" class="main">
    <div class="container">

        <h2>Lista de Produtos</h2>

        <div class="tabela">
            <table>
                <thead>
                    <th scope="col">Código</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Qnt</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Validade</th>
                    <th scope="col">Opções</th>
                </thead>
                <tbody>
                    <?php 
                    foreach ($produtos as $produto):
                        // em produção é $user só
                        $marca = Marca::oneMarca($user->id, $produto['marca_id']);
                        foreach ($marca as $mrk):
                    ?>
                    <tr scope="row">

                        <td data-title="codigo">
                            <?php echo  htmlentities($produto['id'],ENT_QUOTES);?>
                        </td>

                        <td data-title="marca">
                            <?php echo htmlentities($mrk['nome'],ENT_QUOTES); ?>
                        </td>

                        <td data-title="nome do produto">
                            <?php echo htmlentities($produto['nome'],ENT_QUOTES);?>
                        </td>

                        <td data-title="Quantidade em estoque">
                            <?php echo htmlentities($produto['estoque'],ENT_QUOTES);?>
                        </td>

                        <td data-title="Valor de venda">
                            <?php echo "R$ ". htmlentities($produto['valor_venda'],ENT_QUOTES);?>
                        </td>

                        <td data-title="Validade">
                            <?php
                            $dateValidade = date_create($produto['validade']) ; 
                            echo htmlentities(date_format($dateValidade,'d/m/Y'),ENT_QUOTES);?>
                        </td>

                        <td data-title="opcoes" class="tabela-menu" onclick="toggleModalProduct('modal-<?= htmlentities($produto['id'],ENT_QUOTES); ?>')">
                            <span><i class="fas fa-ellipsis-h"></i></span>
                            <div id="modal-<?= htmlentities($produto['id'],ENT_QUOTES); ?>">
                                <a href="#" title="Vender" style="background-color: var(--seller);">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                                <button title="Visualizar" style="background-color: var(--info);" onclick="modalInfoOpen('info-modal-<?php echo htmlentities($produto['id'],ENT_QUOTES);?>')">
                                    <i class="far fa-eye"></i>
                                </button>
                                <a href="editar-produto.php?codigo=<?php echo htmlentities($produto['id'],ENT_QUOTES);?>" title="Editar" style="background-color: var(--edit);">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="produto/deletar-produto.php?codigo=<?php echo htmlentities($produto['id'],ENT_QUOTES);?>" title="Deletar" style="background-color: var(--delete);">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>

                    <dialog id="info-modal-<?php echo htmlentities($produto['id'],ENT_QUOTES);?>">
                        <span onclick="modalInfoClose('info-modal-<?php echo htmlentities($produto['id'],ENT_QUOTES);?>'); "><i class="far fa-times-circle"></i></span>
                        <div class="modal-info-container">
                            <p><b>Nome:</b> <?php echo  htmlentities($produto['nome'],ENT_QUOTES);?></p>
                            <p><b>Marca:</b> <?php echo htmlentities($mrk['nome'],ENT_QUOTES); ?></p>
                            <p><b>Código de barras:</b> <?php echo  htmlentities($produto['ean'],ENT_QUOTES);?></p>
                            <p><b>Quantidade em estoque:</b> <?php echo  htmlentities($produto['estoque'],ENT_QUOTES);?></p>
                            <p><b>Aleta de estoque baixo:</b> <?php echo  htmlentities($produto['estoque_min'],ENT_QUOTES);?></p>
                            <p><b>Valor de custo:</b> R$ <?php echo  htmlentities($produto['valor_custo'],ENT_QUOTES);?></p>
                            <p><b>Valor de venda:</b> R$ <?php echo  htmlentities($produto['valor_venda'],ENT_QUOTES);?></p>
                            <p><b>Lucro estimado:</b> R$ <?php
                                 $lucro = floatval($produto['valor_venda']) - floatval($produto['valor_custo']); 
                                 $porcento = ($lucro /floatval($produto['valor_venda']))*100 ; 
                                 echo number_format(htmlentities($lucro,ENT_QUOTES), 2, ',', '.') 
                                    . " (" .number_format($porcento , 2, ',', '.')."%)"; ?>
                            </p>
                            <p><b>Data da compra:</b> <?php
                            $dateCompra = date_create($produto['data_compra']) ; 
                            echo htmlentities(date_format($dateCompra,'d/m/Y'),ENT_QUOTES) ;?>
                            </p>
                            <p><b>Validade:</b> <?php
                            echo htmlentities(date_format($dateValidade,'d/m/Y'),ENT_QUOTES);?>
                            </p>
                            <p><b>Tempo estimado de uso:</b> <?php echo  htmlentities($produto['estimativa'],ENT_QUOTES);?> Meses</p>
                        </div>
                    </dialog>
                    <?php endforeach;
                    endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</section>