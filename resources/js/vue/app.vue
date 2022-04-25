<template>
  <div class="toDoListContainer">
    <div class="heading">
      <h2 id="title">Todo List</h2>
      <add-item-form  v-on:reloadlist="getlist()"></add-item-form>
    </div>
    <list-view :items="items"
    v-on:reloadlist="getlist()"
    ></list-view>
  </div>
</template>

<script>
import addItemForm from "./addItemForm.vue";
import listView from "./listView.vue";
export default {
  data: function () {
    return {
      items: [],
    };
  },
  methods: {
    getlist() {
      axios
        .get("api/items")
        .then((response) => {
          this.items = response.data;
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
  created(){
    this.getlist();
  },
  components: {
    addItemForm,
    listView,
  },
};
</script>
<style scoped>
.toDoListContainer {
  width: 350px;
  margin: auto;
}
.heading {
  background: #e6e6e6;
  padding: 10px;
}
#title {
  text-align: center;
}
</style>

