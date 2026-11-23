/* Small menu script: dropdowns and mobile menu */
document.addEventListener('click',function(e){
  var open=document.querySelectorAll('.dd.open');
  if(!e.target.closest('.dd')){open.forEach(function(d){d.classList.remove('open');d.querySelector('.ddb').setAttribute('aria-expanded','false')})}
  var t=e.target.closest('[data-act="dd"]');
  if(t){var d=t.parentNode,o=!d.classList.contains('open');open.forEach(function(x){x.classList.remove('open')});d.classList.toggle('open',o);t.setAttribute('aria-expanded',String(o));return}
  t=e.target.closest('[data-act="burger"]');
  if(t){var tp=document.querySelector('.top'),m=!tp.classList.contains('menu-open');tp.classList.toggle('menu-open',m);t.setAttribute('aria-expanded',String(m))}
});
