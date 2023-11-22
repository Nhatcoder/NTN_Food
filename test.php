<div class="dz-body">
    <div class="btn-quantity style-1">
        <input id="demo_vertical2" type="text" value="2" name="demo_vertical2">
        <span class="input-group-btn-vertical">
            <button class="btn btn-default bootstrap-touchspin-up" type="button"
                onclick="increaseQuantity('demo_vertical2', 'price1')"><i class="ti-plus" id="plusButton"></i></button>
            <button class="btn btn-default bootstrap-touchspin-up" type="button"
                onclick="decreaseQuantity('demo_vertical2', 'price1')"><i class="ti-minus"></i></button>
        </span>
    </div>
    <h5 class="price text-primary mb-0" id="price1">
        80.000VNĐ
    </h5>
</div>

<script>
    function increaseQuantity(inputId, priceId) {
        const inputElement = document.getElementById(inputId);
        const priceElement = document.getElementById(priceId);

        let currentQuantity = parseInt(inputElement.value);
        currentQuantity++;

        inputElement.value = currentQuantity;

        updatePrice(priceId, currentQuantity);
    }

    function decreaseQuantity(inputId, priceId) {
        const inputElement = document.getElementById(inputId);
        const priceElement = document.getElementById(priceId);

        let currentQuantity = parseInt(inputElement.value);
        if (currentQuantity > 0) {
            currentQuantity--;

            inputElement.value = currentQuantity;

            updatePrice(priceId, currentQuantity);
        }
    }

    function updatePrice(priceId, quantity) {
        const priceElement = document.getElementById(priceId);
        const basePrice = 80000; // Replace this with the actual base price

        let totalPrice = basePrice * quantity;

        priceElement.textContent = `${totalPrice.toLocaleString('vi-VN')}VNĐ`;
    }

</script>