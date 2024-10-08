<template >
<NameList>
  <template v-slot:default="slotProps">
    {{ slotProps.firstName }} {{ slotProps.lastName }}
  </template>
</NameList>
<NameList>
  <template v-slot:default="slotProps">
    {{ slotProps.firstName }}
  </template>
</NameList>

<NameList>
  <template v-slot:default="slotProps">
    {{ slotProps.lastName }} {{ slotProps.firstName }}
  </template>
</NameList>
</template>
<script>
import NameList from './components/NameList.vue';
export default {
name:"App",
components:{
  NameList,

}
}
</script>
<style>

</style>