document.addEventListener('DOMContentLoaded', () => { // Ensure the DOM is fully loaded before running the script
  const start = document.getElementById('start_date');
  const end = document.getElementById('end_date');

  function resetAndAlert() {
    alert('La data di inizio non può essere successiva alla data di fine.');
    start.value = '';
    end.value = '';
    start.focus(); // Reset the start date to focus on it
  }

  function validate() {
    if (!start.value || !end.value) return; // If either date is not set, do nothing
    const startDate = new Date(start.value);
    const endDate = new Date(end.value);
    if (startDate > endDate) resetAndAlert();
  }

  start.addEventListener('change', validate); // Validate when the start date changes
  end.addEventListener('change', validate);
});

