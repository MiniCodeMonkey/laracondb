<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";

defineProps({
    event: {
        type: Object,
    },
    speakers: {
        type: Object,
    },
    talks: {
        type: Array,
    },
});
</script>


<template>

    <GuestLayout :title="event.edition.name + ' ' + event.year">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ event.edition.name }} {{ event.year }} in {{ event.location }}
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                    <h3 class="mb-2 text-2xl font-bold">Talks</h3>
                    <div v-for="talk in talks">
                        <div class="mb-4">
                            <strong>{{ talk.title || 'Unknown title' }}</strong>
                            <ul v-for="speaker in talk.speakers">
                                <li><a :href="'/speakers/' + speaker.id" class="hover:underline">{{ speaker.name }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </GuestLayout>

</template>
