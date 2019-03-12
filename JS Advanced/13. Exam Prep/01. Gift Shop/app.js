function solution() {

    let $toyType = $('#toyType');
    let $toyPrice = $('#toyPrice');
    let $toyDescription = $('#toyDescription');

    $('button').on('click', prepareToy);

    function prepareToy() {
        let toyType = $toyType.val();
        let toyPrice = $toyPrice.val();
        let toyDescription = $toyDescription.val();

        let validType = toyType !== '';
        let validPrice = !isNaN(toyPrice);
        let validDescription = toyDescription.length >= 50;

        if (validType
            && validPrice
            && validDescription) {

            addToy(toyType, toyPrice, toyDescription)
        }

        reset();
    }

    function addToy(type, price, description) {

        let $toyDiv = $('<div class="gift">');
        let $toyImg = $('<img src="gift.png">');
        $toyDiv.append($toyImg);

        let $toyH2 = $('<h2>');
        $toyH2.text(type);
        $toyDiv.append($toyH2);

        let $toyP = $('<p>');
        $toyP.text(description);
        $toyDiv.append($toyP);

        let $toyButton = $(`<button>Buy it for $${price}</button>`);
        $toyButton.on('click', () => $toyDiv.remove());
        $toyDiv.append($toyButton);

        $('#christmasGiftShop').append($toyDiv);
        return true;
    }

    function reset() {
        $toyType.val('');
        $toyPrice.val('');
        $toyDescription.val('');
    }
}