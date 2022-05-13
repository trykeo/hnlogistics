<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HN logistics</title>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href=" {{asset('css/app.css')}}">
    <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>


</head>

<style>
   
  
    #myform {
    border-radius: 10px;
    background-color: #f2f2f2;
    padding: 20px;
    width: 75%;
    margin-top: 5px;
    
   
    }
    input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    }
    
    /* .myform1 {
        position: absolute;
        top: 100px;
        left: 25%
    } */
    button[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    }
    button[type=submit]:hover {
  background-color: #45a049;
}
    #footer{
        width: 75%;
        margin-top: 5px;
        margin-bottom: 5px;
        border-radius: 10px;
        padding: 20px;
        background-color: #f2f2f2;
    }
    #introduction{
    border-radius: 10px;
    background-color: #f2f2f2;
    padding: 20px;
    width: 75%;    
    }
</style>
<body>

    {{-- navigation bar --}}
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#myPage"><p class="text-white">HN Cambodia Logistic </p> </a>
          </div>
         
          <div class="collapse navbar-collapse" id="myNavbar">
            
            <ul class="nav navbar-nav navbar-right">
              {{-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> --}}
              {{-- <li><a href="{{route('login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              <li><a href="{{route('register')}}"><span class="glyphicon glyphicon-log-in"></span> Register</a></li> --}}
            </ul>
          </div>
        </div>
      </nav>
    {{-- Introduction   --}}
      <div class="container-fluid text-center" id="introduction" style="margin-top: 90px">
        <h5 class="text-info">ចុះឈ្មោះជាសមាជិករបស់HN Cambodia Logistics ឥឡូវនេះ នឹងទទួលបានការបញ្ចុះតម្លៃ15%ភ្លាមៗ</h5>
        <h5 class="text-info">สมัครเป็นสมาชิก HN Cambodia logistics ตอนนี้รับส่วนลดทันที 15%</h5>
      </div>
    {{-- Introduction --}}

   {{-- navigation bar --}}

      <div class="container-fluid" id="myform" >
        <div class="myform1">
            <form method="POST" action="{{route('form.store')}}">
              @csrf
                <div class="form-group mb-3">
                    <label for="customername" class="form-label">Name:</label><br>
                    <input type="text" class="form-controll" id="customername" name="name" value="" placeholder="Enter your name..." >
                </div>
            
                <div class="form-group mb-3">
                    <label for="clientphonenumber" class="from-label">Phone Number:</label><br>
                    <input type="text" class="form-controll" id="clientphonenumber" name="phone" value="" placeholder="Phone number" >
                </div>
                <div class="form-group mb-3">
                    <label for="clientlocation" class="form-label">Location:</label><br>
                    <input type="text" class="form-controll" id="clientlocation" name="location" value="" placeholder="Location..." >
                </div>
<hr>
                <div class="form-check">
                    <h4>តើអ្នកចង់ចូលជាសមាជិករបស់HN ដើម្បីទទួលបានការបញ្ចុះតម្លៃរាល់ពេលផ្ញើរទំនិញទៅខ្មែរមែនរឺទេ?
                        คุณสนใจเป็นสมาชิกของ HN เพื่อรับส่วนลดทุกครั้งที่ส่งสินค้าไปกัมพูชาใช่หรือไม่</h4>
                    <div>
                        <input class="form-check-input" type="radio" value="Yes" name="joinmemberforpromotion" id="question1">
                        <label class="form-check-label" for="question1">
                        Yes
                        </label>
                    </div>
                    <div>
                        <input class="form-check-input" type="radio" value="No" name="joinmemberforpromotion" id="question(1)">
                        <label class="form-check-label" for="question(1)">
                        No
                        </label>
                    </div>
                </div>
                <hr>
                <div class="form-check">
                    <p>តើអ្នកជាអតិថិជនថ្មី រឺអតិថិជនចាស់របស់HN?</p>
                    <p>คุณเป็นลูกค้าใหม่ หรือลูกค้าเก่าของHN ค่ะ</p>
                    <div>
                        <input class="form-check-input" type="radio" value="អតិថិជនថ្មី" name="youareoldornew" id="question2">
                        <label class="form-check-label" for="question2">
                            អតិថិជនថ្មី /ลูกค้าใหม่
                        </label>
                    </div>
                    <div>
                        <input class="form-check-input" type="radio" value="អតិថិជនចាស់" name="youareoldornew" id="question(2)">
                        <label class="form-check-label" for="question(2)">
                            អតិថិជនចាស់ /ลูกค้าเก่า
                        </label>
                    </div>
                </div>
                <hr>
                <div class="form-check">
                    <p>តើអ្នកជាអ្នកផ្ញើរនៅថៃ រឺអ្នកទទួលទំនិញនៅខ្មែរ?</p>
                    <p>คุณเป็นผู้ส่ง หรือเป็นผู้รับที่กัมพูชาคะ</p>
                    <div>
                        <input class="form-check-input" type="radio" value="ជាអ្នកផ្ញើរនៅថៃផ្ទាល់" name="areyousenderorreceiver" id="question3">
                        <label class="form-check-label" for="question3">
                            ជាអ្នកផ្ញើរនៅថៃផ្ទាល់ / เป็นผู้ส่ง
                        </label>
                    </div>
                    <div>
                        <input class="form-check-input" type="radio" value="ជាអ្នកទទួលទំនិញនៅខ្មែរ" name="areyousenderorreceiver" id="question(3)">
                        <label class="form-check-label" for="question(3)">
                            ជាអ្នកទទួលទំនិញនៅខ្មែរ / เป็นผู้รับที่กัมพูชา
                        </label>
                    </div>
                </div>

                <hr>

                <div class="form-check">
                    <p>តើអ្នកផ្ញើរទំនិញទៅខ្មែរញឹកញាប់ប៉ុណ្ណា?</p>
                    <p>คุณส่งของไปกัมพูชาบ่อยแค่ไหนคะ</p>
                    <div>
                        <input class="form-check-input" type="radio" value="មួយអាទិត្យផ្ញើរលើសពី2ដង" id="question(4)" name="howoftenyousentgood">
                        <label class="form-check-label" for="question(4)">
                            មួយអាទិត្យផ្ញើរលើសពី2ដង / ส่ง1 อาทิตย์เกิน2 ครั้ง
                        </label>
                    </div>
                    <div>
                        <input class="form-check-input" type="radio" value="មួយអាទិត្យម្តង" id="question(5)" name="howoftenyousentgood">
                        <label class="form-check-label" for="question(5)">
                            មួយអាទិត្យម្តង / อาทิตย์ละครั้ง
                        </label>
                    </div>
                    <div>
                        <input class="form-check-input" type="radio" value="មួយខែម្តង" id="question(6)" name="howoftenyousentgood">
                        <label class="form-check-label" for="question(6)">
                            មួយខែម្តង / เดือนละครั้ง
                        </label>
                    </div>
                    <div>
                        <input class="form-check-input" type="radio" value="យូរៗផ្ញើរម្តង" id="question(7)" name="howoftenyousentgood">
                        <label class="form-check-label" for="question(7)">
                            យូរៗផ្ញើរម្តង / ส่งนานๆที
                        </label>
                    </div>
                </div>
                <hr>
                <button type="submit" class="" name="submit">Submit</button>
            </form>
        </div>
      </div>

      {{-- footer --}}


      <!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container my-5" id="footer">
    <!-- Footer -->
    <footer
            class="text-center text-lg-start text-dark"
            style="background-color: #ECEFF1"
            >
      <!-- Section: Social media -->
      <section
               class="d-flex justify-content-between p-4 text-white"
               style="background-color: #21D192; border-radius: 10px; padding: 3px;"
               >
        <!-- Left -->
        <div class="me-5">
          <span>Get connected with <b>HN Cambodia Logistics CO., ltd</b> on social networks:</span>
        </div>
        <!-- Left -->
  
        <!-- Right -->
        <div>
          <a href="https://m.facebook.com/HN-Cambodia-Logistics-Co-Ltd-%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B8%AA%E0%B9%88%E0%B8%87%E0%B8%AA%E0%B8%B4%E0%B8%99%E0%B8%84%E0%B9%89%E0%B8%B2%E0%B9%84%E0%B8%9B%E0%B8%81%E0%B8%B1%E0%B8%A1%E0%B8%9E%E0%B8%B9%E0%B8%8A%E0%B8%B2-100983512057219/" class="text-white me-4">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-google"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-linkedin"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-github"></i>
          </a>
        </div>
        <!-- Right -->
      </section>
      <!-- Section: Social media -->
  
      <!-- Section: Links  -->
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-6 col-lg-4 col-xl-5 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold">Company name</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
              <p>
                Here you can use rows and columns to organize your footer
                content. Lorem ipsum dolor sit amet, consectetur adipisicing
                elit.
              </p>
            </div>
            <!-- Grid column -->
  
            <!-- Grid column -->
            {{-- <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">Services</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
              <p>
                <a href="#!" class="text-dark">MDBootstrap</a>
              </p>
              <p>
                <a href="#!" class="text-dark">MDWordPress</a>
              </p>
              <p>
                <a href="#!" class="text-dark">BrandFlow</a>
              </p>
              <p>
                <a href="#!" class="text-dark">Bootstrap Angular</a>
              </p>
            </div> --}}
            <!-- Grid column -->
  
            <!-- Grid column -->
            {{-- <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">Useful links</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
              <p>
                <a href="#!" class="text-dark">Your Account</a>
              </p>
              <p>
                <a href="#!" class="text-dark">Become an Affiliate</a>
              </p>
              <p>
                <a href="#!" class="text-dark">Shipping Rates</a>
              </p>
              <p>
                <a href="#!" class="text-dark">Help</a>
              </p>
            </div> --}}
            <!-- Grid column -->
  
            <!-- Grid column -->
            <div class="col-md-6 col-lg-8 col-xl-7 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">Contact</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
              <p><i class="fas fa-home mr-3"></i>48/3 Soi Phetchaburi 17,
                 Thanon Phaya Thai,
                 Ratchathewi, Bangkok 10400</p>
              {{-- <p><i class="fas fa-envelope mr-3"></i> hncambodialogistics@gmail.com</p> --}}
              <p><i class="fab fa-line mr-3"></i>hncambodia</p>
              <p><i class="fab fa-telegram mr-3"></i> + 855 (0) 97-252-1010</p>
              <p><i class="fab fa-telegram mr-3"></i> + 66 (0) 97-252-1010</p>
              {{-- <p><i class="fab fa-phone mr-3"></i> + 66 (0) 63-3050-765</p> --}}
             
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->
  
      <!-- Copyright -->
      <div
           class="text-center p-3"
           style="background-color: rgba(0, 0, 0, 0.2);  border-radius: 10px; padding: 2px;"
           >
        © 2022 Copyright:
        <a class="text-dark" href="https://m.facebook.com/HN-Cambodia-Logistics-Co-Ltd-%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B8%AA%E0%B9%88%E0%B8%87%E0%B8%AA%E0%B8%B4%E0%B8%99%E0%B8%84%E0%B9%89%E0%B8%B2%E0%B9%84%E0%B8%9B%E0%B8%81%E0%B8%B1%E0%B8%A1%E0%B8%9E%E0%B8%B9%E0%B8%8A%E0%B8%B2-100983512057219/"

           >HN Cambodia Logistics Co., ltd</a
          >
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </div>
  <!-- End of .container -->


    {{-- footer --}}

</body>
</html>