<?php

use Livewire\Volt\Volt;


if (true) {
    Volt::route('/', 'payment-required');
    Volt::route('/about', 'payment-required');
    Volt::route('/reviews', 'payment-required');
} else {
    Volt::route('/', 'home.index');
    Volt::route('/about', 'about.index');
    Volt::route('/reviews', 'reviews.index');
}
