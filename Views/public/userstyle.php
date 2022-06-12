* {
    margin: 0;
    padding: 0;
}
body {
    line-height:1;
    font-size:100%;
    font-family:'Open Sans', sans-serif;
    color:#5a5a5a;
}

#login-wrapper {
    align-items: center;
    background-image: url(R.png);
    background-position: center;
    background-size: 85%;
    width: 500px;
    margin: 10px;
    margin-left: 30%;
    margin-top: 50px;
    padding: 20px;
    box-shadow: 0 0 1em #cccccc;
}

/* ISI */
h1{
    margin-bottom: 20px;
}

.form-control{
    width: 100%;
    padding: 10px;
    border: 2px solid #cccccc;
    box-sizing: border-box;
    font-size: 15px;
    margin-bottom: 15px;
}

.form-label{
    color: black;
    font-size: 18px;
}

button[type=submit]{
    padding: 7px;
    color: white;
    background-color: rgb(124, 44, 148);
    box-sizing: border-box;
    font-size: 15px;
    border-radius: 4px;
}

button[type=submit]:active,
button[type=submit]:hover{
    opacity: 75%;
}