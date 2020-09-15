function generateText() {
    var number = Math.floor(Math.random() * (3 - 0) ) + 0;
    var array = ['hey', 'bye', '???'];
    document.getElementById('results').innerHTML = array[number];
}