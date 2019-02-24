function solve(rectangles){
    let rects = [];

    for (let i = 0; i < rectangles.length; i++) {
        let rectangle = {
            width : rectangles[i][0],
            height : rectangles[i][1],
            area : function () {
                return this.width * this.height;
            },
            compareTo : function (rect) {
                return this.area - rect.area
            }
        };

        rects.push(rectangle);
    }

    rects.sort((a, b) => {
        if (b.area() === a.area()) {
            return b.width - a.width
        }else{
            return b.area() - a.area();
        }

    });

    return rects;
}

console.log(solve([[10, 5], [3, 20], [5, 12]]));