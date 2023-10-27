<?php if ($this->page !== '') { ?>
    <nav class="navbar navbar-expand-lg navbar-dark container fixed-top p-0 rounded-bottom" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">
                <h2 class="ff-inter text-white">
                    <?php
                    if (strpos($this->page, 'proid') !== false) {
                        echo $response['profile']['nme'];
                    } elseif (strpos($this->page, 'porid') !== false) {
                        echo $response['nme'];
                    } elseif (strpos($this->page, 'artid') !== false) {
                        echo $response['nme'];
                    } else {
                        echo $response[0]['nme'];
                    }
                    ?>
                </h2>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="
                        <?php 
                        if (strpos($this->page, 'proid') !== false) { 
                            echo '#page-top'; 
                        } else if (strpos($this->page, 'por') !== false) { 
                            echo '?proid/' . substr(explode('/', $this->page)[1], 0, 11); 
                        } else if (strpos($this->page, 'porid') !== false) { 
                            echo '?proid/' . substr(explode('/', $this->page)[1], 0, 11);
                        } else if (strpos($this->page, 'art') !== false) { 
                            echo '?proid/' . substr(explode('/', $this->page)[1], 0, 11); 
                        } else if (strpos($this->page, 'artid') !== false) { 
                            echo '?proid/' . substr(explode('/', $this->page)[1], 0, 11); 
                        } 
                        ?>
                    ">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="
                        <?php 
                        if (strpos($this->page, 'proid') !== false) { 
                            echo '#about'; 
                        } else if (strpos($this->page, 'por') !== false) { 
                            echo '?proid/' . substr(explode('/', $this->page)[1], 0, 11) . '#about'; 
                        } else if (strpos($this->page, 'porid') !== false) { 
                            echo '?proid/' . substr(explode('/', $this->page)[1], 0, 11) . '#about'; 
                        } else if (strpos($this->page, 'art') !== false) { 
                            echo '?proid/' . substr(explode('/', $this->page)[1], 0, 11) . '#about'; 
                        } else if (strpos($this->page, 'artid') !== false) { 
                            echo '?proid/' . substr(explode('/', $this->page)[1], 0, 11) . '#about'; 
                        } 
                        ?>
                    ">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="
                        <?php 
                        if (strpos($this->page, 'proid') !== false) { 
                            echo '#services'; 
                        } else if (strpos($this->page, 'por') !== false) { 
                            echo '?proid/' . substr(explode('/', $this->page)[1], 0, 11) . '#services'; 
                        } else if (strpos($this->page, 'porid') !== false) { 
                            echo '?proid/' . substr(explode('/', $this->page)[1], 0, 11) . '#services'; 
                        } else if (strpos($this->page, 'art') !== false) { 
                            echo '?proid/' . substr(explode('/', $this->page)[1], 0, 11) . '#services'; 
                        } else if (strpos($this->page, 'artid') !== false) { 
                            echo '?proid/' . substr(explode('/', $this->page)[1], 0, 11) . '#services'; 
                        } 
                        ?>
                    ">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="
                        <?php 
                        if (strpos($this->page, 'proid') !== false) { 
                            echo '#portfolio'; 
                        } else if (strpos($this->page, 'por') !== false) { 
                            echo '?proid/' . substr(explode('/', $this->page)[1], 0, 11) . '#portfolio'; 
                        } else if (strpos($this->page, 'porid') !== false) { 
                            echo '?proid/' . substr(explode('/', $this->page)[1], 0, 11) . '#portfolio'; 
                        } else if (strpos($this->page, 'art') !== false) { 
                            echo '?proid/' . substr(explode('/', $this->page)[1], 0, 11) . '#portfolio'; 
                        } else if (strpos($this->page, 'artid') !== false) { 
                            echo '?proid/' . substr(explode('/', $this->page)[1], 0, 11) . '#portfolio'; 
                        } 
                        ?>
                    ">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="
                        <?php 
                        if (strpos($this->page, 'proid') !== false) { 
                            echo '#article'; 
                        } else if (strpos($this->page, 'por') !== false) { 
                            echo '?proid/' . substr(explode('/', $this->page)[1], 0, 11) . '#article'; 
                        } else if (strpos($this->page, 'porid') !== false) { 
                            echo '?proid/' . substr(explode('/', $this->page)[1], 0, 11) . '#article'; 
                        } else if (strpos($this->page, 'art') !== false) { 
                            echo '?proid/' . substr(explode('/', $this->page)[1], 0, 11) . '#article'; 
                        } else if (strpos($this->page, 'artid') !== false) { 
                            echo '?proid/' . substr(explode('/', $this->page)[1], 0, 11) . '#article'; 
                        } 
                        ?>
                    ">Article</a></li>
                </ul>
            </div>
        </div>
    </nav>
<?php } ?>
