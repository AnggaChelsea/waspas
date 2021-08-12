<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style type="text/css">
  @import url("https://fonts.googleapis.com/css?family=Titillium+Web:400,400i,700&display=swap");
@import url("https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css");

*,
*:before,
*:after {
  box-sizing: border-box;
}

body {
  font-family: "Titillium Web", sans-serif;
  font-size: 20px;
  line-height: 1.4;
  color: #161b1e;
}

.quote-wrapper {
  width: 300px;
  height: 300px;
  position: relative;
  margin: 10vh auto 0; /*OPTIONAL MARGIN*/
}

.text {
  width: 100%;
  height: 100%;
  /*BLUE BG*/
  background: radial-gradient(
    ellipse at center,
    rgba(0, 128, 172, 1) 0%,
    rgba(0, 128, 172, 1) 70%,
    rgba(0, 128, 172, 0) 70.3%
  );
  /*RED BG
  background: radial-gradient(
    ellipse at center,
    rgba(210, 20, 20, 1) 0%,
    rgba(210, 20, 20, 1) 70%,
    rgba(210, 20, 20, 0) 70.3%
  );*/
  position: relative;
  margin: 0;
  color: white;
}

.text p {
  height: 100%;
  font-size: 21px;
  line-height: 1.25;
  padding: 0;
  text-align: center;
  font-style: italic;
  text-shadow: 0.5px 0.5px 1px rgba(0, 0, 0, 0.3);
}

.text::before {
  content: "";
  width: 50%;
  height: 100%;
  float: left;
  shape-outside: polygon(
    0 0,
    98% 0,
    50% 6%,
    23.4% 17.3%,
    6% 32.6%,
    0 50%,
    6% 65.6%,
    23.4% 82.7%,
    50% 94%,
    98% 100%,
    0 100%
  );
  shape-margin: 7%;
}

.text p::before {
  content: "";
  width: 50%;
  height: 100%;
  float: right;
  shape-outside: polygon(
    2% 0%,
    100% 0%,
    100% 100%,
    2% 100%,
    50% 94%,
    76.6% 82.7%,
    94% 65.6%,
    100% 50%,
    94% 32.6%,
    76.6% 17.3%,
    50% 6%
  );
  shape-margin: 7%;
}

.quote-wrapper blockquote footer {
  width: 100%;
  position: absolute;
  bottom: 25px;
  font-size: 17px;
  text-align: center;
  font-style: italic;
  text-shadow: 0.5px 0.5px 1px rgba(0, 0, 0, 0.3);
}

.quote-wrapper::before {
  content: "\201C";
  font-size: 270px;
  height: 82px;
  line-height: 0.78;
  line-height: 1;
  position: absolute;
  top: -48px;
  left: 0;
  z-index: 1;
  font-family: sans-serif, serif;
  color: #ccc;
  opacity: 0.9;
}

@media (min-width: 850px) {
  .quote-wrapper {
    width: 370px;
    height: 370px;
  }

  .quote-wrapper::before {
    font-size: 300px;
  }

  .text p {
    font-size: 26px;
  }

  .quote-wrapper blockquote footer {
    bottom: 32px;
  }
}

/*THIS CSS IS NOT REQUIRED FOR CIRCULAR TEXT*/
/*THIS CSS IS NOT REQUIRED FOR CIRCULAR TEXT*/

.note {
  margin: 5vw;
  padding: 0.5em;
  border-left: 0.5em solid #52e052;
  background: #e9fbe9;
}

.note a {
  text-decoration: none;
  color: #161b1e;
}

.note a:hover {
  text-decoration: underline;
}
img{
  margin-top: 50px;
  position: absolute;
  margin: 0 auto;
}

</style>
</head>
<body style="background-image:url('https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fbackgroundcheckall.com%2Fwp-content%2Fuploads%2F2017%2F12%2Fbackground-air-mineral-14.jpg&f=1&nofb=1');">
<!-- <img src="http://farm6.staticflickr.com/5042/5233734355_e3a11802eb_z.jpg" width="250px" height="260px" alt=""> -->
<div class="quote-wrapper">
  <blockquote class="text" cite="http://www.inspireux.com/category/quotes/jesse-james-garrett/">
    <p> <?php echo $description->description ?></p>
    <footer>– Mineral Indonesia</footer>
  </blockquote>
</div>

</body>
</html>