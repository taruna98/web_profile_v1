     <!-- Main Content -->
     
     <!-- Footer -->
     <?php require('section_footer.php') ?>
     
     <!-- Bootstrap core JS -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

     <!-- Core theme JS -->
     <script src="assets/js/scripts.js"></script>

     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

     <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * -->
     <!-- * *                               SB Forms JS                               * * -->
     <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * * -->
     <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * -->
     <!-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> -->

     <script>
          // typing animation
          var texts = "<?= isset($response['profile']['hsb']) ? $response['profile']['hsb'] : 'undefined'; ?>";
          if (texts !== 'undefined') {
               var texts = texts.split('|');
     
               let currentTextIndex = 0;
               let charIndex = 0;
               const textElement = $("#title-type");
     
               function type() {
                    const currentText = texts[currentTextIndex];
                    if (charIndex < currentText.length) {
                         textElement.text(currentText.slice(0, charIndex + 1));
                         charIndex++;
                         setTimeout(type, 100); // Kecepatan pengetikan
                    } else {
                         setTimeout(erase, 1000); // Tunggu 1 detik sebelum menghapus
                    }
               }
     
               function erase() {
                    const currentText = texts[currentTextIndex];
                    if (charIndex >= 0) {
                         textElement.text(currentText.slice(0, charIndex));
                         charIndex--;
                         setTimeout(erase, 50); // Kecepatan penghapusan
                    } else {
                         currentTextIndex = (currentTextIndex + 1) % texts.length;
                         setTimeout(type, 500); // Tunggu 0.5 detik sebelum mengetik teks berikutnya
                    }
               }
     
               type();
          }
     </script>

     <script>
          // button load more
          $(document).ready(function(){
               $(".port-item").slice(0, 3).show();
               $(".port-btn-load").on("click", function(e){
                    // e.preventDefault();
                    $(".port-item:hidden").slice(0, 3).slideDown();
                    if ($(".port-item:hidden").length == 0) {
                         $(".port-btn-load").css('display', 'none');
                         $(".port-btn-less").css('display', 'flex');
                    }
               });
               $(".port-btn-less").on("click", function(e){
                    // e.preventDefault();
                    $(".port-item").slice(3).slideUp();
                    $(".port-btn-less").css('display', 'none');
                    $(".port-btn-load").css("display", "flex");
               });
          });
     </script>

</body>

</html>