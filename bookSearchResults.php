<head>
  <link rel="icon" href="media/Bilbio_icon.png">
  <title>Dashboard - Biblio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">
  <link rel="stylesheet" href="biblio.css">
  <style>
    .container{
      display: flex;
      position: relative;
      align-items: center;
      justify-content:center;
    }
  </style>
</head>

<body>

  <header id="header">
    <!--Home Button-->
    <div>

      <a id="biblio" href="index.html">
        <h2>Biblio</h2>
      </a>
    </div>


    <!-- profile picture -->
    <div class="dropdown">
      <img src="media/profile pic.png" role="button" id="profile" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">


      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item" href="#">Profile</a>
        <a class="dropdown-item" href="#">Setting</a>
        <a class="dropdown-item" href="preview.html">Logout</a>
      </div>
    </div>
  </header>

  <nav class="navigation">
    <div>
      <ul>
        <li class="navigation-item active">
          <a href="index.html">DASHBOARD</a>
        </li>
        <li class="navigation-item">
          <a href="book.html">BOOKS</a>
        </li>

        <li class="navigation-item">
          <a href="Lending/lending.html">LENDING</a>
        </li>

        <li class="navigation-item">
          <a href="member.html">MEMBER</a>
        </li>
        <li class="navigation-item">
          <a href="statistic.html">STATISTIC</a>
        </li>
      </ul>
    </div>
  </nav>
  <?php
  error_reporting(0);
  require "config.php";
  require "bookResultProcess.php";

   ?>
   <main class="container">
       <h2 id="book-dtl-title">Book Details</h2>
       <div class = "book-left">
           <div class="centeralize">
               <img href="<?php echo $info[8]; ?>" class="book-img">
           </div>
           <div class="wrapper">
               <input type="checkbox" id="st1" value="1" />
               <label for="st1"></label>
               <input type="checkbox" id="st2" value="2" />
               <label for="st2"></label>
               <input type="checkbox" id="st3" value="3" />
               <label for="st3"></label>
               <input type="checkbox" id="st4" value="4" />
               <label for="st4"></label>
               <input type="checkbox" id="st5" value="5" />
               <label for="st5"></label>
           </div>
           <div>
               <textarea rows="10" class='text2' readonly><?php echo $info[3];?></textarea>
           </div>
       </div>
       <div class="table-div">
           <button class="edit-btn" onclick="goBack()">Back</button>
           <button class="edit-btn" id="edit">Edit</button>

           <table class="table table2">
               <tr>
                   <td class="table-attr">ID</td>
                   <td><input class='text' readonly value="001"></input></td>
               </tr>
               <tr>
                   <td class="table-attr">Title</td>
                   <td><input class='text' readonly value=""><?php echo $info["title"];?></input></td>
               </tr>
               <tr>
                   <td class="table-attr">Author</td>
                   <td><input class='text' readonly value=""></input></td>
               </tr>
               <tr>
                   <td class="table-attr">Genre</td>
                   <td><input class='text' readonly value=""></input></td>
               </tr>
               <tr>
                   <td class="table-attr">Edition</td>
                   <td><input class='text' readonly value="Paperback"></input></td>
               </tr>
               <tr>
                   <td class="table-attr">ISBN</td>
                   <td><input class='text' readonly value=""></input></td>
               </tr>
               <tr>
                   <td class="table-attr">Published Year</td>
                   <td><input class='text' readonly value=""></input></td>
               </tr>
               <tr>
                   <td class="table-attr">Publisher</td>
                   <td><input class='text' readonly value=""></input></td>
               </tr>
               <tr>
                   <td class="table-attr">Pages</td>
                   <td><input class='text' readonly value=""></input></td>
               </tr>
               <tr>
                   <td class="table-attr">Copies</td>
                   <td><input class='text' readonly value="1"></input></td>
               </tr>
               <tr>
                   <td class="table-attr">Created Date</td>
                   <td><input class='text' readonly value=""></input></td>
               </tr>
           </table>
       </div>

   </main>
   <footer class="text-center font-italic">
       <hr>
       Copyright &copy 2019 Biblio.com</br>
   </footer>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
       crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
       crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
       crossorigin="anonymous"></script>

   <script>
   var btn = document.querySelector('#edit')
   var editable = false;
   var txt = document.querySelectorAll('.text')
   var txt2 = document.querySelector('.text2')

   btn.addEventListener("click",function(){
       if(editable === false){
           txt.forEach(element => {
               element.removeAttribute('readonly');
               element.classList.add('editable');
           });
           txt2.removeAttribute('readonly');
           txt2.classList.add('editable');
           btn.innerHTML = "Done";
           editable = true;
       }else{
           txt.forEach(element => {
               element.setAttribute('readonly','');
               element.classList.remove('editable');
           });
           txt2.setAttribute('readonly','');
           txt2.classList.remove('editable');
           btn.innerHTML = "Edit";
           editable = false;
       }
   });

   function goBack() {
       window.history.back();
   }

   </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="bookSearchJS.js"></script>
  </body>
  </html>
