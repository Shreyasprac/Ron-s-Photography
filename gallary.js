function filterSelection(category) {
    const items = document.querySelectorAll('.gallery-item');
    if (category === 'all') {
        items.forEach(item => item.style.display = 'block');
    } else {
        items.forEach(item => {
            if (item.classList.contains(category)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    }
    
    const buttons = document.querySelectorAll('.filter-btn');
    buttons.forEach(button => button.classList.remove('active'));
    document.querySelector(`.filter-btn[onclick="filterSelection('${category}')"]`).classList.add('active');
}

// Default filter to show all
filterSelection('all');
