function attachEvents() {

    const $searchingLocation = $('#location');
    const locationsUrl = 'https://judgetests.firebaseio.com/locations.json';
    const currentConditionUrl = 'https://judgetests.firebaseio.com/forecast/today/';
    const upcomingConditionUrl = 'https://judgetests.firebaseio.com/forecast/upcoming/';
    const forecast = {
        'Sunny': '&#x2600',
        'Partly sunny': '&#x26C5',
        'Overcast': '&#x2601',
        'Rain': '&#x2614',
        degrees: '&#176'
    };

    const $forecast = $('#forecast');
    const $current = $('#current');
    const $upcoming = $('#upcoming');

    $('#submit').on('click', getLocation);

    async function getLocation() {

        let searchingLocation = $searchingLocation.val();
        try {
            let allTowns = await $.ajax({
                method: 'GET',
                url: locationsUrl
            });

            let townCode = allTowns.filter(t => t.name === searchingLocation)[0].code;

            await getCurrentCondition(townCode);
            await getUpcomingCondition(townCode);
        } catch (error) {
            displayError();
        }
    }

    async function getCurrentCondition(code) {

        try {
            let currentCondition = await $.ajax({
                method: 'GET',
                url: `${currentConditionUrl}${code}.json`
            });

            displayCurrentCondition(currentCondition);
        } catch (error) {
            displayError();
        }
    }

    function displayCurrentCondition(condition) {

        $forecast.css('display', 'block');

        $current.append(`<span class="condition symbol">${forecast[condition.forecast.condition]}</span>`);

        let $conditionSpan = $('<span class="condition"></span>');

        $conditionSpan.append($(`<span class="forecast-data">${condition.name}</span>`));
        $conditionSpan.append($(`<span class="forecast-data">${condition.forecast.low}${forecast.degrees}/${condition.forecast.high}${forecast.degrees}</span>`));
        $conditionSpan.append($(`<span class="forecast-data">${condition.forecast.condition}</span>`));

        $current.append($conditionSpan);

    }

    async function getUpcomingCondition(code) {
        try {
            let upcomingCondition = await $.ajax({
                method: 'GET',
                url: `${upcomingConditionUrl}${code}.json`
            });

            displayUpcomingCondition(upcomingCondition);
        } catch (error) {
            console.error(error.message)
        }
    }

    function displayUpcomingCondition(upcomingCondition) {

        $upcoming.append(makeUpcomingForecast(upcomingCondition.forecast[0]));
        $upcoming.append(makeUpcomingForecast(upcomingCondition.forecast[1]));
        $upcoming.append(makeUpcomingForecast(upcomingCondition.forecast[2]));
    }

    function displayError() {
        $forecast.css('display', 'block').text('Error');
    }

    function makeUpcomingForecast(condition) {

        let $conditionSpan = $('<span class="upcoming"></span>');

        $conditionSpan.append($(`<span class="symbol">${forecast[condition.condition]}</span>`));
        $conditionSpan.append($(`<span class="forecast-data">${condition.low}${forecast.degrees}/${condition.high}${forecast.degrees}</span>`));
        $conditionSpan.append($(`<span class="forecast-data">${condition.condition}</span>`));

        return $conditionSpan;
    }
}