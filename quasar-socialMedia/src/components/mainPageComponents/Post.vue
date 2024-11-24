<template >
    <div class=" mt-5 ">
        <q-card class="my-card">
            <q-card-section>
             <div class="flex flex-col">

                <!-- image and name -->
                <div class="flex flex-row">
                    <img
                    src="../../assets/images/my.jpg"
                    class="rounded-full h-12 w-12"/>
                    <div class="flex flex-col ml-4">
                        <strong>Sushant Shrestha</strong>
                        <strong>Feb 14</strong>
                    </div>
                </div>

                <div class="flex flex-col mt-5">
                    <span :class="{
            'text-black':!$q.dark.isActive,
            ' text-white':$q.dark.isActive,
          }"
          class="text-italic">The description of the post goes here</span>
                    <div>
                        <img src="../../assets/images/my.jpg"
                        class="object-contain w-full h-full p-2 pr-2 pl-2"/>
                    </div>
                   
                </div>

             </div>
            </q-card-section>
          </q-card>
              
        
    </div>
</template>
<script setup>

</script>
<style >
    
</style>