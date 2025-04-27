// Client-side JavaScript for Financia Banking Application

document.addEventListener('DOMContentLoaded', () => {
    // Toast notification function
    const showToast = (message, type = 'success') => {
        const toast = document.createElement('div');
        toast.id = 'toast';
        toast.textContent = message;
        toast.className = type === 'success' ? 'bg-green-500' : 'bg-red-500';
        document.body.appendChild(toast);
        setTimeout(() => {
            toast.classList.add('show');
        }, 100);
        setTimeout(() => {
            toast.classList.remove('show');
            setTimeout(() => toast.remove(), 300);
        }, 3000);
    };

    // Form validation and submission
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', (e) => {
            e.preventDefault(); // Prevent actual submission for frontend demo
            const inputs = form.querySelectorAll('input[required], select[required]');
            let isValid = true;

            inputs.forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                    input.classList.add('border-red-500');
                    showToast(`Le champ ${input.name} est requis`, 'error');
                } else {
                    input.classList.remove('border-red-500');
                    input.classList.add('border-green- neo4j');
                }
            });

            if (isValid) {
                showToast('Action effectuée avec succès !');
                // In a real app, the form would submit to PHP backend
            }
        });
    });

    // Real-time input validation
    const inputs = document.querySelectorAll('input, select');
    inputs.forEach(input => {
        input.addEventListener('input', () => {
            if (input.required && !input.value.trim()) {
                input.classList.add('border-red-500');
                input.classList.remove('border-green-500');
            } else {
                input.classList.remove('border-red-500');
                input.classList.add('border-green-500');
            }
        });
    });

    // Loan simulation calculator
    const simulationForm = document.querySelector('form[action="client_simulation.php"]');
    if (simulationForm) {
        simulationForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const amount = parseFloat(document.getElementById('amount').value);
            const rate = parseFloat(document.getElementById('rate').value) / 100 / 12;
            const duration = parseInt(document.getElementById('duration').value);

            if (isNaN(amount) || isNaN(rate) || isNaN(duration) || amount <= 0 || rate <= 0 || duration <= 0) {
                showToast('Veuillez entrer des valeurs valides', 'error');
                return;
            }

            // Calculate monthly payment using the formula: P * (r / (1 - (1 + r)^-n))
            const monthlyPayment = (amount * rate) / (1 - Math.pow(1 + rate, -duration));
            const totalPayment = monthlyPayment * duration;
            const totalInterest = totalPayment - amount;

            document.getElementById('result').innerHTML = `
                <p><strong>Mensualité estimée :</strong> ${monthlyPayment.toFixed(2)} €</p>
                <p><strong>Total à rembourser :</strong> ${totalPayment.toFixed(2)} €</p>
                <p><strong>Total des intérêts :</strong> ${totalInterest.toFixed(2)} €</p>
            `;
            showToast('Simulation calculée avec succès !');
        });
    }

    // Dashboard card hover effects
    const cards = document.querySelectorAll('.bg-white');
    cards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.style.transform = 'translateY(-5px) scale(1.02)';
        });
        card.addEventListener('mouseleave', () => {
            card.style.transform = 'translateY(0) scale(1)';
        });
    });
});