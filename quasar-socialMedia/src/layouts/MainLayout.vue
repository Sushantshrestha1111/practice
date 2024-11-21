<template>
  <q-layout :class="{'q-dark': $q.dark.isActive, 'q-light': !$q.dark.isActive}">
    <!-- Header with Tailwind Dark Mode Classes -->
    <header :class="{
        'bg-white text-black border-b border-gray-200': !$q.dark.isActive, 
        'bg-gray-800 text-white border-b border-gray-700': $q.dark.isActive
    }" class="fixed relative top-0 left-0 w-full">
      <div class="flex items-center max-w-6xl mx-auto px-6 h-14">
        <!-- Logo -->
        <div class="mr-4">
          <a href="/">
            <img src="" alt="Logo" class="h-8" />
          </a>
        </div>

        <!-- Search -->
        <div class="flex-grow relative max-w-md">
          <input :class="{
            'bg-grey-300 text-black':!$q.dark.isActive,
            'bg-slate-900 text-white':$q.dark.isActive,
          }"
            type="text"
            placeholder="Search"
            class="w-full h-10 pl-10 pr-3 bg-slate-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-400 "
          />
          <div class="absolute inset-y-0 left-2 flex items-center">
            <img class="" src="../assets/images/search-icon.svg" alt="Search Icon" />
          </div>
        </div>

        <!-- Navigation -->
        <nav class="ml-auto md:flex space-x-6">
          <v-icon name="IoSearchOutline" class="text-xl text-blue-500" />

          <!-- Route link to message -->
          <RouterLink to="/message" class="text-black dark:text-white">
            <div>
              <img class="" src="../assets/images/nav-messaging.svg" alt="Messaging Icon" />
            </div>
          </RouterLink>

          <div>
            <img class="" src="../assets/images/nav-notifications.svg" alt="Notifications Icon" />
          </div>

          <RouterLink to="/" class="text-black dark:text-white">
            <div>
              <img class="w-8 h-8 rounded-full" src="../assets/images/user.svg" alt="Profile Icon" />
            </div>
          </RouterLink>

          <!-- Dark Mode Toggle -->
          <q-toggle
            v-model="$q.dark.isActive"
            label="Dark Mode"
          />
        </nav>
      </div>
    </header>

    <div class="">
      <router-view />
    </div>
  </q-layout>
</template>

<script setup>
// No need to import NewDark component unless it's necessary
</script>
