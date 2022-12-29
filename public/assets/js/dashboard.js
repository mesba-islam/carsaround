

// Active JS
// Get the container element
// var btnContainer = document.getElementById("active-menu");

// var btns = btnContainer.getElementsByClassName("list__item");

// for (var i = 0; i < btns.length; i++) {
//   btns[i].addEventListener("click", function() {
//     var current = document.getElementsByClassName("active__color");
//     current[0].className = current[0].className.replace("active__color", "");
//     this.className += "active__color";
//   });
// }



// 2nd Active JS
// $(document).ready(function(){
//   $("ul#active-menu li a").click(function(e){
//    if (!$(this).hasClass("active__color")) {
//        var tabNum = $(this).index();
//        var nthChild = tabNum+1;
//      $("ul#active-menu li a.active__color").removeClass("active__color");
//      $(this).addClass("active__color");
//      $("ul#active-menu li.selected").removeClass("selected");
//      $("ul#active-menu li:nth-child("+nthChild+")").addClass("selected");
//    }
//  });
// });




// Prevent scrolling in number type input field
var inputTypeNumbers = document.querySelectorAll("input[type=number]");
for (var a = 0; a < inputTypeNumbers.length; a++) {
  inputTypeNumbers[a].onwheel = function (event) {
  event.target.blur();
  };
}




// Legal Details
function legalMoreDetails() {
    const seeMoreBtn = document.getElementById("legal-details");
    const arrowIcon = document.getElementById("down-arrow");

    if(seeMoreBtn.classList.contains('hidden')){
        seeMoreBtn.classList.remove('hidden');
        arrowIcon.classList.add('rotate-180');
    }
    else{
        seeMoreBtn.classList.add('hidden');
        arrowIcon.classList.remove('rotate-180');
    }
}



// Sign Up Slider
var swiper = new Swiper(".signup-slider", {
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
});



$(document).ready(function(){
    $('.menu__item .menu__list').click(function(){
      $('.menu__list').removeClass("active");
      $(this).addClass("active");
  });
  });

  console.log($('.menu__item .menu__list a'));
