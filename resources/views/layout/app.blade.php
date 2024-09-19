<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POFO</title>

    <link rel="icon" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-roboto">
        @include('layout.header')
            @yield('content')
        @include('layout.footer')

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script>
var cont = 0;
var xx;

function loopSlider() {
    xx = setInterval(function() {
        switch (cont) {
            case 0: {
                $(".left-img-1").removeClass("opacity-100").addClass("opacity-0");
                setTimeout(() => {
                    $(".left-img-2").removeClass("opacity-0").addClass("opacity-100");
                }, 400);
                $("#slider-1").hide();
                $("#slider-2").show();
                $("#sButton1").removeClass("bg-white");
                $("#sButton2").addClass("bg-white");
                cont = 1;
                break;
            }
            case 1: {
                $(".left-img-2").removeClass("opacity-100").addClass("opacity-0");
                setTimeout(() => {
                    $(".left-img-3").removeClass("opacity-0").addClass("opacity-100");
                }, 400);
                $("#slider-2").hide();
                $("#slider-3").show();
                $("#sButton2").removeClass("bg-white");
                $("#sButton3").addClass("bg-white");
                cont = 2;
                break;
            }
            case 2: {
                $(".left-img-3").removeClass("opacity-100").addClass("opacity-0");
                setTimeout(() => {
                    $(".left-img-1").removeClass("opacity-0").addClass("opacity-100");
                }, 400);
                $("#slider-3").hide();
                $("#slider-1").show();
                $("#sButton3").removeClass("bg-white");
                $("#sButton1").addClass("bg-white");
                cont = 0;
                break;
            }
        }
    }, 9000);
}

function reinitLoop(time) {
    clearInterval(xx);
    setTimeout(loopSlider, time);
}

function sliderButton1() {
    $(".left-img-2, .left-img-3").removeClass("opacity-100").addClass("opacity-0");
    setTimeout(() => {
        $(".left-img-1").removeClass("opacity-0").addClass("opacity-100");
    }, 300);
    $("#slider-2, #slider-3").hide();
    $("#slider-1").show();
    $("#sButton2, #sButton3").removeClass("bg-white");
    $("#sButton1").addClass("bg-white");
    reinitLoop(4000);
    cont = 0;
}

function sliderButton2() {
    $(".left-img-1, .left-img-3").removeClass("opacity-100").addClass("opacity-0");
    setTimeout(() => {
        $(".left-img-2").removeClass("opacity-0").addClass("opacity-100");
    }, 300);
    $("#slider-1, #slider-3").hide();
    $("#slider-2").show();
    $("#sButton1, #sButton3").removeClass("bg-white");
    $("#sButton2").addClass("bg-white");
    reinitLoop(4000);
    cont = 1;
}

function sliderButton3() {
    $(".left-img-1, .left-img-2").removeClass("opacity-100").addClass("opacity-0");
    setTimeout(() => {
        $(".left-img-3").removeClass("opacity-0").addClass("opacity-100");
    }, 300);
    $("#slider-1, #slider-2").hide();
    $("#slider-3").show();
    $("#sButton1, #sButton2").removeClass("bg-white");
    $("#sButton3").addClass("bg-white");
    reinitLoop(4000);
    cont = 2;
}

$(window).ready(function() {
    $(".left-img-2, .left-img-3").addClass("opacity-0");
    $("#slider-2, #slider-3").hide();
    $("#sButton1").addClass("bg-white");
    loopSlider();
});




// hamburger menu
document.addEventListener('DOMContentLoaded', function () {
    const menuButton = document.getElementById('menu-button');
    const sidebar = document.getElementById('sidebar');
    const closeButton = document.getElementById('close-button');

    menuButton.addEventListener('click', function () {
        sidebar.classList.remove('opacity-0', 'hidden');
        sidebar.classList.add('opacity-100');
    });

    closeButton.addEventListener('click', function () {
        sidebar.classList.remove('opacity-100');
        sidebar.classList.add('opacity-0');

        // Optionally add 'hidden' class to completely hide the element after fade-out
        setTimeout(() => sidebar.classList.add('hidden'), 300); // Match this timeout with the duration of the transition
    });
});


// counter 
document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll('.counter');
    
    counters.forEach(counter => {
        const updateCounter = () => {
            const target = +counter.getAttribute('data-target'); // Get the target number
            const current = +counter.innerText; // Current number

            const increment = target / 100; // Adjust this value for faster/slower counting

            if (current < target) {
                counter.innerText = Math.ceil(current + increment); // Increment the number
                setTimeout(updateCounter, 150); // Adjust the speed (20ms here)
            } else {
                counter.innerText = target; // Ensure it ends at the target number
            }
        };

        updateCounter(); // Start the counting animation
    });
});


// vertical tabs 
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    
    // Get all tab contents and hide them with transition
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].classList.add("opacity-0");
        tabcontent[i].classList.remove("opacity-100");
        tabcontent[i].classList.add("duration-300");
        tabcontent[i].style.display = "none";
    }

    // Remove active class and styles from all tabs
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
        tablinks[i].classList.remove(
            "text-rose-600", "after:block", "after:w-80", "lg:after:w-56", 
            "after:h-[3px]", "after:bg-rose-600", "after:mt-3", "after:-translate-x-6",
            "active:text-rose-600", "transition-all", "duration-150", "ease-in-out", 
            "transform", "sm:translate-x-6", "lg:translate-x-6"
        );
        tablinks[i].classList.add("transition-all", "duration-150", "ease-in-out", "transform", "translate-x-0");
    }

    // Display the active tab content with transition
    const activeTab = document.getElementById(cityName);
    activeTab.style.display = "block";
    setTimeout(() => {
        activeTab.classList.remove("opacity-0");
        activeTab.classList.add("opacity-100");
    }, 10); // A small delay to ensure display change is applied

    // Add the active styling to the clicked tab
    evt.currentTarget.className += " active";
    evt.currentTarget.classList.add(
        "text-rose-600", "after:block", "after:w-80", "lg:after:w-56", 
        "after:h-[3px]", "after:bg-rose-600", "after:mt-3", "lg:after:-translate-x-6",
        "active:text-rose-600", "transition-all", "duration-150", "ease-in-out", 
        "transform", "sm:translate-x-6", "lg:translate-x-6"
    );
}

// Automatically click the first tab on page load
document.addEventListener('DOMContentLoaded', (event) => {
    const firstTab = document.getElementsByClassName('tablinks')[0];
    firstTab.click();
});



// logo slider
$(document).ready(function () {
  $(".logo-slider").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    responsive: [
      {
        breakpoint: 1025,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 520,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });
});

    </script>
</body>
</html>