<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .jumbotron{
                margin-top: 25px;
                background: white;
                margin-left:10%;
                margin-right: 10%;
            }
           .startcontent{
                border-top:1px solid gainsboro;
           }
           .content{
            margin-left:10%;
            margin-right:10%;
            margin-top:15px;
            position: relative;
           }
           .card{
               border: none;
           }
           .card:hover{
                box-shadow: 0 0 2px 1px gainsboro;
           }
           .footer{
            text-align:center;
           }

        </style>
    </head>
    <body>

        <div class="navbar navbar-expand-lg">
                <div class="container" style="padding-bottom: 10px">
                        <div class="header" >
                        <a href="#"> <img src="http://127.0.0.1:8000/logo.png" alt="" style="text-align: center;margin-left:100%"></a>
                    </div>
                </div>
            </div>

            <!--Navbar-->
                <div>
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                      
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                      
                        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 200px">
                          <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fa fa-home" style="font-size: 20px;color:#A9A9A9"></i>Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="">About us</a>
                            </li>
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Help
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Install</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                              </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                              </li>
                              <li class="nav-item" style="float: rigth">
                                <a class="nav-link" href="#">Reviews</a>
                              </li>
                          </ul>
                          <a href="{{ __('Login') }}" style="margin-right: 10px; text-decoration: none;color:grey"><i class="fa fa-address-card" style="font-size:18px;margin-right:5px"></i></i>Login</a>
                         <a href="{{ __('Register') }}" style=" text-decoration: none;color:grey;margin-right:250px"><i class="fa fa-user" style="font-size:18px"></i> Register</a>
                        </div>
                      </nav>
                </div>

                <!--Content-->
            <div class="startcontent">
                <div class="jumbotron">
                    <h1 >Hello, welcome to eCommerce!</h1>
                    <hr class="my-4">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati praesentium aspernatur eos aliquam suscipit odit molestias architecto ea cupiditate recusandae inventore quod laborum omnis doloribus, est provident at qui vel?</p>
                    <a class="btn btn-outline-danger btn-lg" href="{{ route('install.post', ['steep' => 'site']) }}" role="button">Install app</a>
                </div>
            </div>

           <div class="content">
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit omnis a quis corrupti dicta, atque enim nihil voluptate deleniti distinctio. Iure amet consequuntur dolor sapiente accusantium ea debitis, maxime pariatur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor quos est accusamus eius neque harum! Magnam nisi fuga voluptate sed. Nisi, doloremque voluptas numquam iure recusandae labore dolore quisquam laboriosam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure ipsa cumque maxime vel. Excepturi animi nesciunt architecto, ea voluptatum tenetur temporibus est assumenda ad maxime labore fugit dignissimos ducimus cupiditate! Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique quidem, minima ad ab doloremque cupiditate fuga inventore consequuntur distinctio at maiores ullam quia rerum quis odio. Corrupti, dignissimos? Repudiandae, officia.</p>
               <div class="card mb-3" style="width: 100%;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="https://www.paldesk.com/wp-content/uploads/2019/08/ecommerce-guide-how-to-start-an-ecommerce-business-1024x439.png" class="card-img" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil animi quam facere porro autem maxime ratione velit voluptas cum dicta! Architecto laboriosam nobis neque animi corrupti fugiat modi, perferendis nemo. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mb-3" style="width: 100%;">
                <div class="row no-gutters">
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil animi quam facere porro autem maxime ratione velit voluptas cum dicta! Architecto laboriosam nobis neque animi corrupti fugiat modi, perferendis nemo. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <img src="https://www.paldesk.com/wp-content/uploads/2019/08/ecommerce-guide-how-to-start-an-ecommerce-business-1024x439.png" class="card-img" alt="">
                  </div>
                </div>
              </div>
              <div class="card mb-3" style="width: 100%;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="https://www.paldesk.com/wp-content/uploads/2019/08/ecommerce-guide-how-to-start-an-ecommerce-business-1024x439.png" class="card-img" alt="">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil animi quam facere porro autem maxime ratione velit voluptas cum dicta! Architecto laboriosam nobis neque animi corrupti fugiat modi, perferendis nemo. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
              </div>
              </div>

              <br>
              <br>
              <br>
              <br>
              <!--Footer-->
              <div class="footer" id="bottom">
            <p>All rights reserved</p>  
            </div>

        </body>
</html>
