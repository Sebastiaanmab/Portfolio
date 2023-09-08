window.addEventListener('scroll', function() {
  let header = document.getElementById('header');
  let sticky = header.offsetTop;

  if (window.pageYOffset > sticky) {
    header.classList.add('sticky');
  } else {
    header.classList.remove('sticky');
  }
});

// Retrieve all foldable elements
const foldableHeadings = document.querySelectorAll('.foldable-heading');
const foldableContents = document.querySelectorAll('.foldable-content');

// Initialize all foldable contents
foldableContents.forEach(content => {
  content.style.display = 'none';
});

// Set initial heading text for all foldable sections
foldableHeadings.forEach((heading, index) => {
  const symbol = heading.querySelector('.symbol');

  // Add click event listener to each foldable heading
  heading.addEventListener('click', function() {
    if (foldableContents[index].style.display === 'none') {
      foldableContents[index].style.display = 'block';
      symbol.textContent = '-';
    } else {
      foldableContents[index].style.display = 'none';
      symbol.textContent = '+';
    }
  });
});


