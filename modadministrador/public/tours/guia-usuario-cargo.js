$(function() {
  function configurar_guia_principal() {
      let tour = new Shepherd.Tour({
          defaultStepOptions: {
              cancelIcon: {
                  enabled: true
              },
              classes: 'shadow-md bg-purple-dark',
              scrollTo: { behavior: 'smooth', block: 'center' }
          },
          useModalOverlay: true
      });

      tour.addStep({
          title: 'Asignación de cargos',
          text: '<p>En esta sección podrá asignar cargos a los usuarios del sistema.</p>',
          attachTo: {
              element: '.dropdown-user',
              on: 'bottom'
          },
          classes: 'example-step-extra-class',
          buttons: [
              {
              text: 'Siguiente',
              action: tour.next
              }
          ],
          id: 'step_0',
      })
      return tour;
  }

  const tour_principal = configurar_guia_principal();
  $('#manual').on('click', function(e) {
      e.preventDefault();
      tour_principal.start();
  });
})