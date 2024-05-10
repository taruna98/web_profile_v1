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
          // // button load more portfolio
          // $(document).ready(function(){
          //      $(".port-item").slice(0, 3).show();
          //      $(".port-btn-load").on("click", function(e){
          //           // e.preventDefault();
          //           $(".port-item:hidden").slice(0, 3).slideDown();
          //           if ($(".port-item:hidden").length == 0) {
          //                $(".port-btn-load").css('display', 'none');
          //                $(".port-btn-less").css('display', 'flex');
          //           }
          //      });
          //      $(".port-btn-less").on("click", function(e){
          //           // e.preventDefault();
          //           $(".port-item").slice(3).slideUp();
          //           $(".port-btn-less").css('display', 'none');
          //           $(".port-btn-load").css("display", "flex");
          //      });
          // });

          // // button load more article
          // $(document).ready(function(){
          //      $(".artcl-item").slice(0, 3).show();
          //      $(".artcl-btn-load").on("click", function(e){
          //           // e.preventDefault();
          //           $(".artcl-item:hidden").slice(0, 3).slideDown();
          //           if ($(".artcl-item:hidden").length == 0) {
          //                $(".artcl-btn-load").css('display', 'none');
          //                $(".artcl-btn-less").css('display', 'flex');
          //           }
          //      });
          //      $(".artcl-btn-less").on("click", function(e){
          //           // e.preventDefault();
          //           $(".artcl-item").slice(3).slideUp();
          //           $(".artcl-btn-less").css('display', 'none');
          //           $(".artcl-btn-load").css("display", "flex");
          //      });
          // });
     </script>

     <script>
          var code = "<?= isset($response['profile']['cod']) ? $response['profile']['cod'] : 'undefined'; ?>";

          $(document).ready(function() {
               $('.download_cv').click(function() {
                    if (code == 'undefined') {
                         alert('no CV uploaded');
                    }
                    var file = 'assets/file/' + code + '_CV.pdf';
                    window.open(file, '_blank');
               });
          });
     </script>

     <script>
          // jQuery get by search portfolio
          $(document).ready(function() {
               // simpan data response dari PHP ke dalam variabel JavaScript
               var portfolioData = <?= json_encode($response) ?>;
               var baseUrl = <?= json_encode($this->baseUrl) ?>;
               var $row = $('.row-portfolio');

               // fungsi untuk menampilkan data sesuai dengan kata kunci
               function filterData(searchTerm) {
                    $row.empty();
                    searchTerm = searchTerm.toLowerCase();

                    $.each(portfolioData, function(index, item) {
                         if (item.ttl.toLowerCase().includes(searchTerm) || item.ctg.toLowerCase().includes(searchTerm) || item.cat.toLowerCase().includes(searchTerm)) {
                              var $portfolioItem = $('<div class="col-lg-4 col-sm-6 my-3 port-item">');
                              var $card = $('<div class="card">');
                              var $img = $('<img src="assets/img/' + item.cod + '-port-' + (item.id.slice(0, 11)) + '-1.jpg" class="card-img-top" alt="th-portfolio">');
                              var $cardBody = $('<div class="card-body row">');
                              var $col1 = $('<div class="col col-9">');
                              var $title = $('<h4 class="card-title ff-inter text-capitalize">' + (item.ttl.length > 20 ? item.ttl.slice(0, 20) + '...' : item.ttl) + '</h4>');
                              var $category = $('<p class="card-text ff-inter text-uppercase">' + item.ctg + ' <span class="fw-bold text-capitalize">' + formatDate(item.cat) + '</span></p>');
                              var $col2 = $('<div class="col col-3 d-flex">');
                              var $link = $('<a href="' + baseUrl + '?porid/' + item.cod + '-' + item.id + '" class="my-auto ms-auto btn btn-detail rounded-circle"><i class="fas fa-arrow-right"></i></a>');

                              $col1.append($title);
                              $col1.append($category);
                              $col2.append($link);

                              $cardBody.append($col1);
                              $cardBody.append($col2);

                              $card.append($img);
                              $card.append($cardBody);

                              $portfolioItem.append($card);
                              $row.append($portfolioItem);
                         }
                    });
               }

               // fungsi untuk memformat tanggal
               function formatDate(dateString) {
                    var date = new Date(dateString);
                    var day = String(date.getDate()).padStart(2, '0');
                    var month = date.toLocaleString('default', {
                         month: 'short'
                    });
                    var year = date.getFullYear();

                    return `${day} ${month} ${year}`;
               }

               // tambahkan event listener ke elemen input
               $("#searchPortfolio").on("input", function() {
                    var searchTerm = $(this).val();
                    filterData(searchTerm);
               });
          });
     </script>

     <script>
          // jQuery get by search article
          $(document).ready(function() {
               // simpan data response dari PHP ke dalam variabel JavaScript
               var articleData = <?= json_encode($response) ?>;
               var baseUrl = <?= json_encode($this->baseUrl) ?>;
               var $row = $('.row-article');

               // fungsi untuk menampilkan data sesuai dengan kata kunci
               function filterData(searchTerm) {
                    $row.empty();
                    searchTerm = searchTerm.toLowerCase();

                    $.each(articleData, function(index, item) {
                         if (item.ttl.toLowerCase().includes(searchTerm) || item.ctg.toLowerCase().includes(searchTerm) || item.cat.toLowerCase().includes(searchTerm)) {
                              var $articleItem = $('<div class="col-lg-4 col-sm-6 my-3 art-item">');
                              var $card = $('<div class="card">');
                              var $img = $('<img src="assets/img/' + item.cod + '-art-' + item.id + '.jpg" class="card-img-top" alt="th-article">');
                              var $cardBody = $('<div class="card-body row">');
                              var $col1 = $('<div class="col col-9">');
                              var $title = $('<h4 class="card-title ff-inter text-capitalize">' + (item.ttl.length > 20 ? item.ttl.slice(0, 20) + '...' : item.ttl) + '</h4>');
                              var $category = $('<p class="card-text ff-inter text-uppercase">' + item.ctg + ' <span class="fw-bold text-capitalize">' + formatDate(item.cat) + '</span></p>');
                              var $col2 = $('<div class="col col-3 d-flex">');
                              var $link = $('<a href="' + baseUrl + '?artid/' + item.cod + '-' + item.id + '" class="my-auto ms-auto btn btn-detail rounded-circle"><i class="fas fa-arrow-right"></i></a>');

                              $col1.append($title);
                              $col1.append($category);
                              $col2.append($link);

                              $cardBody.append($col1);
                              $cardBody.append($col2);

                              $card.append($img);
                              $card.append($cardBody);

                              $articleItem.append($card);
                              $row.append($articleItem);
                         }
                    });
               }

               // fungsi untuk memformat tanggal
               function formatDate(dateString) {
                    var date = new Date(dateString);
                    var day = String(date.getDate()).padStart(2, '0');
                    var month = date.toLocaleString('default', {
                         month: 'short'
                    });
                    var year = date.getFullYear();

                    return `${day} ${month} ${year}`;
               }

               // tambahkan event listener ke elemen input
               $("#searchArticle").on("input", function() {
                    var searchTerm = $(this).val();
                    filterData(searchTerm);
               });
          });
     </script>

     </body>

     </html>