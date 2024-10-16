<template>
    <h1>jobs page</h1>
    <div v-for="job in jobs" :key="job.id">
        <router-link :to="{name:'jobsid',params:{id:job.id}}">
            <h1>{{ job.name }}</h1>

        </router-link>
        
        
    </div>
</template>
<script>
export default {
    name:'Job',
   data (){
    return{
        jobs:[
            {id:1,name:'name'},
            {id:2,name:'name2'},
            {id:3,name:'name2'}
        ]
    }
   }
}
</script>
