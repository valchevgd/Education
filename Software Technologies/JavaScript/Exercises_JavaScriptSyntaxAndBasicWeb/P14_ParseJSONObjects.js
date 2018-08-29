function solution(array){
    let students = array.map(JSON.parse)

    for (let student of students){
        console.log(`Name: ${student.name}`)
        console.log(`Age: ${student.age}`)
        console.log(`Date: ${student.date}`)
    }
}

solution([ '{"name":"Gosho","age":10,"date":"19/06/2005"}',
    '{"name":"Tosho","age":11,"date":"04/04/2005"}',
    '{"name":"Maria","age":24,"date":"31/12/1996"}' ])