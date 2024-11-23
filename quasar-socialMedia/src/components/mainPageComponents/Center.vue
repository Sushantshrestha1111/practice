<template>
    <div class="p-5">
      <!-- Make the container a Flex Row -->
      <div class="flex flex-row flex-wrap gap-4">
        <router-link
          v-for="friend in friends"
          :key="friend.id"
          :to="`/message/${friend.id}`"
          class="no-underline flex items-center"
        >
          <!-- Friend card -->
          <FlexUser
            :firstName="friend.first_name"
            :lastName="friend.last_name"
            :avatar="friend.avatar"
          />
        </router-link>
      </div>
  
      <!-- Share Post -->
      <div class="mt-5">
        <SharePost />
      </div>
  
      <!-- Post Section -->
      <div class="mt-5">
        <Post />
      </div>
    </div>
  </template>
  
  <script setup>
  import SharePost from "../SharePost.vue";
  import Post from "./Post.vue";
  import FlexUser from "../Friends.vue";
  import { useFriendsStore } from "../../stores/index";
  
  // Access the store
  const friendsStore = useFriendsStore();
  const { friends, loading, fetchFriends } = friendsStore;
  
  // Fetch data on component mount
  fetchFriends();
  </script>
  
  <style>
  /* Add custom styles here if needed */
  </style>
  