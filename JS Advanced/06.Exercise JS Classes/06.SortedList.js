class SortedElements {

    constructor() {
        this.elements = [];
        this.size = 0;
    }

    add(element) {
        if (typeof element === 'number') {
            this.elements.push(element);
            this.elements.sort((a, b) => {
                    return a - b
                }
            );
            this.size ++;
        }
    };

    remove(index){
        if (typeof index === 'number'
            && index > -1
            && index <= this.elements.length){
            this.elements.splice(index, 1);
            this.size = this.elements.length;
        }
    }

    get(index){
        if (typeof index === 'number'
            && index > -1
            && index <= this.elements.length){
            return this.elements[index];
        }
    }

}

let element = new SortedElements();


element.remove(0);
console.log(element.size);