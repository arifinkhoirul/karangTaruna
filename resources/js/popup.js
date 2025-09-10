// ? pop up menu portfolio
window.openModal = function () {
    const modal = document.getElementById('modal');
    const modalContent = document.getElementById('modalContent');

    modal.classList.remove('hidden');
    modal.classList.add('flex');
    setTimeout(() => {
        modalContent.classList.remove('scale-0');
        modalContent.classList.add('scale-100');
    }, 50);
};

window.closeModal = function () {
    const modal = document.getElementById('modal');
    const modalContent = document.getElementById('modalContent');

    modalContent.classList.remove('scale-100');
    modalContent.classList.add('scale-0');
    setTimeout(() => {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }, 300);
};
