const modalUpdate = document.getElementById('modal-update-service');
const modalDelete = document.getElementById('modal-delete');
const modalAdd = document.getElementById('modal-add-service');
const iconDelete = document.getElementsByClassName('icon-delete')[0];
const iconUpdate = document.getElementsByClassName('icon-update')[0];
const validateDelete = document.getElementsByClassName('icon-validate')[0];
const cancelDelete = document.getElementsByClassName('icon-cancel')[0];
const addService = document.getElementById('btn-add-service');
const btnAdd = document.getElementById('btn-add');
const btnCancelAdd = document.getElementById('btn-cancel-add');
const btnUpdate = document.getElementById('btn-update');
const btnCancelUpdate = document.getElementById('btn-cancel-update');


// Ajouter une modal pour la suppression 
iconDelete.addEventListener('click', () => {
    modalDelete.style.display = 'block';
});
// Ferme la modal de suppression
validateDelete.addEventListener('click', () => {
  document.location.reload(true);
});
cancelDelete.addEventListener('click', () => { 
    modalDelete.style.display = 'none';
});


// Ajouter une modal pour l'ajout
addService.addEventListener('click', () => {
    modalAdd.style.display = 'flex';
});

// Ferme la modal d'ajout
btnCancelAdd.addEventListener('click', () => {
    modalAdd.style.display = 'none';
});
btnAdd.addEventListener('click', () => {
  document.location.reload(true);
});


// Ajouter une modal pour la modification
iconUpdate.addEventListener('click', () => {  
  modalUpdate.style.display = 'flex'; 
});
// Ferme la modal d'ajout
btnCancelUpdate.addEventListener('click', () => {
  modalUpdate.style.display = 'none';
});
btnUpdate.addEventListener('click', () => {
document.location.reload(true);
});




