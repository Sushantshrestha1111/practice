import { defineStore } from 'pinia';

export const useTaskStore = defineStore('taskStore', {
  state: () => ({
    tasks: [
      { id: 1, title: 'Buy some milk', isFav: false },
      { id: 2, title: 'Finish the project', isFav: true },
      { id: 3, title: 'Read a book', isFav: false },
    ],
    name: 'sushant',
  }),
  
  getters: {
    fav(state) {
      return state.tasks.filter(t => t.isFav);
    },
    favCount(){
      return this.tasks.reduce((p,c)=>{
        return c.isFav? p+1:p  // if is favourate add 1 to p if not do nothing to p
      },0)
    },
    totalCount:(state)=>{
      return state.tasks.length

    }
  },
});
