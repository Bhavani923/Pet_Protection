<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FEEDBACK FORM</title>
    <link rel="stylesheet" href="feedbk.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="shortcut icon" href="images/imageL.png">
  </head>
  <body>
    <h1 style="font-family: copperplate;text-align: center;text-decoration: underline;">FEEDBACK</h1>
    <div class="container">
      <div class="post">
        <div class="text"></div>
        <h2 style="font-family: serif;color: rgb(60, 226, 212);"> Thanks for rating us!</h2>
        <div class="edit">
            <h5 style="text-decoration: underline; color: tomato;">EDIT</h5>
        </div>
      </div>
      <div class="star-widget">
        <input type="radio" name="rate" id="rate-5">
        <label for="rate-5" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-4">
        <label for="rate-4" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-3">
        <label for="rate-3" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-2">
        <label for="rate-2" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-1">
        <label for="rate-1" class="fas fa-star"></label>
        <form action="Feedback.php" method="post">
          <header></header>
          <div class="textarea1">
            <textarea cols="30" placeholder="USERNAME" text-align= "center" name="username"></textarea>
          </div>
          <div class="textarea">
            <textarea cols="30" placeholder="Give us your feedback.." name="feedback"></textarea>
          </div>
          <div class="btn">
            <button type="submit" name="feedbk">
                <h3 style="color: rgb(44, 216, 110);font-family: serif;">Post</h3>
            </button>
          </div>
        </form>
      </div>
    </div>
    <script>
      const btn = document.querySelector("button");
      const post = document.querySelector(".post");
      const widget = document.querySelector(".star-widget");
      const editBtn = document.querySelector(".edit");
      btn.onclick = ()=>{
        widget.style.display = "none";
        post.style.display = "block";
        editBtn.onclick = ()=>{
          widget.style.display = "block";
          post.style.display = "none";
        }
        return false;
      }
    </script>

  </body>
</html>