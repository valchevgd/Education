function solve(input) {

    let regEx = /[A-Za-z]+/gm;
    let words = input.match(regEx);

    let object = {};

    for (let word of words){
        if (!object.hasOwnProperty(word)){
            object[word] = 0;
        }
        object[word]++;
    }

    console.log(object);
}

solve('JS devs use Node.js for server-side JS.-- JS for devs');