<?php if ($this->page !== '') { ?>
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col text-center d-inline">
                    <p class="ff-inter my-auto fs-5">&copy; Copyright <b>2023</b>. All Rights Reserved</p>
                    <p class="ff-inter my-auto fs-5">Designed by
                        <?php
                        if (strpos($this->page, 'proid') !== false) {
                            echo ucwords($response['profile']['nme']);
                        } elseif (strpos($this->page, 'porid') !== false) {
                            echo ucwords($response['nme']);
                        } elseif (strpos($this->page, 'artid') !== false) {
                            echo ucwords($response['nme']);
                        } else {
                            echo ucwords($response[0]['nme']);
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </footer>
<?php } ?>