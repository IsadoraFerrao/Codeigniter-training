<div id="sidebar">
    <h2><?= anchor('blog', 'Início') ?></h2>    
    <ul>
        <li>
            <h2>Pesquisar</h2>
            <div id="search" >
                <?= form_open('blog/pesquisarPorTitulo') ?>
                    <input type="text" name="txtValorPesquisa" />
                    <p class="links">
                        <?= form_submit('submeter', 'OK', "class='button'")?>
                    </p>                   
                <? form_close();?>
            </div>
        </li>
        <? if(!empty($menu_assuntos)): ?>        
            <li>
                <h2>Filtrar assunto</h2>
                <ul>
                    <? foreach($menu_assuntos as $assunto): ?>
                        <li><?= anchor("blog/filtrarPorAssunto/$assunto->nome", $assunto->nome) ?></li>
                    <? endforeach;?>
                </ul>
            </li>
        <? endif; ?>        
        <li>
            <h2>Área Administrativa</h2>
            <ul>
                <li><?= anchor('assuntos', 'Cadastro de Assuntos') ?></li>
                <li><?= anchor('postagens', 'Cadastro de Postagens') ?></li>
            </ul>
        </li>          
    </ul>
</div>
<!-- end #sidebar -->
<div style="clear: both;">&nbsp;</div>