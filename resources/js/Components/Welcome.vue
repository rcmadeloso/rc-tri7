<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
</script>

<template>
    <div>
        <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
            <!-- <ApplicationLogo class="block h-12 w-auto" /> -->

            <h1 class="mt-8 text-2xl font-medium text-gray-900">
               Rc Madeloso - Tri7 Assessment
            </h1>


        </div>

        <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
            <div>
                <div class="flex items-center">
                    <h2 class="text-xl font-semibold text-gray-900">
                        <a target="_blank" href="/employees">Backend Assessment</a>
                    </h2>
                </div>

                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                    Simple RBAC (Role based Access) CRUD (Create,Read,Update,Delete) made with Laravel for Employee Management.
                </p>

                <p class="mt-4 text-sm">
                    <a target="_blank" href="/employees" class="inline-flex items-center font-semibold text-indigo-700">
                        Click here

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-5 h-5 fill-indigo-500">
                            <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </p>
            </div>

            <div>
                <div class="flex items-center">
                    <h2 class="text-xl font-semibold text-gray-900">
                        <a target="_blank" href="/landing-page">Frontend Assessment</a>
                    </h2>
                </div>

                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                    Simple Frontend Landing Page Design Based on Reference, built with VUE,PHP and Tailwind CSS.
                </p>

                <p class="mt-4 text-sm">
                    <a target="_blank" href="/landing-page" class="inline-flex items-center font-semibold text-indigo-700">
                        Click here

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-5 h-5 fill-indigo-500">
                            <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </p>
            </div>

            <div>
                <div class="flex items-center">
                    <h2 class="text-xl font-semibold text-gray-900">
                        <a target="_blank" href="/factorial">Factorial Assessment</a>
                    </h2>
                </div>

                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                </p>

                <p class="mt-4 text-sm">
                    <a target="_blank" href="/factorial" class="inline-flex items-center font-semibold text-indigo-700">
                        Click here

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-5 h-5 fill-indigo-500">
                            <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </p>
            </div>

        </div>
    </div>
</template>
