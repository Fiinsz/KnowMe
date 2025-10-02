// script.js
document.addEventListener('DOMContentLoaded', function(){
  // Smooth scroll for anchor links (skip href="#")
  document.querySelectorAll('a[href^="#"]').forEach(function(anchor){
    anchor.addEventListener('click', function(e){
      const href = this.getAttribute('href');
      if(!href || href === '#') return; // ignore empty or top anchors
      let target = null;
      try{ target = document.querySelector(href); }catch(err){ target = null; }
      if(target){
        e.preventDefault();
        target.scrollIntoView({behavior:'smooth',block:'start'});
      }
    });
  });

  // Active nav on scroll
  const sections = document.querySelectorAll('main .section, main .hero');
  const navLinks = document.querySelectorAll('.nav a');

  function onScroll(){
    let index = sections.length;
    while(--index && window.scrollY + 120 < sections[index].offsetTop){}
    navLinks.forEach(link => link.classList.remove('active'));
    const id = sections[index].id || 'home';
    const active = document.querySelector('.nav a[href="#'+id+'"]');
    if(active) active.classList.add('active');
  }

  onScroll();
  window.addEventListener('scroll', onScroll, {passive:true});
});

// Modal logic
document.addEventListener('DOMContentLoaded', function(){
  const workBtn = document.getElementById('workBtn');
  const modal = document.getElementById('contactModal');
  const close = modal && modal.querySelector('.modal-close');
  const panel = modal && modal.querySelector('.modal-panel');

  if(workBtn && modal){
    workBtn.addEventListener('click', function(e){
      e.preventDefault();
      modal.setAttribute('aria-hidden','false');
      document.body.style.overflow = 'hidden';
    });
  }

  if(close){
    close.addEventListener('click', function(){
      modal.setAttribute('aria-hidden','true');
      document.body.style.overflow = '';
    });
  }

  // close on backdrop click
  modal && modal.addEventListener('click', function(e){
    if(e.target === modal){
      modal.setAttribute('aria-hidden','true');
      document.body.style.overflow = '';
    }
  });

  // form submit -> open mail client (mailto) as a quick fallback
  const form = document.getElementById('contactForm');
  if(form){
    form.addEventListener('submit', function(e){
      e.preventDefault();
      const data = new FormData(form);
      const email = data.get('email');
      const name = data.get('name');
      const message = data.get('message');
      const subject = encodeURIComponent('Work inquiry from ' + name);
      const body = encodeURIComponent('Name: ' + name + '\nEmail: ' + email + '\n\n' + message + '\n\nWhatsApp: +62-85157732792');
      window.location.href = `mailto:stdyfiinsz@gmail.com?subject=${subject}&body=${body}`;
    });
  }
});
