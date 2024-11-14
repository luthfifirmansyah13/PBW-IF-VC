var info = [];
info['name'] = 'John';
info['age'] = 40;
//dengan dot notation
info.sex = 'male';

console.log(info['sex']);//male
console.log(info.name);//John

//Associative-array tidak mengenal indeks 
console.log(info[0]);//undefined