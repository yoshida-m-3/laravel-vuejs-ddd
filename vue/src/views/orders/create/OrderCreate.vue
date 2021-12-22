<template>
  <div>
    <p>注文番号</p>
    <input type="text" v-model="orderNumber" />
    <input type="button" value="新規追加" @click="create" />
  </div>
</template>

<script lang="ts">
import { defineComponent, ref } from "vue";
import { createOrder } from "../orderApi";

export default defineComponent({
  name: "OrderCreate",
  setup() {
    const orderId = ref<number | null>(null);
    const orderNumber = ref<string>("");

    const create = async () => {
      const response = await createOrder(orderNumber.value);
      orderId.value = response.orderId;
    };

    return {
      orderId,
      orderNumber,
      create,
    };
  },
});
</script>

<style scoped></style>
