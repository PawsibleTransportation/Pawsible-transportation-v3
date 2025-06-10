<?php

use Livewire\Volt\Component;

new class extends Component {
    public bool $bookModal = false;

    public array $team = [
        [
            'name' => 'Kyle Demisana',
            'position' => 'Owner',
            'avatar' => '/logo.jpeg',
            'experience' => '8 years',
        ],
        [
            'name' => 'Deen Demisana',
            'position' => 'Social Media Manager',
            'avatar' => '/logo.jpeg',
            'experience' => '7 years',
        ],
        [
            'name' => 'Nina Cervantes',
            'position' => 'Admin Staff',
            'avatar' => '/logo.jpeg',
            'experience' => '3 years',
        ],
        [
            'name' => 'Jay Soltis',
            'position' => 'Pet Handler',
            'avatar' => '/logo.jpeg',
            'experience' => '5 years',
        ],
        [
            'name' => 'Ralph Quinto',
            'position' => 'Pet Handler',
            'avatar' => '/logo.jpeg',
            'experience' => '8 years',
        ],
        [
            'name' => 'Mark Villalobos',
            'position' => 'Pet Handler',
            'avatar' => '/logo.jpeg',
            'experience' => '7 years',
        ],
    ];

    public function mount()
    {
        $this->team = array_map(fn($t) => (object) $t, $this->team);
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
    <x-header title="Safe & Stress-Free Pet Transportation"
        subtitle="We make traveling with your furry friends a breeze!" separator progress-indicator>
        <x-slot:actions>
            <x-button label="Book Now" @click="$wire.bookModal = true" class="btn-success" icon="o-plus" />
        </x-slot:actions>
    </x-header>
    <div class="flex flex-col gap-4">
        <x-card title="About Us">
            <p>
                At Pawsible Transportation, we believe every pet deserves a safe, smooth, and stress-free
                journey—whether
                across
                the country or around the world. What started as a vision rooted in our passion for animals and our
                experience
                in document processing has grown into a trusted service that specializes in both local and international
                pet
                transportation.
                <br />
                <br />
                We handle everything from import/export documentation to coordinating with airlines and veterinary
                services,
                ensuring your furry companion travels comfortably and compliantly. With a deep understanding of the
                legal
                requirements and logistical challenges involved, our team works closely with pet owners to simplify the
                process
                and provide peace of mind.
            </p>
        </x-card>

        <x-card title="The Team">
            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8">
                @foreach ($team as $t)
                    <x-avatar :image="$t->avatar" class="!w-22">
                        <x-slot:title class="text-3xl !font-bold pl-2">
                            {{ $t->name }}
                        </x-slot:title>
                        <x-slot:subtitle class="grid gap-1 mt-2 pl-2 text-xs">
                            <x-icon name="o-briefcase" label="{{ $t->position }}" />
                            <x-icon name="o-calendar-days" label="{{ $t->experience }}" />
                        </x-slot:subtitle>
                    </x-avatar>
                @endforeach
            </div>
        </x-card>

        <x-card title="Contact Us">
            <div class="lg:grid lg:grid-flow-col lg:grid-rows-2 flex flex-col gap-4">
                <a href="tel:+639272796522">
                    <x-icon name="o-phone" class="link" label="+63 927 279 6522" />
                </a>
                <a href="tel:+639163940544">
                    <x-icon name="o-phone" class="link" label="+63 916 394 0544" />
                </a>
                <a href="mailto:pawsibletransportation@gmail.com">
                    <x-icon name="o-at-symbol" class="link" label="pawsibletransportation@gmail.com" />
                </a>

            </div>
        </x-card>
    </div>
</div>
