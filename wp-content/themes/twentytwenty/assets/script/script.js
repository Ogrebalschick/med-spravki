document.addEventListener("DOMContentLoaded", hiddenCloseclick());
document.getElementById('mobile_menu').addEventListener("click", hiddenCloseclick);

function hiddenCloseclick() {
    let x = document.getElementById('menu');
    if (x.style.display == "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none"
    }
};

$('.spravki .products').slick({
    dots: true,
    slidesToShow: 4,
    slidesToScroll: 4,
    prevArrow: '<button class="slide-arrow prev-arrow"></button>',
    nextArrow: '<button class="slide-arrow next-arrow"></button>',
    settings: "unslick",
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: false,
            }
        },
        {
            breakpoint: 700,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: false,
            }
        },
        {
            breakpoint: 580,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
            }
        }
    ]
});

const handleClick = event => {
    const divs = document.querySelectorAll(".dropdown_menu-text")
    const target = event.target.nextElementSibling
    target.classList.toggle("hide")

    divs.forEach(item => {
        if (item !== target) {
            item.classList.add("hide")
        }
    })
}

document.querySelectorAll(".dropdown_menu-item").forEach(item => {
    item.addEventListener("click", handleClick)
})


jQuery(document).ready(function($) {
    $('.menu-item-175').hover(function() {
        // навели мышь на элемент
        $('.dropdown-content').css('display', 'block');
    }, function() {
        // убрали мышь с элемента
        $('.dropdown-content').css('display', '');
    });
});

var $status = $('.pagingInfo');
var $slide_num = $('#slide_num')
var $slide_all = $('#slide_all')
var $slickElement = $('.slideshow');

$slickElement.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide) {
    //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
    var i = (currentSlide ? currentSlide : 0) + 1;
    $slide_num.text(i + '/');
    $slide_all.text(slick.slideCount);
});



$slickElement.slick({
    prevArrow: '<button class="slide-arrow prev-arrow"></button>',
    nextArrow: '<button class="slide-arrow next-arrow"></button>',
});


$(document).ready(function() {
    $('.block-menu-link').on('click', function() {
        $(this).toggleClass('simple_left_block');
    });
});

// function() {
//     $('.pagingInfo').classList.add('i');
// }

$('#tab_container_174 .wpsm_nav-tabs > li > a').css('border', 'none!important');








if (window.innerWidth < 768) {
    var coll = document.getElementsByClassName("med_table-category");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }
}

$(function() {
    $('.med_table-category').on('click', function() {
        $(this).toggleClass('transform');
    });
});


function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();


$(document).ready(function() {

    //E-mail Ajax Send
    $("form").submit(function() { //Change
        var th = $(this);
        $.ajax({
            type: "POST",
            url: "../../mail.php", //Change
            data: th.serialize()
        }).done(function() {
            alert("Thank you!");
            setTimeout(function() {
                // Done Functions
                th.trigger("reset");
            }, 1000);
        });
        return false;
    });

});