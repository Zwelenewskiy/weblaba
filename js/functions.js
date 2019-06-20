var endTime = new Date(2088, 6, 19, 11, 12, 13, 0);
function work() {
	let time = Date.now();
	let seconds = Math.floor((endTime-time)/1000);
	let minutes = Math.floor(seconds/60);
	let hours = Math.floor(minutes/60);
	let days = Math.floor(hours/24);
	
	$('#timer').text('Days: ' + days + '	Hours: ' + hours%24 + '	Minutes: ' + minutes%60 + '	Seconds: ' + seconds%60);
}

$(document).ready(function(){
	console.log('test');
	state = 1;
	timeStart = Date.now();
	intervalId = setInterval(work, 1000);
});