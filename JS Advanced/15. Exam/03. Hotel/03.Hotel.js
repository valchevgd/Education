class Hotel {

    constructor(name, capacity) {
        this.name = name;
        this.capacity = capacity;
        this.booking = [];
        this.currentBookingNumber = 0;
        this.roomsTypes = {
            single: Math.floor(capacity / 2),
            double: Math.floor(capacity * 0.3),
            maisonette: Math.floor(capacity * 0.2),
        };
        this.servicesTypes = {
            food: 10,
            drink: 15,
            housekeeping: 25
        }
    }

    roomsPricing() {
        return {
            single: 50,
            double: 90,
            maisonette: 135
        }
    }

    servicesPricing() {
        return {
            food: 10,
            drink: 15,
            housekeeping: 25
        }
    }

    rentARoom(clientName, roomType, nights) {
        let result = '';

        if (this.roomsTypes[roomType] > 0) {
            let roomNumber = ++this.currentBookingNumber;
            let room = {
                roomNumber,
                clientName,
                roomType,
                nights
            };

            this[roomType]--;
            this.booking.push(room);

            result = `Enjoy your time here Mr./Mrs. ${clientName}. Your booking is ${roomNumber}.`
        } else {
            result = `No ${roomType} rooms available! `;

            for (const type in this.roomsTypes) {
                if (type !== roomType) {
                    result += `Available ${type} rooms: ${this.roomsTypes[type]}. `
                }
            }
        }

        return result.trim();
    }

    roomService(number, serviceType) {
        let result = '';

        let validNumber = false;


        if (number <= this.currentBookingNumber) {
            for (const room of this.booking) {
                if (room.roomNumber === number) {
                    validNumber = true;
                    break;
                }
            }
        }

        if (!validNumber) {
            result = `The booking ${number} is invalid.`;
        } else if (!this.servicesTypes.hasOwnProperty(serviceType)) {
            result = `We do not offer ${serviceType} service.`
        } else {

            let clientName = '';

            for (const room of this.booking) {
                if (room.roomNumber === number) {
                    clientName = room.clientName;

                    if (!room.hasOwnProperty('services')) {
                        room.services = [];
                    }

                    room.services.push(serviceType);
                    break;
                }
            }
            result = `Mr./Mrs. ${clientName}, Your order for ${serviceType} service has been successful.`;
        }

        return result;
    }

    checkOut(roomNumber) {
        let result = '';

        let validNumber = false;


        if (roomNumber <= this.currentBookingNumber) {
            for (const room of this.booking) {
                if (room.roomNumber === roomNumber) {
                    validNumber = true;
                    break;
                }
            }
        }

        if (validNumber) {

            let price = 0;
            let servicesPrice = 0;
            let totalPrice = 0;
            let clientName = '';

            for (let i = 0; i < this.booking.length; i++) {
                let room = this.booking[i];

                if (room.roomNumber === roomNumber) {
                    clientName = room.clientName;
                    price = Number(this.roomsPricing()[room.roomType]) * Number(room.nights);

                    result = `We hope you enjoyed your time here, Mr./Mrs. ${clientName}.`;

                    if (room.hasOwnProperty('services')) {
                        for (const service of room.services) {
                            servicesPrice += Number(this.servicesPricing()[service]);
                        }

                        totalPrice = price + servicesPrice;

                        result += ` The total amount of money you have to pay is ${totalPrice} BGN. You have used additional room services, costing ${servicesPrice} BGN."`
                    } else {
                        result += ` The total amount of money you have to pay is ${price} BGN.`
                    }

                    this.booking.splice(i, 1);

                    this.roomsTypes[room.roomType]++;
                    break;
                }

            }
        } else {
            result = `The booking ${roomNumber} is invalid.`
        }

        return result;
    }

    report() {
        let result = `${this.name.toUpperCase()} DATABASE:\n`;
        result += '--------------------\n';

        if (this.booking.length === 0) {
            result += `There are currently no bookings.`
        } else {
            for (let i = 0; i < this.booking.length; i++) {
                let room = this.booking[i];
                result += `bookingNumber - ${room.roomNumber}\n`;
                result += `clientName - ${room.clientName}\n`;
                result += `roomType - ${room.roomType}\n`;
                result += `nights - ${room.nights}\n`;
                if (room.hasOwnProperty('services')) {
                    result += `services: ${room.services.join(', ')}`
                }

                if (i < this.booking.length - 1) {
                    result += '----------\n'
                }
            }
        }

        return result;
    }
}


let hotel = new Hotel('HotUni', 10);

console.log(hotel.rentARoom('Peter', 'single', 4));
console.log(hotel.rentARoom('Robert', 'double', 4));
console.log(hotel.rentARoom('Geroge', 'maisonette', 6));
console.log(hotel.roomService(3, 'housekeeping'));
console.log(hotel.roomService(3, 'drink'));
console.log(hotel.roomService(2, 'room'));
console.log(hotel.checkOut(3));
console.log(hotel.report());