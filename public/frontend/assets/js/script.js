

//spinner
// window.addEventListener("load", () => {
//     const spinner = document.querySelector(".spinner");
//     spinner.classList.add("spinner-hidden");
//     });

//   // Header scroll class
//   $(window).scroll(function() {
//     if ($(this).scrollTop() > 100) {
//     $('.navbar').addClass('header-scrolled');
//     } else {
//     $('.navbar').removeClass('header-scrolled');
//     }
// });



jQuery(function ($) {
    $("#homeslider").flexslider({
        animation: "slide",
    });
});

jQuery(function ($) {
    $("#productslider").flexslider({
        animation: "slide",
    });
});


jQuery(function ($) {
    $("#productdeal").flexslider({
        animation: "slide",
    });
});


jQuery(function ($) {
    $("#toysslider").flexslider({
        animation: "slide",
    });
});

  // scroll
// let scroll = document.querySelector(".scroll-link");
// window.onscroll = function () {
//     this.scrollY >= 1000
//         ? scroll.classList.add("show")
//         : scroll.classList.remove("show");
// };
// scroll.onclick = function () {
//     window.scrollTo({
//         top: 0,
//         behavior: "smooth",
//     });
// };


filterObjects("all");

function filterObjects(c) {

    var x , i ;
    x = document.getElementsByClassName('box');
    if(c == "all") c = "";

    for(i = 0; i < x.length; i++) {

        removeClass(x[i] , "show");

        if(x[i].className.indexOf(c) > -1)
            addClass(x[i] , "show")
    }
}


function addClass (element , name) {

    var i , arr1, arr2;

    arr1 = element.className.split(" ");

    arr2 = name.split(" ");

    for(i = 0; i < arr2.length; i++) {

        if(arr1.indexOf(arr2[i]) == -1) {

            element.className += " " + arr2[i];
        }
    }
}

function removeClass (element , name) {

    var i , arr1, arr2;

    arr1 = element.className.split(" ");

    arr2 = name.split(" ");

    for(i = 0; i < arr2.length; i++) {

        while(arr1.indexOf(arr2[i]) > -1) {

            arr1.splice(arr1.indexOf(arr2[i]) , 1);
        }
    }

    element.className = arr1.join(" ");
}

jQuery(function ($) {
    var myET = $('.myTicker').easyTicker({
        direction: 'up',
        easing: 'swing',
        speed: 'slow',
        interval: 2000,
        height: 'auto',
        visible: 1,
        mousePause: true,
        autoplay: true,
        controls: {
            up: '.up',
            down: '.down',
            toggle: '.toggle',
            stopText: 'Stop !!!'
        },
        callbacks: {
            before: function(ul, li){
                console.log('before', this, ul, li);
                $(li).css('color', '#000');
            },
            after: function(ul, li){
                console.log('after', this, ul, li);
            },
            finish: function(a){
                console.log('finish', this, a);
            }
        }
    }).data('easyTicker');

    cc = 1;
    $('.add').click(function(){
        $('.myTicker ul').append('<li>' + cc +
        ' Triangles can be made easily using CSS also without any images. This trick requires only div tags and some</li>');
        cc++;
    });

    $('.visible-3').click(function(){
        myET.options['visible'] = 3;

    });

    $('.visible-all').click(function(){
        myET.stop();
        myET.options['visible'] = 0 ;
        myET.start();
    });

    var ticker4 = $('.myTicker4').easyTicker({
        interval: 5000,
        height: '50',
        visible: 3
    });
});

jQuery(function ($) {
    // The slider being synced must be initialized first
    $('#carousel').flexslider({
      animation: "slide",
      controlNav: false,
      animationLoop: false,
      slideshow: true,
      itemWidth: 130,
      itemMargin: 5,
      asNavFor: '#product-slider'
    });

    $('#product-slider').flexslider({
      animation: "slide",
      controlNav: false,
      animationLoop: false,
      slideshow: false,
      sync: "#carousel"
    });
  });
