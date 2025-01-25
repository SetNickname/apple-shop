document.getElementById('edit-btn').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent form submission
    const form = document.querySelector('.user-form');
    const inputs = form.getElementsByTagName('input');
    const button = document.getElementById('edit-btn');
    const notification = document.getElementById('notification');

    if (button.innerText === "Edit") {
        // Enable form fields for editing
        for (let input of inputs) {
            input.disabled = false;
        }
        button.innerText = "Save Edit";
    } else {
        // Save changes, disable form fields, and clear the form fields
        for (let input of inputs) {
            input.disabled = true;
        }
        button.innerText = "Edit";

        // Clear the form fields
        form.reset();

        // Show notification
        notification.classList.remove('hidden');
        notification.style.display = 'flex'; // Ensure notification is displayed

        // Hide notification after 1 second
        setTimeout(function() {
            notification.classList.add('hidden');
            notification.style.display = 'none'; // Hide notification again
        }, 1000); // 1 second = 1000 milliseconds
    }
});
