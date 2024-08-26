// const mobileMenuButton = document.getElementById('mobile-menu-button');
// const mobileMenu = document.getElementById('mobile-menu');

// mobileMenuButton.addEventListener('click', () => {
//     mobileMenu.classList.toggle('hidden');
// });



    // Get the button
    const goTopBtn = document.getElementById("goTopBtn");

    // Show the button when the user scrolls down 100px from the top of the document
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            goTopBtn.classList.add("show");
        } else {
            goTopBtn.classList.remove("show");
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    goTopBtn.addEventListener("click", function() {
        window.scrollTo({top: 0, behavior: 'smooth'});
    });
