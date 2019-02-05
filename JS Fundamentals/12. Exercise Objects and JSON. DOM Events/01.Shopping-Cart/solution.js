function solve() {
    Array.from(document.querySelectorAll('.product button')).forEach(btn => {
            btn.addEventListener('click', addProduct);
        });

    let textArea = document.querySelector('textarea');
    let totalPrice = 0;
    let products = [];

    let buyButton = document.querySelector('#exercise > button');
    buyButton.addEventListener('click', buyProducts);

    function addProduct(e) {
        let parentElement = e.target.parentElement;
        let productName = parentElement.children[1].textContent;
        let productPrice = Number(parentElement.children[2].textContent.split(' ')[1]);
        totalPrice += productPrice;
        if (!products.includes(productName)){
            products.push(productName)
        }

        textArea.value += `Added ${productName} for ${productPrice.toFixed(2)} to the cart.\n`
    }

    function buyProducts() {
        console.log(totalPrice);
        console.log(typeof  totalPrice);
        textArea.value += `You bought ${products.join(', ')} for ${totalPrice.toFixed(2)}.\n`
    }
}