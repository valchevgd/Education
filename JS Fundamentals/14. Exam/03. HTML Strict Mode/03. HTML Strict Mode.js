function solve(input) {
    let openingTagsRegEx = new RegExp('<\\w+>?', 'g');
    let closingTagsRegEx = new RegExp('<\\/\\w+>?', 'g');
    let output = [];


    for (let i = 0; i < input.length; i++) {
        let openingTags = [];
        let closingTags = [];
        let m;
        while ((m = openingTagsRegEx.exec(input[i])) !== null) {
            openingTags.push(m[0]);
        }

        while ((m = closingTagsRegEx.exec(input[i])) !== null) {
            closingTags.push(m[0]);
        }

        if (openingTags.length === closingTags.length) {
            for (let j = 0; j < openingTags.length / 2; j++){

                if (closingTags[j].includes('/')){
                    let clTag = closingTags[closingTags.length - j - 1].replace('/', '');

                    if (clTag === openingTags[j]){
                        let temp = input[i].replace(openingTagsRegEx, '');
                        let toAdd = temp.replace(closingTagsRegEx, '');
                        output.push(toAdd)
                    }
                }
            }
        }
    }
    console.log(output.join(' '));
}

solve(['<div><p>This</p> is</div>',
    '<div><a>perfectly</a></div>',
    '<divs><p>valid</p></divs>',
    '<div><p>This</div></p>',
    '<div><p>is not</p><div>']);