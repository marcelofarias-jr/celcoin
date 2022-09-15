<?php
get_header();
$dir = get_template_directory_uri();
?>
<style>
    .relatorio{
        padding: 0 0 117px 0;
    }
    .relatorio .banner__relatorio {
        background-color: #806DFB;
        padding: 78px 73px 138px 73px;
        background-image: url('<?php echo get_template_directory_uri() . '/assets/img/back-seguranca.png'; ?>');
        background-size: cover;
        background-repeat: no-repeat;
    }

    .relatorio .banner__relatorio span {
        color: #49FADE;
        font-family: "inter";
        font-size: 24px;
        line-height: 30px;
        font-weight: 500;
    }

    .relatorio .banner__relatorio h2 {
        color: white;
        font-family: "Urbanist";
        font-size: 48px;
        line-height: 60px;
        font-weight: 600;
        margin-top: 16px
    }
    .relatorio .botao{
        display: flex;
        justify-content: center;
    }
    .relatorio .botao img{
        margin-left: 13px;
    }
    .relatorio .conteudo {
        display: flex;
        flex-direction: column;
        padding: 51px 0 121px 0;
        align-items: center;
        text-align: center;
    }

    .relatorio .conteudo h2 {
        font-family: "Urbanist";
        font-size: 48px;
        line-height: 60px;
        font-weight: 600;
        color: #1E1360;
    }

    .relatorio .conteudo p {
        max-width: 881px;
        font-size: 20px;
        line-height: 30px;
        font-weight: 400px;
        font-family: "Inter";
        color: #1E1360;
    }

    .relatorio .conteudo .embed {
        max-width: 881px;
        width: 881px;
        margin-bottom: 82px;
    }

    @media (max-width: 600px) {
        .relatorio .banner__relatorio {
            padding: 15px;
        }

        .relatorio .conteudo {
            padding-right: 15px;

        }
    }
</style>
<div class="relatorio">
    <div class="banner__relatorio">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <span>Relatório anual</span>
                    <h2>De Investidores e Impacto Social </h2>
                </div>
            </div>
        </div>

    </div>
    <div class="conteudo container">
        <h2>Relatório anual 2021</h2>
        <p>A Celcoin recebe constantes investimentos e democratiza cada vez mais o acesso a serviços e inclusão financeira. Um reflexo do impacto de nossas APIs em milhões de clientes finais e de nosso aplicativo em pequenos empreendedores espalhados por todo o Brasil.</p>
        <embed class="d-none d-xl-block" src="<?php bloginfo('template_directory'); ?>/assets/documentos/ResultadosFinanceirosImpacto-2021.pdf" type="application/pdf" width="893px" height="550px" />
        <img src="<?php bloginfo('template_directory'); ?>/assets/img/capa-relatorio.png" class='img-fluid d-lg-block d-xl-none'>
    </div>
    <div class="botao">
        <button class="button button--default">Baixe aqui o documento completo<img src="<?php echo $dir . '/assets/img/download.png' ?>"></button>
    </div>
</div>
</div>
<?php get_footer(); ?>