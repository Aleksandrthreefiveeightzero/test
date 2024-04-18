$(document).ready(function(){

  //////////
  // Global variables
  //////////

  var _window = $(window);
  var _document = $(document);

  if ($('body').hasClass('page-id-19')) {
    $('body').addClass('ventilation-page');
  }

  if ($('body').hasClass('page-id-21')) {
    $('body').addClass('conditioners-page');
  }

  if ($('body').hasClass('page-id-23')) {
    $('body').addClass('ceilings-page');
  }



  ////////////
  // READY - triggered when PJAX DONE
  ////////////
  function pageReady(){
    legacySupport();
    updateHeaderActiveClass();
    initHeaderScroll();

    initPopups();
    initSliders();
    initScrollMonitor();
    initMasks();
    initSelectric();
    // custom
    jsAccordion();
    imgToSvg();
    inputFile();
    // videoEvents(); 
    customTabs(); 
    scrollTop();
    checkBox();
    formSend();
    // development helper
    _window.on('resize', debounce(setBreakpoint, 200))
    // AVAILABLE in _components folder
    // copy paste in main.js and initialize here
    // initPerfectScrollbar();
    // initLazyLoad();
    // initTeleport();
    // parseSvg();
    // revealFooter();
    // _window.on('resize', throttle(revealFooter, 100));
  }

  // this is a master function which should have all functionality
  pageReady();


  // some plugins work best with onload triggers
  _window.on('load', function(){
    // your functions
  })


  //////////
  // COMMON
  //////////

  function dropDownMenu() {
    $('.burger').click(function(){
      var thisMenu = $(this).closest('nav.nav-header').find('ul');
      thisMenu.slideToggle();
      // console.log(thisMenu)
    });
  }

  dropDownMenu();

  function legacySupport(){
    // svg support for laggy browsers
    svg4everybody();

    // Viewport units buggyfill
    window.viewportUnitsBuggyfill.init({
      force: false,
      refreshDebounceWait: 150,
      appendToBody: true
    });
  }


  // Prevent # behavior
	_document
    .on('click', '[href="#"]', function(e) {
  		e.preventDefault();
  	})
    .on('click', 'a[href^="#section"]', function() { // section scroll
      var el = $(this).attr('href');
      $('body, html').animate({
          scrollTop: $(el).offset().top}, 1000);
      return false;
    })


  // HEADER SCROLL
  // add .header-static for .page or body
  // to disable sticky header
  function initHeaderScroll(){
    _window.on('scroll', throttle(function(e) {
      var vScroll = _window.scrollTop();
      var header = $('.header').not('.header--static');
      var headerHeight = header.height();
      var firstSection = _document.find('.page__content div:first-child()').height() - headerHeight;
      var visibleWhen = Math.round(_document.height() / _window.height()) >  2.5

      if (visibleWhen){
        if ( vScroll > headerHeight ){
          header.addClass('is-fixed');
        } else {
          header.removeClass('is-fixed');
        }
        if ( vScroll > firstSection ){
          header.addClass('is-fixed-visible');
        } else {
          header.removeClass('is-fixed-visible');
        }
      }
    }, 10));
  }


  // HAMBURGER TOGGLER
  _document.on('click', '.js-hamburger', function(){
    $(this).toggleClass('is-active');
    $('.mobile-navi').toggleClass('is-active');
  });

  function closeMobileMenu(){
    $('.js-hamburger').removeClass('is-active');
    $('.mobile-navi').removeClass('is-active');
  }

  // SET ACTIVE CLASS IN HEADER
  // * could be removed in production and server side rendering when header is inside barba-container
  function updateHeaderActiveClass(){
    $('.header__menu li').each(function(i,val){
      if ( $(val).find('a').attr('href') == window.location.pathname.split('/').pop() ){
        $(val).addClass('is-active');
      } else {
        $(val).removeClass('is-active')
      }
    });
  }

  //////////
  // SLIDERS
  //////////

  function initSliders(){

    new Swiper('.main-slider-swiper', {
      navigation: {
        nextEl: '.main-slider-button-next',
        prevEl: '.main-slider-button-prev',
      },
      pagination: {
        el: '.main-slider-swiper-pagination'
      },
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      loop: true,
    });

    new Swiper('.our-clients-slider', {
      navigation: {
        nextEl: '.our-clients-button-next',
        prevEl: '.our-clients-button-prev',
      },
      slidesPerView: 4,
      autoplay: {
        delay: 1500,
        disableOnInteraction: false,
      },
      breakpoints: {
        1500: {
          slidesPerView: 3
        },
        1200: {
          slidesPerView: 2
        },
        550: {
          slidesPerView: 1
        }
      },
      loop: true,
    });

  }

  //////////
  // MODALS
  //////////

  function initPopups(){
    // Magnific Popup
    var startWindowScroll = 0;
    $('.js-popup').magnificPopup({
      type: 'inline',
      fixedContentPos: true,
      fixedBgPos: true,
      overflowY: 'auto',
      closeBtnInside: true,
      preloader: false,
      midClick: true,
      removalDelay: 300,
      mainClass: 'popup-buble',
      callbacks: {
        beforeOpen: function() {
          startWindowScroll = _window.scrollTop();
          // $('html').addClass('mfp-helper');
        },
        close: function() {
          // $('html').removeClass('mfp-helper');
          _window.scrollTop(startWindowScroll);
        }
      }
    });

    $('.js-popup-gallery').magnificPopup({
  		delegate: 'a',
  		type: 'image',
  		tLoading: 'Загрузка #%curr%...',
  		mainClass: 'popup-buble',
  		gallery: {
  			enabled: true,
  			navigateByImgClick: true,
  			preload: [0,1]
  		},
  		image: {
  			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
  		}
  	});
  }

  function closeMfp(){
    $.magnificPopup.close();
  }

  ////////////
  // UI
  ////////////

  // textarea autoExpand
  _document
    .one('focus.autoExpand', '.ui-group textarea', function(){
        var savedValue = this.value;
        this.value = '';
        this.baseScrollHeight = this.scrollHeight;
        this.value = savedValue;
    })
    .on('input.autoExpand', '.ui-group textarea', function(){
        var minRows = this.getAttribute('data-min-rows')|0, rows;
        this.rows = minRows;
        rows = Math.ceil((this.scrollHeight - this.baseScrollHeight) / 17);
        this.rows = minRows + rows;
    });

  // Masked input
  function initMasks(){
    $(".js-dateMask").mask("99.99.99",{placeholder:"ДД.ММ.ГГ"});
    $("input[type='tel']").mask("+7 (000) 000-0000");
  }

  // selectric
  function initSelectric(){
    $('select').selectric({
      maxHeight: 300,
      arrowButtonMarkup: '<b class="button"></b>',

      onInit: function(element, data){
        var $elm = $(element),
            $wrapper = $elm.closest('.' + data.classes.wrapper);

        $wrapper.find('.label').html($elm.attr('placeholder'));
      },
      onBeforeOpen: function(element, data){
        var $elm = $(element),
            $wrapper = $elm.closest('.' + data.classes.wrapper);

        $wrapper.find('.label').data('value', $wrapper.find('.label').html()).html($elm.attr('placeholder'));
      },
      onBeforeClose: function(element, data){
        var $elm = $(element),
            $wrapper = $elm.closest('.' + data.classes.wrapper);

        $wrapper.find('.label').html($wrapper.find('.label').data('value'));
      }
    });
  }

  ////////////
  // SCROLLMONITOR - WOW LIKE
  ////////////
  function initScrollMonitor(){
    $('.wow').each(function(i, el){

      var elWatcher = scrollMonitor.create( $(el) );

      var delay;
      if ( $(window).width() < 768 ){
        delay = 0
      } else {
        delay = $(el).data('animation-delay');
      }

      var animationClass = $(el).data('animation-class') || "wowFadeUp"

      var animationName = $(el).data('animation-name') || "wowFade"

      elWatcher.enterViewport(throttle(function() {
        $(el).addClass(animationClass);
        $(el).css({
          'animation-name': animationName,
          'animation-delay': delay,
          'visibility': 'visible'
        });
      }, 100, {
        'leading': true
      }));
      // elWatcher.exitViewport(throttle(function() {
      //   $(el).removeClass(animationClass);
      //   $(el).css({
      //     'animation-name': 'none',
      //     'animation-delay': 0,
      //     'visibility': 'hidden'
      //   });
      // }, 100));
    });

  }

  //////////
  // MEDIA Condition helper function
  //////////
  function mediaCondition(cond){
    var disabledBp;
    var conditionMedia = cond.substring(1);
    var conditionPosition = cond.substring(0, 1);

    if (conditionPosition === "<") {
      disabledBp = _window.width() < conditionMedia;
    } else if (conditionPosition === ">") {
      disabledBp = _window.width() > conditionMedia;
    }

    return disabledBp
  }

  //////////
  // DEVELOPMENT HELPER
  //////////
  function setBreakpoint(){
    var wHost = window.location.host.toLowerCase()
    var displayCondition = wHost.indexOf("localhost") >= 0 || wHost.indexOf("surge") >= 0
    if (displayCondition){
      var wWidth = _window.width();
      
      var content = "<div class='dev-bp-debug'>"+wWidth+"</div>";
      
      $('.page').append(content);
      setTimeout(function(){
        $('.dev-bp-debug').fadeOut();
      },1000);
      setTimeout(function(){
        $('.dev-bp-debug').remove();
      },1500)
    }
  }
  
  //////////
  // CUSTOM SCRIPTS

  function imgToSvg(){
    $('img.svg').each(function(){
      var $img = $(this);
      var imgID = $img.attr('id');
      var imgClass = $img.attr('class');
      var imgURL = $img.attr('src');
    
      $.get(imgURL, function(data) {
          var $svg = $(data).find('svg');
          if(typeof imgID !== 'undefined') {
              $svg = $svg.attr('id', imgID);
          }
          if(typeof imgClass !== 'undefined') {
              $svg = $svg.attr('class', imgClass+' replaced-svg');
          }
          $svg = $svg.removeAttr('xmlns:a');
          if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
              $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
          }
          $img.replaceWith($svg);
      }, 'xml');
    });
  }

  function jsAccordion() {
    $('.js-accordion').on('click',function(){
      $(this).find('.answer').slideToggle();
      $('.js-accordion').not(this).find('.answer').slideUp();
    })
  }

  function ScrollSectionOnClickDots() {
    $('.pagination-page a').click(function(e){
      e.preventDefault();
      var thisHref = $(this).attr('href');
      // $(this).closest('.pagination-page').find('a').removeClass('active');
      // $(this).addClass('active');
      $('body, html').animate({
        scrollTop: $(thisHref).offset().top}, 1000);
    });
  }


  function navSecion() {
    if ($('.pagination-page').length) {
      var arrNav = new Array();
      $('.pagination-page a').each(function(){
        arrNav.push($(this).attr('href'));
      });
      var arrNavPos = new Array();
      var arrNavPosBot = new Array();
      for (i = 0; i <= arrNav.length - 1; i++) {
        arrNavPos.push($('' + arrNav[i] + '').offset().top);
        arrNavPosBot.push($('' + arrNav[i] + '').offset().top + $('' + arrNav[i] + '').height());
      }
      $(window).scroll(function(){
        var posWindow = $(window).scrollTop() + 100;
        for(x = 0; x < arrNav.length; x++) {
          if ((posWindow >= arrNavPos[x]) && (posWindow <= arrNavPosBot[x])) {
            $('.pagination-page a').removeClass('active');
            $('.pagination-page a[href="' + arrNav[x] + '"]').addClass('active');
          }
        }
      });
    }
  }

  ScrollSectionOnClickDots();

  navSecion();

  //////////
  // input type file logic
  function inputFile(){
    $( '.file input' ).on('change',function(){
      $(this).closest("label").find(".file__name").text(this.files[0].name);
    });
  }
  // video events
  function videoEvents(){
    $('.play-btn').on('click', function(){
      var myVid = $(this).parent().find('video').get(0);
      myVid.controls = true;
      myVid.play();
      $(this).hide();
    });
  }
  // tabs logic
  function customTabs(){
    $('.tabs .tabs__nav .tab').on('click', function(){
      if ($(this).hasClass('active')){     
      }else{
        var currentTab = $(this).index();
        $('.tabs .tabs__nav .tab, .tabs .tabs__for .tab').removeClass('active');
        $(this).addClass('active');
        $('.tabs .tabs__for .tab').eq(currentTab).addClass('active');
      }
    });
  }
  //    scroll top btn
    function scrollTop(){
      /* When distance from top = 250px fade button in/out */
      $(window).scroll(function(){
        if ($(this).scrollTop() > 250) {
          $('#back-top').fadeIn(300);
        } else {
          $('#back-top').fadeOut(300);
        }
      });

      /* On click scroll to top of page t = 1000ms */
      $('#back-top').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 750);
        return false;
      });
    }
    function checkBox(){
      $('.ui-checkbox input').on('click', function(){    
        $(this).closest('.ui-checkbox').toggleClass('active');
      });
    }
    function formSend(){
        document.addEventListener( 'wpcf7mailsent', function( event ) {
          var el = $('#modal-form-tnx');
          if (el.length) {
          $.magnificPopup.open({
              items: {
                  src: el
              },
              type: 'inline',
              fixedContentPos: true,
              fixedBgPos: true,
              overflowY: 'auto',
              closeBtnInside: true,
              preloader: false,
              midClick: true,
              removalDelay: 300,
              mainClass: 'popup-buble',
          });
          }
        }, false );
    }

    function makeQuantityButtonsWork() {

      let productElements = document.querySelectorAll('.product-wrap')
      productElements.forEach((element, index) => {
        let price = element.querySelector('#price')
        let installPrice = element.querySelector('#install-price')
        let name = element.querySelector('#name')
        element.data = {
          quantity: {
            _value: 0,
            get value() {
              return this._value
            },
            set value(value) {
              if (value < 0) {
                value = 0
                return
              }
              this._value = value
            }
          },
          price: Number(price.textContent.slice(2)),
          installPrice: Number(installPrice.textContent.slice(2)),
          name: name.textContent,
          index: index
        }
        element.addEventListener('click', function(event) {
          let plusButton = event.target.closest('.button-plus')
          let minusButton = event.target.closest('.button-minus')
          if (!(plusButton || minusButton)) return
          if (!(element.contains(plusButton) || element.contains(minusButton))) return
          let quantitySpanValue = element.querySelector('.quantity-value')
          if (plusButton) {
            element.data.quantity.value += 1
          }
          else {
            element.data.quantity.value -= 1
          }
          quantitySpanValue.textContent = element.data.quantity.value

          let total = element.querySelector('.total')
          total.textContent = "Total: ₽ " + String(element.data.price * element.data.quantity.value + element.data.installPrice * element.data.quantity.value)
        })
      })
    }
    makeQuantityButtonsWork()


    function makeAddToCartButtonsWork() {
      let basket = document.querySelector('.cart')
      let cartIcon = document.querySelector('#cart-icon')
      let dot = document.querySelector('#cart-red-dot')
      let productElements = document.querySelectorAll('.product-wrap')
      productElements.forEach(element => {
        let addToCartButton = element.querySelector('.add-to-cart-button')
        addToCartButton.addEventListener('click', function(event) {
          if (element.data.quantity.value <= 0) return
          else {
            cart.add(element.data)
            dot.querySelector('#cart-total-quantity').textContent = cart.items.reduce((sum,item) => sum + item.quantity.value, 0)
            basket.hidden = false
            if (cartContentBox) {
              cartContentBox.remove();
              cartContentBox = showCartContentBox(cartIcon)
            }
          }
        })
      })
    }
    makeAddToCartButtonsWork()

    function makeSendButtonsWork() {
      let userCardConditionerNameXQuantity = document.querySelector('#user-card-conditioner-name-x-quantity-site')
      let userCardTotal = document.querySelector('#user-card-total-site')
      let formSendButton = document.querySelector('.wpcf7-submit')
      formSendButton.addEventListener('click', function() {
        userCardConditionerNameXQuantity.textContent = cart.items.map(item => item.name + ' x ' + item.quantity.value).join()
        userCardTotal.textContent = cart.items.reduce((sum,item) => sum + (item.price * item.quantity.value + item.installPrice * item.quantity.value), 0)
      })
    }
    makeSendButtonsWork()

    let cartContentBox
    function makeCartIconWorkOnClick() {
      let cartIcon = document.querySelector('#cart-icon')
      let cartRedDot = document.querySelector('#cart-red-dot')

      cartIcon.addEventListener('click', function(event) {
        if (cartContentBox) {
          cartContentBox.remove();
          cartContentBox = false;
        } else {
          cartContentBox = showCartContentBox(cartIcon)
        }
      })

      cartRedDot.addEventListener('click', function(event) {
        if (cartContentBox) {
          cartContentBox.remove();
          cartContentBox = false;
        } else {
          cartContentBox = showCartContentBox(cartIcon)
          console.log(cart.items.map(item => item.name + ' x ' + item.quantity.value).join())
          console.log(cart.items.reduce((sum,item) => sum + (item.price * item.quantity.value + item.installPrice * item.quantity.value), 0))
        }
      })
    }
    makeCartIconWorkOnClick()

    function showCartContentBox(cartIcon) {
      let cartContentContainer = document.createElement('div')
      cartContentContainer.className = 'cart-content-container'
      cart.items.forEach((item,index) => {
        let pane = document.createElement('div')
        pane.className = 'pane'
        let paneText = document.createElement('p')
        paneText.textContent = item.name + ' x ' + item.quantity.value + ' > ' + String(item.price * item.quantity.value + item.installPrice * item.quantity.value) + ' ₽'
        pane.append(paneText)
        let paneButton = document.createElement('button')
        paneButton.className = 'remove-button'
        paneButton.textContent = '[x]'
        paneButton.addEventListener('click', function(event) {
          cart.remove(index)
          cartContentBox.remove();
          if (cart.items.length > 0) cartContentBox = showCartContentBox(cartIcon)
          else {
            cartContentBox = false
            document.querySelector('.cart').hidden = true
          }
        })
        pane.append(paneButton)

        cartContentContainer.append(pane)
      })
      let link = document.createElement('a')
      link.textContent = 'Заказать товар'
      link.href = '#'
      link.className = 'link-to-order'
      cartContentContainer.append(link)
      link.addEventListener('click', function(event) {
        event.preventDefault()
        let freeMeasure = document.querySelector('#application-for-free-measurement')
        freeMeasure.scrollIntoView({
          behavior: "smooth",
          block: "center",
          inline: "nearest"
        })
      })
      document.body.append(cartContentContainer)

      let coords = cartIcon.getBoundingClientRect()

      let left = coords.left - cartContentContainer.offsetWidth + cartIcon.offsetWidth;
      if (left < 0) left = 0;

      let top = coords.top - cartContentContainer.offsetHeight - 5;
      if (top < 0) top = coords.top + cartIcon.offsetHeight + 5;

      cartContentContainer.style.left = left + 'px';
      cartContentContainer.style.top = top + 'px';

      return cartContentContainer
    }

    class Cart {
      items = []
      constructor() {

      }

      add(item) {
        const itemIndex = this.items.findIndex(cartItem => cartItem.name === item.name)
        if (itemIndex === -1) {
          let itemClone = structuredClone(item)
          this.items.push(itemClone)
        } else {
          this.items[itemIndex].quantity.value += item.quantity.value
        }
        this.updateStorage()
      }

      remove(index) {
        this.items.splice(index, 1)
        this.updateStorage()
      }

      updateStorage() {
        localStorage.setItem('cart', JSON.stringify(this.items))
      }

      restoreLocalStorage() {
        let cart = localStorage.getItem('cart')
        this.items = JSON.parse(cart)
        if (!this.items || this.items.length === 0) this.items = []
        else document.querySelector('.cart').hidden = false
      }
    }

    const cart = new Cart()

    cart.restoreLocalStorage()

});
