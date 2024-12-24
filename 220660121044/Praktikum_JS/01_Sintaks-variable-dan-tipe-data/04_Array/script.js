
//buat array 3 elemen
var a = [1,2,3];

//tampilkan data pada index pertama (0)
console.log(a[0]);//output: 1

//tampilkan data pada index terakhir (2)
console.log(a[2]);//output: 3

var info = [];
info['name'] = 'John';
info['age'] = 40;
//dengan dot notation
info.sex = 'male';

console.log(info['sex']);//male
console.log(info.name);//John

//Associative-array tidak mengenal indeks 
console.log(info[0]);//undefined