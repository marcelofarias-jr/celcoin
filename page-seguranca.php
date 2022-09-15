<?php
get_header();
$dir = get_template_directory_uri();
?>
<style>
    .segurança .indice h3 {
        color: #806DFB;
        font-size: 36px;
        font-family: "Urbanist";
        line-height: 46.8px;
        font-weight: 600;

    }

    .segurança .indice ul {
        list-style: none;
        padding: 0;
        border: 1px solid red;
        padding: 22px 0 
    }

    .segurança .indice ul li {
        border: 1px solid blue;
        width: 100%;
        padding: 8px 12px;
        color: #1E1360;
        font-family: "Inter";
        font-size: 20px;
        line-height: 30px;
        font-weight: 500;

    }

    .segurança .indice ul li :hover {
        background-color: #E6E5EA;
        color: #806DFB;
        width: 100%;

    }

    .segurança .indice ul li a {
        text-decoration: none;
        font-family: "Inter";
        color: #1E1360;
        font-size: 20px;
        line-height: 30px;
        font-weight: 500;

    }

    .segurança .conteudo .banner__segurança {
        background-color: #806DFB;
        padding: 78px 73px;
        background-size: cover;
        background-image: url('<?php echo get_template_directory_uri() . '/assets/img/back-seguranca.png'; ?>')
    }

    .segurança .conteudo .banner__segurança span {
        color: #49FADE;
        font-family: "inter";
        font-size: 24px;
        line-height: 30px;
    }

    .segurança .conteudo .banner__segurança h2 {
        color: white;
        font-family: "Urbanist";
        font-size: 48px;
        line-height: 60px;
        font-weight: 600;
    }

    .segurança .conteudo .texto h3 {
        color: #1E1360;
        font-family: "Urbanist";
        font-size: 36px;
        line-height: 46.8px;
        font-weight: 700;
        margin: 24px 0;
    }
    .segurança .conteudo .texto button{
        margin-top: 138px;
        margin-bottom: 255px;
    }
    .segurança .conteudo .texto button img{
        margin-left: 13px;
    }
    .segurança .conteudo .texto p {
        color: #1E1360;
        font-family: "Inter";
        font-size: 20px;
        line-height: 30px;
        font-weight: 500;
        margin-bottom: 24px;
    }
    .segurança .conteudo .texto p span{
        color: #806DFB;
        font-family: "Inter";
        font-size: 20px;
        line-height: 30px;
        font-weight: 500;
        margin-bottom: 24px;
    }

    .segurança .conteudo li {
        color: #1E1360;
        font-family: "Inter";
        font-size: 20px;
        line-height: 30px;
        font-weight: 500;
        margin-bottom: 24px;
    }
    @media (max-width: 600px) {
        .segurança .conteudo .banner__segurança {
            padding: 12px;
        }

        .relatorio .conteudo .texto {
            padding-right: 12px;

        }
    }
</style>
<div class="segurança">
    <div class="row">
        <!-- <div class="indice col-3">
            <h3>Indice</h3>
            <div class="indice__menu">
                <ul>
                    <li class="active"><a href="<?php echo $dir; ?>">1. Objetivo</a></li>
                    <li class="active"><a href="<?php echo $dir; ?>">2. Abrangência</a></li>
                    <li class="active"><a href="<?php echo $dir; ?>">3. Normas aplicáveis</a></li>
                    <li class="active"><a href="<?php echo $dir; ?>">4. Aprovação e revisão</a></li>
                    <li class="active"><a href="<?php echo $dir; ?>">5. Definições</a></li>
                    <li class="active"><a href="<?php echo $dir; ?>">6. Principíos</a></li>
                    <li class="active"><a href="<?php echo $dir; ?>">7. Diretrizes Gerais</a></li>
                    <li class="active"><a href="<?php echo $dir; ?>">8. Processo de segurança da informação e cibernética</a></li>
                    <li class="active"><a href="<?php echo $dir; ?>">8.1 Gestão de ativos</a></li>
                    <li class="active"><a href="<?php echo $dir; ?>">8.2 Autenticação</a></li>
                </ul>
            </div>
        </div> -->
        <div class="conteudo col-12">
            <div class="banner__segurança">
                <div class="container">
                    <span>Conheça nossa</span>
                    <h2>Política de Segurança da Informação e Segurança Cibernética</h2>
                </div>
            </div>
            <div class="texto">
                <div class="container">
                    <div class="objetivo">
                        <h3>1. Objetivo</h3>
                        <p>
                            Esta Política de Segurança da Informação e Segurança Cibernética (“Política”) tem o objetivo de estabelecer diretrizes que permitem à <span>CELCOIN INSTITUIÇÃO DE PAGAMENTO S.A. “CELCOIN”</span> 
                            preservar e proteger as informações de seus clientes, funcionários, prestadores de serviços, partes interessadas e da própria <span>CELCOIN</span> contra ameaças e riscos relacionados à segurança da informação e cibernética, bem como implementar controles e procedimentos que visam a reduzir a 
                            vulnerabilidade da <span>CELCOIN</span> a incidentes, e também dispõe sobre os requisitos para a contratação de serviços de processamento e armazenamento de dados e de computação em nuvem.
                        </p>
                        <p>
                            <span>A CELCOIN</span> deve implementar e manter esta Política formulada com base em princípios e diretrizes que busquem assegurar a confidencialidade, a integridade e a disponibilidade dos dados e dos sistemas de informação utilizados. Esta Política será compatível com:
                        </p>
                        <ul>
                            <li>O porte, o perfil de risco e o modelo de negócio da <span>CELCOIN</span>;</li>
                            <li>A natureza das atividades da <span>CELCOINZZZ</span> e a complexidade dos produtos e serviços oferecidos;</li>
                            <li>A sensibilidade dos dados e das informações sob responsabilidade da CELCOIN. A CELCOIN designará diretor responsável por esta Política e pela execução do plano de ação e de resposta a incidentes.</li>
                        </ul>
                    </div>
                    <div class="abrangencia">
                        <h3>2. Abrangência</h3>
                        <p>A Política se aplica a todos os administradores, diretores e conselheiros (coletivamente “Alta Administração”), funcionários e prestadores de serviço da <span>CELCOIN </span> (coletivamente, inclusive a Alta Administração, denominados simplesmente por “Colaboradores”).</p>
                    </div>
                    <div class="normas">
                        <h3>3. Normas aplicáveis</h3>
                        <p>Circular nº 3.909, de 16 de agosto de 2018, do Banco Central do Brasil.</p>
                    </div>
                    <div class="aprovacao">
                        <h3>4. Aprovação e revisão</h3>
                        <p>Esta Política foi aprovada e revisada pela Alta Administração e será revisada periodicamente. A Política também será alterada para contemplar quaisquer alterações regulatórias e outras obrigações legais.</p>
                    </div>
                    <div class="definicoes">
                        <h3>5. Definições</h3>
                        <p>
                            <span>Ativos:</span> todas as formas de criação, processamento, armazenamento, transmissão e exclusão de informações. Os Ativos podem ser documentos impressos, sistemas, softwares, banco de dados, arquivos digitais, dispositivos móveis etc.
                            Bacen: Banco Central do Brasil.
                        </p>
                        <p>
                            <span>Instituição de Pagamento:</span> para fins desta Política, é o emissor de moeda eletrônica, cuja atividade consiste em gerenciar a conta de pagamento de usuários, utilizada para o pagamento de transações pré-pagas e pós-paga.
                        </p>
                        <p>
                            Log: registro de eventos de um sistema.
                        </p>
                        <p>
                            <span>Segurança da Informação: </span> conjunto de conceitos, mecanismos e estratégias que visam a proteger os Ativos da CELCOIN.
                        </p>
                        <p>
                            <span>Segurança Cibernética:</span> conjunto de tecnologias e processos desenvolvidos para proteger os sistemas internos, computadores, redes e dados da CELCOIN contra ataques, danos, ameaças ou acesso não autorizado.
                        </p>
                    </div>
                    <div class="principios">
                        <h3>6. Principios</h3>
                        <p>
                            A CELCOIN tem o compromisso garantir a segurança e tratamento adequado das informações. Para tanto, nossas atividades se baseiam nos seguintes princípios:
                        </p>
                        <p>
                            <span>Confidencialidade:</span> garantia de que somente pessoas autorizadas terão acessos às informações e apenas quando houver necessidade;
                        </p>
                        <p>
                            <span>Integridade:</span> garantia de que as informações permanecerão exatas e completas e não serão modificadas indevidamente;
                        </p>
                        <p>
                            <span>Disponibilidade: </span> garantia de que a informação estará disponível às pessoas autorizadas sempre que for necessário.
                        </p>
                    </div>
                    <div class="diretrizes">
                        <h3>7. Diretrizes Gerais</h3>
                        <p>
                            Com o objetivo de garantir os objetivos desta Política, os procedimentos de Segurança da Informação e Segurança Cibernética seguirão as seguintes diretrizes:
                        </p>
                    </div>
                    <button class="button button--default">Baixe aqui o documento completo<img src="<?php echo $dir . '/assets/img/download.png' ?>"></button>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<?php get_footer(); ?>
<p></p>