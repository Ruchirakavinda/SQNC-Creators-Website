     
     
     <!-- Footer -->
     <div>
      <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
      viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
      <defs>
      <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
      </defs>
      <g class="parallax">
      <use xlink:href="#gentle-wave" x="48" y="0" fill="#30a94456" />
      <use xlink:href="#gentle-wave" x="48" y="3" fill="#30a94456"/>
      <use xlink:href="#gentle-wave" x="48" y="5" fill="#30A945" />
      <use xlink:href="#gentle-wave" x="48" y="7" fill="#30a94456" />
      </g>
      </svg>
      </div>
</div>
     <div class="head" id="footer">

    <!-- </div>
    <div class="custom-shape-divider-bottom-1610179740" style="position: relative; bottom: -1px; width: 100%;padding: 0%;margin: 0px;">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill3"></path>
            <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill2"></path>
            <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
        </svg>
    </div>-->
    <footer>
        <div class="container">
            <div class="row frow">
                <div class="col-12 col-lg-4 col-md-12 col-sm-12">
                    <img id="logo-footer" src="../images/Footer-Logo.png">
                    <p style="color: white;">Feel free to contact us anytime you need. We are ready to provide the best quality services with best possible customer service in order to make your experience with Sequence Creators amazing. Follow us on our social media to receive updates and alerts about latest offers. We Create the Standards!</p>
                   
                   
                    <!-- Logos here-->
                    
                    <div class="footer-icons">
                        <div class="faicon icon">
                            <a href="https://www.linkedin.com/in/sqnc-creators-a57b721b9/" target="_blank" class="fa fa-linkedin mr-3 pl-2 li fsocial social" style="font-size: 20px;"></a>
                        </div>
                        <div class="faicon icon">
                                <a href="https://mobile.twitter.com/CreatorsSqnc" target="_blank" class="fa fa-twitter mr-3 pl-2 tw fsocial social" style="font-size: 20px;"></a>
                        </div>
                        <div class="faicon icon">
                            <a href="https://github.com/SQNC-Creators" target="_blank" class="fa fa-github mr-3 pl-2 git fsocial social" style="font-size: 20px;"></a>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-lg-4 col-md-12 col-sm-12">
                    <h3><strong>Contact Us</strong></h3>
                    <form id="frm" method="POST" action="./contactt.php">
                    
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Name</label>
                          <input name="namee" type="text" class="form-control" id="input1" placeholder="Enter name here" aria-describedby="emailHelp" required>
                          <span style="color:rgb(173, 40, 0);display:none;" id="span1"> ! Please Enter The User Name</span>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input name="email" type="email" class="form-control" id="input2" placeholder="example@abc.com" aria-describedby="emailHelp" required>
                            <span style="color:rgb(173, 40, 0);display:none;" id="span2"> ! Please Enter Valid E mail Address</span>
                          </div>
                        <div class = "form-group">
                        <label for = "msg" >Message</label>
                        <textarea name="msg" class = "form-control" id="input3" rows = "3" placeholder = "Type your message here" required></textarea>
                        <span style="color:rgb(173, 40, 0);display:none;" id="span3"> ! Please Enter The Your Message</span>
                        </div>
                        <!--div name="sent" type="submit" class=" btn btn-outline-light mt-3 mb-3" onclick="valid()" >Submit</div-->
                        <input name="sent" value="Submit" type="submit" class=" btn btn-outline-light mt-3 mb-3"  > <!-- onclick="valid()" -->
                      </form>
                </div>
                <div class="col-12 col-lg-4 col-md-12 col-sm-12">
                    <img class="img-fluid mx-auto mt-5"  src="../images/footer2.png" style="width:500px">
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>© 2021 Copyright: Sequence Creators</p>
        </div>
    </footer>
