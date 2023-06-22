const pages = document.querySelectorAll('.page');

function showPage(target) {
  pages.forEach(page => {
    if (page.id === target) {
      page.style.display = 'block';
    } else {
      page.style.display = 'none';
    }
  });
}

const links = document.querySelectorAll('a[data-target]');

links.forEach(link => {
  link.addEventListener('click', e => {
    e.preventDefault();
    const target = e.target.getAttribute('data-target');
    showPage(target);
  });
});

// Data Download
const downloadLink = document.getElementById('downloadLink');
downloadLink.addEventListener('click', () => {
  // Perform data download logic here
  console.log('Data download clicked');
});