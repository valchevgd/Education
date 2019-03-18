function solve() {
    let checkboxValues = [];
    let coursesPrices = {
        Fundamentals : 170,
        Advanced : 180,
        Applications : 190,
        Web : 490
    };

    $('button').on('click', singMeUp);

    function singMeUp() {
        $('input[type="checkbox"]:checked').each(function (index, elem) {
            let course = $(elem).val().split('-')[1];
            course = course.charAt(0).toUpperCase() + course.slice(1);

            checkboxValues.push(course);
        });

        let form = $('input[name=educationForm]:checked').val();

        let totalPrice = 0;

        if (form === 'onsite') {
            if (checkboxValues.length === 2
                && checkboxValues.includes('Fundamentals')
                && checkboxValues.includes('Advanced')) {
                totalPrice = 342;
            }else if (checkboxValues.length === 3
                && !checkboxValues.includes('Web')){
                let modulePrice = coursesPrices.Fundamentals + coursesPrices.Advanced + coursesPrices.Applications;
                totalPrice = modulePrice - modulePrice * 0.06;
                totalPrice -= modulePrice * 0.06;
            }else  if (checkboxValues.length === 4){
                let modulePrice = 342 + coursesPrices.Applications;
                totalPrice = modulePrice - modulePrice * 0.06 + coursesPrices.Web;
                totalPrice -= modulePrice * 0.06;
            }else {

                for (const course of checkboxValues){
                    totalPrice += coursesPrices[course];
                }
            }


        } else {
            if (checkboxValues.length === 2
                && checkboxValues.includes('Fundamentals')
                && checkboxValues.includes('Advanced')) {
                totalPrice = (170 - 170 * 0.06) + (172 - 172 * 0.06);
            }if (checkboxValues.length === 3
                && !checkboxValues.includes('Web')){
                let modulePrice = (170 - 170 * 0.06) + (172 - 172 * 0.06) + coursesPrices.Applications;
                let moduleDiscount = modulePrice - modulePrice * 0.06;
                totalPrice = moduleDiscount - moduleDiscount * 0.06;
            }if (checkboxValues.length === 4){
                let modulePrice = (170 - 170 * 0.06) + (172 - 172 * 0.06) + coursesPrices.Applications;
                let moduleDiscount = modulePrice - modulePrice * 0.06;
                totalPrice = moduleDiscount - (moduleDiscount * 0.06) + (coursesPrices.Web - coursesPrices.Web * 0.06);
            }else {

                for (const course of checkboxValues){
                    totalPrice += coursesPrices[course] - coursesPrices[course] * 0.06;
                }
            }
        }

        for (const course of checkboxValues){
            $('#myCourses > div > ul').append(`<li>JS-${course}</li>`)
        }

        $('#myCourses > div.courseFoot > p').text(`Cost: ${Math.floor(totalPrice)}.00 BGN`);

        if (checkboxValues.length === 4){
            $('#myCourses > div > ul').append(`<li>HTML and CSS</li>`);
        }

        checkboxValues = [];
    }



}

solve();