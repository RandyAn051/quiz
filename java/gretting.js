var today = new Date();
var hourNow = today.getHours();
var greeting;

if (hourNow > 20) {
	greeting = "Selamat Datang Costumer!";
} else if (hourNow > 12) {
	greeting = "Selamat Datang Costumer!";
} else if (hourNow > 3) {
	greeting = "Selamat Datang Costumer";
} else {
	greeting = "Selamat Datang Costumer";
}

document.write('<h1>'+greeting+'<h1>');