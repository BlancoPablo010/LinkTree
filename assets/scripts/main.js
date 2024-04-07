document.addEventListener('DOMContentLoaded', function() {
    var skillList = document.querySelector('.skill-list');
    var skillItems = skillList.querySelectorAll('.skill-item');

    skillItems.forEach(function(skillItem) {
        skillItem.style.backgroundColor = skillItem.id;
    });

});

function toggleTransition(elemento) {
    elemento.classList.toggle('click');
}
