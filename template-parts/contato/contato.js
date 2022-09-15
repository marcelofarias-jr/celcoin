var App = App || {};

App.Contato = {
  init: function() {
    this.cacheSelectors();
    this.bindEvents();
  },

  cacheSelectors: function() {
    this.contact = document.getElementById('contact__form');
    this.buttonSteps = document.getElementById('submit_btn');
    this.inputs = this.contact.querySelectorAll('input');
    this.openModal = document.querySelectorAll('[data-open-contact]');
    this.closeModal = document.querySelectorAll('[data-close-contact]');
  },

  bindEvents: function() {
    const _ = App.Contato;

    this.contact.addEventListener('submit', _.Events.goToStep);

    this.openModal.forEach((open) => {
      open.addEventListener('click', _.Events.openContact);
    })

    this.closeModal.forEach((close) => {
      close.addEventListener('click', _.Events.closeContact);
    })
  },

  Events: {
    goToStep: function(e) {
      e.preventDefault();

      const _ = App.Contato;
      let obj = {};
      let elements = [...e.target.elements]
      
      for ( var i = 0; i < elements.length; i++ ) {
        if ( elements[i].type === "text" || elements[i].type === "email" ) {
          obj[elements[i].name] = elements[i].value;
        }
      }
      
      if ( !obj.name || !obj.phone || !obj.email ) {
        return document.getElementById('form-error').classList.add('active');
      }

      document.getElementById('form-error').classList.remove('active');
      _.contact.querySelector('.form__head').style.display = "none";
      document.querySelector(`[data-step="01"]`).classList.remove('step--active');
      document.querySelector(`[data-step="03"]`).classList.add('step--active');
    },

    openContact: function() {
      const _ = App.Contato;
      _.contact.classList.add('active');
    },
    
    closeContact: function() {
      const _ = App.Contato;
      _.contact.classList.remove('active');
    }
  }
}

window.addEventListener('load', function() {
  App.Contato.init();
});