<template>
    <Head title="Posts" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex justify-between items-center">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Posts</h2>
                <Link :href="route('posts.create')">
                    <PrimaryButton>Create Post</PrimaryButton>
                </Link>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div v-if="posts.length === 0" class="text-center py-4">
                            No posts yet. Create your first post!
                        </div>
                        <div v-else class="space-y-6">
                            <div v-for="post in posts" :key="post.id" class="border-b pb-4 last:border-b-0">
                                <h3 class="text-lg font-semibold">{{ post.title }}</h3>
                                <p class="mt-2 text-gray-600">{{ post.content }}</p>
                                <div class="mt-2 text-sm text-gray-500">
                                    Created {{ new Date(post.created_at).toLocaleDateString() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';

defineProps({
    posts: {
        type: Array,
        default: () => []
    }
});
</script>
