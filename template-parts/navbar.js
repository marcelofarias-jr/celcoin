var App = App || {};
App.Navbar = {
  init: function() {
    this.cacheSelectors();
    this.bindEvents();
  },

  cacheSelectors: function() {
    this.navbar = document.getElementById('navbar');
    this.dropdownHandlers = this.navbar.querySelectorAll('[data-dropdown-handler]');
    this.dropdowns = document.querySelectorAll('[data-dropdown]');
    this.backdrop = document.getElementById('nav-backdrop');
    this.burger = this.navbar.querySelector('.nav__burger');
  },

  bindEvents: function() {
    for ( let i = 0; i < this.dropdownHandlers.length; ++i ) {
      if ( window.innerWidth > 991 ) {
        this.dropdownHandlers[i].addEventListener('mouseover', this.Events.showDropdown);
      } else {
        this.dropdownHandlers[i].addEventListener('click', this.Events.showDropdown);
      }
    }

    if ( window.innerWidth > 991 ) {
      this.backdrop.addEventListener('mouseover', this.Events.closeDropdowns);
    } else {
      this.backdrop.addEventListener('click', this.Events.closeDropdowns);
    }

    this.burger.addEventListener('click', this.Events.showMobileMenu);
  },

  Events: {
    showDropdown: function() {
      const _ = App.Navbar;

      this.classList.toggle('active');
      const dropdown = this.getAttribute('data-dropdown-handler');
      _.backdrop.classList.add('active');
      document.querySelector(`[data-dropdown="${dropdown}"]`).classList.toggle('active');
    },

    closeDropdowns: function() {
      const _ = App.Navbar;

      _.backdrop.classList.remove('active');
      _.dropdowns.forEach((dropdown) => dropdown.classList.remove('active'));
      document.querySelector(`#setinhadois`).firstElementChild.classList.remove("active-arrow");
      document.querySelector(`#setinhaum`).firstElementChild.classList.remove("active-arrow");
    },

    showMobileMenu: function() {
      const _ = App.Navbar;
      var firstTime = false;

      if ( !_.navbar.classList.contains('active') ) {
        _.navbar.classList.add('active');
        _.backdrop.classList.add('active');
        document.querySelector(`[data-dropdown="solucoes"]`).classList.add('active');
      } else {
        _.navbar.classList.remove('active');
      }
    }
  }
}

window.addEventListener('load', function() {
  App.Navbar.init();
})

document.querySelector(`#setinhaum`).addEventListener("click", function() {
  this.firstElementChild.classList.toggle("active-arrow");
});

document.querySelector(`#setinhadois`).addEventListener("click", function() {
  this.firstElementChild.classList.toggle("active-arrow");
});