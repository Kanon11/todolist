<template>
  <div class="item">
    <input type="checkbox" @change="UpdateItem()" v-model="item.completed" />
    <!-- <input type="hiden" v-model="item.completed_at"> -->
    <span :class="[item.completed ? 'completed' : '', 'itemText']">{{
      item.name
    }}</span>

    <button @click="removeItem()" class="trashcan">
      <font-awesome-icon icon="trash"></font-awesome-icon>
    </button>
  </div>
</template>

<script>
export default {
  props: ["item"],
  methods: {
    UpdateItem() {
      axios
        .put("api/item/" + this.item.id, {
          item: this.item
        })
        .then((response) => {
          if (response.status == 200) {
            this.$emit("itemchanged");
          }
        })
        .catch((error) => {
          console.log(error);
        });
    },
    removeItem() {
      axios
        .delete("api/item/" + this.item.id)
        .then((response) => {
          if (response.status == 200) {
            this.$emit("itemchanged");
          }
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>
<style scoped>
.completed {
  text-decoration: line-through;
  color: #999999;
}
.itemText {
  width: 100%;
  margin-left: 20px;
}
.item {
  display: flex;
  justify-content: center;
  align-items: center;
}
.trashcan {
  background: #e6e6e6;
  color: red;
  border: none;
  outline: none;
}
</style>