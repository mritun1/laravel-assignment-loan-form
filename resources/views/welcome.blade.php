@include('layouts.header')



<div style="background-image:url(https://d1csarkz8obe9u.cloudfront.net/posterpreviews/home-loan-flyer-template-design-ad9bbae0da931bd5d9875db58132c7b8_screen.jpg?ts=1566580067)"
    class="bigBanner">
</div>


<div class="loadTitle">
    <div>
        <h1>Personal Loan - Get Instant Loan Online</h1>
    </div>
    <div>
        <p>Apply for an ABCD Bank Personal Loan online today to unlock a world of possibilities and begin your
            journey towards financial freedom.</p>
    </div>
</div>

<div class="title">
    <h3>Fill up this Form to Apply Online.</h3>
</div>

<div class="col-2">
    <div class="inputSec">
        <div>
            <p>Enter your Mobile Number</p>
        </div>
        <div class="inputDiv">
            <input type="number" id="mobile" placeholder="Enter Mobile Number" />
        </div>
    </div>
    <div class="inputSec">
        <div>
            <p>Enter your PAN Number</p>
        </div>
        <div class="inputDiv">
            <input type="text" id="pan" placeholder="Enter PAN Number" />
        </div>
    </div>
</div>

<div class="inputSec div">
    <div>
        <p>Enter your Address</p>
    </div>
    <div class="inputDiv" style="height:60px;">
        <textarea id="address" name="address" placeholder="Enter your Address" cols="30" rows="10"></textarea>
    </div>
</div>

<div class="col-2">
    <div class="inputSec">
        <div>
            <p>Enter Loan Amount</p>
        </div>
        <div class="inputDiv">
            <input id="amount" type="number" placeholder="Enter Loan Amount" />
        </div>
    </div>
    <div class="inputSec">
        <div>
            <p>For how many years?</p>
        </div>
        <div class="inputDiv">
            <select id="year">
                <option value="1">1 year</option>
                <option value="2">2 years</option>
                <option value="3">3 years</option>
                <option value="4">4 years</option>
            </select>
        </div>
    </div>
</div>

<div id="alert" style="display:none;" class="alert">
    <p>Please! enter the correct data and don't leave any field empty.</p>
</div>

<div class="div submit">
    <button onclick="submitLoan()">Apply for Loan</button>
</div>

<script>
    function submitLoan() {
        const mobile = document.getElementById("mobile").value;
        const pan = document.getElementById("pan").value;
        const address = document.getElementById("address").value;
        const amount = document.getElementById("amount").value;
        const year = document.getElementById("year").value;
        var loadmodal =document.getElementById("loadmodal");
        var alert =document.getElementById("alert");
        loadmodal.style.display = "block";

        fetch("/api/submitloan", {
            method: "POST",
            headers: {
                'Content-Type': 'application/json',
                //'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') // Include CSRF token if required
            },
            body: JSON.stringify({
                mobile: mobile,
                pan: pan,
                address: address,
                amount: amount,
                year: year,
            }),
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok ' + response.statusText);
            }
            return response.json(); // Parse the JSON data from the response
        })
        .then(data => {
            loadmodal.style.display = "none";
            if(data.status==true){
                alert.style.display = "none";
                window.location.href = "/submited";
            }else{
                alert.style.display = "block";
            }
            console.log(data); // Handle the data from the response
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
    }
</script>



<div id="loadmodal" style="display:none;" class="modal">
    <div class="opacity"></div>
    <div class="content">
        <div class="loadicon">
            <img src="https://i.giphy.com/17mNCcKU1mJlrbXodo.webp" alt="loading gif" />
            <h5>Submiting...</h5>
        </div>
    </div>
</div>


@include('layouts.footer')