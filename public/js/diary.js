
/**
 * Con el let form recoletamos los datos del formulario que esta en diary
 * En la addEventListener hacemos que cuando se cargue el contenido realmente se ejecute el script
 * En la variable calendarEL se busca un <div> para convertilo en un calendario
 * En la variable calendar se hace las instrucciones al calendario
 * fuction info  de click muestra un formulario
 * Capturamos la accion del boton event-save y reunimos la informacion del formulario
 */

document.addEventListener('DOMContentLoaded', function() {

    let form = document.querySelector('form');

    var calendarEl = document.getElementById('diary');

    var calendar = new FullCalendar.Calendar(calendarEl, {

        initialView: 'dayGridMonth',

        locale:"es",

        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,listWeek'
        },

        dateClick:function(info){
            $('#event').modal('show');
        },

    });
    calendar.render();

    document.getElementById('event-save').addEventListener('click',function (){
        const data= new FormData(form);
        console.log(data);
        console.log(form.title.value);

    });
});
