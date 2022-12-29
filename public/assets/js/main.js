// Humbergar Menu
// function Menu(e) {
//   let list = document.querySelector('ul');
//   e.name === 'menu' ? (e.name = "close", list.classList.add('top-[50px]'), list.classList.add('opacity-100')) : (e.name = "menu", list.classList.remove('top-[50px]'), list.classList.remove('opacity-100'))
// }


document.addEventListener('alpine:init', () => {
  Alpine.store('accordion', {
    tab: 0
  });
  Alpine.data('accordion', (idx) => ({
    init() {
      this.idx = idx;
    },
    idx: -1,
    handleClick() {
      this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
    },
    handleRotate() {
      return this.$store.accordion.tab === this.idx ? '-rotate-180' : '';
    },
    handleToggle() {
      return this.$store.accordion.tab === this.idx ? `max-height: ${this.$refs.tab.scrollHeight}px` : '';
    }
  }));
})


// scroll navbar
$(window).scroll(function () {
  if ($(document).scrollTop() > 160) {
    $('.header').addClass('affix');
  } else {
    $('.header').removeClass('affix');
  }
});

// Slider Section
var swiper = new Swiper(".vehicle-slider", {
  spaceBetween: 30,
  centeredSlides: true,
  loop: true,
  allowTouchMove: false,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: false,
  },
});

// Accrodion Tabs Section
let tabsContainer = document.querySelector("#tabs");

let tabTogglers = tabsContainer.querySelectorAll("#tabs a");

// console.log(tabTogglers);

tabTogglers.forEach(function (toggler) {
  toggler.addEventListener("click", function (e) {
    e.preventDefault();

    let tabName = this.getAttribute("href");

    let tabContents = document.querySelector("#tab-contents");

    for (let i = 0; i < tabContents.children.length; i++) {

      //tabTogglers[i].parentElement.classList.remove("bg-white");
      tabTogglers[i].parentElement.classList.add("opacity-30", "animate-active");
      tabTogglers[i].parentElement.classList.remove("border-primary");
      tabContents.children[i].classList.remove("hidden");
      if ("#" + tabContents.children[i].id === tabName) {
        continue;
      }
      tabContents.children[i].classList.add("hidden");

    }
    e.target.parentElement.classList.remove("opacity-30", "animate-active");
  });
});


// Pricing Details
function pricingSeeMoreDetails() {
  const seeMoreBtn = document.getElementById("pricing__details");
  const arrowIcon = document.getElementById("arrowIcon");

  if(seeMoreBtn.classList.contains('hidden')){
      seeMoreBtn.classList.remove('hidden');
      arrowIcon.classList.add('rotate-180');
  }
  else{
      seeMoreBtn.classList.add('hidden');
      arrowIcon.classList.remove('rotate-180');
  }
}


// Customer Details
function accountSeeMoreDetails() {
  const seeMoreBtn = document.getElementById("customer__details");
  const arrowIcon = document.getElementById("arrowDown");

  if(seeMoreBtn.classList.contains('hidden')){
      seeMoreBtn.classList.remove('hidden');
      arrowIcon.classList.add('rotate-180');
  }
  else{
      seeMoreBtn.classList.add('hidden');
      arrowIcon.classList.remove('rotate-180');
  }
}


// Reply
function replyFild() {
  const seeMoreBtn = document.getElementById("comment-fild");
  // const arrowIcon = document.getElementById("arrowDown");

  if(seeMoreBtn.classList.contains('hidden')){
      seeMoreBtn.classList.remove('hidden');
      // arrowIcon.classList.add('rotate-180');
  }
  else{
      seeMoreBtn.classList.add('hidden');
      // arrowIcon.classList.remove('rotate-180');
  }
}


// Reply Title
function replyTitle() {
  const seeMoreBtn = document.getElementById("reply-fild");
  const arrowIcon = document.getElementById("arrowDown");

  if(seeMoreBtn.classList.contains('hidden')){
      seeMoreBtn.classList.remove('hidden');
      arrowIcon.classList.add('rotate-180');
  }
  else{
      seeMoreBtn.classList.add('hidden');
      arrowIcon.classList.remove('rotate-180');
  }
}
// Comment
function replyComment() {
  const seeMoreBtn = document.getElementById("reply-comment");
  const arrowIcon = document.getElementById("commentDown");

  if(seeMoreBtn.classList.contains('hidden')){
      seeMoreBtn.classList.remove('hidden');
      arrowIcon.classList.add('rotate-180');
  }
  else{
      seeMoreBtn.classList.add('hidden');
      arrowIcon.classList.remove('rotate-180');
  }
}







// File Drop Down
// const dropArea = document.querySelector(".drop_box"),
//   button = dropArea.querySelector("button"),
//   input = dropArea.querySelector("input");
// let file;
// var filename;

// button.onclick = () => {
//   input.click();
// };

// input.addEventListener("change", function (e) {
//   var fileName = e.target.files[0].name;
//   let filedata = `
//     <form action="" method="post">
//     <div class="form">
//     <h4>${fileName}</h4>
//     <input type="email" placeholder="Enter email upload file">
//     <button class="btn">Upload</button>
//     </div>
//     </form>`;
//   dropArea.innerHTML = filedata;
// });





// Animate Car

var car = document.querySelector('.animate-car');
var ani = document.querySelectorAll('.move-car');
var post = document.querySelectorAll('.view-tab-item');

var startVal = 490;

for (const anis of ani) {
  anis.addEventListener('click', () => {
    var val = anis.offsetLeft;
    var res = startVal - val;
    if(res == '0'){
      car.style.transform = "none";
    }
    else{
      car.style.transform = "translateX(" + (-res+((-res/6)*3.4)) + "px)";
    }
  });

}


// Prevent scrolling in number type input field
var inputTypeNumbers = document.querySelectorAll("input[type=number]");
for (var a = 0; a < inputTypeNumbers.length; a++) {
  inputTypeNumbers[a].onwheel = function (event) {
  event.target.blur();
  };
}


