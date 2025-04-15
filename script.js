// Price configuration
const prices = {
    giftTypes: {
        mug: 15.99,
        keychain: 9.99,
        frame: 19.99
    },
    packaging: {
        basic: 2.99,
        premium: 5.99,
        luxury: 9.99
    },
    delivery: {
        standard: 0,
        express: 5.99,
        overnight: 12.99
    }
};

// DOM Elements
const form = document.getElementById('giftCustomizationForm');
const giftTypeSelect = document.getElementById('giftType');
const customImageInput = document.getElementById('customImage');
const imagePreview = document.getElementById('imagePreview');
const basePriceElement = document.getElementById('basePrice');
const packagingPriceElement = document.getElementById('packagingPrice');
const deliveryPriceElement = document.getElementById('deliveryPrice');
const totalPriceElement = document.getElementById('totalPrice');

// Image preview handler
customImageInput.addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            imagePreview.innerHTML = `<img src="${e.target.result}" alt="Preview">`;
        };
        reader.readAsDataURL(file);
    }
});

// Price calculation function
function calculateTotal() {
    const giftType = giftTypeSelect.value;
    const packaging = document.querySelector('input[name="packaging"]:checked').value;
    const delivery = document.querySelector('input[name="delivery"]:checked').value;

    const basePrice = giftType ? prices.giftTypes[giftType] : 0;
    const packagingPrice = prices.packaging[packaging];
    const deliveryPrice = prices.delivery[delivery];

    const total = basePrice + packagingPrice + deliveryPrice;

    // Update price display
    basePriceElement.textContent = `$${basePrice.toFixed(2)}`;
    packagingPriceElement.textContent = `$${packagingPrice.toFixed(2)}`;
    deliveryPriceElement.textContent = `$${deliveryPrice.toFixed(2)}`;
    totalPriceElement.textContent = `$${total.toFixed(2)}`;
}

// Event listeners for price updates
giftTypeSelect.addEventListener('change', calculateTotal);
document.querySelectorAll('input[name="packaging"]').forEach(radio => {
    radio.addEventListener('change', calculateTotal);
});
document.querySelectorAll('input[name="delivery"]').forEach(radio => {
    radio.addEventListener('change', calculateTotal);
});

// Form validation
form.addEventListener('submit', function(e) {
    e.preventDefault();
    
    if (!giftTypeSelect.value) {
        alert('Please select a gift type');
        return;
    }

    const customText = document.getElementById('customText').value;
    if (!customText.trim()) {
        alert('Please enter custom text');
        return;
    }

    // If all validations pass, submit the form
    this.submit();
});

// Initialize price calculation
calculateTotal(); 