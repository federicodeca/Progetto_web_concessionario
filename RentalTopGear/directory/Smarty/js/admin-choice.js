addEventListener('DOMContentLoaded', function() {
    const carTypeSelect = document.getElementById('car-type');
    const conditionSelect = document.getElementById('condition-select');
    const carDescriptionDiv = document.getElementById('car-description');
    

    carTypeSelect.addEventListener('change', function() {
        if (this.value === 'car_for_sale') {
            conditionSelect.style.display = 'block';
            carDescriptionDiv.style.display = 'none';
           
        } else if (this.value === 'rental_car') {
            conditionSelect.style.display = 'none';
            carDescriptionDiv.style.display = 'block';
      
        } else {
            conditionSelect.style.display = 'none';
            carDescriptionDiv.style.display = 'none';
          
        }
    });
})