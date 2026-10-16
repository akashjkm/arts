document.addEventListener('DOMContentLoaded', function () {
    const filters = document.querySelectorAll('.gallery-filter');
    const tiles = document.querySelectorAll('.gallery-tile');
    const count = document.getElementById('galleryCount');
    const dialog = document.getElementById('galleryDialog');
    const dialogImage = dialog.querySelector('.gallery-dialog-image');
    const dialogCaption = dialog.querySelector('.gallery-dialog-caption');
    const closeButton = dialog.querySelector('.gallery-dialog-close');

    filters.forEach(function (filter) {
        filter.addEventListener('click', function () {
            const category = filter.dataset.filter;
            let visibleCount = 0;

            filters.forEach(function (item) {
                const isActive = item === filter;
                item.classList.toggle('is-active', isActive);
                item.setAttribute('aria-pressed', String(isActive));
            });

            tiles.forEach(function (tile) {
                const isVisible = category === 'all' || tile.dataset.category === category;
                tile.hidden = !isVisible;
                visibleCount += isVisible ? 1 : 0;
            });

            count.textContent = `Showing ${visibleCount} ${visibleCount === 1 ? 'photo' : 'photos'}`;
        });
    });

    tiles.forEach(function (tile) {
        tile.addEventListener('click', function () {
            const image = tile.querySelector('img');
            dialogImage.src = tile.dataset.full;
            dialogImage.alt = image.alt;
            dialogCaption.textContent = tile.dataset.caption;
            dialog.showModal();
            closeButton.focus();
        });
    });

    closeButton.addEventListener('click', function () {
        dialog.close();
    });

    dialog.addEventListener('click', function (event) {
        if (event.target === dialog) {
            dialog.close();
        }
    });
});