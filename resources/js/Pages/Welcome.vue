<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
});
</script>

<template>
    <Head title="Welcome" />
    
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <!-- Logo/Header -->
        <div class="mb-6">
            <div class="flex items-center">
                <svg class="w-8 h-8 fill-current text-gray-500" viewBox="0 0 24 24">
                    <path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                </svg>
                <span class="ml-2 text-xl font-semibold text-gray-600 dark:text-gray-400">
                    Student Management System
                </span>
            </div>
        </div>

        <!-- Main Card -->
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <!-- Welcome Section -->
            <div class="text-center mb-6">
                <h1 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-2">
                    Welcome
                </h1>
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    Manage students with ease and efficiency
                </p>
            </div>

            <!-- Features List -->
            <div class="mb-6">
                <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">
                    System Features
                </h3>
                <ul class="space-y-3">
                    <li class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                        <svg class="w-4 h-4 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Add new student records
                    </li>
                    <li class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                        <svg class="w-4 h-4 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Edit existing student information
                    </li>
                    <li class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                        <svg class="w-4 h-4 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Search and filter student records
                    </li>
                    <li class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                        <svg class="w-4 h-4 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Delete outdated records
                    </li>
                </ul>
            </div>

            <!-- Action Buttons -->
            <div v-if="canLogin" class="space-y-4">
                <!-- If user is logged in -->
                <div v-if="$page.props.auth.user" class="flex items-center justify-end">
                    <Link 
                        :href="route('dashboard')"
                        class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150"
                    >
                        Dashboard
                    </Link>
                </div>

                <!-- If user is not logged in -->
                <template v-else>

                    <!-- Alternative: Full Width Buttons -->
                    <div class="mt-6 space-y-3">
                        <Link 
                            :href="route('login')"
                            class="w-full inline-flex justify-center items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150"
                        >
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                            </svg>
                            Sign In to Your Account
                        </Link>

                        <Link 
                            v-if="canRegister"
                            :href="route('register')"
                            class="w-full inline-flex justify-center items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150"
                        >
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                            </svg>
                            Create New Account
                        </Link>
                    </div>
                </template>
            </div>

            <!-- Info Section -->
            <div class="mt-6 pt-6 border-t border-gray-200 dark:border-gray-600">
                <p class="text-xs text-gray-500 dark:text-gray-400 text-center">
                    Secure admin access required for student management operations
                </p>
            </div>
        </div>

        <!-- Footer -->
        <div class="mt-6 text-center">
            <p class="text-xs text-gray-500 dark:text-gray-400">
                © 2025 Student Management System. All rights reserved.
            </p>
        </div>
    </div>
</template>