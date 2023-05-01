const sr = ScrollReveal ({
    distance : '45px',
    duration : 2000,
    reset : false,
  })
/*==== about us page ====*/
sr.reveal('#showcase', {duration: 1000});
sr.reveal('.about', {duration: 2000});
sr.reveal('.col-4',{ delay:400, origin:'left' });
sr.reveal('.col-3',{ delay:400, origin:'right' });
sr.reveal('.col-2',{ delay:400, origin:'left' });
sr.reveal('.col-1',{ delay:400, origin:'right' });