function solve() {
    let generateButton = document.getElementsByTagName('button')[0];
    generateButton.addEventListener('click', generateProducts);
    
    let buyButton = document.getElementsByTagName('button')[1];
    buyButton.addEventListener('click', buyProducts);

    function generateProducts() {
        let productsToGenerate = JSON.parse(document.getElementsByTagName('textarea')[0].value)
        let listDiv = document.getElementById('furniture-list');

        for (let product of productsToGenerate){

            let divElement = document.createElement('div');
            divElement.setAttribute('class', 'furniture');

            let nameElement = document.createElement('p');
            nameElement.textContent = `Name: ${product.name}`;
            divElement.appendChild(nameElement);

            let imgElement = document.createElement('img');
            imgElement.setAttribute('src', product.img);
            divElement.appendChild(imgElement);

            let priceElement = document.createElement('p');
            priceElement.textContent = `Price: ${product.price}`;
            divElement.appendChild(priceElement);

            let factorElement = document.createElement('p');
            factorElement.textContent = `Decoration factor: ${product.decFactor}`;
            divElement.appendChild(factorElement);

            let checkboxElement = document.createElement('input');
            checkboxElement.setAttribute('type', 'checkbox');
            divElement.appendChild(checkboxElement);

            listDiv.appendChild(divElement);
        }
    }
    
    function buyProducts() {
        let products = Array.from(document.getElementById('furniture-list').children);
        let checkedProducts = [];
        let totalPrice = 0;
        let totalFactor = 0;
        let outputTextarea = document.getElementsByTagName('textarea')[1];

        for (let product of products){
            let isChecked = product.getElementsByTagName('input')[0].checked;
            if (isChecked){
                let name = product.getElementsByTagName('p')[0].textContent.split(' ')[1];
                checkedProducts.push(name);
                let price = Number(product.getElementsByTagName('p')[1].textContent.split(' ')[1]);
                totalPrice += price;
                let factor = Number(product.getElementsByTagName('p')[2].textContent.split(' ')[2]);
                totalFactor += factor;
            }
        }

        outputTextarea.value += `Bought furniture: ${checkedProducts.join(', ')}\n`;
        outputTextarea.value += `Total price: ${totalPrice.toFixed(2)}\n`;
        outputTextarea.value += `Average decoration factor: ${totalFactor / checkedProducts.length}`;
    }
}