<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script
    src="https://kit.fontawesome.com/92cde7fc6f.js"
    crossorigin="anonymous"></script>
  <link
    rel="stylesheet"
    href="node_modules/bootstrap/dist/css/bootstrap.min.css" />
  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="css/index.css" />
  <title>Web Essential System</title>
</head>

<body>
  <div class="container-fluid main-container">
    <div class="row">
      <div class="col form-container">
        <form>
          <div class="image-box">
            <img src="images/resono-logo.png" alt="Resono Logo" />
            <br>
            <strong>Web Team Essentials System</strong>
          </div>
          <div class="mb-3">
            <label for="userEmail" class="form-label">Email address</label>
            <input type="email" class="form-control" id="userEmail" aria-describedby="emailHelp" />
            <div id="emailHelp" class="form-text">
              We'll never share your email with anyone else.
            </div>
          </div>
          <div class="mb-3">
            <label for="userPass" class="form-label">Password</label>
            <input type="password" class="form-control" id="userPass" required/>
          </div>
          <button type="submit" class="btn-submit"><strong>Submit</strong></button>
        </form>
      </div>
      <div class="col credit-box d-none d-lg-flex">
        <div class="container-md">
          <p><strong>RESONO</strong> is about giving companies the power of knowing their business operations are in safe hands as they look toward the future. We want to work with you no matter what phase you are in – start-up, scale-up or enterprise, we have you covered.</p>
          <p>More than just another outsourcing company, we are a team of professionals with proven experience and results in the field.</p>
          <p>Our strategy and support solutions are never a one size fits all. Instead, each is a carefully analysed and tailored set of services ensuring your success.</p>
          <p>We are adaptable and do not expect our customers to conform to rigid practices. You need it? We got it for you!</p>
        </div>
      </div>
    </div>
  </div>
</body>

</html>