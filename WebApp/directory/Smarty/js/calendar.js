$(document).ready(function() {
  $('#date-range').daterangepicker({
    locale: { format: 'YYYY-MM-DD' },
    
    isInvalidDate: function(date) {
      // Disabilita singoli giorni che sono dentro gli intervalli bloccati
      for (const period of indisp) {
        const startBlocked = moment(period.start, 'YYYY-MM-DD');
        const endBlocked = moment(period.end, 'YYYY-MM-DD');
        if (date.isBetween(startBlocked, endBlocked, null, '[]')) { //[] estremi inclusi
          return true;
        }
      }
      return false;
    },

    startDate: moment().startOf('month'),
    endDate: moment().endOf('month'),

  }, function(start, end) { // Callback dopo selezione range controllo se date start e end si sovrappongono con le date non disponibili
    let isInvalidRange = false;
    let i= 0;
    while (!isInvalidRange && i<indisp.length) {
      const period = indisp[i];
      const startBlocked = moment(period.start, 'YYYY-MM-DD');
      const endBlocked = moment(period.end, 'YYYY-MM-DD');
      if (start.isBefore(endBlocked) && end.isAfter(startBlocked)) {
        isInvalidRange = true;
      }
        i++;
    }

    if (isInvalidRange) {
      alert("Il periodo selezionato include date non disponibili. Scegli un intervallo diverso.");
      // Resetta i valori e svuota input
      $('#date-range').val('');
      $('#startDate').val('');
      $('#endDate').val('');
    } else {
      // Se valido, aggiorna i campi hidden
      $('#startDate').val(start.format('YYYY-MM-DD'));
      $('#endDate').val(end.format('YYYY-MM-DD'));
    }
  });

  // Inizializza i campi hidden al caricamento
  var picker = $('#date-range').data('daterangepicker');
  if (picker) {
    $('#startDate').val(picker.startDate.format('YYYY-MM-DD'));
    $('#endDate').val(picker.endDate.format('YYYY-MM-DD'));
  }
});