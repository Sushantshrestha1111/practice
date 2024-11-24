import { store } from 'quasar/wrappers'
import { createPinia } from 'pinia'

/*
 * If not building with SSR mode, you can
 * directly export the Store instantiation;
 *
 * The function below can be async too; either use
 * async/await or return a Promise which resolves
 * with the Store instance.
 */
// src/stores/friendsStore.js
import { defineStore } from 'pinia';
import { ref } from 'vue';

export const useFriendsStore = defineStore('friends', () => {
  const friends = ref([]);
  const loading = ref(false);

  // Fetch friends from API
  const fetchFriends = async () => {
    if (friends.value.length > 0) return; 
    loading.value = true;
    try {
      const response = await fetch("https://reqres.in/api/users");
      const data = await response.json();
      friends.value = data.data;
    } catch (error) {
      console.error("Error fetching friends:", error);
    } finally {
      loading.value = false;
    }
  };

  return { friends, loading, fetchFriends };
});

export default store(() => {
  const pinia = createPinia()

 
  return pinia
})
