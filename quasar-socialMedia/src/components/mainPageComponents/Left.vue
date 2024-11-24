<template>
    <q-card class="my-card">
      <q-card-section>
        
        <div class="grid-area-leftside">
      <!-- ArtCard -->
      <div class="mb-2  rounded-lg shadow-sm">
        <!-- User Info -->
        <div class="border-b border-gray-200 p-4 text-center">
          <div
    class="h-14 bg-center bg-cover mb-4 -mx-4 -mt-4"
    style="background-image: url('/images/card-bg.svg')"
  ></div>
          <a href="#" class="block">
            <div
              class="w-18 h-18 mx-auto mb-3 rounded-full border-2 border-white bg-center bg-no-repeat bg-cover"
              style="background-image: url('../images/photo.svg')"
            ></div>
            <div class="text-lg font-semibold text-gray-900">Welcome, there!</div>
          </a>
          <a href="#" class="block mt-2 text-sm font-medium text-blue-600">
            Add a photo
          </a>
        </div>
  
        <!-- Widget -->
        <div class="border-b border-gray-200 py-3">
          <a
            href="#"
            class="flex justify-between items-center px-4 py-2 hover:bg-gray-100"
          >
            <div class="text-left">
              <span class="block text-sm text-gray-600">friends</span>
             
            </div>
            <img src="" alt="Widget Icon" />
          </a>
        </div>
  
        <!-- My Items -->
        <a
          href="#"
          class="block text-sm text-left px-4 py-3 hover:bg-gray-100"
        >
          <span class="flex items-center text-gray-900">
            <img src="" alt="Item Icon" class="mr-2" />
            My Items
          </span>
        </a>
      </div>
  
      <!-- Community Card -->
      <div class=" rounded-lg shadow-sm pt-2">
        <a href="#" class="block text-sm px-4 py-2 hover:text-blue-600">Groups</a>
        <a href="#" class="block text-sm px-4 py-2 hover:text-blue-600">
          Events
          <img src="" alt="Plus Icon" class="inline ml-1" />
        </a>
        <a href="#" class="block text-sm px-4 py-2 hover:text-blue-600">
          Follow Hashtags
        </a>
        <a
          href="#"
          class="block text-sm px-4 py-3 text-gray-600 border-t border-gray-300 hover:bg-gray-100"
        >
          Discover more
        </a>
      </div>
    </div>
      </q-card-section>
    </q-card>
    
  </template>
  
  <script>
  export default {
    name: "LeftSide",
  };
  </script>
  
  <style scoped>
  /* Additional styles if necessary, though Tailwind CSS should cover most needs */
  </style>
  