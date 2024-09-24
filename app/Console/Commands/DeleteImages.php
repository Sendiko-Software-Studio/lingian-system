<?php

namespace App\Console\Commands;

use App\Models\Guest;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class DeleteImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:delete-images';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $guests = Guest::where('createdAt', '<', now()->subDays(30))->get();

        foreach ($guests as $guest) {
            Storage::delete($guest->image);
            $guest->delete();
        }

        $this->info('Images reset');
    }
}
