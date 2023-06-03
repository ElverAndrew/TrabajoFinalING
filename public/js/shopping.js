const addShoppingCart = document.querySelectorAll(".add_cart");
addShoppingCart.forEach((addToCartButton) => {
    addToCartButton.addEventListener("click", addToCartClicked);
});

const shoppingCartItemContainer = document.querySelector(".shopItemContainer");

function addToCartClicked(event) {
    const button = event.target;
    const item = button.closest(".popular__card");

    const itemTitle = item.querySelector(".popular__name").textContent;
    const itemPrice = item.querySelector(".popular__price").textContent;
    const itemImage = item.querySelector(".popular__img").src;

    addItemToShoppingCart(itemTitle, itemPrice, itemImage);
}

function addItemToShoppingCart(itemTitle, itemPrice, itemImage) {

    const elementsTitle = shoppingCartItemContainer.getElementsByClassName('.shoppingCartItemTitle');

    for(let i = 0; i < elementsTitle.length; i++) {
        if (elementsTitle[i].innerText === itemTitle) {
            let elementsQuantity = elementsTitle[i].parentElement.querySelector('.input_cantidad');
            elementsQuantity.value++;
            return;
        }
    }

    const shoppingCartRow = document.createElement('tr');
    shoppingCartRow.classList.add('des');
    const shoppingCartContent = `
    <td data-label="Imagen"><img src="${itemImage}"></td>
    <td data-label="Producto" class="shoppingCartItemTitle">${itemTitle}</td>
    <td data-label="Precio" class="shoppingCartItemPrice">${itemPrice}</td>
    <td><input class="input_cantidad" type="number" value="1"></td>
    <td><button class="btnDelete" type="submit" value="Borrar">Borrar</button></td>
    <td><a href="/carrito">Comprar</a></td>
    `;

    shoppingCartRow.innerHTML = shoppingCartContent;
    shoppingCartItemContainer.append(shoppingCartRow);

    shoppingCartRow.querySelector('.btnDelete').addEventListener('click', removeItem);

    shoppingCartRow.querySelector('.input_cantidad').addEventListener('change', quantityChange);

    updateShoppingCartTotal();
}

function updateShoppingCartTotal(){
    let total = 0;
    const shoppingCartTotal = document.querySelector(".shoppingCartTotal");

    const shoppingCartItems = document.querySelectorAll(".des");

    shoppingCartItems.forEach((shoppingCartItem) => {
        const shoppingCartItemPriceElement = shoppingCartItem.querySelector('.shoppingCartItemPrice');

        const shoppingCartItemPrice = Number(shoppingCartItemPriceElement.textContent.replace('S/', ''));

        const shoppingCartItemQuantityElement = shoppingCartItem.querySelector('.input_cantidad');

        const shoppingCartItemQuantity = Number(shoppingCartItemQuantityElement.value);

        total = total + shoppingCartItemPrice * shoppingCartItemQuantity;
    });
    shoppingCartTotal.innerHTML = `S/ ${total.toFixed(2)}`;
};

function removeItem(event) {
    const buttonClicked = event.target;
    buttonClicked.closest('.des').remove();
    updateShoppingCartTotal();
}

function quantityChange(event) {
    const input = event.target;
    input.value <= 0 ? (input.value = 1) : null;
    updateShoppingCartTotal();
}
