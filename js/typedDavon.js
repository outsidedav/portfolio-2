var app = document.getElementById('typer');

var typewriter = new Typewriter(app, {
    loop: true
});

typewriter.typeString('UX Designer')
    .pauseFor(10000)
    .deleteAll()
    .typeString('Developer')
    .pauseFor(2000)
    .deleteAll()
    .typeString('Creative Technologist')
    .pauseFor(2500)
    .deleteAll()
    .typeString('Human Centered Designer')
    .pauseFor(2500)
    .deleteChars(8)
    .typeString('Designing Human')
    .pauseFor(10000)
    .deleteAll()
    .start();



