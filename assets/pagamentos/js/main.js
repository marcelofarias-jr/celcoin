var App = App || {};

App.Products = {
  // Initialize all primary functions
  init: function() {
    this.cacheSelectors();
    this.bindEvents();
  },

  // Cache all necessary elements/selectors into their own variables
  cacheSelectors: function() {
    this.accordeonsParent = document.getElementById('accordeon');
    this.accordeons = this.accordeonsParent.querySelectorAll('.accordion');
    this.productsCarousel = $('.carrosel-produtos');
  },
  
  // Bind/attach events to the cached elements/selectors
  bindEvents: function() {
    this.accordeons.forEach((accordeon) => {
      accordeon.addEventListener('click', App.Products.Events.handleAccordeon);
    })

    this.Events.initVendorsConfig();
  },

  // Handle events/methods that should be attached to the DOM or Elements/Selectors
  Events: {
    handleAccordeon: function() {
      // Getting global "this" prop
      let self = App.Products;
      
      // Storing necessary values into variables
      let textHeight = this.parentNode.querySelector('.panel div').offsetHeight;
      let panel = this.parentNode.querySelector('.panel');

      // Toggle accordeon visibility (if clicked twice) and prevents "else" statement
      if ( this.classList.contains('active') ) {
        this.classList.remove('active');
        return panel.style.height = 0;
      }

      // Disable all accordeons with active class
      let activeAccordeons = self.accordeonsParent.querySelectorAll('.accordion.active');
      activeAccordeons.forEach((accordeon) => {
        accordeon.classList.remove('active');
        accordeon.parentNode.querySelector('.panel').style.height = 0;
      })

      // Change the clicked carousel to active state
      this.classList.add('active');
      panel.style.height = `${textHeight}px`;
    },
    
    // Method to initialize vendors (external libraries) configuration
    initVendorsConfig: function() {
      let self = App.Products;

      self.productsCarousel.slick({
        dots: true,
        arrows: true,
        infinite: false,
        speed: 600,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow:"<button type='button' class='slick-prev pull-left'><div><svg width='11' height='6' viewBox='0 0 11 6' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M5.7437 3.87852L9.4562 0.166016L10.5167 1.22652L5.7437 5.99952L0.970703 1.22652L2.0312 0.166016L5.7437 3.87852Z' fill='#27176C'/></svg></div></button>",
        nextArrow:"<button type='button' class='slick-next pull-right'><div><svg width='11' height='6' viewBox='0 0 11 6' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M5.7437 3.87852L9.4562 0.166016L10.5167 1.22652L5.7437 5.99952L0.970703 1.22652L2.0312 0.166016L5.7437 3.87852Z' fill='#27176C'/></svg></div></button>",    
        adaptiveHeight: true,
        responsive: [
          {
            breakpoint: 767,
            settings: {
              dots: true,
              arrows: true,
              infinite: false,
              speed: 600,
              slidesToShow: 1,
              slidesToScroll: 1,
              prevArrow:"<button type='button' class='slick-prev pull-left'><div><svg width='11' height='6' viewBox='0 0 11 6' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M5.7437 3.87852L9.4562 0.166016L10.5167 1.22652L5.7437 5.99952L0.970703 1.22652L2.0312 0.166016L5.7437 3.87852Z' fill='#27176C'/></svg></div></button>",
              nextArrow:"<button type='button' class='slick-next pull-right'><div><svg width='11' height='6' viewBox='0 0 11 6' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M5.7437 3.87852L9.4562 0.166016L10.5167 1.22652L5.7437 5.99952L0.970703 1.22652L2.0312 0.166016L5.7437 3.87852Z' fill='#27176C'/></svg></div></button>",    
              adaptiveHeight: true,
            }
          }
        ]
      });
    }
  }
}

// Start the script on DOM load
document.addEventListener('DOMContentLoaded', function() {
  App.Products.init();
})