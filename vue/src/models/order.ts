export class Order {
  id: number | null;
  orderNumber: string;
  orderDatetime: Date;

  constructor(order: Partial<Order> = {}) {
    this.id = order.id ?? null;
    this.orderNumber = order.orderNumber ?? "";
    this.orderDatetime = order.orderDatetime ?? new Date();
  }
}
