<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";

defineProps({
    speaker: {
        type: Object,
    },
    talks: {
        type: Array,
    },
    events: {
        type: Array,
    },
});
</script>


<template>

    <GuestLayout :title="speaker.name">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ speaker.name }}
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                    <h2 class="text-2xl font-bold">{{ speaker.name }}</h2>
                    <p class="mt-4 font-semibold">Has spoken at:</p>
                    <ul v-for="event in events">
                        <li><a :href="'/events/' + event.id" class="hover:underline">{{ event.edition.name }}
                            {{ event.year }} in
                            {{ event.location }}</a></li>
                    </ul>

                    <p class="mt-4 font-semibold">And has done the following talks:</p>
                    <ul v-for="talk in talks">
                        <li>{{ talk.title || 'Unknown title' }} ({{
                                talk.events.map(event => event.year).join(', ')
                            }})
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </GuestLayout>

</template>
