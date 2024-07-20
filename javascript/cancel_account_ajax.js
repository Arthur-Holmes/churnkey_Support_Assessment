
document.addEventListener('DOMContentLoaded', function() {
  document.getElementById('cancel-button').addEventListener('click', function() {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'cancel_account.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          // Optional: Handle the response from the server if needed
          console.log(xhr.responseText);
          alert('Account canceled successfully!');
        } else {
          // Optional: Handle errors
          console.error('Error:', xhr.status);
          alert('Failed to cancel account. Please try again.');
        }
      }
    };
    // Optional: You can send data if needed (e.g., user ID or additional parameters)
    var data = ''; // You can construct the data to send here if needed
    xhr.send(data);
  });
});

