<?php
/*
* Template name: Pagina - Padrão
*/
$dir = get_template_directory_uri();
get_header();
?>
<style>
    .banner__default {
        margin-top: 7rem;
        background-color: #806DFB;
        padding: 78px 73px;
        background-size: cover;
        background-image: url('<?php echo get_template_directory_uri() . '/assets/img/back-seguranca.png'; ?>');
        color: white;
    }

    .banner__default h2 {
        max-width: 864px;
    }

    .banner__default span {
        color: #49FADE;
        font-family: "inter";
        font-size: 24px;
        line-height: 30px;
        border-bottom: 16px;
    }

    .segurança .indice h3 {
        color: #806DFB;
        font-size: 36px;
        font-family: "Urbanist";
        line-height: 46.8px;
        font-weight: 600;

    }

    h3{
        color: white;
        font-family: "Urbanist";
        font-size: 48px;
        line-height: 60px;
        font-weight: 600;
        margin-top: 16px
    }
    .banner__default {
        background-color: #806DFB;
        padding: 78px 73px;
        background-size: cover;
        background-image: url('<?php echo get_template_directory_uri() . '/assets/img/back-seguranca.png'; ?>')
    }

    .banner__default span {
        color: #49FADE;
        font-family: "inter";
        font-size: 24px;
        line-height: 30px;
    }

    h2 {
        font-family: "Urbanist";
        font-size: 48px;
        line-height: 60px;
        font-weight: 600;
        color: #1E1360;
    }
    .conteudo .texto{
        padding: 51px 0;
    }
    .texto h3 {
        color: #1E1360;
        font-family: "Urbanist";
        font-size: 36px;
        line-height: 46.8px;
        font-weight: 700;
        margin: 24px 0;
    }

    .conteudo .texto p {
        color: #1E1360;
        font-family: "Inter";
        font-size: 20px;
        line-height: 30px;
        font-weight: 500;
        margin-bottom: 24px;
    }

    .conteudo .texto p span {
        color: #806DFB;
        font-family: "Inter";
        font-size: 20px;
        line-height: 30px;
        font-weight: 500;
        margin-bottom: 24px;
    }

    .conteudo li {
        color: #1E1360;
        font-family: "Inter";
        font-size: 20px;
        line-height: 30px;
        font-weight: 500;
        margin-bottom: 24px;
    }
    .botao{
        display: flex;
        margin-bottom: 97px;
    }
    .botao img{
        margin-left: 13px;
    }
    .conteudo .texto .wp-block-file{
        margin-top: 42px !important;
    }
    .conteudo .texto .wp-block-file__embed{
      padding-bottom: 80px;
    }
    .conteudo .texto .wp-block-file__button{
        background: #806DFB !important;
        color: #fff !important;
        height: 60px !important;
        padding: 12px 32px;
        font-family: "Inter";
        font-weight: 700;
        font-size: 20px;
        line-height: 20px;
    }
    .conteudo .texto .wp-block-file__button :hover{
        background: #27176C !important;
        color: #fff !important;

    }
    .conteudo .texto strong{
        color: #806DFB !important;
    }
    @media (max-width: 600px) {
        .banner__default {
            padding: 15px;
        }

        .conteudo {
            padding: 15px;
        }
    }
</style>
<div class="banner__default">
    <div class="container">
        <span><?php the_field('label'); ?></span>
        <h1><?php the_title(); ?></h1>
    </div>
</div>
<div class="conteudo">
    <div class="texto container">
        <?php echo get_the_content(); ?>
    </div>
</div>
<?php get_footer(); ?>