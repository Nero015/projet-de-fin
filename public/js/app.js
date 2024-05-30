let menuBar = document.querySelector("#menu-bar")
let amenu = document.querySelector(".navbar")
let postForm = document.querySelector(".post-form")

function showmenu(){
    menuBar.classList.toggle("fa-times")
    amenu.classList.toggle("active")
}
function showform(){
    postForm.classList.add("active")
}
function hideform(){
    postForm.classList.remove("active")

}




        document.addEventListener('DOMContentLoaded', function () {
            const additionalLinks = document.querySelector('.mem');
            const addLinkButton = additionalLinks.querySelector('.add-link');
            
            addLinkButton.addEventListener('click', function () {
                const linkInput = document.createElement('dov');
                linkInput.classList.add('mem');
                linkInput.innerHTML = `
                <input type="text" id="members" name="members[]" required> 
                <span class="remove-link">-</span>`;
                additionalLinks.appendChild(linkInput);
                
                const removeLinkButtons = document.querySelectorAll('.remove-link');
                removeLinkButtons.forEach(button => {
                    button.addEventListener('click', function () {
                        this.parentNode.remove();
                    });
                });
            });
        });
    
        document.addEventListener('DOMContentLoaded', function () {
            const additionalLinks = document.querySelector('.links');
            const addLinkButton = additionalLinks.querySelector('.add-link');
            
            addLinkButton.addEventListener('click', function () {
                const linkInput = document.createElement('dov');
                linkInput.classList.add('.links');
                linkInput.innerHTML = `<br><input type="text" id="links" name="links[]" required> 
                <span class="remove-link">-</span><br>`;
                additionalLinks.appendChild(linkInput);
                
                const removeLinkButtons = document.querySelectorAll('.remove-link');
                removeLinkButtons.forEach(button => {
                    button.addEventListener('click', function () {
                        this.parentNode.remove();
                    });
                });
            });
        });
    