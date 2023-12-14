// Get the navbar element
const navbarBottom = document.querySelector('.navbar-bottom');

// Get the form container element
const formContainer = document.querySelector('.order-container');

// Function to toggle the 'hidden' class based on scroll position
function toggleNavbarVisibility() {
  const scrollPosition = window.scrollY;
  const formContainerBottom = formContainer.getBoundingClientRect().bottom;

  // Show navbar only when user is close to the bottom of the form container
  if (formContainerBottom <= window.innerHeight) {
    navbarBottom.classList.remove('hidden');
  } else {
    navbarBottom.classList.add('hidden');
  }
}

// Attach the toggleNavbarVisibility function to the scroll event
window.addEventListener('scroll', toggleNavbarVisibility);

// Initial call to set initial state on page load
document.addEventListener('DOMContentLoaded', () => {
  toggleNavbarVisibility();
});

// If the form dynamically changes in height, you might need to recalculate visibility on resize
window.addEventListener('resize', () => {
  toggleNavbarVisibility();
});

// Additional event listener to handle the case when the user scrolls to the bottom of the page
window.addEventListener('scroll', () => {
  const scrollPosition = window.scrollY;
  const documentHeight = document.body.offsetHeight;
  const windowHeight = window.innerHeight;

  // Show navbar only when user is at the bottom of the page
  if (scrollPosition + windowHeight >= documentHeight) {
    navbarBottom.classList.remove('hidden');
  }
});
