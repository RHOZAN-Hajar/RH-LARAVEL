<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <title>RBTzone</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-574-mexant.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">

    <style>
        body {
            background-color: black;
            color: white;
            margin: 0;
            padding: 0;
            height: 100vh;
            font-family: 'Poppins', sans-serif;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        form {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #fff;
            border-radius: 8px;
            background-color: rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
            height:450px ;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            background-color: rgba(255, 255, 255, 0.1);
            color: #fff;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        @import url('https://fonts.googleapis.com/css2?family=Noto+Serif:ital@1&family=Poppins:wght@400;500;600&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
::selection{
  color: #fff;
  background: #4db2ec;
}

.wrapper{
  max-width: 485px;
  width: 100%;
  background: #fff;
  padding: 22px 30px 40px;
  border-radius: 10px;
  box-shadow: 8px 8px 8px rgba(0, 0, 0, 0.05);
}
.wrapper header{
  color: #4db2ec;
  font-size: 33px;
  font-weight: 500;
  text-align: center;
}
.wrapper .captcha-area{
  display: flex;
  height: 65px;
  margin: 30px 0 20px;
  align-items: center;
  justify-content: space-between;
}
.captcha-img {
  height: 100%;
  width: 345px;
  user-select: none;
  background: #000;
  border-radius: 5px;
  position: relative;
}

.captcha-img > img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 5px;
  opacity: 0.95;
}

.captcha-img .captcha{
  position: absolute;
  left: 50%;
  top: 50%;
  width: 100%;
  color: #fff;
  font-size: 35px;
  text-align: center;
  letter-spacing: 10px;
  transform: translate(-50%, -50%);
  text-shadow: 0px 0px 2px #b1b1b1;
  font-family: 'Noto Serif', serif;
}
.wrapper button{
  outline: none;
  border: none;
  color: #fff;
  cursor: pointer;
  background: #4db2ec;
  border-radius: 5px;
  transition: all 0.3s ease;
}
.wrapper button:hover{
  background: #2fa5e9;
}
.captcha-area .reload-btn{
  width: 75px;
  height: 100%;
  font-size: 25px;
}
.captcha-area .reload-btn i{
  transition: transform 0.3s ease;
}
.captcha-area .reload-btn:hover i{
  transform: rotate(15deg);
}
.wrapper .input-area{
  height: 60px;
  width: 100%;
  position: relative;
}
.input-area input{
  width: 100%;
  height: 100%;
  outline: none;
  padding-left: 20px;
  font-size: 20px;
  border-radius: 5px;
  border: 1px solid #bfbfbf;
}
.input-area input:is(:focus, :valid){
  padding-left: 19px;
  border: 2px solid #4db2ec;
}
.input-area input::placeholder{
  color: #bfbfbf;
}
.input-area .check-btn{
  position: absolute;
  right: 7px;
  top: 50%;
  font-size: 17px;
  height: 45px;
  padding: 0 20px;
  opacity: 0;
  pointer-events: none;
  transform: translateY(-50%);
}
.input-area input:valid + .check-btn{
  opacity: 1;
  pointer-events: auto;
}
.wrapper .status-text{
  display: none;
  font-size: 18px;
  text-align: center;
  margin: 20px 0 -5px;
}
@media (max-width: 506px){
  body{
    padding: 0 10px;
  }
  .wrapper{
    padding: 22px 25px 35px;
  }
  .wrapper header{
    font-size: 25px;
  }
  .wrapper .captcha-area{
    height: 60px;
  }
  .captcha-area .captcha{
    font-size: 28px;
    letter-spacing: 5px;
  }
  .captcha-area .reload-btn{
    width: 60px;
    margin-left: 5px;
    font-size: 20px;
  }
  .wrapper .input-area{
    height: 55px;
  }
  .input-area .check-btn{
    height: 40px;
  }
  .wrapper .status-text{
    font-size: 15px;
  }
  .captcha-area .captcha-img{
    width: 250px;
  }
}
    </style>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>

   <div class="container">
    <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate>
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus />
        </div>

        <!-- Password -->
        <div>
            <label for="password">Mot de passe</label>
            <input id="password" type="password" name="password" required autocomplete="current-password" />
        </div>

    <!-- Ajoutez ces lignes avant la balise </form> -->

        <br>
        
        <button class="check-btn">se Connecter</button>
    

    </form>
</div>

            


           

    <!-- JavaScript Files -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>

    <script>




      

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()




        const captcha = document.querySelector(".captcha"),
reloadBtn = document.querySelector(".reload-btn"),
inputField = document.querySelector(".input-area input"),
checkBtn = document.querySelector(".check-btn"),
statusTxt = document.querySelector(".status-text");

//storing all captcha characters in array
let allCharacters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O',
                     'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd',
                     'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's',
                     't', 'u', 'v', 'w', 'x', 'y', 'z', 0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
function getCaptcha(){
  for (let i = 0; i < 6; i++) { //getting 6 random characters from the array
    let randomCharacter = allCharacters[Math.floor(Math.random() * allCharacters.length)];
    captcha.innerText += ` ${randomCharacter}`; //passing 6 random characters inside captcha innerText
  }
}
getCaptcha(); //calling getCaptcha when the page open
//calling getCaptcha & removeContent on the reload btn click
reloadBtn.addEventListener("click", ()=>{
  removeContent();
  getCaptcha();
});

checkBtn.addEventListener("click", e =>{
  e.preventDefault(); //preventing button from it's default behaviour
  statusTxt.style.display = "block";
  //adding space after each character of user entered values because I've added spaces while generating captcha
  let inputVal = inputField.value.split('').join(' ');
  if(inputVal == captcha.innerText){ //if captcha matched
    statusTxt.style.color = "#4db2ec";
    statusTxt.innerText = "Nice! You don't appear to be a robot.";
    setTimeout(()=>{ //calling removeContent & getCaptcha after 2 seconds
      removeContent();
      getCaptcha();
    }, 2000);
  }else{
    statusTxt.style.color = "#ff0000";
    statusTxt.innerText = "Captcha not matched. Please try again!";
  }
});

function removeContent(){
 inputField.value = "";
 captcha.innerText = "";
 statusTxt.style.display = "none";
}
    </script>
</body>

</html>
