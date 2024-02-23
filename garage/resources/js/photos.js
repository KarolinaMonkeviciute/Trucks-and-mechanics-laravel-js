if (document.querySelector("[data-photo-create]")) {
    const section = document.querySelector("[data-photo-create]");
    const inputs = document.querySelector("[data-photo-inputs]");
    const addButton = section.querySelector("[data-add-button]");

    addButton.addEventListener("click", () => {
        const input = section
            .querySelector("[data-photo-inputs-clone] div")
            .cloneNode(true);
        input.querySelector("input").setAttribute("name", "photos[]");
        inputs.appendChild(input);

        const removeButton = input.querySelector("button");
        removeButton.addEventListener("click", (_) => {
            input.remove();
        });
    });
}