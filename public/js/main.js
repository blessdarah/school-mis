
$(document).ready(function(){
    $('#staffs').DataTable();
 });


const tProfileForm = document.querySelector('.profile__staff-info');
const updateTeacherAccountBtn = tProfileForm.querySelector('#update-profile-btn');

console.log(updateTeacherAccountBtn);


updateTeacherAccountBtn.addEventListener('click', () => {
    event.preventDefault();
    [...tProfileForm.querySelectorAll('.form-control')].map(field => {
        field.removeAttribute('disabled');
    })
    setTimeout(() => {
        updateTeacherAccountBtn.classList.add('d-none');
        tProfileForm.querySelector('button[type="submit"]').classList.remove('d-none');
    }, 500);
});

