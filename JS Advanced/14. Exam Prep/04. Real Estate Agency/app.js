function realEstateAgency() {

    let regOfferButton = $('button[name="regOffer"]');
    regOfferButton.on('click', createOffer);

    let findOfferButton = $('button[name="findOffer"]');
    findOfferButton.on('click', findOffer);

    let profit = 0;

    function createOffer() {

        let $rent = $('input[name="apartmentRent"]');
        let $type = $('input[name="apartmentType"]');
        let $commission = $('input[name="agencyCommission"]');

        if (validateCreatingData(Number($rent.val()), $type.val(), Number($commission.val()))) {

            let $div = $('<div class="apartment">');

            let $rentP = $(`<p>Rent: ${$rent.val()}</p>`);
            $div.append($rentP);

            let $typeP = $(`<p>Type: ${$type.val()}</p>`);
            $div.append($typeP);

            let $commissionP = $(`<p>Commission: ${$commission.val()}</p>`);
            $div.append($commissionP);

            $('#building').append($div);

            $('#message').text('Your offer was created successfully.')
        }else {
            $('#message').text('Your offer registration went wrong, try again')
        }

        resetInputs($rent, $type, $commission);
    }

    function findOffer() {

        let $budget = $('input[name="familyBudget"]');
        let $type = $('input[name="familyApartmentType"]');
        let $name = $('input[name="familyName"]');

        if(validateSearchingData(Number($budget.val()), $type.val(), $name.val())){
            rentApartment(Number($budget.val()), $type.val(), $name.val())
        }

        resetInputs($budget, $type, $name);
    }

    function validateCreatingData(rent, type, commission) {

        let validRent = rent !== 'NaN'
            && rent > 0;

        let validType = type !== ''
            && !type.includes(':');

        let validCommission = commission !== 'NaN'
            && commission >= 0
            && commission <= 100;

        return validRent && validType && validCommission;
    }

    function validateSearchingData(budget, type, name){

        let validBudget = budget !== 'NaN'
            && budget > 0;
        let validType = type !== '';
        let validName = name !== '';

        return validBudget && validType && validName;
    }

    function rentApartment(budget, type, name){

        let apartments = Array.from(document.getElementsByClassName('apartment'));

        apartments.forEach( (a) => {
            if (a.children[1].textContent === `Type: ${type}`){

                let rent = Number(a.children[0].textContent.split(' ')[1]);
                let commission = Number(a.children[2].textContent.split(' ')[1]);

                let commissionPrice = (rent * commission) / 100;
                let totalPrice = rent + commissionPrice;

                if (budget >= totalPrice){
                    $(a).css('border', '2px solid red');
                    $(a).empty();

                    let $nameP = $(`<p>${name}</p>`);
                    $(a).append($nameP);

                    let $liveP = $('<p>live here now</p>');
                    $(a).append($liveP);

                    let $button = $('<button>Move Out</button>');
                    $button.on('click', () => {
                        $(a).remove();
                        $('#message').text(`They had found cockroaches in ${name}\\'s apartment`);
                    });

                    $(a).append($button);

                    profit += commissionPrice * 2;

                    $('h1').text(`Agency profit: ${profit} lv.`);

                    $('#message').text('Enjoy your new home! :))');
                }else {
                    $('#message').text(' We were unable to find you a home, so sorry :(');
                }
            }else {
                $('#message').text(' We were unable to find you a home, so sorry :(');
            }

        })
    }

    function resetInputs(first, second, third) {
        first.val('');
        second.val('');
        third.val('');
    }
}