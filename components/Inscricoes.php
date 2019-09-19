<div class="bkgd1">
    <section id="inscricoes" class="container">
        <img src="img/ifmaker_logo.svg" id="ifmaker_logo">

        <div class="inscricoes">
            <h3 style="font-size: 32px">Encontre a gente</h3>

            <div class="bordinha" style="background-color: var(--cinza)">&nbsp;</div>

            <div class="colunas">
                <div role="info-contato">
                    <span>
                        <a href="https://www.google.com/maps/place/Instituto+Federal+de+Mato+Grosso+do+Sul+(IFMS)/@-20.481332,-55.775004,17z/data=!3m1!4b1!4m5!3m4!1s0x947de6133756d62b:0xca6dd532c488ca4a!8m2!3d-20.481337!4d-55.77281" target="_blank">
                            Rua José Tadao Arima, 222
                            Vila Ycaraí, Aquidauana MS
                            CEP 79200-000</a>
                    </span>

                    <span>Sala 107 - Hotel Tecnológico</span>

                    <address>
                        <a href="mailto:fablab.aq@ifms.edu.br">fablab.aq@ifms.edu.br</a>
                    </address>

                    <span>Tel: (0 xx 67) 3240-1600</span>

                    <span class="caixa-alta">Horário de funcionamento:</span>
                    <span>Seg - Sex: 8:00 - 20:00</span>
                </div>

                <form action="./pages/_Inscricoes.php" method="POST">
                    <label for="nome">Digite o nome completo: </label>
                    <input type="text" name="nome" placeholder="Nome completo">

                    <label for="email">Endereço de e-mail: </label>
                    <input type="email" name="email" placeholder="Endereço de e-mail">

                    <label for="evento_id">Evento:</label>
                    <select name="evento_id">
                        <option value="null">Selecione um evento</option>

                        <?php
                        require_once './src/connection/ConnectionFactory.php';
                        
                        require_once './src/dao/EventoDao.php';
                        require_once './src/dao/PalestranteDao.php';

                        require_once './src/model/Evento.php';
                        require_once './src/model/Palestrante.php';
                        
                        $eventoDao = new EventoDao;
                        $palestranteDao = new PalestranteDao;

                        $eventos = $eventoDao->readEventos();
                        
                        foreach($eventos as $evento) {
                            $palestrante_id = $evento->getPalestrante_id();
                            $palestrante = $palestranteDao->getPalestranteById($palestrante_id);
                        ?>
                        
                        <option value="<?= $evento->getId() ?>">
                            <?= $evento->getTitulo()?> &#x2015; <?= $palestrante->getNome() ?>
                        </option>

                        <?php } ?>
                    </select>

                    <label for="cpf">Digite o n.º de CPF:</label>
                    <input type="text" name="cpf" placeholder="n.º de CPF">

                    <label for="rg">Digite o n.º de RG:</label>
                    <input type="text" name="rg" placeholder="n.º de RG">

                    <label for="oe">Órgão Emissor do RG:</label>
                    <input type="text" name="oe" placeholder="Órgão emissor do RG">

                    <label for="naturalidade">Naturalidade:</label>
                    <input type="text" name="naturalidade" placeholder="Naturalidade">

                    <label for="data_nascimento">Digite o dia, mês e ano da data em que nasceu:</label>
                    <input type="date" name="data_nascimento">

                    <a href="./pages/Palestrante.php">Sou um palestrante e quero me inscrever!</a>

                    <input type="submit" value="Enviar">
                </form>
            </div>
        </div>
    </section>
</div>