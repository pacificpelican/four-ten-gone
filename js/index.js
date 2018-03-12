const burst = new mojs.Burst({
  radius:   { 0: 300 },
  count:    30,
  children: {
    shape:      'polygon',
    fill:       { 'purple' : 'black' },
    radius:     20,
    angle:      { 360: 0 },
    duration:   2000
  }
});

document.addEventListener("DOMContentLoaded", function() {
    burst.replay(); 
});