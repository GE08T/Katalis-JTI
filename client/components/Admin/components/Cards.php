<?php
    include './server/model/Prestasi.php';
    $prestasi = new Prestasi();
?>
<div class="admin-card">
    <div href="#" class="custom-card">
        <div class="title-admin">
            <h5 class="custom-card-title font-semi-bold">Jumlah Prestasi Lokal</h5>
            <p class="custom-card-text font-bold">
                <?php 
                    if (!isset($_SESSION['user_role']) ) {
                        echo "0";
                    } else if ($_SESSION['user_role'] == 'admin') {
                        echo $prestasi->getCountPrestasi('lokal'); 
                    } else if ($_SESSION['user_role'] == 'mahasiswa') {
                        echo $prestasi->getCountByMhs('lokal', $_SESSION['user_data']['nim']);
                    }
                ?>
            </p>
        </div>
        <div class="icon-admin">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                    clip-rule="evenodd" />
            </svg>
        </div>

    </div>
    <div href="#" class="custom-card">
        <div class="title-admin">
            <h5 class="custom-card-title font-semi-bold">Jumlah Prestasi Nasional</h5>
            <p class="custom-card-text font-bold">
                <?php 
                    if (!isset($_SESSION['user_role'])) {
                        echo "0";
                    } else if ($_SESSION['user_role'] == 'admin') {
                        echo $prestasi->getCountPrestasi('nasional'); 
                    } else if ($_SESSION['user_role'] == 'mahasiswa') {
                        if (!isset($_SESSION['user_data'])) {
                            echo "0";
                        }
                        echo $prestasi->getCountByMhs('nasional', $_SESSION['user_data']['nim']);
                    }
                ?>
            </p>
        </div>
        <div class="icon-admin">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                    clip-rule="evenodd" />
            </svg>
        </div>

    </div>
    <div href="#" class="custom-card">
        <div class="title-admin">
            <h5 class="custom-card-title font-semi-bold">Jumlah Internasional</h5>
            <p class="custom-card-text font-bold">
            <?php 
                if (!isset($_SESSION['user_role'])) {
                    echo "0";
                } else if ($_SESSION['user_role'] == 'admin') {
                    echo $prestasi->getCountPrestasi('internasional'); 
                } else if ($_SESSION['user_role'] == 'mahasiswa') {
                    if (!isset($_SESSION['user_data'])) {
                        echo "0";
                    }
                    echo $prestasi->getCountByMhs('internasional', $_SESSION['user_data']['nim']);
                }
            ?>
            </p>
        </div>
        <div class="icon-admin">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                    clip-rule="evenodd" />
            </svg>
        </div>

    </div>
</div>