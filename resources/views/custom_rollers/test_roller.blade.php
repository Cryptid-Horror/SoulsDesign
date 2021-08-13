<!DOCTYPE html>
<html>
<head>
    <!-- Should always be kept; found in the public/css -->
    <link href="{{ asset('css/custom_rollers.css') }}" rel="stylesheet">
    <!-- Found in the public/js folder -->
    <script src="{{ asset('js/custom_rollers/example.js') }}"></script>
</head>
<body>
    <div>hello</div>
    <button onclick="generateText()">this button will generate one of the following 3 results</button>
    <ol>
        <li>hey</li>
        <li>bye</li>
        <li>???</li>
    </ol>
    <div id="results" class="example">
        hmm?
    </div>
</body>
</html>