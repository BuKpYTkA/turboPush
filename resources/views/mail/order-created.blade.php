<?php
/**
 * @var \App\Models\Order\Order $order
 */
?>

<p>Заказ номер: {{ $order->getId() }}</p>
<p>Имя: {{ $order->getMadeBy() }}</p>
<p>Марка машины: {{ $order->getMessage() }}</p>
<p>Номер телефон: {{ $order->getPhone() }}</p>
<form method="post" action="{{ route('order.confirm', ['order' => $order->getId()]) }}">
    @csrf
    <input type="submit" value="Подтвердить заказ">
</form>