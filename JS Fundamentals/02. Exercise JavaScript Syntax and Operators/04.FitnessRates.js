function solve(dayOfWeek, service, time) {

    let price;

    if (time >= 8.00 && time <= 15.00) {
        if (service === 'Fitness') {
            switch (dayOfWeek) {
                case 'Monday':
                case 'Tuesday':
                case 'Wednesday':
                case 'Thursday':
                case 'Friday':
                    price = 5.00;
                    break;
                default:
                    price = 8.00;
            }
        } else if (service === 'Sauna') {
            switch (dayOfWeek) {
                case 'Monday':
                case 'Tuesday':
                case 'Wednesday':
                case 'Thursday':
                case 'Friday':
                    price = 4.00;
                    break;
                default:
                    price = 7.00;
            }
        } else if (service === 'Instructor') {
            switch (dayOfWeek) {
                case 'Monday':
                case 'Tuesday':
                case 'Wednesday':
                case 'Thursday':
                case 'Friday':
                    price = 10.00;
                    break;
                default:
                    price = 15.00;
            }
        }
    } else if (time > 15.00 && time <= 22.00) {
        if (service === 'Fitness') {
            switch (dayOfWeek) {
                case 'Monday':
                case 'Tuesday':
                case 'Wednesday':
                case 'Thursday':
                case 'Friday':
                    price = 7.50;
                    break;
                default:
                    price = 8.00;
            }
        } else if (service === 'Sauna') {
            switch (dayOfWeek) {
                case 'Monday':
                case 'Tuesday':
                case 'Wednesday':
                case 'Thursday':
                case 'Friday':
                    price = 6.50;
                    break;
                default:
                    price = 7.00;
            }
        } else if (service === 'Instructor') {
            switch (dayOfWeek) {
                case 'Monday':
                case 'Tuesday':
                case 'Wednesday':
                case 'Thursday':
                case 'Friday':
                    price = 12.50;
                    break;
                default:
                    price = 15.00;
            }
        }
    }

    print(price);

    function print(price) {
        console.log(price)
    }
}

solve('Monday', 'Sauna', 15.00);