<?php
include('./client/components/Admin/Sidebar.php');
include('./server/model/Berita.php');

// $id = isset($_GET['id']) ? $_GET['id'] : 1;

// $jsonData = file_get_contents('./server/data/Blog.json');
// $data = json_decode($jsonData, true);

// if (isset($data[$id])) {
//     $blog = $data[$id];
// } else {
//     echo "Data tidak ditemukan.";
//     exit;
// }

function convertYoutubeUrlToEmbed($url)
{
    if (preg_match('/youtu\.be\/([a-zA-Z0-9_-]+)/', $url, $matches)) {
        return 'https://www.youtube.com/embed/' . $matches[1];
    } elseif (preg_match('/youtube\.com\/watch\?v=([a-zA-Z0-9_-]+)/', $url, $matches)) {
        return 'https://www.youtube.com/embed/' . $matches[1];
    } elseif (preg_match('/youtube\.com\/embed\/([a-zA-Z0-9_-]+)/', $url, $matches)) {
        return 'https://www.youtube.com/embed/' . $matches[1];
    } elseif (preg_match('/youtube\.com\/v\/([a-zA-Z0-9_-]+)/', $url, $matches)) {
        return 'https://www.youtube.com/embed/' . $matches[1];
    }
    return null;
}

$id = $_GET['id'];
$berita = new Berita();
$dataBerita = $berita->getById($id);
$urlDemo = isset($dataBerita[0]['url_demo']) ? convertYoutubeUrlToEmbed($dataBerita[0]['url_demo']) : null;
?>
<section class="admin-section">
    <div class="admin-container">
        <section class="blog-section">
            <div class="actions">
                <button type="button" class="button-primary font-bold"onclick="window.location.href='/katalis/berita'">Kembali</button>
            </div>
            <!-- <h1 class="blog-detail-title font-bold"><?php // echo $blog['title']; ?></h1> -->
            <h1 class="blog-detail-title font-bold"><?php echo $dataBerita[0]['nama_berita']; ?></h1>
            <hr class="blog-hr-2">
            <div class="blog-detail-paragraph font-regular">
                <div class="blog-img">
                    <?php if ($urlDemo): ?>
                        <iframe width="560" height="315" src="<?php echo $urlDemo; ?>" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen class="detail-img"></iframe>
                    <?php else: ?>
                        <p>Video tidak tersedia.</p>
                    <?php endif; ?>
                </div>
                <p class='detail-paragraph'><?php echo $dataBerita[0]['deskripsi'] ?></p>
                <?php
                // foreach ($blog['description'] as $index => $paragraph) {
                //     echo "<p class='detail-paragraph'>{$paragraph}</p>";

                //     if ($index === 2) {
                //         echo "<div class='blog-img'>
                //         <iframe width='560' height='315' src='{$blog['video_url']}' title='YouTube video player'
                //             frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope;
                //             picture-in-picture; web-share' referrerpolicy='strict-origin-when-cross-origin'
                //             allowfullscreen class='detail-img'></iframe>
                //         <h5>{$blog['video_caption']}</h5>
                //         </div>";
                //     }
                // }
                ?>
            </div>
        </section>
    </div>
</section>