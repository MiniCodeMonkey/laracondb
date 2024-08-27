<script setup>
import {ref} from 'vue';
import {Head} from '@inertiajs/vue3';
import Banner from '@/Components/Banner.vue';
import NavLink from '@/Components/NavLink.vue';

defineProps({
    title: String,
});

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div>
        <Head :title="title"/>

        <Banner/>

        <div class="min-h-screen bg-gray-100">
            <nav class="bg-white border-b border-gray-100">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <div class="hidden space-x-8 sm:-my-px sm:flex">
                                <NavLink :href="route('overview')" :active="route().current('overview')">
                                    Overview
                                </NavLink>

                                <NavLink :href="route('speakers')" :active="route().current('speakers')">
                                    Hall of Fame
                                </NavLink>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Heading -->
            <header v-if="$slots.header" class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header"/>
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <slot/>
            </main>

            <footer class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex items-center text-sm">
                Brought to you by the folks from
                <svg class="mx-1 w-4 inline-block" viewBox="0 0 41.953 48.952"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" d="M-1-1h43.953v50.952H-1z"/>
                    <g>
                        <path fill="#e62b28" fill-rule="evenodd"
                              d="M13.865 41.51c.292-.158 8.843-8.798 9.522-9.474l3.18-3.22-5.332-5.292-7.37 7.343c-.344-.22-1.257-1.187-1.533-1.504-1.557-1.792-2.603-3.687-2.967-6.29-1.39-9.904 9.62-16.942 18.21-11.017.822.567 1.74 1.448 2.354 2.27 3.403 4.555 3.27 10.462-.37 14.758-.487.575-1.032 1.055-1.55 1.572-4.11 4.108-8.262 8.227-12.34 12.364l5.32 5.3c.48-.37 13.81-13.76 14.407-14.46 8.66-10.137 4.312-26.417-8.688-30.567-6.223-1.985-12.35-.64-17.113 2.702-.708.497-2.042 1.646-2.582 2.23-2.082 2.243-3.522 4.652-4.464 7.662-1.722 5.494-.6 11.445 2.01 15.618.833 1.327 1.152 1.635 2.06 2.756l2.4 2.412c1.304 1.304 3.63 3.732 4.845 4.837"/>
                    </g>
                </svg>

                <a href="https://www.geocod.io" class="hover:underline">Geocodio</a>.
                Contribute by submitting a pull request to <a href="https://github.com/minicodemonkey/laracondb"
                                                              class="hover:underline ml-1">minicodemonkey/laracondb</a>.
            </footer>
        </div>
    </div>
</template>
