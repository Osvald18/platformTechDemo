<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAKURA//HOME</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <link href="headers.css" rel="stylesheet">
    <link href="heroes.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>
    
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4" style="border-bottom: 1px solid #c07d9c;">
            <div class="col-md-3 mb-2 mb-md-0">
                <img src="IMAGES/SAKURA.png" alt="Brand Image" style="width: 300px; height: auto;">
            </div>
            
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2"><b>HOME</b></a></li>
                <li class="nav-item dropdown" id="dropdownShop">
                    <a class="nav-link dropdown-toggle px-2" href="#" id="navbarDropdownShop" role="button" aria-haspopup="true" aria-expanded="false">
                        <b>SHOP</b>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg" aria-labelledby="dropdownMenuButton">
             
                      <li><h6 class="dropdown-header">Arrangements</h6></li>
                      <li><a class="dropdown-item" href="#"><i class="bi bi-box"></i> Boxed Flowers</a></li>
                      <li><a class="dropdown-item" href="#"><i class="bi bi-basket"></i> Flower Baskets</a></li>
                      <li><a class="dropdown-item" href="#"><i class="bi bi-emoji-heart-eyes"></i> Centerpieces</a></li>
                      <li><hr class="dropdown-divider"></li>
          
                      <li><h6 class="dropdown-header">Bouquets</h6></li>
                      <li><a class="dropdown-item" href="#"><i class="bi bi-flower1"></i> Mixed Bouquets</a></li>
                      <li><a class="dropdown-item" href="#"><i class="bi bi-flower2"></i> Seasonal Bouquets</a></li>
                      <li><hr class="dropdown-divider"></li>
          
         
                      <li><h6 class="dropdown-header">Other Sections</h6></li>
                      <li><a class="dropdown-item" href="#"><i class="bi bi-stars"></i> Featured</a></li>
                      <li><a class="dropdown-item" href="#"><i class="bi bi-lightning-charge-fill"></i> Deals</a></li>
                  </ul>
                  
                </li>
                <li class="nav-item dropdown" id="dropdownServices">
                    <a class="nav-link dropdown-toggle px-2" href="#" id="navbarDropdownServices" role="button" aria-haspopup="true" aria-expanded="false">
                        <b>SERVICES</b>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownServices">
                        <li><a class="dropdown-item" href="#"><i class="bi bi-calendar-event"></i> Event Decorating</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-flower1"></i> Bouquet</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-basket2"></i> Basket</a></li>
                    </ul>
                    
                </li>
            </ul>

    
            <div class="col-md-3 text-end d-flex align-items-center">
                <div class="input-group me-3">
                    <span class="input-group-text" style="background-color: #c07d9c; border: none;">
                        <i class="bi bi-search" style="color: white;"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="" style="background-color: #ffffff; border: 1px solid #c07d9c;">
                </div>
                <div class="dropdown">
                    <a href="#" class="nav-link d-inline" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-lines-fill fs-4"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="#"><i class="bi bi-person-circle"></i> Profile</a></li>
                      <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Settings</a></li>
                      <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#loginModal"><i class="bi bi-box-arrow-in-right"></i> Login</a></li>
                      <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#signupModal"><i class="bi bi-person-plus"></i> Sign Up</a></li>
                  </ul>
                  
                  
                    
                </div>
                <a href="#" class="nav-link d-inline ms-3"><i class="bi bi-basket2-fill fs-4"></i></a>
            </div>
        </header>
    </div>
  
<!-- MODALS FOR EVERY PAGE (MAYBE UNLESS NAAY WAY NA MU HREF ANG FOOTER THROUGH ANOTHER PAGE)-->  



<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="loginModalLabel" style="color: #c07d9c; font-weight: bold;"><i class="fas fa-sign-in-alt"></i> Login</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <form method = "POST">
                  <div class="mb-3">
                      <label for="loginEmail" class="form-label" style="font-weight: bold; color: #c07d9c;"><i class="fas fa-envelope"></i> Email address</label>
                      <input type="email" class="form-control" id="loginEmail" required>
                  </div>
                  <div class="mb-3 password-wrapper position-relative">
                      <label for="loginPassword" class="form-label" style="font-weight: bold; color: #c07d9c;"><i class="fas fa-lock"></i> Password</label>
                      <div class="input-group">
                          <input type="password" class="form-control" id="loginPassword" required>
                          <button class="btn custom" type="button" style="background-color: #9dbab3; color: white;" onclick="togglePasswordVisibility('loginPassword')">
                              <i class="fas fa-eye-slash"></i>
                          </button>
                      </div>
                      <div class="form-text">
                          <a href="#" class="text-muted text-decoration-none">Forgot password?</a>
                      </div>
                  </div>
                  <button type="submit" name = "submit" class="btn btn-custom" style="background-color: #9dbab3; color: white;"><b>Login</b></button>
                  <button type="button" class="btn btn-custom" style="background-color: #809993; color: white;" id="openSignupModal"><b>Create An Account</b></button>
              
          </div>
      </div>
  </div>
</div>

<!-- Sign Up Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupModalLabel" style="color: #c07d9c; font-weight: bold;"><i class="fas fa-user-plus"></i> Sign Up</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
          <!-- Personal Information Section -->
          <h3 style="color: #c07d9c; font-weight: bold;"><i class="fas fa-info-circle"></i> Your Personal Information</h3>
          <hr style="border-top: 1px solid #c07d9c;">
          <div class="mb-3">
            <label for="signupEmail" class="form-label" style="font-weight: bold; color: #c07d9c;"><i class="fas fa-envelope"></i> Email address</label>
            <input type="email" name = "email" class="form-control" id="signupEmail" required>
          </div>
          <div class="mb-3">
            <label for="signupFirstName" class="form-label" style="font-weight: bold; color: #c07d9c;"><i class="fas fa-user"></i> First Name</label>
            <input type="text" name = "fname" class="form-control" id="signupFirstName" required>
          </div>
          <div class="mb-3">
            <label for="signupLastName" class="form-label" style="font-weight: bold; color: #c07d9c;"><i class="fas fa-user"></i> Last Name</label>
            <input type="text" name = "lname" class="form-control" id="signupLastName" required>
          </div>
          <div class="mb-3">
            <label for="signupPhoneNumber" class="form-label" style="font-weight: bold; color: #c07d9c;"><i class="fas fa-phone"></i> Phone Number</label>
            <input type="text" name = "ContactNumber" class="form-control" id="signupPhoneNumber" required>
          </div>

          <!-- Address Section -->
          <h3 style="color: #c07d9c; font-weight: bold;"><i class="fas fa-map-marker-alt"></i> Your Address Information</h3>
          <hr style="border-top: 1px solid #c07d9c;">
          <div class="mb-3">
            <label for="signupStreetAddress" class="form-label" style="font-weight: bold; color: #c07d9c;"><i class="fas fa-road"></i> Street Address</label>
            <input type="text" name = "Address" class="form-control" id="signupStreetAddress" required>
          </div>
          <div class="mb-3">
            <label for="signupCity" class="form-label" style="font-weight: bold; color: #c07d9c;"><i class="fas fa-city"></i> City</label>
            <select class="form-select" name = "City" id="signupCity" required>
              <option value="" disabled selected>Select City</option>
              <option value="Cebu City">Cebu City</option>
              <option value="Lapu-Lapu City">Lapu-Lapu City</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="signupSpecialIdentifier" class="form-label" style="font-weight: bold; color: #c07d9c;"><i class="fas fa-tag"></i> Location Identifier</label>
            <input type="text" name = "locationidentifier" class="form-control" id="signupSpecialIdentifier" required>
          </div>

          <!-- Password Section -->
          <h3 style="color: #c07d9c; font-weight: bold;"><i class="fas fa-key"></i> Your Password</h3>
          <hr style="border-top: 1px solid #c07d9c;">
          <div class="mb-3 password-wrapper position-relative">
            <label for="signupPassword" class="form-label" style="font-weight: bold; color: #c07d9c;"><i class="fas fa-lock"></i> Password</label>
            <div class="input-group">
              <input type="password" name = "Password" class="form-control" id="signupPassword" required>
              <button class="btn custom" type="button" style="background-color: #9dbab3; color: white;" onclick="togglePasswordVisibility('signupPassword')">
                <i class="fas fa-eye-slash"></i>
              </button>
            </div>
          </div>
          <div class="mb-3 password-wrapper position-relative">
            <label for="signupConfirmPassword" name = "ConfirmPassword" class="form-label" style="font-weight: bold; color: #c07d9c;"><i class="fas fa-lock"></i> Confirm Password</label>
            <div class="input-group">
              <input type="password" class="form-control" id="signupConfirmPassword" required>
              <button class="btn custom" type="button" style="background-color: #9dbab3; color: white;" onclick="togglePasswordVisibility('signupConfirmPassword')">
                <i class="fas fa-eye-slash"></i>
              </button>
            </div>
          </div>
          
          <div class="mb-3">
            <input type="checkbox" name = "terms" class="form-check-input" id="agreeTerms">
            <label class="form-check-label" for="agreeTerms">I have read the <a href="#" style="color: #c07d9c;"><b>terms of service</b></a></label>
          </div>
          
          <div class="mb-3">
            <button type="submit" name = "submit" class="btn btn-custom" style="background-color: #9dbab3; color: white;"><b>Sign Up</b></button>
          </div>
        
      </div>
    </div>
  </div>
</div>

<!-- (FOOTER) MODALS FOR EVERY PAGE (MAYBE UNLESS NAAY WAY NA MU HREF ANG FOOTER THROUGH ANOTHER PAGE)-->
 
<div class="modal fade" id="faqsModal" tabindex="-1" aria-labelledby="faqsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="termsModalLabel" style="color: #c07d9c; font-weight: bold;">FAQs</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="color: #c07d9c;">
            <p >Here are some frequently asked questions:</p>
    <p><b style="opacity: 1;">Q: What types of flowers do you offer?</b></p>
    <p >A: We offer a wide variety of flowers, including roses, lilies, tulips, daisies, orchids, and more. Our selection ensures you can find the perfect arrangement for any occasion.</p>
    
    <p><b style="opacity: 1;">Q: Do you offer same-day delivery?</b></p>
    <p >A: Yes, we offer same-day delivery for orders placed before noon. This service ensures your flowers arrive fresh and on time, even at short notice.</p>
    
    <p><b style="opacity: 1;">Q: Can I customize my bouquet?</b></p>
    <p >A: Absolutely! You can customize your bouquet to include your favorite flowers and colors. Whether you prefer a classic mix or a unique arrangement, we can tailor it to your specifications.</p>
    
    <p><b style="opacity: 1;">Q: What occasions do you provide floral arrangements for?</b></p>
    <p >A: We provide floral arrangements for a wide range of occasions, including birthdays, anniversaries, weddings, corporate events, and more. Each arrangement is designed to suit the theme and sentiment of the occasion.</p>
    
    <p><b style="opacity: 1;">Q: How do I place an order?</b></p>
    <p>A: You can place an order directly through our website or by contacting our customer service team. Simply browse our selection, choose your desired arrangement, and follow the prompts to complete your order.</p>
    
    <p><b style="opacity: 1;">Q: What payment methods do you accept?</b></p>
    <p >A: We accept various payment methods, including credit/debit cards, PayPal, and other secure online payment options. Payment details are encrypted and processed securely to ensure your information remains protected.</p>
        </div>
       
      </div>
  </div>
</div>

<div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="termsModalLabel" style="color: #c07d9c; font-weight: bold;">Terms and Service</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body "  style="color: #c07d9c;">
            <p><b>Our Terms of Service:</b></p>

            <p><b>1. Delivery times:</b> Delivery estimates are provided but not guaranteed. Factors like weather and traffic may affect delivery schedules.</p>
            <p><b>2. Substitutions:</b> We reserve the right to substitute flowers of equal or greater value in case of supply shortages or quality concerns. Customers will be notified of substitutions whenever possible.</p>
            <p><b>3. Accuracy of information:</b> Customers must provide accurate delivery information, including recipient details. Incorrect information may lead to delivery delays or failures.</p>
            <p><b>4. Reporting issues:</b> Any issues with orders (e.g., damage, incorrect items) must be reported within 24 hours of delivery for prompt resolution.</p>
            <p><b>5. Price and availability:</b> Prices and product availability may change without prior notice. We strive to maintain accurate information on our website, but errors may occur.</p>
            <p><b>6. Agreement:</b> By placing an order, you agree to these terms and conditions. Please review them carefully before making a purchase.</p>
            <p><b>7. Returns and exchanges:</b> We accept returns and exchanges within 24 hours of purchase for items in their original condition. Customers are responsible for return shipping costs.</p>
            <p><b>8. Refunds:</b> Refunds will be issued to the original form of payment within 7-10 business days after receiving the returned item.</p>
            <p><b>9. Customer support:</b> Our customer support team is available 24/7 to assist with any questions or concerns regarding your order or our services.</p>
        </div>
          </div>
          
      </div>
  </div>
</div>

<div class="modal fade" id="privacyModal" tabindex="-1" aria-labelledby="privacyModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="termsModalLabel" style="color: #c07d9c; font-weight: bold;">Privacy Policy</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="color: #c07d9c;">
            <p><b style="opacity: 1;">Our Privacy Policy:</b></p>
            <p>We are committed to protecting your privacy. We use the information we collect about you to process orders, provide customer service, and improve our products and services. This policy outlines how we collect, use, and protect your personal information.</p>
            <p><b style="opacity: 1;">Information Collection and Use:</b></p>
            <p>We collect personal information when you register on our site, place an order, subscribe to our newsletter, or fill out a form. This information may include your name, email address, mailing address, phone number, and credit card information. We use this information to process transactions, send periodic emails, and improve our website.</p>
            <p><b style="opacity: 1;">How We Protect Your Information:</b></p>
            <p>We implement a variety of security measures to maintain the safety of your personal information when you place an order or enter, submit, or access your personal information. These security measures include encryption, secure server hosting, and regular security audits.</p>
            <p><b style="opacity: 1;">Disclosure to Third Parties:</b></p>
            <p>We do not sell, trade, or otherwise transfer your personally identifiable information to outside parties. This does not include trusted third parties who assist us in operating our website, conducting our business, or servicing you, as long as those parties agree to keep this information confidential.</p>
            <p><b style="opacity: 1;">Changes to Our Privacy Policy:</b></p>
            <p>We may update this policy from time to time to reflect changes in our practices or for other operational, legal, or regulatory reasons. We encourage you to review this policy periodically for any changes. Your continued use of our website after any changes indicates your acceptance of those changes.</p>
     
          </div>
          
      </div>
  </div>
</div>

<div class="modal fade" id="returnsModal" tabindex="-1" aria-labelledby="returnsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="termsModalLabel" style="color: #c07d9c; font-weight: bold;">Returns and Refunds</h5>

              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="color: #c07d9c; ">
            <p><b style="opacity: 1;">Our Returns & Refunds Policy:</b></p>
            <p>If you are not satisfied with your purchase, please contact us within 24 hours of delivery. We will work with you to make it right, including offering a replacement or refund if necessary.</p>
            <p>Please note that certain conditions apply and not all products are eligible for returns or refunds. For instance, personalized and custom orders cannot be returned unless they arrive damaged or defective.</p>
            <p>To initiate a return, please follow these steps:</p>
            <ol>
                <li>Contact our customer service team via email or phone to request a return authorization.</li>
                <li>Provide your order number, the reason for the return, and any supporting photographs if the product is damaged or defective.</li>
                <li>Our team will review your request and provide instructions for returning the item if eligible.</li>
            </ol>
            <p>Once your return is received and inspected, we will notify you of the approval or rejection of your refund. If approved, your refund will be processed, and a credit will automatically be applied to your original method of payment within a certain number of days.</p>
            <p>Exceptions to our return policy include:</p>
            <ul>
                <li>Items purchased on sale or clearance.</li>
                <li>Perishable goods such as flowers and plants that are not returned in their original condition.</li>
               
            </ul>
        
          </div>
         
      </div>
  </div>
</div>

<!---MODAL END---->


      <main>
      
        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="IMAGES/BANNER1.png" class="d-block w-100" alt="Slide 1">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <img src="IMAGES/carouseltxt3.png" alt="Image 1">
                            <p><a class="btn btn-lg btn-custom" style="background-color: #9dbab3; color: white;" href="#"><b>Shop Now</b></a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="IMAGES/BANNER2.png" class="d-block w-100" alt="Slide 2">
                    <div class="container">
                        <div class="carousel-caption">
                            <img src="IMAGES/carouseltxt2.png" alt="Image 2">
                            <p><a class="btn btn-lg btn-custom" style="background-color: #9dbab3; color: white;" href="#"><b>Learn More</b></a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="IMAGES/BANNER3.png" class="d-block w-100" alt="Slide 3">
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <img src="IMAGES/carouseltxt1.png" alt="Image 3">
                            <p><a class="btn btn-lg btn-custom" style="background-color: #9dbab3; color: white;" href="#"><b>Explore More</b></a></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="my-5">
          <div class="container">
            <div class="border-line my-4" style="border-bottom: 1px solid #c07d9c;"></div>
          </div>
          
          <div class="container text-center">
            <img src="IMAGES/titlefeatured1.png" alt="Featured Plants Image" class="img-fluid mx-auto d-block" style="max-height: 200px;">
            <p class="lead mt-4" style="color: #9dbab3;">Sakura Flower Shop, Your Premier Destination for Exquisite Florals.<br>
              Transform Every Moment with Sakura's Timeless Bouquets.<br>
              Crafting Cherished Memories with Every Petal.</p>
          </div>
          
          <div id="plantCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <!-- Featured Plant 1 -->
              <div class="carousel-item active">
                <div class="container">
                  <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                      <div class="card h-100 shadow-sm">
                        <img src="IMAGES/FLOWERPICS/flowerpic1.png" class="card-img-top" alt="Featured Plant 1">
                        <div class="card-body">
                          <h5 class="card-title text-left">Spring Blossom Bouquet</h5>
                          <div class="d-flex justify-content-between align-items-center">
                            <div>
                              <h3 class="text-custom">₱2,500</h3>
                            </div>
                            <div>
                              <button class="btn btn-custom me-2" type="button" data-bs-toggle="modal" data-bs-target="#plantModal1" style="background-color: #9dbab3; color: white; font-weight: bold;">
                                <i class="fas fa-shopping-cart"></i> Add to Cart
                              </button>
                              <button class="btn btn-custom" type="button" data-bs-toggle="modal" data-bs-target="#plantModal1Details" style="background-color: #9dbab3; color: white; font-weight: bold;">
                                <i class="fas fa-eye"></i> View Details
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Featured Plant 2 -->
                    <div class="col">
                      <div class="card h-100 shadow-sm">
                        <img src="IMAGES/FLOWERPICS/flowerpic2.png" class="card-img-top" alt="Featured Plant 2">
                        <div class="card-body">
                          <h5 class="card-title text-left">Summer Garden Bouquet</h5>
                          <div class="d-flex justify-content-between align-items-center">
                            <div>
                              <h3 class="text-custom">₱3,500</h3>
                            </div>
                            <div>
                              <button class="btn btn-custom me-2" type="button" data-bs-toggle="modal" data-bs-target="#plantModal2" style="background-color: #9dbab3; color: white; font-weight: bold;">
                                <i class="fas fa-shopping-cart"></i> Add to Cart
                              </button>
                              <button class="btn btn-custom" type="button" data-bs-toggle="modal" data-bs-target="#plantModal2Details" style="background-color: #9dbab3; color: white; font-weight: bold;">
                                <i class="fas fa-eye"></i> View Details
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Featured Plant 3 -->
                    <div class="col">
                      <div class="card h-100 shadow-sm">
                        <img src="IMAGES/FLOWERPICS/flowerpic3.png" class="card-img-top" alt="Featured Plant 3">
                        <div class="card-body">
                          <h5 class="card-title text-left">Autumn Harvest Bouquet</h5>
                          <div class="d-flex justify-content-between align-items-center">
                            <div>
                              <h3 class="text-custom">₱2,000</h3>
                            </div>
                            <div>
                              <button class="btn btn-custom me-2" type="button" data-bs-toggle="modal" data-bs-target="#plantModal3" style="background-color: #9dbab3; color: white; font-weight: bold;">
                                <i class="fas fa-shopping-cart"></i> Add to Cart
                              </button>
                              <button class="btn btn-custom" type="button" data-bs-toggle="modal" data-bs-target="#plantModal3Details" style="background-color: #9dbab3; color: white; font-weight: bold;">
                                <i class="fas fa-eye"></i> View Details
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
         
    <button class="carousel-control-prev custom-carousel-control-prev" type="button" data-bs-target="#plantCarousel" data-bs-slide="prev">
      <span class="custom-carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next custom-carousel-control-next" type="button" data-bs-target="#plantCarousel" data-bs-slide="next">
      <span class="custom-carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
          </div>
          
          
    
          <div class="container text-center mt-4">
            <a href="#" class="btn btn-custom btn-lg d-flex align-items-center justify-content-center mx-auto" style="background-color: #9dbab3; color: white; font-weight: bold; width: 200px;">
              View More <i class="fas fa-chevron-right ms-2"></i>
            </a>
          </div>
        </div>
        
        
        
        <div class="container">
          <br>
          <div class="border-line my-4" style="border-bottom: 1px solid #c07d9c;"></div>
        </div>
        
        
        

        
        
        
           
        


         <div class="my-5">
            <div class="p-5 text-center bg-body-tertiary" style="background-color: #f5eaea;">
                <div class="container py-5">
                    <div class="row align-items-center">
                        <div class="col-lg-6 text-lg-start">
                            <img src="IMAGES/SAKURA.png" alt="Brand Image" style="width: 100%; max-width: 600px; height: auto;">
                        </div>
                        <div class="col-lg-6 mt-4 mt-lg-0">
                            <img src="IMAGES/welcometxt.png" alt="Welcome Image" style="max-width: 100%; height: auto;">
                            <p class="lead mt-3" style="color: #9dbab3; ">
                                Welcome to <b>SAKURA</b> Flower Shop nestled in the heart of Banilad, Cebu, where beauty 
                                blossoms with every petal. We specialize in crafting exquisite floral arrangements for every occasion, from weddings and 
                                corporate events to intimate celebrations and heartfelt gifts. With a passion for creativity and quality, we strive to bring nature's elegance
                                into your life, one bouquet at a time.
                            </p>
                            
                            
                        </div>
                        
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
              <br>
              <div class="border-line my-4" style="border-top: 1px solid #c07d9c;"></div>
            </div>
            
 <div class="my-5">
         
  <div class="container text-center">
    <img src="IMAGES/titlefeatured2.png" alt="Latest Products Image" class="img-fluid mx-auto d-block" style="max-height: 200px;">
    <p class="lead mt-4" style="color: #9dbab3;">Discover Our Latest Collection of Exquisite Florals.<br>
  
      Crafted with Passion and Precision for Unforgettable Moments.</p>
  </div>
          
  <div id="plantCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <!-- Featured Plant 1 -->
      <div class="carousel-item active">
        <div class="container">
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card h-100 shadow-sm">
                <img src="IMAGES/FLOWERPICS/flowerpic4.png" class="card-img-top" alt="Featured Plant 1">
                <div class="card-body">
                  <h5 class="card-title text-left">Spring Blossom Bouquet</h5>
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <h3 class="text-custom">₱2,500</h3>
                    </div>
                    <div>
                      <button class="btn btn-custom me-2" type="button" data-bs-toggle="modal" data-bs-target="#plantModal1" style="background-color: #9dbab3; color: white; font-weight: bold;">
                        <i class="fas fa-shopping-cart"></i> Add to Cart
                      </button>
                      <button class="btn btn-custom" type="button" data-bs-toggle="modal" data-bs-target="#plantModal1Details" style="background-color: #9dbab3; color: white; font-weight: bold;">
                        <i class="fas fa-eye"></i> View Details
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Featured Plant 2 -->
            <div class="col">
              <div class="card h-100 shadow-sm">
                <img src="IMAGES/FLOWERPICS/flowerpic5.png" class="card-img-top" alt="Featured Plant 2">
                <div class="card-body">
                  <h5 class="card-title text-left">Summer Garden Bouquet</h5>
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <h3 class="text-custom">₱3,500</h3>
                    </div>
                    <div>
                      <button class="btn btn-custom me-2" type="button" data-bs-toggle="modal" data-bs-target="#plantModal2" style="background-color: #9dbab3; color: white; font-weight: bold;">
                        <i class="fas fa-shopping-cart"></i> Add to Cart
                      </button>
                      <button class="btn btn-custom" type="button" data-bs-toggle="modal" data-bs-target="#plantModal2Details" style="background-color: #9dbab3; color: white; font-weight: bold;">
                        <i class="fas fa-eye"></i> View Details
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Featured Plant 3 -->
            <div class="col">
              <div class="card h-100 shadow-sm">
                <img src="IMAGES/FLOWERPICS/flowerpic6.png" class="card-img-top" alt="Featured Plant 3">
                <div class="card-body">
                  <h5 class="card-title text-left">Autumn Harvest Bouquet</h5>
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <h3 class="text-custom">₱2,000</h3>
                    </div>
                    <div>
                      <button class="btn btn-custom me-2" type="button" data-bs-toggle="modal" data-bs-target="#plantModal3" style="background-color: #9dbab3; color: white; font-weight: bold;">
                        <i class="fas fa-shopping-cart"></i> Add to Cart
                      </button>
                      <button class="btn btn-custom" type="button" data-bs-toggle="modal" data-bs-target="#plantModal3Details" style="background-color: #9dbab3; color: white; font-weight: bold;">
                        <i class="fas fa-eye"></i> View Details
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  
    <!-- Carousel controls -->
    <button class="carousel-control-prev custom-carousel-control-prev" type="button" data-bs-target="#plantCarousel" data-bs-slide="prev">
      <span class="custom-carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next custom-carousel-control-next" type="button" data-bs-target="#plantCarousel" data-bs-slide="next">
      <span class="custom-carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  
  
          
         
          <div class="container text-center mt-4">
            <a href="#" class="btn btn-custom btn-lg d-flex align-items-center justify-content-center mx-auto" style="background-color: #9dbab3; color: white; font-weight: bold; width: 200px;">
              View More <i class="fas fa-chevron-right ms-2"></i>
            </a>
          </div>
        </div>

            <div class="container">
              <br>
              <div class="border-line my-4" style="border-top: 1px solid #c07d9c;"></div>
            </div>
            
            <div class=" my-5">
              <div class="row">
                <div class="col-12 p-0 position-relative">
                  <div class="gradient-mask">
                    <img src="IMAGES/SERVICESBANNER.png" class="img-fluid w-100" alt="Services Banner">
                  </div>
                  <div class="position-absolute" style="top: 50%; left: 50%; transform: translate(-50%, -50%); width: 75%;">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dYxln0lCvO0?si=ovSanG60z7-Lkly0"></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           

       
            

            <div class="container" style="border-top: 1px solid #c07d9c;">
                <footer class="py-5">
                  <div class="row">
                    <div class="col-6 col-md-2 mb-3">
                      <h5 style="color: #c07d9c;"><b><i class="bi bi-geo-alt-fill"></i> CONTACT INFORMATION</b></h5>
                      <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Address: Banilad, Cebu</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Phone: +1234567890</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Email: sakuraflowershop@gmail.com</a></li>
                      </ul>
                    </div>
              
                    <div class="col-6 col-md-2 mb-3">
                      <h5 style="color: #c07d9c;"><B><i class="bi bi-link-45deg"></i> QUICK LINKS</B></h5>
                      <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Shop</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Services</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About Us</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Contact Us</a></li>
                      </ul>
                    </div>
              
                    <div class="col-6 col-md-2 mb-3">
                      <h5 style="color: #c07d9c;"><b><i class="bi bi-grid-3x3-gap-fill"></i> OTHER SECTIONS</b></h5>
                      <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary" data-bs-toggle="modal" data-bs-target="#faqsModal">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary" data-bs-toggle="modal" data-bs-target="#termsModal">Terms of Service</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary" data-bs-toggle="modal" data-bs-target="#privacyModal">Privacy Policy</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary" data-bs-toggle="modal" data-bs-target="#returnsModal">Returns & Refunds</a></li>
                      </ul>
                    </div>
              
                    <div class="col-md-5 offset-md-1 mb-3">
                       
                          <h5 style="color: #c07d9c;"><b>Subscribe to our newsletter <i class="bi bi-envelope-fill"></i></b></h5>
                          <p style= "color:#9dbab3 ;">Stay updated with our latest promotions and products.</p>
                          <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="">
                            <button type="submit" name = "submit" class="btn btn-custom" style="background-color: #9dbab3; color: white;"><b>Subscribe</b></button>

                             
                              </a>
                              
                          </div>
                        </form>
                      </div>
                    </div>
              
                  <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                    <p style="color: #c07d9c;">&copy; 2024 Sakura Flower Shop, Inc. All rights reserved.</p>
                    <ul class="list-unstyled d-flex">
                      <li class="ms-3"><a class="link-body-emphasis" href="#"><i class="bi bi-twitter"></i></a></li>
                      <li class="ms-3"><a class="link-body-emphasis" href="#"><i class="bi bi-instagram"></i></a></li>
                      <li class="ms-3"><a class="link-body-emphasis" href="#"><i class="bi bi-facebook"></i></a></li>
                    </ul>
                  </div>
                </footer>
              </div>
              
        
    

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



<?php

session_start();
if($_POST['submit']){
if(empty($_POST ["email"]) || empty($_POST ["fname"]) || empty($_POST ["lname"]) || empty($_POST ["ContactNumber"]) || empty($_POST ["Address"]) || empty($_POST ["City"]) || empty($_POST ["locationidentifier"]) || empty($_POST ["Password"]) || empty($_POST ["ConfirmPassword"]) || empty($_POST ["terms"]))
{ 
	echo"<h3>";
	echo "Please Fill all the required field"; 
	echo"</h3>";

} else if ($_POST["ConfirmPassword"] !== $_POST["Password"]) {

  echo"<h3>";
	echo "Confirm Password doesn't match its corresponding Password"; 
	echo"</h3>";

} else{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sakurashop";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}


$fname = mysqli_real_escape_string($conn, $_POST ["fname"]);
$lname = mysqli_real_escape_string($conn, $_POST ["lname"]);
$ContactNumber = mysqli_real_escape_string($conn, $_POST ["ContactNumber"]);
$Address = mysqli_real_escape_string($conn, $_POST ["Address"]);
$City = mysqli_real_escape_string($conn, $_POST ["City"]);
$email = mysqli_real_escape_string($conn, $_POST ["email"]);
$locationidentifier = mysqli_real_escape_string($conn, $_POST ["locationidentifier"]);
$name = $fname . $lname; 

	
// store data in session variable through user
 
$_SESSION['lname']= $_POST['lname']; 
$_SESSION['fname']= $_POST['fname']; 
$_SESSION['ContactNumber']= $_POST['ContactNumber'];  
$_SESSION['Address']= $_POST['Address'];
$_SESSION['City']= $_POST['City'];
$_SESSION['email']= $_POST['email'];
$_SESSION['locationidentifier']= $_POST['locationidentifier'];	
echo $_SESSION['lname'];
$sql = "INSERT INTO customer(custname, ContactNumber, cust_address, City, email, locationidentifier)
VALUES ('$name', '$ContactNumber', '$Address', '$City', '$email', '$locationidentifier')";

if (mysqli_query($conn, $sql)) {
error_reporting(0);
ini_set('display_errors', 0);
echo "<h3>";
echo "Registration Completed!";
echo "</h3>";
}

else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
}
?>