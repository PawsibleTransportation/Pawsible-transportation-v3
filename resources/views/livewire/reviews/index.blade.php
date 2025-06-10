<?php

use Livewire\Volt\Component;

new class extends Component {
    public bool $bookModal = false;

    public string $femalePlaceholder = 'https://st3.depositphotos.com/9998432/13335/v/450/depositphotos_133351974-stock-illustration-default-placeholder-woman.jpg';
    public string $malePlaceholder = 'https://st4.depositphotos.com/9998432/27191/v/600/depositphotos_271917462-stock-illustration-person-gray-photo-placeholder-man.jpg';
    public array $reviews = [
        [
            'name' => 'Marie T.',
            'dest' => 'Philippines to UAE',
            'review' => 'I was hesitant to send my cat abroad, but Pawsible Transportation handled everything—from microchipping to flight arrangements. She arrived in Dubai safe and sound. Thank you for the excellent service!',
            'gender' => 'female',
        ],
        [
            'name' => 'Kenji M.',
            'dest' => 'Philippines to Japan',
            'review' => 'Superb service! My Labrador safely traveled from Cebu to Japan without any issues. The team was very responsive and professional. Thank you for making this possible!',
            'gender' => 'male',
        ],
        [
            'name' => 'Marco V.',
            'dest' => 'Philippines to USA',
            'review' => 'I wanted to take a moment to thank your team for transporting my Husky from Cebu to Los Angeles. I was worried about the long journey, but your team kept me updated throughout the process. It was a stress-free experience, and I am so grateful for the care you provided. You guys are amazing!',
            'gender' => 'male',
        ],
        [
            'name' => 'Carla R.',
            'dest' => 'Philippines to USA',
            'review' => 'Pawsible Transportation is the best! They helped us bring our Shih Tzu from Manila to California, and the process was hassle-free. They took care of all the export permits and airline coordination. Highly recommended!',
            'gender' => 'female',
        ],
        [
            'name' => 'Aiko S.',
            'dest' => 'Philippines to Japan',
            'review' => 'I was nervous about sending my Persian cat to Tokyo, but Pawsible made it so easy. Everything went smoothly, and my pet arrived relaxed and safe. Thank you so much!',
            'gender' => 'female',
        ],
        [
            'name' => 'Luis G.',
            'dest' => 'Philippines to Canada',
            'review' => 'Outstanding service from start to finish! My Golden Retriever made it to Vancouver safely. The team was helpful every step of the way.',
            'gender' => 'male',
        ],
        [
            'name' => 'Fatima D.',
            'dest' => 'Philippines to UAE',
            'review' => 'I highly recommend Pawsible Transportation. They took great care of my Siamese cat during the entire trip to Abu Dhabi. Everything was handled professionally.',
            'gender' => 'female',
        ],
        [
            'name' => 'Tommy H.',
            'dest' => 'Philippines to Australia',
            'review' => 'Moving to Sydney was stressful enough, but Pawsible took a huge load off my shoulders by managing my dog’s transport. Super smooth process!',
            'gender' => 'male',
        ],
        [
            'name' => 'Isabel M.',
            'dest' => 'Philippines to UK',
            'review' => 'My pug made it to London safe and happy. Pawsible coordinated everything, including quarantine requirements. Couldn’t have done it without them!',
            'gender' => 'female',
        ],
        [
            'name' => 'Rafael E.',
            'dest' => 'Philippines to USA',
            'review' => 'From Manila to Chicago, Pawsible was efficient and thorough. My Corgi was well taken care of. I appreciated the constant updates.',
            'gender' => 'male',
        ],
        [
            'name' => 'Jasmine L.',
            'dest' => 'Philippines to Singapore',
            'review' => 'Great service! They handled everything for my cat’s trip to Singapore. No delays, no problems. Highly recommended!',
            'gender' => 'female',
        ],
        [
            'name' => 'Noel C.',
            'dest' => 'Philippines to New Zealand',
            'review' => 'Very satisfied with the service. My Beagle arrived in Auckland in perfect condition. I appreciate the team’s attention to detail.',
            'gender' => 'male',
        ],
        [
            'name' => 'Emily N.',
            'dest' => 'Philippines to Germany',
            'review' => 'Excellent coordination from the team! My dog made it to Berlin with zero hiccups. The paperwork was all taken care of. Thank you!',
            'gender' => 'female',
        ],
        [
            'name' => 'Victor P.',
            'dest' => 'Philippines to USA',
            'review' => 'We had our Maine Coon transported to New York. Everything went according to plan. Professional service from a reliable team!',
            'gender' => 'male',
        ],
        [
            'name' => 'Angela F.',
            'dest' => 'Philippines to Canada',
            'review' => 'Couldn’t be happier! Pawsible arranged everything for our dog’s trip to Toronto. Very smooth and well-managed.',
            'gender' => 'female',
        ],
        [
            'name' => 'Hiro K.',
            'dest' => 'Philippines to Japan',
            'review' => 'We brought our Shiba Inu back home to Osaka thanks to Pawsible. Amazing service and great communication throughout.',
            'gender' => 'male',
        ],
        [
            'name' => 'Bianca T.',
            'dest' => 'Philippines to Australia',
            'review' => 'My cat was safely transported to Melbourne. I loved how they handled the documents and vet checks. Great job!',
            'gender' => 'female',
        ],
        [
            'name' => 'Jason R.',
            'dest' => 'Philippines to UK',
            'review' => 'Thank you for helping us relocate our Labrador to London. The process was efficient and stress-free!',
            'gender' => 'male',
        ],
        [
            'name' => 'Mika A.',
            'dest' => 'Philippines to UAE',
            'review' => 'Top-notch service! My Pomeranian flew to Dubai with no problems. Very responsive staff too!',
            'gender' => 'female',
        ],
        [
            'name' => 'Derek V.',
            'dest' => 'Philippines to USA',
            'review' => 'They took care of everything for my dog’s journey to San Francisco. Really appreciated the updates and customer support.',
            'gender' => 'male',
        ],
        [
            'name' => 'Kyla C.',
            'dest' => 'Philippines to Singapore',
            'review' => 'So thankful to Pawsible for making my cat’s travel to Singapore easy and safe. Everything was handled professionally.',
            'gender' => 'female',
        ],
        [
            'name' => 'Leo D.',
            'dest' => 'Philippines to Canada',
            'review' => 'My Bulldog arrived in Calgary safe and sound. I’m so impressed by the care and professionalism. Will recommend to others!',
            'gender' => 'male',
        ],
        [
            'name' => 'Grace H.',
            'dest' => 'Philippines to Germany',
            'review' => 'Great communication, stress-free process, and my dog arrived in Frankfurt with no issues. Thanks again!',
            'gender' => 'female',
        ],
        [
            'name' => 'Seth B.',
            'dest' => 'Philippines to New Zealand',
            'review' => 'Handled everything smoothly for my cat’s relocation to Wellington. Trustworthy and professional team!',
            'gender' => 'male',
        ],
    ];

    public function mount()
    {
        $this->reviews = array_map(fn($t) => (object) $t, $this->reviews);
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

    <ul class="list bg-base-100 rounded-box shadow-md">
        <li class="p-4 pb-2 text-xl font-bold tracking-wide">Reviews</li>
        @foreach ($reviews as $r)
            <li class="list-row">
                <div><img class="size-10 rounded-box"
                        src="{{ $r->gender == 'male' ? $malePlaceholder : $femalePlaceholder }}" />
                </div>
                <div>
                    <div>{{ $r->name }}</div>
                    <div class="text-xs uppercase font-semibold opacity-60">{{ $r->dest }}</div>
                </div>
                <p class="list-col-wrap text-sm">
                    "{{ $r->review }}"
                </p>
                <div class="rating rating-xs">
                    <div class="mask mask-star-2 bg-orange-400" aria-label="1 star"></div>
                    <div class="mask mask-star-2 bg-orange-400" aria-label="2 star"></div>
                    <div class="mask mask-star-2 bg-orange-400" aria-label="3 star"></div>
                    <div class="mask mask-star-2 bg-orange-400" aria-label="4 star"></div>
                    <div class="mask mask-star-2 bg-orange-400" aria-label="5 star" aria-current="true"></div>
                </div>
            </li>
        @endforeach
        </li>

    </ul>
</div>
