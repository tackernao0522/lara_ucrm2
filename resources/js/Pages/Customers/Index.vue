<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import FlashMessage from '../../Components/FlashMessae.vue'
import { Head, Link } from '@inertiajs/vue3';
import Pagination from '@/Components/Pagination.vue'

const props = defineProps({
    customers: Object,
})
</script>

<template>
    <ul v-for="customer in customers.data" :key="customer.id">
        <li>{{ customer.id }}</li>
        <li>{{ customer.name }}</li>
    </ul>
    <Pagination class="mt-6" :links="customers.links"></Pagination>
</template>
