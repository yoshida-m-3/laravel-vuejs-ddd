import { Order } from "../../models/order";
import { httpClient } from "../../services/httpClient";

export const findOrder = async (orderId: number): Promise<Order | null> => {
  const response = await httpClient.get<Order>(`orders/${orderId}`);

  return new Order(response.data);
};

type CreateOrderResponse = {
  orderId: string;
};

export const createOrder = async (
  orderNumber: string
): Promise<CreateOrderResponse> => {
  const response = await httpClient.post<CreateOrderResponse>("orders", {
    orderNumber: orderNumber,
  });

  return response.data;
};
