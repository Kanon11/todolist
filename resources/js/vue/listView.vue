<template>
  <div>
    <div v-for="(item,index) in items" :key="index">
      <item-view :item="item" class="item"
      v-on:itemchanged="$emit('reloadlist')"
      />
    </div>
  </div>
</template>
<script>
import ItemView from './itemView.vue';
import itemView from './itemView.vue';
export default {
  props:['items'],
  components:{
    ItemView
  }
};
</script>
<style scoped>
.item{
  background: #e6e6e6;
  padding: 5px;
  margin-top: 5px;
}
</style>