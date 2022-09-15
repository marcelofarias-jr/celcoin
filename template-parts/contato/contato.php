<style>
  <?php include(dirname(__FILE__) . '/contato.css') ?>
</style>

<section class="contact__form" id="contact__form">
  <div class="form__content">
    <div class="form__head">
      <div class="close">
        <div class="steps__bar">
          <div class="bar"></div>
          <!-- <div class="bar"></div> -->
        </div>
        <svg style="cursor: pointer;" data-close-contact width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M24.8572 25.9999C24.5923 25.9999 24.2611 25.8674 24.0624 25.6687L0.348732 1.95508C-0.114942 1.4914 -0.114942 0.829008 0.348732 0.365334C0.812406 -0.0983404 1.54104 -0.0983404 1.93847 0.365334L25.6521 24.079C26.1158 24.5426 26.1158 25.205 25.6521 25.6687C25.4534 25.8674 25.1884 25.9999 24.8572 25.9999Z" fill="#9A98A4"/>
          <path d="M1.14268 26C0.877707 26 0.546497 25.8674 0.347771 25.6686C-0.115924 25.2046 -0.115924 24.5417 0.347771 24.0778L24.0624 0.347992C24.5261 -0.115997 25.2548 -0.115997 25.6522 0.347992C26.1159 0.811982 26.1159 1.47483 25.6522 1.93882L1.93758 25.6686C1.73885 25.8674 1.40764 26 1.14268 26Z" fill="#9A98A4"/>
        </svg>

      </div>

      <h1 class="form__title">Fale com nosso time</h1>
      <p class="form__text">Para conversar com um dos nossos especialistas, preencha o formulário e clique em "Enviar".</p>

      <p id="form-error" class="form__text form__error">Por favor, preencha todos os campos corretamente.</p>
    </div>
    <div class="form__body">
      <form id="form">
        <div class="step step--active" data-step="01">        
          <div class="input__group">
            <label for="name">Nome completo</label>
            <input type="text" id="name" name="name" placeholder="Ex: João da Silva">
            <div class="hr"></div>
          </div>
          <div class="input__group">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="Ex: contato@suaempresa.com.br">
            <div class="hr"></div>
          </div>
          <div class="input__group">
            <label for="phone">DDD + Celular</label>
            <input type="text" id="phone" name="phone" placeholder="Ex: (00) 00000-0000">
            <div class="hr"></div>
          </div>

          <button id="submit_btn" type="submit" data-goto-step="03" class="button button--default">
            Enviar <?php include(dirname(__FILE__, 3) . '/assets/vectors/chevron-down.svg'); ?>
          </button>
        </div>
        <!-- <div class="step" data-step="02">        
          <div class="input__group">
            <label for="name">Nome da empresa</label>
            <input type="text" placeholder="Ex: Pay Business">
            <div class="hr"></div>
          </div>
          <div class="input__group">
            <label for="name">CNPJ</label>
            <input type="text" placeholder="Ex: 00.000.000/0000-00">
            <div class="hr"></div>
          </div>
          <div class="input__group">
            <label for="name">Setor</label>
            <input type="text" placeholder="Ex: Estou contruindo uma fintech">
            <div class="hr"></div>
          </div>
          <div class="input__group">
            <p class="paragraph">Que produto você tem interesse?</p>

            <div class="checkbox">
              <label for="pagamento">Pagamento de Contas</label>
              <input type="checkbox" id="pagamento">
              <div class="check"></div>
            </div>
            <div class="checkbox">
              <label for="recargas">Recargas</label>
              <input type="checkbox" id="recargas">
              <div class="check"></div>
            </div>
            <div class="checkbox">
              <label for="openbanking">Open Banking</label>
              <input type="checkbox" id="openbanking">
              <div class="check"></div>
            </div>
            <div class="checkbox">
              <label for="transferencias">Transferências</label>
              <input type="checkbox" id="transferencias">
              <div class="check"></div>
            </div>
            <div class="checkbox">
              <label for="cobranca">Cobrança</label>
              <input type="checkbox" id="cobranca">
              <div class="check"></div>
            </div>
            <div class="checkbox">
              <label for="saques">Saques e Depósitos</label>
              <input type="checkbox" id="saques">
              <div class="check"></div>
            </div>
            <div class="checkbox">
              <label for="correspondente">Corban as a Service</label>
              <input type="checkbox" id="correspondente">
              <div class="check"></div>
            </div>
            <div class="checkbox">
              <label for="auto">Auto</label>
              <input type="checkbox" id="auto">
              <div class="check"></div>
            </div>
            <div class="checkbox">
              <label for="credito">Crédit Plataform</label>
              <input type="checkbox" id="credito">
              <div class="check"></div>
            </div>
          </div> -->
          
          <!-- <button type="button" data-goto-step="03" class="button button--default">
            Falar com o time <?php include(dirname(__FILE__, 3) . '/assets/vectors/chevron-down.svg'); ?>
          </button> -->

          <!-- <button type="button" data-goto-step="01" class="button button--outlined">
            Voltar
          </button> -->
        <!-- </div> -->
        <div class="step" data-step="03">
          <div class="round--green">
            <svg width="135" height="112" viewBox="0 0 135 112" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12.3721 59.9941L51.9094 93.9875L122.481 12.3457" stroke="#806DFB" stroke-width="24.3565" stroke-linecap="round"/>
            </svg>
          </div>

          <p class="description">Seu agendamento foi realizado com sucesso!</p>
          <p class="disclaimer">Esperamos por você.</p>

          <button type="button" class="button button--default" data-close-contact>
            Fechar
          </button>
        </div>
      </form>
    </div>
  </div>
  <div class="form__backdrop" data-close-contact></div>
</section>

<script>
  <?php include(dirname(__FILE__) . '/contato.js') ?>
</script>