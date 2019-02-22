<footer>

    <div class="container">

        <div class="footer">

            <div class="links">

                <h1>Institucional</h1>

                <ul>
                    <li><a href="<?= $configuracoes['site_url'] ?>sobre">Sobre o SBA</a></li>
                    <li><a href="<?= $configuracoes['site_url'] ?>historia">Nossa História</a></li>
                    <li><a href="<?= $configuracoes['site_url'] ?>parceiros">Nossos Parceiros</a></li>
                    <li><a href="<?= $configuracoes['site_url'] ?>privacidade">Políticas de Privacidade</a></li>
                </ul>

            </div>

            <div class="categorias">

                <h1>Categorias</h1>

                <?= $this->cell('categorias'); ?>

            </div>

            <div class="sociais">

                <h1>Siga-nos nas redes sociais</h1>

                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCanalDoBoi.SBA1%2F&tabs&width=300&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="214" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>​

            </div>

            <div class="direitos">

                <div class="logo">
                    <img src="https://sba1.com/imgs/logo.png">
                </div>

                <div class="copyright">
                    © Copyright 1996- <?php echo date("Y"); ?> - Sistema Brasileiro do Agronegócio - Todos os Direitos Reservados
                </div>

            </div>

        </div>

    </div>

</footer>