class Vacation {

    constructor(organizer, destination, budget) {
        this.organizer = organizer;
        this.destination = destination;
        this.budget = budget;
        this.kids = {};
    }

    registerChild(name, grade, budget) {
        let kid = {name, budget};

        if (!this.kids.hasOwnProperty(grade) && budget >= this.budget) {
            this.kids[grade] = [];
        }

        if (budget < this.budget) {
            return `${name}'s money is not enough to go on vacation to ${this.destination}.`
        }

        if (this.kids[grade].some(k => k.name === name)) {
            return `${name} is already in the list for this ${this.destination} vacation.`
        }


        this.kids[grade].push(kid);

        //TODO right returning values
        return this.kids[grade];
    }

    removeChild(name, grade) {

        if (!this.kids.hasOwnProperty(grade) || !this.kids[grade].some(k => k.name === name)) {
            return `We couldn't find ${name} in ${grade} grade.`
        }

        this.kids[grade].splice(this.kids[grade].indexOf(this.kids[grade].find(k => k.name === name)), 1);

//TODO if property is empty array

        return this.kids[grade];
    }

    toString() {

        let result = '';
        let children = this.numberOfChildren();
        if (children === 0) {
            result = `No children are enrolled for the trip and the organization of ${this.organizer} falls out...`
        } else {
            result = `${this.organizer} will take ${children} children on trip to ${this.destination}\n`;

            for (const grade in this.kids){
                result += `Grade: ${grade}\n`;

                for (let i = 0; i < this.kids[grade].length; i++) {
                    result += `${i+1}. ${this.kids[grade][i].name}-${this.kids[grade][i].budget}\n`;

                    if (i + 1 === this.kids[grade].length) {
                        result += '\n';
                    }
                }

            }
        }

        return result;
    }

    numberOfChildren() {

        let totalKids = 0;

        for (const grade in this.kids) {
            totalKids += grade.length;
        }

        return totalKids;
    }
}

let vacation = new Vacation('Miss Elizabeth', 'Dubai', 2000);
vacation.registerChild('Pesho', 7, 4000);
vacation.registerChild('Gosho', 5, 3000);
vacation.registerChild('Lilly', 6, 1500);
vacation.registerChild('Mitko', 10, 5500);
vacation.registerChild('Tanya', 5, 5000);


console.log(vacation.toString());