document.addEventListener('DOMContentLoaded', function() {
    eventListeners();
    darkMode();
});

function darkMode() {
    const prefiereDarkMode = window.matchMedia('(prefers-color-scheme: dark)');
    // ternario
    prefiereDarkMode.matches ? document.body.classList.add('dark-mode') : document.body.classList.remove('dark-mode');
    
    prefiereDarkMode.addEventListener('change', function() {
        prefiereDarkMode.matches ? document.body.classList.add('dark-mode') : document.body.classList.remove('dark-mode');
    })

    const botonDarkMode = document.querySelector('.dark-mode-boton');
    botonDarkMode.addEventListener('click', () => document.body.classList.toggle('dark-mode'));
}

function eventListeners() {
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegacionResponsive);

    // Muestra campos condicionales
    const metodoContacto = document.querySelectorAll('input[name="contacto[contacto]"]');
    metodoContacto.forEach(input => input.addEventListener('click', mostrarMetodoContacto));
}

function navegacionResponsive (){
    const navegacion = document.querySelector('.navegacion');

    navegacion.classList.toggle('mostrar');       
}

function mostrarMetodoContacto(e) {
    const contactoDiv = document.getElementById('contacto');

    if(e.target.value === 'telefono') {
        contactoDiv.innerHTML = `
            <div class="formulario__campo">
                <label class="formulario__label" for="telefono">Teléfono</label>
                <input class="formulario__entrada" type="tel" id="telefono" placeholder="Tu teléfono" name="contacto[telefono]">
            </div>

            <p>Elija la fecha y la hora para ser contactado</p>
            <div class="formulario__campos">
                <div class="formulario__campo">
                    <label for="fecha">Fecha</label>
                    <input type="date" id="fecha0" name="contacto[fecha]">
                </div>
                <div class="formulario__campo">
                    <label for="hora">Hora</label>
                    <input type="time" id="hora" min="09:00" max="18:00" name="contacto[hora]">
                </div>
            </div>
        `;
    } else {
        contactoDiv.innerHTML = `
            <div class="formulario__campo">
                <label class="formulario__label" for="email">E-mail</label>
                <input class="formulario__entrada" type="email" id="email" placeholder="Tu e-mail" name="contacto[email]" required>
            </div>
        `;
    }
}