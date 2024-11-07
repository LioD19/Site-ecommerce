// class Portfolio {
//     constructor (selector) {
//         this.activeContent = null
//         this.activeItem = null
//         this.container = document.querySelector(selector)
//         if(this.container === null) {
//             throw new Error(`l'element ${selector} n'existe pas`)
//         }
//         this.children = Array.prototype.slice.call(this.container.querySelectorAll('.js-item'))
//         this.children.forEach((child) => {
//             child.addEventListener('click', (e) => {
//                 e.preventDefault()
//                 this.show(child)
//             })
//         })
//     }

//     show(child) {
//         let offset = 0
//         if(this.activeContent !== null) {
//             this.slideUp(this.activeContent)
//             if(this.activeContent.offsetTop < child.offsetTop) {
//                 offset = this.activeContent.offsetHeight
//             }
//         }
//         if(this.activeItem === child) {
//         this.activeContent = null
//         this.activeItem = null
//         }else {
//             let content = child.querySelector('.js-body').cloneNode(true)
//             child.after(content)
//             this.slideDown(content)
//             this.scrollTo(child, offset)
//             this.activeContent = content
//             this.activeItem = child
//         }
//     }

//     slideDown (element) {
//         let height = element.offsetHeight
//         element.style.height = '0px'
//         element.style.transitionDuration = '.5s'
//         element.offsetHeight
//         element.style.height = height + 'px'
//         window.setTimeout(function () {
//             element.style.height = null
//         }, 500)

//     }

//     slideUp (element) {
//         let height = element.offsetHeight
//         element.style.height = height + 'px'
//         element.offsetHeight
//         element.style.height = '0px'
//         window.setTimeout(function () {
//             element.parentNode.removeChild(element)
//         }, 500)
//     }

//     scrollTo (element, offset = 0) {
//         window.scrollTo({
//           behavior: 'smooth',
//           left: 0,
//           top: element.offsetTop - offset
//         })
//       }  
// }

// new Portfolio('#js-portfolio')


/**
 * add event listener on multiple elements
 */

const addEventOnElements = function (elements, eventType, callback) {
  for (let i = 0, len = elements.length; i < len; i++) {
    elements[i].addEventListener(eventType, callback);
  }
}



/**
 * NAVBAR TOGGLE FOR MOBILE
 */

const navbar = document.querySelector("[data-navbar]");
const navTogglers = document.querySelectorAll("[data-nav-toggler]");
const overlay = document.querySelector("[data-overlay]");

const toggleNavbar = function () {
  navbar.classList.toggle("active");
  overlay.classList.toggle("active");
  document.body.classList.toggle("nav-active");
}

addEventOnElements(navTogglers, "click", toggleNavbar);



/**
 * HEADER
 * active header when window scroll down to 100px
 */

const header = document.querySelector("[data-header]");

window.addEventListener("scroll", function () {
  if (window.scrollY > 100) {
    header.classList.add("active");
  } else {
    header.classList.remove("active");
  }
});



/**
 * SLIDER
 */

const sliders = document.querySelectorAll("[data-slider]");

const initSlider = function(currentSlider) {

  const sldierContainer = currentSlider.querySelector("[data-slider-container]");
  const sliderPrevBtn = currentSlider.querySelector("[data-slider-prev]");
  const sliderNextBtn = currentSlider.querySelector("[data-slider-next]");

  let currentSlidePos = 0;

  const moveSliderItem = function () {
    sldierContainer.style.transform = `translateX(-${sldierContainer.children[currentSlidePos].offsetLeft}px)`;
  }

  /**
   * NEXT SLIDE
   */

  const slideNext = function () {
    const slideEnd = currentSlidePos >= sldierContainer.childElementCount - 1;

    if (slideEnd) {
      currentSlidePos = 0;
    } else {
      currentSlidePos++;
    }

    moveSliderItem();
  }

  sliderNextBtn.addEventListener("click", slideNext);

  /**
   * PREVIOUS SLIDE
   */

   const slidePrev = function () {

    if (currentSlidePos <= 0) {
      currentSlidePos = sldierContainer.childElementCount - 1;
    } else {
      currentSlidePos--;
    }

    moveSliderItem();
  }

  sliderPrevBtn.addEventListener("click", slidePrev);

  const dontHaveExtraItem = sldierContainer.childElementCount <= 1;
  if (dontHaveExtraItem) {
    sliderNextBtn.style.display = "none";
    sliderPrevBtn.style.display = "none";
  }

}

for (let i = 0, len = sliders.length; i < len; i++) { initSlider(sliders[i]); }



/**
 * ACCORDION
 */

const accordions = document.querySelectorAll("[data-accordion]");

let lastActiveAccordion = accordions[0];

const initAccordion = function (currentAccordion) {

  const accordionBtn = currentAccordion.querySelector("[data-accordion-btn]");

  const expandAccordion = function () {
    if (lastActiveAccordion && lastActiveAccordion !== currentAccordion) {
      lastActiveAccordion.classList.remove("expanded");
    }

    currentAccordion.classList.toggle("expanded");

    lastActiveAccordion = currentAccordion;
  }

  accordionBtn.addEventListener("click", expandAccordion);

}

for (let i = 0, len = accordions.length; i < len; i++) { initAccordion(accordions[i]); }
