function attachEvents() {

    const baseUrl = 'https://baas.kinvey.com/appdata/kid_rJK1ly2u4/biggestCatches';
    const kinveyUsername = "user";
    const kinveyPassword = "pass";
    const base64auth = btoa(`${kinveyUsername}:${kinveyPassword}`);
    const authHeaders = {"Authorization": "Basic " + base64auth, "Content-type": "application/json"};

    const $catches = $('#catches');

    $('.add').on('click', addCatch);
    $('.load').on('click', loadCatches);

    async function addCatch() {

        let $angler = $('#addForm .angler');
        let $weight = $('#addForm .weight');
        let $species = $('#addForm .species');
        let $location = $('#addForm .location');
        let $bait = $('#addForm .bait');
        let $captureTime = $('#addForm .captureTime');

        let angler = $angler.val();
        let weight = Number($weight.val());
        let species = $species.val();
        let location = $location.val();
        let bait = $bait.val();
        let captureTime = Number($captureTime.val());

        let newCatch = {
            angler,
            weight,
            species,
            location,
            bait,
            captureTime
        };


        try {
            await $.ajax({
                method: 'POST',
                url: baseUrl,
                headers: authHeaders,
                data: JSON.stringify(newCatch)
            });
        } catch (e) {
            console.error(e.message);
        }

        await loadCatches();

        $angler.val('');
        $weight.val('');
        $species.val('');
        $location.val('');
        $bait.val('');
        $captureTime.val('');
    }

    async function loadCatches() {

        $catches.empty();

        try {
            let catches = await $.ajax({
                method: 'GET',
                url: baseUrl,
                headers: authHeaders
            });

            for (const singleCatch of catches) {

                let $newDiv = $(`<div class="catch" data-id="${singleCatch._id}"></div>`);

                $newDiv.append(`
            <label>Angler</label>
            <input type="text" class="angler" value="${singleCatch.angler}"/>
            <label>Weight</label>
            <input type="number" class="weight" value="${singleCatch.weight}"/>
            <label>Species</label>
            <input type="text" class="species" value="${singleCatch.species}"/>
            <label>Location</label>
            <input type="text" class="location" value="${singleCatch.location}"/>
            <label>Bait</label>
            <input type="text" class="bait" value="${singleCatch.bait}"/>
            <label>Capture Time</label>
            <input type="number" class="captureTime" value="${singleCatch.captureTime}"/>`);

                let $updateBtn = $('<button class="update">Update</button>');
                let $deleteBtn = $('<button class="delete">Delete</button>');

                $updateBtn.on('click', updateCatch);
                $deleteBtn.on('click', deleteCatch);

                $newDiv.append($updateBtn);
                $newDiv.append($deleteBtn);

                $catches.append($newDiv);

            }
        } catch (e) {
            console.error(e.message);
        }
    }

    async function updateCatch(){
        let id = $(this).parent().data('id');

        let angler = $(this).parent().find('input.angler').val();
        let weight = Number($(this).parent().find('input.weight').val());
        let species = $(this).parent().find('input.species').val();
        let location = $(this).parent().find('input.location').val();
        let bait = $(this).parent().find('input.bait').val();
        let captureTime = Number($(this).parent().find('input.captureTime').val());

        let newCatch = {
            angler,
            weight,
            species,
            location,
            bait,
            captureTime
        };


        try {
            await $.ajax({
                method: 'PUT',
                url: baseUrl + '/' +id,
                headers: authHeaders,
                data: JSON.stringify(newCatch)
            });
        } catch (e) {
            console.error(e.message);
        }

        await loadCatches();

    }

    async function deleteCatch() {
        let id = $(this).parent().data('id');

        try {
            await $.ajax({
                method: 'DELETE',
                url: baseUrl + '/' +id,
                headers: authHeaders,
            });
        } catch (e) {
            console.error(e.message);
        }

        await loadCatches();
    }
}