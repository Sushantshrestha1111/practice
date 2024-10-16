<template>
    <div>
        <!-- <button @click="getPost">Post List</button>
         -->
    </div>
    <h3 v-if="errorMsg">{{ errorMsg }}</h3>
    <div v-for="post in posts" :key="post.id">
        <h3>{{ post.id }} {{ post.title }}</h3>
        <p>{{ post.body  }}</p>
    </div>
</template>
<script>
import axios from 'axios'

export default {
    
    name:'PostList',
    created(){
        this.getPost()

    },
    data(){
        return{
            posts:[],
            errorMsg:''
        }
    },
    methods:{
        getPost(){
            axios.get('https://jsonplaceholder.typicode.com/posts')
            .then((response)=>{
                console.log(response.data)
                this.posts=response.data
            })

            .catch((error)=>{
               console.log(error)
               this.errorMsg = 'Error retriving data'
            })

        }
    }
    
}
</script>
<style>
    
</style>