<div>
<style>
    #calendar-container {
        position: relative;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }
    #calendar {
        margin: 10px auto;
        padding: 100px;
        max-width: 1100px;
        height: 700px;
    }
</style>
<div x-data ="{
    lesecues: @entangle('lesecues').defer,
    dateseance: @entangle('dateseance').defer,
    hdseance : @entangle('hdseance'),
    hfseance : @entangle('hfseance')

}"
>
<div class="row">
    <div class="col-12">
        <fieldset style="border:1px blue solid; padding:2.0 em;">
            <legend>ENREGISTREMENT DE SEANCE</legend>
                <div class="form-group">
                    <select x-model= "lesecues">
                
                            ECUES:<option value=""></option>
                        
                    </select>
                    <label for="dateseance"> DATE</label> <br>
                    <input type="date" x-model= "dateseance"placeholder="01/01/2023" style="border:1px blue solid;" class="form-control">
                    <label for="hdseance"> HEURE DEBUT</label> <br>
                    <input type="datetime-local" x-model= "hdseance"placeholder="00:00" style="border:1px blue solid;" class="form-control">
                    <label for="hfseance"> HEURE FIN</label> <br>
                    <input type="datetime-local" x-model= "hfseance"placeholder="00:00" style="border:1px blue solid;" class="form-control">




                </div>

        </fieldset>

    </div>

</div>
    

<div>
    <div id='calendar-container' wire:ignore>
        <div id='calendar'></div>
    </div>
</div>

@push('scripts')

<script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.js'></script>

<script>
    document.addEventListener('livewire:load', function () {
        const Calendar = FullCalendar.Calendar;
        const calendarEl = document.getElementById('calendar');
        const calendar = new Calendar(calendarEl, {         
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
            },
            locale : '{{config('app.locale')}}'
        });
        calendar.render();
    });
</script>

<link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.css' rel='stylesheet' />

@endpush
</div>
