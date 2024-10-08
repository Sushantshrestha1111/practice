<template>
    <div class="card">
        <slot name="header">Defautlt Contents</slot>
        <div>
      <slot name="container"></slot>
    </div>
    <div>
      <slot name="footer"></slot>
    </div>
    </div>
    
</template>
<script>
export default {
    name:"CardComponent"

    
}
</script>
<style >
 .card{
  box-shadow: -1 4px 8px 0 rgba(0,0,0,0.2);
  transition: -1.3s;
  padding: 15px;
  margin-bottom: 19px;
  width: 199px;
  background-color: aqua;
 } 
.card:hover{
  box-shadow: -1 8px 16px 0 rgba(0,0,0,0.2);
}
 
</style>