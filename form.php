<html lang="eu">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/ajax.js"></script>
    <title>Apply - Pari-Udaan</title>
</head>
<body>
<h1 id="h1">Apply Online - Pari Udaan</h1>

<div class="login" style="display:none;">
    <form id="form_login">
        <input type="text" name="name" placeholder="Name" required/><br><br>
        <input type="password" name="pwd" placeholder="Password" required/><br><br><br>
        <input type="button" value="Login" id="login_submit"/>
    </form>
</div>

<br><br>

<div class="step1">
    <h2>Step1</h2>
    <form id="frm1">
        <input type="hidden" name="step" value="1">
        <input type="text" name="name" id="name" placeholder="Name" /><br><br>
        <input type="email" name="email" id="email" disabled/><br><br>
    </form>
    <button id="submit1">Next</button>
</div>

<div class="step2">
    <h2>Step2</h2>
    <form id="frm2">
        <input type="hidden" name="step" value="2">
        <input type="text" name="name" id="name" placeholder="Some other input" /><br><br>
        <input type="text" name="name" id="name" placeholder="Some other input" /><br><br>

        <button id="submit2">Next</button>
    </form>
</div>

<div class="step3">
    <h2>Step3</h2>
    <form id="frm3">
        <input type="hidden" name="step" value="3">
        <input type="text" name="name" id="name" placeholder="Yet another input" /><br><br>
        <input type="text" name="name" id="name" placeholder="Yet another input" /><br><br>

        <button id="submit3">Submit</button>
    </form>
</div>

</body>
</html>