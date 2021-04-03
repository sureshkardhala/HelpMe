<footer>
      <div class="main-contentf">
          <div class="lefted boxfoot">
              <h2>About Us</h2>
              <div class="contentf">
                  <p>Afterrender as you or we expect.
                       Its the equivalent of dogs and cats 
                       living together - total chaos. 
                       If you can't remove older version references, 
                       we recommend using a kit with version 4
                    </p>
                  <div class="social">
                      <a href="#"><span style="color:whitesmoke;" class="fa fa-facebook-square"></span></a>
                      <a href="#"><span style="color:whitesmoke;" class="fa fa-twitter"></span></a>
                      <a href="#"><span style="color:whitesmoke;" class="fa fa-instagram"></span></a>
                      <a href="#"><span style="color:whitesmoke;" class="fa fa-youtube-play"></span></a>
                  </div>
              </div>
          </div>
          <div class="centerfoot boxfoot">
            <h2>Address</h2>
            <div class="contentf">
                <div class="place">
                    <span class="fas fa-map-marker-alt"></span>
                    <span class="text">India</span>
                </div>
                <div class="email">
                    <span class="fas fa-envelope"></span>
                    <span class="text">helpme.io@gmail.com</span>
                </div>
            </div>
          </div>
          <div class="right boxfoot">
              <h2>Contact Us</h2>
              <div class="contentf">
                  <form class="footerform" action="#">
                      <div class="email">
                          <div class="text">E-Mail *</div>
                          <input type="email" required>
                      </div>
                      <div class="msg">
                          <div class="text">Message *</div>
                          <textarea rows="2" cols="25" required></textarea>
                      </div>
                      <div class="btn">
                          <button type="submit" >Send</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
      <div class="bottom-foot">
          <center class="new-foot">
              <span class="credit">Created By <a href="#">HelpMe.io</a> | </span>
              <span class="far fa-copyright"></span><span> 2020 All Rights Reserved.</span>
          </center>
      </div>
  </footer>



<style>

/* @import url("''");
      *{
          padding:0;
          box-sizing: border-box;
          font-family: sans-serif;
      } */
      footer{
          bottom:0px;
          width:100%;
          margin-top:60px;
          background: #111;
         color:#d9d9d9;
      }
      .main-contentf{
          display:flex;
      }
      .main-contentf .boxfoot{
          flex-basis: 50%;
          padding: 10px 20px;
      }
      .boxfoot h2{
          font-size:1.125rem;
          font-weight: 600;
          text-transform: uppercase;
      }
      .boxfoot .contentf{
          margin: 20px 0 0 0;
          position: relative;
      }
      .boxfoot .contentf:before{
          position: absolute;
          content: '';
          top:-10px;
          height: 2px;
          width: 100%;
          background: #1a1a1a;
      }
      .boxfoot .contentf:after{
          position: absolute;
          content:'';
          height: 2px;
          width: 15%;
          background: #f12020;
          top: -10px;
      }
  
      .lefted .contentf p{
          text-align: justify;
      }
      .lefted .contentf .social{
          margin: 20px 0 0 0;
      }
      .lefted .contentf .social a{
          padding:0 2px;
      }
      .lefted .contentf .social a span{
          height: 40px;
          width: 40px;
          background: #1a1a1a;
          line-height: 40px;
          text-align: center;
          font-size: 18px;
          border-radius: 5px;
          transition: 0.3s;
      }
      .lefted .contentf .social a span:hover{
          background: #f12020;
      }
      .centerfoot .contentf .fas{
    background: #1a1a1a;
    height: 45px;
    width:45px;
    line-height: 45px;
    text-align: center;
    border-radius:50%;
    transition: 0.3s;
    cursor: pointer;
      }
      .centerfoot .contentf .email{
          padding-top: 5px;
      }
      .centerfoot .contentf .fas:hover{
    background: #f12020;
      }
      .centerfoot .contentf .text{
    font-size: 1.0625rem;
    font-weight: 500;
    padding-left: 10px;
  }
  .right .footerform .text{
      font-size: 1.0625rem;
      margin-bottom: 2px;
      color:#656565;
  }
  .right .footerform .msg{
    margin-top: 10pxs;
  }
      .right .footerform input, .right .footerform textarea{
          width: 100%;
          font-size: 1.0625rem;
          background: #151515;
          padding-left: 10px;
          border: 1px solid #222222;
      }
      .right .footerform input:focus,
      .right .footerform textarea:focus{
          outline-color: #3498db;
      }
      .right .footerform input{
          height: 35px;
      }
      .right .footerform .btn{
          margin-top: 10px;
      }
      .right .footerform .btn button{
          height: 40px;
          width: 100%;
          border: none;
          outline: none;
          background: #f12020;
          font-size: 1.0625rem;
          font-weight: 500;
          cursor: pointer;
          transition: .3s;
      }
      .right .footerform .btn button:hover{
          background: grey;
      }
      .bottom-foot .new-foot{
          padding: 5px;
          font-size: 0.9375rem;
          background: #151515;
      }
      .bottom-foot .new-foot span{
          color: #656565;
      }
      .bottom-foot .new-foot a{
          color: #f12020;
          text-decoration: none;
      }
      .bottom-foot .new-foot a:hover{
          text-decoration: underline;
      }
      @media screen and (max-width: 900px){
          footer{
              position:relative;
              bottom: 0px;
          }
          .main-contentf{
              flex-wrap: wrap;
              flex-direction: column;
          }
          .main-contentf .box{
              margin: 5px 0px;
          }
      }


</style>