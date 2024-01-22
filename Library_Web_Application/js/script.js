document.addEventListener('DOMContentLoaded', function () {
    const navItems = document.querySelectorAll('.nav-item a');
    navItems.forEach(item => {
      if (window.location.href.includes(item.href)) {
        item.parentElement.classList.add('active');
      } else {
        item.parentElement.classList.remove('active');
      }
    });
  });

    document.addEventListener("DOMContentLoaded", function () {
        var kontaktLink = document.getElementById("kontaktLink");

        kontaktLink.addEventListener("click", function (event) {
            event.preventDefault();

            // Remove "active" class from all navbar links
            var navbarLinks = document.querySelectorAll(".navbar-nav a.nav-link");
            navbarLinks.forEach(function (link) {
                link.classList.remove("active");
            });

            // Add "active" class to the clicked link
            kontaktLink.classList.add("active");

            // Scroll to the footer
            var footer = document.getElementById("contact");
            footer.scrollIntoView({ behavior: "smooth" });
        });
    });