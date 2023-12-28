var countdown = 10; // Set the countdown time in seconds

function updateCountdown() {
  var countdownDisplay = document.getElementById("countdown");
  countdownDisplay.innerText = countdown;

  countdown--;

  if (countdown < 0) {
    clearInterval(timer);
    window.location.href = "work.html";
  }
}

var timer = setInterval(updateCountdown, 1000); // Run the updateCountdown function every second