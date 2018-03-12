const burst = new mojs.Burst({
  radius:   { 0: 275 },
  count:    30,
  children: {
    shape:      'circle',
    fill:       { 'purple' : 'white' },
    radius:     12,
    angle:      { 360: 0 },
    duration:   1900
  }
});

document.addEventListener("DOMContentLoaded", function() {
    burst.replay(); 
});