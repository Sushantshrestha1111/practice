<template>
  <div class="xl:min-w-50px">
    <strong><span class="text-green">Chat With Friends</span></strong>
    <div v-if="loading">Loading...</div>
    <router-link
        v-for="friend in friends"
        :key="friend.id"
        :to="`/message/${friend.id}`"
        class="no-underline"
      >
        <FriendsVue
          :firstName="friend.first_name"
          :lastName="friend.last_name"
          :avatar="friend.avatar"
        />
      </router-link>
  </div>
</template>

<script setup>
import { useFriendsStore } from "../../stores/index";
import FriendsVue from "../UserCard.vue";

// Access the store
const friendsStore = useFriendsStore();
const { friends, loading, fetchFriends } = friendsStore;

// Fetch data on component mount
fetchFriends();
</script>
