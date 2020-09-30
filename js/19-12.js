let users = [
	
	{
		'firstname' : 'femi',
		'lastname' : 'ife',
	},
	{
		'firstname' : 'Sam',
		'lastname' : 'ifesanmi',
	},

];

let user = [1, 2, 3];
if (user.includes(4)) {
	console.log("2 inside");
}
else{
	console.log("not present")
}


user = [
	{
		'firstname' :'femi',
		'lastname' : 'ifesanmi',
	},
	{
		'firstname' :'sanmi',
		'lastname' : 'aderoju',
	}
];

 /*console.log(user[0]['lastname']);


if (users[1]['lastname'] == 'James') {
	//console.log("James is present");
	alert("James is present");
}else
{
	//console.log("James is absent");
	alert("James is absent");
}
*/
user3 = {
		'firstname' :'Bukola',
		'lastname' : 'Joke',
	},

user4 =	{
		'firstname' :'Josh',
		'lastname' : 'ade',
	}
/*
users.push(user3);
users.push(user4);
console.log(users);
*/

let lastname = users[0]['lastname'];
if (lastname == 'Segun') 
{
	alert('ife is present');
}
else if (lastname == 'ifesanmi') 
{
	alert('ifesanmi is present');
}
else{
	alert('not found');
}