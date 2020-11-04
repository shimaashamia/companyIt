$(document).ready(function(){
  $('.center').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: true,
  infinite: true,
  dots: false,
  rtl: true,
  speed: 300,
  // prevArrow: '<button class="slide-arrow prev-arrow"></button>',
  // nextArrow: '<button class="slide-arrow next-arrow"></button>'
  // centerMode: true,
  // variableWidth: true,
  prevArrow:'<i class=" fa fa-angle-right clr-gry"></i>',
  nextArrow:'<i class="fa fa-angle-left clr-gry"></i>'
  });
});

const counters = document.querySelectorAll('.counter');
const speed = 200; // The lower the slower

counters.forEach(counter => {
    const updateCount = () => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;

        // Lower inc to slow and higher to slow
        const inc = target / speed;

        // console.log(inc);
        // console.log(count);

        // Check if target is reached
        if (count < target) {
            // Add inc to count and output in counter
            counter.innerText = count + inc;
            // Call function every ms
            setTimeout(updateCount, 1);
        } else {
            counter.innerText = target;
        }
    };

    updateCount();
});

$(function(){
  $("#review").rating();

$("#basic").rating({
  "click": function (e) {
    console.log(e); // {stars: 3, event: E.Event}
    alert(e.stars); // 3
  }
});
$("#basic").rating({
  "stars": 10
});
$("#basic").rating({
  "half": true
});
$("#basic").rating({
  "color": "#222"
});
$("#basic").rating({
  "emptyStar": "fa fa-star",
  "halfStar": "fa fa-star-half-alt",
  "filledStar": "fa fa-star"
});
$("#basic").rating({
  "value": 3
});
});