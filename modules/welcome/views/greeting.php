<h1>Hello, <?= out($name) ?></h1>

<button mx-get="welcome/greeting/John" 
                mx-target="h1" 
                mx-select="h1" 
                mx-swap="outerHTML" 
                mx-push-url="true">John</button>

<button mx-get="welcome/greeting/Sarah" 
                mx-target="h1" 
                mx-select="h1" 
                mx-swap="outerHTML" 
                mx-push-url="true">Sarah</button>

<button mx-get="welcome/greeting/Charlie" 
                mx-target="h1" 
                mx-select="h1" 
                mx-swap="outerHTML" 
                mx-push-url="true">Charlie</button>

<button mx-get="welcome/greeting/Jack" 
                mx-target="h1" 
                mx-select="h1" 
                mx-swap="outerHTML"
                mx-push-url="true">Jack</button>



    <div id="counter" class="mt-3">0 seconds passed</div>

    <style>
        #counter {
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>

    <script>
        let seconds = 0;

        // Update the counter every second
        setInterval(function() {
            seconds++;
            document.getElementById('counter').textContent = seconds + ' seconds passed';
        }, 1000);
    </script>
