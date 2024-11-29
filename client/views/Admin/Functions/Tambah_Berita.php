<?php include('./client/components/Admin/Sidebar.php'); ?>
<section class="admin-section">
    <div class="admin-container">
        <h1 class="font-bold berita-title">Tambah Berita</h1>
        <div class="berita-card">
            <form action="" class="berita-form">
                <div class="berita-group">
                    <label for="nama-berita" class="berita-label font-bold">Nama berita</label>
                    <input type="text" id="nama-berita" class="berita-input font-semi-bold"
                        placeholder="Masukkan nama berita">
                </div>
                <div class="berita-group">
                    <label for="deskripsi-berita" class="berita-label font-bold">Deskripsi berita</label>
                    <textarea id="deskripsi-berita" class="berita-input berita-deskripsi font-semi-bold"
                        placeholder="Masukkan deskripsi berita"></textarea>
                </div>
                <div class="berita-group">
                    <label for="nama-kompetisi" class="berita-label font-bold">URL Karya</label>
                    <input type="text" id="nama-kompetisi" class="berita-input font-semi-bold"
                        placeholder="Masukkan URL Karya">
                </div>
                <hr class="berita-hr">
                <div class="actions">
                    <button type="button" class="button-primary font-bold">Submit Berita</button>
                </div>
            </form>
        </div>
    </div>
</section>