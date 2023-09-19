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
          var texts = "<?= $response['profile']['hsb'] ?>";
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
     </script>

</body>

</html>