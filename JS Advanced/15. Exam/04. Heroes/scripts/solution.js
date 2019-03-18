function solve() {
    let validKingdomNames = ['CASTLE', 'DUNGEON', 'FORTRESS', 'INFERNO', 'NECROPOLIS', 'RAMPART', 'STRONGHOLD', 'TOWER', 'CONFLUX'];
    let rebuildKingdomsPower = {};
    let rebuildKingdoms = [];
    let validHeroeTypes = ['fighter', 'mage', 'tank'];

    let $rebuildButton = $('#kingdom > div > button');
    $rebuildButton.on('click', rebuildKingdom);

    let joinButton = document.getElementsByTagName('button')[1];
    joinButton.addEventListener('click', joinHero);

    let attackButton = document.getElementsByTagName('button')[2];
    attackButton.addEventListener('click', war);


    function rebuildKingdom() {

        let $kingdomName = $('#kingdom > div > input[placeholder="Kingdom..."]');
        let $kingName = $('#kingdom > div > input[placeholder="King..."]');
        let kingdomName = $kingdomName.val();

        if (validKingdomNames.includes(kingdomName.toUpperCase())
            && $kingName.val().length >= 2){
            let $kingdom = $(`#${kingdomName.toLowerCase()}`);
            $kingdom.css('display', 'inline-block');
            $kingdom.append(`<h1>${kingdomName.toUpperCase()}</h1>`);
            $kingdom.append(`<div class="castle"></div>`);
            $kingdom.append(`<h2>${$kingName.val().toUpperCase()}</h2>`);
            let $fieldset = $('<fieldset>');
            $fieldset.append('<legend>Army</legend>');
            $fieldset.append('<p>TANKS - 0</p>');
            $fieldset.append('<p>FIGHTERS - 0</p>');
            $fieldset.append('<p>MAGES - 0</p>');
            $fieldset.append('<div class="armyOutput"></div>');
            $kingdom.append($fieldset);

            rebuildKingdoms.push(kingdomName.toUpperCase());
            rebuildKingdomsPower[kingdomName.toUpperCase()] = { attack : 0, defence : 0 }
        }

        $kingdomName.val('');
        $kingName.val('');
    }

    function joinHero() {

        let $heroType = $('input[name=characterType]:checked');
        let $heroName = $('#characters input[placeholder="Character..."]');
        let $kingdom = $('#characters input[placeholder="Kingdom..."]');

        let validName = $heroName.val().length >= 2;
        let validKingdom = rebuildKingdoms.includes($kingdom.val().toUpperCase());
        let validHeroType = validHeroeTypes.includes($heroType.val());


        if (validName && validKingdom && validHeroType) {
            let kingdomName = $kingdom.val().toLowerCase();

            if ($heroType.val() === 'fighter') {
                let numberOf = Number($(`#${kingdomName} > fieldset p:nth-child(3)`).text().split(' - ')[1]);
                numberOf++;
                $(`#${kingdomName} > fieldset p:nth-child(3)`).text(`FIGHTERS - ${numberOf}`);

                rebuildKingdomsPower[kingdomName.toUpperCase()].attack += 50;
                rebuildKingdomsPower[kingdomName.toUpperCase()].defence += 50;
            }
            if ($heroType.val() === 'tank') {
                let numberOf = Number($(`#${kingdomName} > fieldset p:nth-child(2)`).text().split(' - ')[1]);
                numberOf++;
                $(`#${kingdomName} > fieldset p:nth-child(2)`).text(`TANKS - ${numberOf}`);

                rebuildKingdomsPower[kingdomName.toUpperCase()].attack += 20;
                rebuildKingdomsPower[kingdomName.toUpperCase()].defence += 80;
            }
            if ($heroType.val() === 'mage') {
                let numberOf = Number($(`#${kingdomName} > fieldset p:nth-child(4)`).text().split(' - ')[1]);
                numberOf++;
                $(`#${kingdomName} > fieldset p:nth-child(4)`).text(`MAGES - ${numberOf}`);

                rebuildKingdomsPower[kingdomName.toUpperCase()].attack += 70;
                rebuildKingdomsPower[kingdomName.toUpperCase()].defence += 30;
            }

            let heroes =  $(`#${kingdomName} > fieldset > div`).text();

            $(`#${kingdomName} > fieldset > div`).text(`${heroes}${$heroName.val()} `)

        }

        $heroType.prop('checked', false);
        $heroName.val('');
        $kingdom.val('');
    }
    
    function war() {

        let attacker = $('#actions input[placeholder="Attacker..."]');
        let defender = $('#actions input[placeholder="Defender..."]');

        let attack = rebuildKingdomsPower[attacker.val().toUpperCase()].attack;
        let defence = rebuildKingdomsPower[defender.val().toUpperCase()].defence;

        let attackKing = $(`#${attacker.val().toLowerCase()} h2`).text();

        if (attack > defence){
            $(`#${defender.val().toLowerCase()} h2`).text(attackKing);
        }
    }
}

solve();




