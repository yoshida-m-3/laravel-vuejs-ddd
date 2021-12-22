<template>
  <h2>新規追加</h2>
  <OrderCreate />
  <h2>参照</h2>
  <OrderShow :orderId="1" />
</template>

<script setup lang="ts">
import OrderCreate from "./views/orders/create/OrderCreate.vue";
import OrderShow from "./views/orders/show/OrderShow.vue";
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
