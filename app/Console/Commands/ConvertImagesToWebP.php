<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class ConvertImagesToWebP extends Command
{
    protected $signature = 'images:convert';

    protected $description = 'Convert images to WebP format';

    public function handle()
    {
        $directory = public_path('img/logo');
        $files = File::files($directory);

        foreach ($files as $file) {
            $image = Image::make($file);
            $image->encode('webp');
            $image->save($directory . '/' . pathinfo($file, PATHINFO_FILENAME) . '.webp');
        }

        $this->info('Images converted successfully!');
    }
}
