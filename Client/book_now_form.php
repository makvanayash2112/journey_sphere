<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!----======== CSS ======== -->
        <link rel="stylesheet" href="css/book_now_form.css">

        <!----===== Iconscout CSS ===== -->
        <link rel="stylesheet"
            href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

        <title>Responsive Regisration Form </title>
    </head>
    <body>
        <div class="container">
            <header>MANDATORY INFORMATION</header>  
            <form action="#">
                <div class="form first">
                    <div class="details personal">
                        <span class="title">Adult 1</span>

                        <div class="fields">
                            <div class="input-field">
                                <label>Enter your full Name</label>
                                <input type="text" placeholder="Enter your full Name"
                                    required>
                            </div>

                            <div class="input-field">
                                <label>Date of birth </label>
                                <input type="date" placeholder="Date of birth"
                                    required>
                                
                            </div>

                            <div class="input-field">
                                <label>Gender</label>
                                <select required>
                                    <option disabled selected>Select
                                        gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Others</option>
                                </select>
                            </div>

                            <div class="input-field">
                                <label>Nationality </label>
                                <input type="text"
                                    placeholder="Nationality " required>
                            </div>

                            <div class="input-field">
                                <label>Passport number </label>
                                <input type="number"
                                    placeholder="Enter passport number " required>
                            </div>


                            <div class="input-field">
                                <label>Passport expiry date </label>
                                <input type="date"
                                    placeholder="Enter passport expiry date " required>
                            </div>
                            <div class="input-field">
                                <label>Passport issuing country</label>
                                <input type="text"
                                    placeholder="Enter country" required>
                            </div>
                            
                        </div>
                    </div>

                    <div class="details ID">
                        <span class="title"> Adult 2</span>

                        <div class="fields">
                            <div class="input-field">
                                <label>Enter your full Name</label>
                                <input type="text" placeholder="Enter your full Name"
                                    required>
                            </div>

                            <div class="input-field">
                                <label>Date of birth </label>
                                <input type="date" placeholder="Date of birth"
                                    required>
                                
                            </div>

                            <div class="input-field">
                                <label>Gender</label>
                                <select required>
                                    <option disabled selected>Select
                                        gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Others</option>
                                </select>
                            </div>

                            <div class="input-field">
                                <label>Nationality </label>
                                <input type="text"
                                    placeholder="Nationality " required>
                            </div>

                             <div class="input-field">
                                <label>Passport number </label>
                                <input type="number"
                                    placeholder="Enter passport number " required>
                            </div>

                            <div class="input-field">
                                <label>Passport expiry date  </label>
                                <input type="date"
                                    placeholder="Enter expiry date " required>
                            </div>

                            <div class="input-field">
                                <label>Passport issuing country  </label>
                                <input type="text "
                                    placeholder="Enter country name" required>
                            </div>
                        </div>
                        

                        <button class="nextBtn">
                            <span class="btnText">Next</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div>

                <div class="form second">
                    <div class="CONTACT INFORMATION">
                        <span class="title">CONTACT INFORMATION</span>

                        <div class="fields">
                            <div class="input-field">
                                <label>Email id</label>
                                <input type="email"
                                    placeholder="Enter your email id"
                                    required>
                            </div>

                            <div class="input-field">
                                <label> Mobile number </label>
                                <input type="number"
                                    placeholder="Enter moblie number" required>
                            </div>

                            <div class="input-field">
                                <label>State</label>
                                <input type="text"
                                    placeholder="Enter your state" required>
                            </div>

                            <div class="input-field">
                                <label>City</label>
                                <input type="text"
                                    placeholder="Enter your city" required>
                            </div>

                            <div class="input-field">
                                <label>GST state</label>
                                <input type="text"
                                    placeholder="Enter GST state" required>
                            </div>

                            <div class="input-field">
                                <label>GST address  </label>
                                <input type="text"
                                    placeholder="Enter your GST address" required>
                            </div>
                            <div class="input-field">
                                <label>Enter Your Special Reqeust</label>
                                <input type="text"
                                    placeholder="Enter your Reqeust" required>
                            </div>
                        </div>
                    </div>
                        
                        <div class="buttons">
                            <div class="backBtn">
                                <i class="uil uil-navigator"></i>
                                <span class="btnText">Back</span>
                            </div>

                            <button class="sumbit">
                                <span class="btnText">Submit</span>
                                <i class="uil uil-navigator"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <script src="js/book_now_form.js"></script>
    </body>
</html>