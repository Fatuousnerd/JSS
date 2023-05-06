const workerForm = document.getElementById('workerForm');

workerForm.addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent form submission
  
  // Retrieve form values
  const workerName = document.getElementById('workerName').value;
  const workerID = document.getElementById('workerID').value;
  const workerResidence = document.getElementById('workerResidence').value;
  const workerLevel = document.getElementById('workerLevel').value;
  
  // Perform further actions with the form data
  // e.g., send data to the server, process it, etc.
  
  // Clear form values
  workerForm.reset();
});