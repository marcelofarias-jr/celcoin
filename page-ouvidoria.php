<?php
get_header();
$dir = get_template_directory_uri();
?>
<style>
    .ouvidoria .banner__ouvidoria {
        margin-top: 7rem;
        background-color: #806DFB;
        padding: 78px 73px;
        background-image: url('<?php echo get_template_directory_uri() . '/assets/img/back-seguranca.png'; ?>');
        background-size: cover;
        background-repeat: no-repeat;
    }

    .ouvidoria .banner__ouvidoria .col {
        max-width: 864px;
    }

    .ouvidoria .banner__ouvidoria h2 {
        color: white;
    }

    .ouvidoria h2 {
        font-family: "Urbanist";
        font-size: 48px;
        line-height: 60px;
        font-weight: 600;
    }

    .ouvidoria .banner__ouvidoria span {
        color: #49FADE;
        font-family: "inter";
        font-size: 24px;
        line-height: 30px;
        font-weight: 500;
    }

    .ouvidoria .demandas {
        padding: 80px 0
    }

    .ouvidoria .demandas h2 {
        color: #1E1360;
    }
    .ouvidoria .demandas h3  {
        color: #1E1360;
        font-family: "Urbanist";
        font-size: 36px;
        line-height: 46.8px;
        font-weight: 700;
    }
    .ouvidoria .demandas h3 span{
        color: #806DFB;
    }
    .ouvidoria .demandas ul {
        font-size: 20px;
        line-height: 30px;
        font-weight: 400px;
        font-family: "Inter";
        color: #1E1360;
        max-width: 837px;
        margin-bottom: 32px;
        margin-top: 24px;
    }

    .ouvidoria .cartao__ouvidoria {
        padding: 80px 0 120px 0;
    }

    .ouvidoria .cartao__ouvidoria .cartao {
        flex-direction: column;
        max-width: 1196px;
        padding: 66px 101px 86px 93px;

    }
    .ouvidoria .cartao__ouvidoria .cartao .formulario{
        margin-top: 64px;
    }
    .ouvidoria .cartao__ouvidoria .cartao .telefone{
        background-color: #F7F5FF ;
        padding: 22px 32px 0 32px;
    }
    .ouvidoria .cartao__ouvidoria .cartao h2 {
        color: #1E1360;
    }

    .ouvidoria .cartao__ouvidoria .cartao p {
        font-size: 20px;
        line-height: 30px;
        font-weight: 400px;
        font-family: "Inter";
        color: #1E1360;
        max-width: 837px;
        margin-top: 24px;
    }
    .ouvidoria .cartao__ouvidoria .cartao .input__group{
        flex-direction: column;
        display: flex;
        position: relative;
    }
    .ouvidoria .cartao__ouvidoria .cartao .input__group label{
        font-size: 18px;
        line-height: 27px;
        font-weight: 500px;
        font-family: "Inter";
        color: #1E1360;
        margin-bottom: 12px;
    }
    .ouvidoria .cartao__ouvidoria .cartao .input__group input{
        margin-bottom: 23px;
        width: 100%;
        font-family: "Inter";
        font-style: normal;
        font-weight: 500;
        font-size: 18px;
        line-height: 22px;
        display: flex;
        align-items: center;
        color: #27176C;
        padding: 16px;
        border: 1px solid #CEDDE6;
        border-radius: 10px;
        outline: none !important;
    }
    .ouvidoria .cartao__ouvidoria .cartao .input__group .hr{
        content: "";
        position: absolute;
        left: 0;
        top: calc(50% + 9.5px);
        transform: translateY(-50%);
        width: 3px;
        height: 32px;
        background: #806DFB;
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
        transition: height 150ms ease-in-out;
    }
    .ouvidoria .cartao__ouvidoria .cartao .input__group input:focus ~ .hr {
        height: 40px;
    }
    .ouvidoria .cartao__ouvidoria .cartao .botao{
        display: flex;
        justify-content: flex-end
    }
    .ouvidoria .cartao__ouvidoria .cartao .botao button{
        max-width: 271px;
    }
     .ouvidoria .relatorios {
        background-color: #806DFB;
        color: white;
        padding: 100px;
    }
    .ouvidoria .relatorios h3 {
        max-width: 298px;
    }

    .ouvidoria .relatorios p {
        max-width: 692px;
        margin-bottom: 66px;
        font-family: "Inter";
        font-weight: 400;
        font-size: 20px;
        line-height: 30px;
    }
    .ouvidoria .relatorios .botao{
        display: flex;
        flex-direction: column;
    }
    .ouvidoria .relatorios .botoes button{
        background-color: rgba(39, 23, 108, 0.25);
        margin-bottom: 16px;
    }
    .ouvidoria .relatorios .botoes button :hover {
        background-color: white;
    }
    .ouvidoria .relatorios .botoes img{
        margin-left: 13px;
    }
    @media (max-width: 600px) {
        .ouvidoria .banner__ouvidoria{
            padding: 12px;
        }

        .ouvidoria .relatorios {
            padding: 12px;

        }
        .ouvidoria .cartao__ouvidoria .cartao{
            padding: 12px;
        }
    }
</style>
<div class="ouvidoria">
    <div class="banner__ouvidoria">
        <div class="container">
            <div class="row">
                <div class="col">
                    <span>Ouvidoria Celcoin</span>
                    <h2>Somos um canal secund??rio para receber solicita????es, reclama????es e at?? mesmo elogios ?? atua????o da Celcoin, em todas as suas frentes. </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="demandas">
        <div class="container">
            <h2>
                Vale apenas ressaltar que existem demandas que n??o estamos aptos a resolver:
            </h2>
            <ul>
                <li>Atender solicita????es e reclama????es que n??o passaram pelos nossos canais de atendimento prim??rio: e-mail, telefone, WhatsApp, site ou redes sociais; </li>
                <li>Demandas que ainda estejam sendo tratadas nos canais prim??rios;</li>
                <li>Demandas que est??o em discuss??o judicial;</li>
                <li>Reclama????es relacionadas ?? n??o ader??ncia ao c??digo de ??tica.</li>
            </ul>
            <h3>
                O nosso prazo de resposta ?? de at?? <span>5 dias ??teis.</span>
            </h3>
        </div>

    </div>
    <div class="cartao__ouvidoria">
        <div class="container cartao">
            <h2>Como podemos ajudar?</h2>
            <p>
                Se voc?? j?? tem um protocolo registrado, fale com a gente ou informe os seus dados para entrarmos em contato.
            </p>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p>Caso ainda n??o tenha passado por nossos canais de atendimento prim??rio, confira nossas op????es de contato.</p>
                </div>
                <div class="col-lg-6 col-md-12 telefone">
                    <h3><img src="<?php echo $dir . '/assets/img/call.png' ?>"> 0800 591 1852</h3>
                    <p>
                        Segunda a sexta-feira das 09h00 ??s 17h00
                    </p>
                </div>
            </div>
            <div class="row formulario">
                <div class="col-lg-6 col-md-12">
                    <div class="input__group">
                        <label for="name">Nome completo</label>
                        <input type="text" placeholder="Ex: Jo??o da Silva">
                        <div class="hr"></div>
                    </div>
                    <div class="input__group">
                        <label for="email">E-mail</label>
                        <input type="email" placeholder="Ex: contato@suaempresa.com.br ">
                        <div class="hr"></div>
                    </div>
                    <div class="input__group">
                        <label for="protocol">N?? do protocolo de atendimento</label>
                        <input type="number " placeholder="Ex: 00000 ">
                        <div class="hr"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="input__group">
                        <label for="cpf/cnpj">CPF ou CNPJ</label>
                        <input type="text" placeholder="Ex: 00000">
                        <div class="hr"></div>
                    </div>
                    <div class="input__group">
                        <label for="phone">DDD + Celular</label>
                        <input type="text" placeholder="Ex: (00) 00000-0000">
                        <div class="hr"></div>
                    </div>
                    <div class="input__group">
                        <label for="name">Como podemos te ajudar?</label>
                        <input type="text" placeholder="Ex: Estou com problemas em...">
                        <div class="hr"></div>
                    </div>
                </div>
            </div>
            <div class="row botao">
                <button class="button button--default" type="submit">Enviar mensagem <?php include(dirname(__FILE__) . '/assets/vectors/chevron-down.svg'); ?></button>
            </div>
        </div>
    </div>
    <div class="relatorios">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <h3>Relat??rios da Ouvidoria Celcoin</h3>
                </div>
                <div class="col-lg-8 col-md-12">
                    <p>Atendendo ?? Resolu????o do Banco Central e prezando sempre pela transpar??ncia, disponibilizamos relat??rios semestrais sobre os casos j?? protocolados em nossa Ouvidoria.</p>
                    <div class="botoes">
                        <button class="button button--default">Relat??rio ouvidoria Celcoin - 2?? Semetre 2021<img src="<?php echo $dir . '/assets/img/download.png' ?>"></button>
                        <button class="button button--default">Relat??rio ouvidoria Celcoin - 1?? Semetre 2021<img src="<?php echo $dir . '/assets/img/download.png' ?>"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>