<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<!-- font viga -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

<!-- font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

{{-- mystyle --}}
<style>
  html {
  scroll-behavior: smooth;
}

/* navbar */
.navbar-brand {
  font-family: viga;
  font-size: 20px;
  color: white;
}
#navbar .nav-link {
  font-weight: 700;
}

/* footer */
footer a,
p,
h6 {
  color: black;
}

.bgfooter {
  background-color: gray;
}

/* utility */
.tombol {
  text-transform: uppercase;
  border-radius: 30px;
  background-color: #3cb7ae;
  border: none;
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3);
  width: 150px;
}
.tombol:hover {
  background-color: #359b94;
  margin-top: -4px;
}

/* desktop */
@media (min-width: 992px) {
  .navbar-brand,
  .nav-link {
    color: white !important;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);
  }
  .nav-link {
    text-transform: uppercase;
    margin-right: 10px;
  }
  .nav-link:hover::after {
    content: "";
    display: block;
    border-bottom: solid 3px white;
    margin: auto;
    width: 50%;
    padding-bottom: 5px;
    margin-bottom: -8px;
  }

  .jumbotron {
    margin-top: -75px;
    height: 640px;
  }

  .jumbotron .display-4 {
    font-size: 60px;
  }

  .content2 {
    text-align: left;
  }
}

</style>
