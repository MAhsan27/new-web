(function () {
    const modal = document.getElementById('teamModal');
    if (!modal) return;

    const modalIconContainer = document.getElementById('modalIcon');
    const modalName = modal.querySelector('.modal-name');
    const modalRole = modal.querySelector('.modal-role');
    const modalBio  = modal.querySelector('.modal-bio');
    const hexes = document.querySelectorAll('.hex');

    hexes.forEach(hex => {
        hex.addEventListener('click', () => {
            const name = hex.dataset.name || '';
            const role = hex.dataset.role || '';
            const bio  = hex.dataset.bio  || '';

            const svgIcon = hex.querySelector('.hex-icon-wrap svg');

            modalName.textContent = name;
            modalRole.textContent = role;
            modalBio.textContent  = bio;

            if (svgIcon) {
                modalIconContainer.innerHTML = svgIcon.outerHTML;
            }

            modal.classList.add('active');
            modal.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
        });
    });

    modal.querySelectorAll('[data-close]').forEach(el => {
        el.addEventListener('click', () => {
            modal.classList.remove('active');
            modal.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        });
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && modal.classList.contains('active')) {
            modal.classList.remove('active');
            modal.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        }
    });
})();
