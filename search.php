<article id="main">  
    <div class="heading">
        Search
        <hr>
    </div>

    <div class="container">
        <div class="search-box">
            <form name="search-box" action="" method="">
                Destination/Hotel Name:<br> 
                <input type="search" name="search" id="searchVal" size="25" autocomplete="off" placeholder="e.g. City or Specific Hotel">
                <br>
                Buget between:<br> 
                <input type="range" name="amountRange" min="0" max="500" value="0" step="10" oninput="this.form.amountInput.value=this.value" />
                <input type="number" name="amountInput" id="amountInput" min="0" max="500" value="0" step="10" oninput="this.form.amountRange.value=this.value" /><br>
                And<br>
                <input type="range" name="amountRange2" min="0" max="500" value="0" step="10" oninput="this.form.amountInput2.value=this.value" />
                <input type="number" name="amountInput2" id="amountInput2" min="0" max="500" value="0" step="10" oninput="this.form.amountRange2.value=this.value" />
                <br>
                Check-in Date:<br>
                <input type="date" name="date"><br>
                Check-out Date:<br>
                <input type="date" name="date">
                <br>
                Rooms: <input type="number" name="number" min="0" max="30" value="0" step="1">
                Beds: <input type="number" name="number" min="0" max="30" value="0" step="1">
                <br>
                <input type="button" onclick="myFunction()" value="Search" >
            </form>
        </div>
        <br>
        <div id="resullts" class="search-result">
           
        </div>
    </div>
</article>