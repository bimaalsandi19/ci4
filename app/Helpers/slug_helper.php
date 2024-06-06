<?php

// app/Helpers/slug_helper.php

if (!function_exists('create_slug')) {
    function create_slug($string)
    {
        // Mengubah judul menjadi huruf kecil
        $slug = strtolower($string);

        // Mengganti karakter non-alphanumeric dengan tanda hubung
        $slug = preg_replace('/[^a-z0-9-]+/', '-', $slug);

        // Menghapus tanda hubung di awal dan akhir
        $slug = trim($slug, '-');

        return $slug;
    }
}
