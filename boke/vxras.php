<?php

function get_video_links($url) {
    $video_links = array();

    try {
        $html = file_get_contents($url);

        $dom = new DOMDocument;
        @$dom->loadHTML($html);
        $video_tags = $dom->getElementsByTagName('video');

        foreach ($video_tags as $video_tag) {
            $src = $video_tag->getAttribute('src');
            $video_links[] = $src;
        }

    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }

    return $video_links;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['url'])) {
        $url = $_POST['url'];
        $video_links = get_video_links($url);
        echo json_encode($video_links);
    }
}
?>