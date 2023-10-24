let addToDoButton = document.getElementById('addToDo');
let toDoContainer = document.getElementById('toDoContainer');
let inputText = document.getElementById('inputText');
let clearToDo = document.getElementById('clearToDo');

addToDoButton.addEventListener('click', function(e) {
    e.preventDefault();
    let listItem = document.createElement('li'); // Liste öğesi (li) oluşturuluyor
    listItem.classList.add('list-item-styling');
    toDoContainer.appendChild(listItem);
    listItem.innerHTML = inputText.value;
    inputText.value = "";

    // Eklenen liste öğesinin yanına dinamik kontrol listesi ekleyin
    let checkbox = document.createElement('input');
    checkbox.type = 'checkbox';
    checkbox.classList.add('checkbox-styling');
    listItem.insertBefore(checkbox, listItem.firstChild);

    listItem.addEventListener('click', function() {
        listItem.style.textDecoration = 'line-through';
    });

    listItem.addEventListener('dblclick', function() {
        toDoContainer.removeChild(listItem);
    });

    clearToDo.addEventListener('click', function() {
        listItem.remove();
    });
});
