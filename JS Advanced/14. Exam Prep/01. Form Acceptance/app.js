function acceptance() {

    let $companyName = $('#fields td input[name="shippingCompany"]');
    let $productName = $('#fields td input[name="productName"]');
    let $productQuantity = $('#fields td input[name="productQuantity"]');
    let $productScrape = $('#fields td input[name="productScrape"]');

    function validateInput() {

        let companyName = $companyName.val() !== '';
        let productName = $productName.val() !== '';
        let productQuantity = Number($productQuantity.val()) !== 'NaN'
        && Number($productQuantity.val()) > Number($productScrape.val());
        let productScrape = Number($productScrape.val()) !== 'NaN';

        return companyName && productName && productQuantity && productScrape
    }

    if (validateInput()){
        let $div = $('<div>');

        let productsLeft = Number($productQuantity.val()) - Number($productScrape.val());
        let $p = $(`<p>[${$companyName.val()}] ${$productName.val()} - ${productsLeft} pieces</p>`);
        $div.append($p);

        let $button = $('<button type="button">Out of stock</button>');
        $button.on('click', () => $div.remove());
        $div.append($button);

        $('#warehouse').append($div);
    }

    $companyName.val('');
    $productName.val('');
    $productQuantity.val('');
    $productScrape.val('');

}