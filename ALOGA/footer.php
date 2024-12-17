<footer>
        <div class="footer">
            <div class="row">
                <a href="https://www.facebook.com/p/Aloga-Software-Solution-100084069771735/?_rdr" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://maps.app.goo.gl/sF5HdSJwVUcjLeAY6" target="_blank"> <i class="fa-solid fa-location-dot"></i></a>
            </div>
            <div class="row">
                Aloga Software Solutions <br>
                <a href="https://maps.app.goo.gl/scZ6rAcdCmJpjudp9" target="_blank"> 5 Nte 440, Lindavista, Gustavo A. Madero, 07730 Ciudad de México, CDMX</a>
            </div>
        </div>
</footer>
      
       
        <script>

   $('.ml12').each(function () {
          $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
      });

      anime.timeline({ loop: true })
          .add({
              targets: '.ml12 .letter',
              translateX: [40, 0],
              translateZ: 0,
              opacity: [0, 1],
              easing: "easeOutExpo",
              duration: 1200,
              delay: function (el, i) {
                  return 500 + 30 * i;
              }
          }).add({
              targets: '.ml12 .letter',
              translateX: [0, -30],
              opacity: [1, 0],
              easing: "easeInExpo",
              duration: 1100,
              delay: function (el, i) {
                  return 100 + 30 * i;
              }
          });
      $(window).on('load', function () {
          setTimeout(function () {
              $(".loader").fadeOut("slow", function () {
                  $("#main-content").addClass("visible-content");
              });
          }, 1000);
      });
      // JavaScript para el botón de volver arriba
      const backToTopBtn = document.querySelector("#back-to-top-btn");
      window.addEventListener("scroll", () => {
          if (window.pageYOffset > 300) {
              if (!backToTopBtn.classList.contains("btnEntrance")) {
                  backToTopBtn.classList.remove("btnExit");
                  backToTopBtn.classList.add("btnEntrance");
                  backToTopBtn.style.display = "block";
              }
          } else {
              if (backToTopBtn.classList.contains("btnEntrance")) {
                  backToTopBtn.classList.remove("btnEntrance");
                  backToTopBtn.classList.add("btnExit");
                  setTimeout(() => {
                      backToTopBtn.style.display = "none";
                  }, 250);
              }
          }
      });

      backToTopBtn.addEventListener("click", () => {
          window.scrollTo(0, 0);
      });

      ///carrusel de lenguajes

          </script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/particles.js"></script>
        <script src="script.js"></script>