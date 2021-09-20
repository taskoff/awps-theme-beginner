// =============== Resposive header Effect ======================



const menu = document.querySelector('.nav-wrapper');
const el1 = document.querySelector('.about-us-wrapper');
const el2 = document.querySelector('.practice-section-header');
const el3 = document.querySelector('.experted-section-header');
const el4 = document.querySelector('.wy-us-header');
const el5 = document.querySelector('.clients-title');
const iconsEl = document.querySelector('.clients-icons-box');

document.addEventListener('scroll', function(e){
    // console.log(window.scrollY)
    if (window.scrollY > 20) {
        menu.classList.add('black');
       
    } else {
        menu.classList.remove('black');
    }

   
    if(elementInViewport2(el1)) {
        el1.classList.add('on-view')
    }
    if(elementInViewport2(el2)) {
      el2.classList.add('on-view')
    }
    if(elementInViewport2(el3)) {
      el3.classList.add('on-view')
    }
    if(elementInViewport2(el4)) {
      el4.classList.add('on-view')
    }
    if(elementInViewport(el5)) {
      el5.classList.add('on-view')
    }
    if(elementInViewport(iconsEl)) {
      iconsEl.classList.add('on-view-2')
    }
  })


// =============== Animated counters ====================

function animateValue(obj, start, end, duration) {
    let startTimestamp = null;
    const step = (timestamp) => {
      if (!startTimestamp) startTimestamp = timestamp;
      const progress = Math.min((timestamp - startTimestamp) / duration, 1);
      obj.innerHTML = Math.floor(progress * (end - start) + start);
      if (progress < 1) {
        window.requestAnimationFrame(step);
      }
    };
    window.requestAnimationFrame(step);
  }
  
  const obj1 = document.getElementById("counter-value-1");
  animateValue(obj1, 0, 821, 2000);
  const obj2 = document.getElementById("counter-value-2");
  animateValue(obj2, 0, 189, 2000);
  const obj3 = document.getElementById("counter-value-3");
  animateValue(obj3, 0, 2630, 2000);
  const obj4 = document.getElementById("counter-value-4");
  animateValue(obj4, 0, 540, 2000);


  // =============== Animated Hero Elements ====================

  window.addEventListener('DOMContentLoaded', (event) => {
    console.log('DOM fully loaded and parsed');
    
    const el = document.querySelector('.hero-section');
    el.classList.add('loaded');
});

// =============== Check element is on view ====================

function elementInViewport(el) {
    let top = el.offsetTop;
    let left = el.offsetLeft;
    let width = el.offsetWidth;
    let height = el.offsetHeight;
  
    while(el.offsetParent) {
      el = el.offsetParent;
      top += el.offsetTop;
      left += el.offsetLeft;
    }
  
    return (
      top >= window.pageYOffset &&
      left >= window.pageXOffset &&
      (top + height) <= (window.pageYOffset + window.innerHeight) &&
      (left + width) <= (window.pageXOffset + window.innerWidth)
    );
  }

  function elementInViewport2(el) {
    var top = el.offsetTop;
    var left = el.offsetLeft;
    var width = el.offsetWidth;
    var height = el.offsetHeight;
  
    while(el.offsetParent) {
      el = el.offsetParent;
      top += el.offsetTop;
      left += el.offsetLeft;
    }
  
    return (
      top < (window.pageYOffset + window.innerHeight) &&
      left < (window.pageXOffset + window.innerWidth) &&
      (top + height) > window.pageYOffset &&
      (left + width) > window.pageXOffset
    );
  }
  


