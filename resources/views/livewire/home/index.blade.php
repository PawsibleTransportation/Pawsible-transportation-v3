<?php

use Livewire\Volt\Component;
use Mary\Traits\Toast;

new class extends Component {
    use Toast;

    public string $search = '';

    public bool $bookModal = false;

    public array $local_slides = [];
    public array $international_slides = [];

    private function getSlides(string $prefix, string $directory = ''): array
    {
        $slides = [];

        // Absolute path to the directory (e.g., public/ or public/images/)
        $path = public_path($directory);

        if (!is_dir($path)) {
            return $slides; // Directory doesn't exist
        }

        $files = scandir($path);

        foreach ($files as $file) {
            if (str_starts_with($file, $prefix) && preg_match('/\.(jpg|jpeg|png|gif|webp)$/i', $file)) {
                // Build the correct public-facing path
                $relativePath = ($directory ? '/' . trim($directory, '/') : '') . '/' . $file;
                $slides[] = ['image' => $relativePath];
            }
        }

        return $slides;
    }

    public function mount()
    {
        $this->local_slides = $this->getSlides('local_');
        $this->international_slides = $this->getSlides('international_');
    }
}; ?>

<div>
    <x-modal wire:model="bookModal" title="Start Your Booking With…" class="backdrop-blur">
        <div class="flex flex-col gap-4">
            <!-- Instagram -->
            <x-button label="Instagram" class="btn-secondary btn-dash btn-smooth"
                link="https://www.instagram.com/pawsibletransportation/" external icon="bi.instagram" />

            <!-- Facebook -->
            <x-button label="Facebook" class="btn-primary btn-dash btn-smooth"
                link="https://www.facebook.com/pawsible.transportation" external icon="bi.facebook" />

            <!-- TikTok -->
            <x-button label="TikTok" class="btn-dash btn-smooth" link="https://www.tiktok.com/@pawsible.transportation"
                external icon="bi.tiktok" />

            <!-- Google Form -->
            <x-button label="Google Form" class="btn-accent btn-dash btn-smooth"
                link="https://docs.google.com/forms/d/e/1FAIpQLScQJkgw3kdW2dptqltZdaScdDr7rrSEGwrYvZixnKMtAKMD0g/viewform"
                external icon="bi.google" />
        </div>

        <x-slot:actions>
            <x-button label="Cancel" @click="$wire.bookModal = false" />
        </x-slot:actions>
    </x-modal>
    <!-- HEADER -->
    <x-header title="Safe & Stress-Free Pet Transportation"
        subtitle="We make traveling with your furry friends a breeze!" separator progress-indicator>
        <x-slot:actions>
            <x-button label="Book Now" @click="$wire.bookModal = true" class="btn-success" icon="o-plus" />
        </x-slot:actions>
    </x-header>
    <div class="flex flex-col gap-4">
        <x-card title="Local Transportation" subtitle="Local Journeys Made Simple" shadow separator
            class="!rounded-b-3xl">
            <x-carousel :slides="$local_slides" class="lg:h-100 object-cover" without-indicators />
        </x-card>
        <x-card title="International Transportation" subtitle="Effortless Travel Across Continents" shadow separator
            class="!rounded-b-3xl">
            <x-carousel :slides="$international_slides" class="lg:h-96" without-indicators />
        </x-card>
    </div>
</div>
