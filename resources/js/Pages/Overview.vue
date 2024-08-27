<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";

defineProps({
    editions: {
        type: Array,
    },
});
</script>


<template>

    <GuestLayout title="Overview of conferences">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                    <div v-for="edition in editions" class="mb-4">
                        <h2 class="text-2xl font-bold">{{ edition[0].edition.name }}</h2>
                        <div v-for="event in edition">
                            <h3>
                                <a :href="'/events/' + event.id" class="hover:underline">
                                    {{ event.year }}:
                                    {{ event.location }}
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </GuestLayout>

</template>
