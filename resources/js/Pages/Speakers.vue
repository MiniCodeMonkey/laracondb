<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";

defineProps({
    speakersByTalksCount: {
        type: Object,
    },
});
</script>


<template>

    <GuestLayout title="Hall of Fame">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Hall of Fame
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-4 grid grid-cols-2 gap-4">
                        <div v-for="talksCount in Object.keys(speakersByTalksCount).sort((a, b) => b - a)">
                            <h2 class="text-xl font-bold">{{ talksCount == 1 ? '1 talk' : talksCount + ' talks' }}</h2>
                            <div v-for="speaker in speakersByTalksCount[talksCount]">
                                <h2 class="text-xl">
                                    <a :href="'/speakers/' + speaker.id" class="hover:underline">{{ speaker.name }}</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </GuestLayout>

</template>
