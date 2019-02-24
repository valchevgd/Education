function solve(input) {
    let carBuilder = function () {
        let cars = {};

        return {
            create : name => cars[name] = {},
            inherits : (child, parent) => Object.setPrototypeOf(cars[child], cars[parent]),
            set : (name, key, value) => cars[name][key] = value,
            print : name => {
                let output = [];

                for(let key in cars[name]){

                    output.push(`${key}:${cars[name][key]}`)
                }
                return output.join(', ')
            }
        };


    };

    let cb = new carBuilder();
    
    for (const line of input) {
        let tokens = line.split(' ');
        if (tokens.length === 2){
            if (tokens[0] === 'create'){
                cb.create(tokens[1]);
            } else {
                console.log(cb.print(tokens[1]));
            }
        }else {
            if (tokens[0] === 'set') {
                cb.set(tokens[1], tokens[2], tokens[3])
            }else {
                cb.create(tokens[1]);
                cb.inherits(tokens[1] ,tokens[3])
            }
        }
    }
}

solve(['create c1',
    'create c2 inherit c1',
    'set c1 color red',
    'set c2 model new',
    'print c1',
    'print c2']);