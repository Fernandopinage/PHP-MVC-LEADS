<?php

include_once "../layout/head.php";

?>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var initialLocaleCode = 'pt-br';
    var localeSelectorEl = document.getElementById('locale-selector');
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
      },
      //initialDate: '2020-09-12',
      locale: initialLocaleCode,
      buttonIcons: false, // show the prev/next text
      weekNumbers: true,
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      dayMaxEvents: true, // allow "more" link when too many events
      events: [{
        title: 'All Day Event',
        start: '2020-09-01'
      }],
      eventClick: function(info) {
        $('#visualizar').modal('show');
      },
      selectable: true,
      select: function(info) {
        //alert('inicio ' + info.start.toLocaleString());
        $('#agendamento #start').val(info.start.toLocaleString()); // dia que inicia o agendamento
        //$('#agendamento #end').val(info.end.toLocaleString());
        $('#agendamento').modal('show');
      }
    });

    calendar.render();

    // build the locale selector's options
    calendar.getAvailableLocaleCodes().forEach(function(localeCode) {
      var optionEl = document.createElement('option');
      optionEl.value = localeCode;
      optionEl.selected = localeCode == initialLocaleCode;
      optionEl.innerText = localeCode;
      localeSelectorEl.appendChild(optionEl);
    });

    // when the selected option changes, dynamically change the calendar option
    localeSelectorEl.addEventListener('change', function() {
      if (this.value) {
        calendar.setOption('locale', this.value);
      }
    });

  });
</script>
</head>



<div id='calendar'></div>
<div class="modal fade" id="visualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Agendamento Técnico</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="agendamento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agendamento Técnico</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-agendamento-tab" data-toggle="tab" href="#nav-agendamento" role="tab" aria-controls="nav-agendamento" aria-selected="true" style="color: #FF7F00;">Agendamento</a>
            <a class="nav-item nav-link" id="nav-participante-tab" data-toggle="tab" href="#nav-participante" role="tab" aria-controls="nav-participante" aria-selected="true" style="color: #FF7F00;">Participante</a>
          </div>
        </nav>
        <br>
        <hr><br>
        <span id="msg-card">

        </span>
        <form action="" method="POST" id="addevento">
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-agendamento" role="tabpanel" aria-labelledby="nav-agendamento-tab">

              <div class="form-row">
                <div class="form-group col-md-5">
                  <label for="inputState">Cliente Agendado</label>
                  <select id="cliente" class="form-control form-control-sm" name="cliente">
                    <option selected>Cliente 01</option>
                    <option>Cliente 02</option>
                    <option>Cliente 03</option>
                  </select>

                </div>

                <div class="form-group col-md-3">
                  <label for="inputEmail4">Agendamento</label>
                  <input type="date" class="form-control form-control-sm" name="email" id="nome" placeholder="">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputEmail4">Resumo</label>
                  <input type="text" class="form-control form-control-sm" name="email" id="nome" placeholder="">
                </div>
              </div>

              <div class="form-row">

                <div class="form-group col-md-2">
                  <label for="inputEmail4">Evento</label>
                  <input type="text" class="form-control form-control-sm" name="email" id="nome" placeholder="">
                </div>
                <div class="form-group col-md-2">
                  <label for="inputEmail4">Hora Inicio</label>
                  <input type="time" class="form-control form-control-sm" name="email" id="nome" placeholder="">
                </div>
                <div class="form-group col-md-2">
                  <label for="inputEmail4">Hora Final</label>
                  <input type="time" class="form-control form-control-sm" name="email" id="nome" placeholder="">
                </div>
                <div class="form-group col-md-2">
                  <label for="inputEmail4">Duração</label>
                  <input type="time" class="form-control form-control-sm" name="email" id="nome" placeholder="">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputState">Nº Contrato</label>
                  <select id="inputState" class="form-control form-control-sm">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>

                </div>

              </div>
              <div class="form-row">

                <div class="form-group col-md-4">
                  <label for="inputState">Projeto</label>
                  <select id="inputState" class="form-control form-control-sm">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>

                </div>
                <div class="form-group col-md-4">
                  <label for="inputEmail4">Contato do Cliente</label>
                  <input type="email" class="form-control form-control-sm" name="email" id="nome" placeholder="">
                </div>

              </div>
              <div class="form-row">

                <div class="form-group col-md-12">
                  <label for="inputEmail4">Resumo</label>
                  <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="6"></textarea>
                </div>

              </div>
            </div>




            <div class="tab-pane fade" id="nav-participante" role="tabpanel" aria-labelledby="nav-participante-tab">

              <div class="input-group mb-3 form-group col-md-3">
                <input type="text" class="form-control form-control-sm" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="btn-group-toggle" data-toggle="buttons">
                  <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
                    ♣
                  </button>
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          ...
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

            </div>


            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
              <button type="button" class="btn btn-primary" id="cadastratecnico">Salvar</button>
            </div>

        </form>
      </div>
    </div>
  </div>
</div>

<script>
      $('#cadastratecnico').click(function(){

        var a = document.getElementById('cliente').value;
        console.log(a);

      });
</script>
<?php

include_once "../layout/footer.php";

?>