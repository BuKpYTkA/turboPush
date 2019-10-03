<?php
/**
 * @var \App\Models\Order\Order $order
 */
?>

<p>Заказ номер: {{ $order->getId() }}</p>
<p>Имя: {{ $order->getMadeBy() }}</p>
<p>Марка машины: {{ $order->getMessage() }}</p>
<p>Номер телефон: {{ $order->getPhone() }}</p>

<a href="{{ route('order.confirm', ['order' => $order->getId()]) }}"><input type="button" value="подтвердить заказ"></a>
