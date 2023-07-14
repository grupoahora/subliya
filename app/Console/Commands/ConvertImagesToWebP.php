<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class ConvertImagesToWebP extends Command
{
    protected $signature = 'images:convert';

    protected $description = 'Convert images to WebP format, resize to 150px x 150px, and delete originals';

    public function handle()
    {
        $directory = public_path('image');
        $files = File::files($directory);

        foreach ($files as $file) {
            $image = Image::make($file);
            $image->fit(600, 600); // Redimensionar imagen a 150px x 150px

            $webpPath = $directory . '/' . pathinfo($file, PATHINFO_FILENAME) . '.webp';
            $image->save($webpPath);

          
            

            $this->info('Image converted and resized: ' . $webpPath);
        }

        $this->info('Images converted successfully!');
    }
}
