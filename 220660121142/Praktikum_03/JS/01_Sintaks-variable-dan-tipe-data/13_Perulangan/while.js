var a = [];
var i = 0;

//selama i kurang dari 4
//break condition : i == 4
while (i < 4) {
    //simpan i dalam array
    a.push(i);

    //naikkan i untuk proses selanjutnya
    i++;
};

console.log(a); //[0,1,2,3]

var a = [];
var i = 0;

while (i++ < 4) {
    a.push(i);
};

console.log(a); //0,1,2,3

var a = [];
var i = 0;

while (++i < 4) {
    a.push(i);
};

console.log(a); //1,2,3