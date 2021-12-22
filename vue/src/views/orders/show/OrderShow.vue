<template>
  <div>
    <p>注文ID</p>
    {{ order.id }}
    <p>注文番号</p>
    {{ order.orderNumber }}
    <p>注文日時</p>
    {{ order.orderDatetime }}
  </div>
</template>

<script lang="ts">
import { defineComponent, onBeforeMount, reactive, PropType } from "vue";
import { Order } from "../../../models/order";
import { findOrder } from "../orderApi";

export default defineComponent({
  name: "OrderShow",
  props: {
    orderId: { type: Number as PropType<number>, required: true },
  },
  setup(props) {
    const order = reactive<Order>(new Order());

    onBeforeMount(async () => {
      const response = await findOrder(props.orderId);
      if (response !== null) {
        order.id = response.id;
        order.orderNumber = response.orderNumber;
        order.orderDatetime = response.orderDatetime;
      }
    });

    return { order };
  },
});
</script>

<style scoped></style>
