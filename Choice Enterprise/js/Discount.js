function handleDiscounts(current_discount) {
    quantity = parseInt(document.getElementById('Quantity').value)
    itemPrice = parseInt(document.getElementById('ItemPrice').value)
    totalPrice = quantity * itemPrice
    dis=current_discount * totalPrice
    document.getElementById('Discount').value = dis.toFixed(2)
    document.getElementById('Discounted').value = totalPrice - (current_discount * totalPrice)
}