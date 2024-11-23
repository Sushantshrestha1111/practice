<template>
    <div>    <q-card class="my-card">
      <q-card-section>
        <div class="flex flex-col item center justify-center">
            <!-- Top -->
            <div class="flex item-center flex-row">
            <img
            src="../assets/images/my.jpg"
            class="rounded-full h-12 w-12 ml-2 mr-2"/>
            <div class="flex-grow relative max-w-md">
          <input :class="{
            'bg-grey-300 text-black':!$q.dark.isActive,
            'bg-slate-900 text-white':$q.dark.isActive,
          }"
            type="text"
            placeholder="Search"
            class="w-full h-10 pl-10 pr-3 bg-slate-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-400 "
          />
          
        </div>
             </div>

             <!-- buttom -->

             <div class="flex flex-row mt-5  space-between ">
                <div class="flex flex-row ">
                    <img
            src="../assets/images/my.jpg"
            class="rounded-full h-10 w-10 ml-2 mr-2 "/>

                    <span>Item</span>
                </div>
                <div class="flex flex-row">
                    <img
            src="../assets/images/my.jpg"
            class="rounded-full h-10 w-10 ml-2 mr-2"/>

                    <span>Item</span>
                </div>
                <div class="flex flex-row">
                    <img
            src="../assets/images/my.jpg"
            class="rounded-full h-10 w-10 ml-2 mr-2"/>

                    <span>Item</span>
                </div>


             </div>
             


        </div>
       
      </q-card-section>
    </q-card>
        
    </div>
</template>
<script setup>

</script>
<style>
    
</style>