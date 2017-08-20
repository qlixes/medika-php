<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="#">Medika</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="login.html">Login <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="register.html">Create Account</a>
          </li>
        </ul>
      </div>
    </nav>
    <br>
    <div class="container">
      <form class="form-regis" action="" method="post">
      <div class="row justify-content-center">
        <div class="col-7 space-mid form-group-wrap">
          <div class="alert alert-info">
            Remember your Pin and RM number. You will need this every time you login to Medika Pro.
          </div>
          <h2>Your Login Info</h2>
            <div class="form-group row">
               <label for="rm_number" class="col-sm-12 col-form-label">RM Number</label>
               <div class="col-sm-12">
                 <input type="text" class="form-control-plaintext" readonly id="rm_number" value="{{RM NUMBER}}">
               </div>
             </div>
             <div class="form-group row">
               <label for="pin" class="col-sm-12 col-form-label">Pin</label>
               <div class="col-sm-12">
                 <input type="text" class="form-control" id="pin" value="{{AUTO GENERATE PIN}}" placeholder="Password">
               </div>
             </div>
             <br>
             <h2>Profile</h2>
             <div class="form-group row">
                <label for="id_type" class="col-sm-12 col-form-label">ID Type</label>
                <div class="col-sm-12">
                  <select class="form-control" id="id_type" name="">
                    <option value="">KTP</option>
                    <option value="">SIM A</option>
                    <option value="">SIM C</option>
                    <option value="">Passport</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="id_number" class="col-sm-12 col-form-label">ID Number</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="id_number" placeholder="Enter ID Number" value="">
                </div>
              </div>
              <div class="form-group row">
                <label for="full_name" class="col-sm-12 col-form-label">Full Name</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="full_name" placeholder="Enter your full name" value="">
                </div>
              </div>
              <div class="form-group row">
                 <label for="gender" class="col-sm-12 col-form-label">Gender</label>
                 <div class="col-sm-12">
                   <select class="form-control" id="gender" name="">
                     <option value="">Male</option>
                     <option value="">Female</option>
                   </select>
                 </div>
               </div>
               <div class="form-group row">
                 <label for="place_birth" class="col-sm-12 col-form-label">Place of Birth</label>
                 <div class="col-sm-12">
                   <input type="text" class="form-control" id="place_birth" placeholder="Enter your place of birth" value="">
                 </div>
               </div>
               <div class="form-group row">
                 <label for="date_birth" class="col-sm-12 col-form-label">Date of Birth</label>
                 <div class="col-sm-12">
                   <input type="text" class="form-control calendar" id="date_birth" placeholder="DD/MM/YYYY" value="">
                 </div>
               </div>
               <div class="form-group row">
                  <label for="marital_stat" class="col-sm-12 col-form-label">Marital Status</label>
                  <div class="col-sm-12">
                    <select class="form-control" id="marital_stat" name="">
                      <option value="">Yes</option>
                      <option value="">No</option>
                    </select>
                  </div>
                </div>
                <br>
          <div class="alert alert-warning">
            Enter your real email. You need to confirm your email to activate your account!
          </div>
          <h2>Contact</h2>
          <div class="form-group row">
             <label for="email" class="col-sm-12 col-form-label">Email</label>
             <div class="col-sm-12">
               <input type="email" class="form-control"  id="email" placeholder="Enter your email" value="">
             </div>
           </div>
           <div class="form-group row">
             <label for="h_phone" class="col-sm-12 col-form-label">Home Phone</label>
             <div class="col-sm-12">
               <input type="number" class="form-control" id="h_phone" value="">
             </div>
           </div>
           <div class="form-group row">
             <label for="m_phone" class="col-sm-12 col-form-label">Mobile Phone</label>
             <div class="col-sm-12">
               <input type="number" class="form-control" id="m_phone" value="">
             </div>
           </div>
           <br>
           <h2>Health</h2>
           <div class="form-group row">
              <label for="blood_type" class="col-sm-12 col-form-label">Blood Type</label>
              <div class="col-sm-12">
                <select class="form-control" id="blood_type" name="">
                  <option value="">A</option>
                  <option value="">B</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
               <label for="smoking_stat" class="col-sm-12 col-form-label">Smoking Status</label>
               <div class="col-sm-12">
                 <select class="form-control" id="smoking_stat" name="">
                   <option value="">Yes</option>
                   <option value="">No</option>
                 </select>
               </div>
             </div>
             <div class="form-group row">
                <label for="religion" class="col-sm-12 col-form-label">Religion</label>
                <div class="col-sm-12">
                  <select class="form-control" id="religion" name="">
                    <option value="">Islam</option>
                    <option value="">Christian</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                 <label for="education" class="col-sm-12 col-form-label">Education</label>
                 <div class="col-sm-12">
                   <select class="form-control" id="education" name="">
                     <option value="">A</option>
                     <option value="">B</option>
                   </select>
                 </div>
               </div>
               <div class="form-group row">
                  <label for="occupation" class="col-sm-12 col-form-label">Occupation</label>
                  <div class="col-sm-12">
                  <input type="text" class="form-control" id="occupation" name="" value="" placeholder="Enter your Occupation">
                  </div>
                </div>
                <div class="form-group row">
                   <label for="spouse_nm" class="col-sm-12 col-form-label">Spouse Name</label>
                   <div class="col-sm-12">
                    <input type="text" class="form-control" id="spouse_nm" name="" value="" placeholder="Enter your spouse name">
                   </div>
                 </div>
                 <br>

                 <h2>Home Address</h2>
                 <div class="form-group row">
                    <label for="address_ktp" class="col-sm-12 col-form-label">Address KTP</label>
                    <div class="col-sm-12">
                      <textarea name="name"class="form-control" id="address_ktp" rows="8" cols="80"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                     <label for="alamat" class="col-sm-12 col-form-label">Alamat</label>
                     <div class="col-sm-12">
                       <textarea name="name"class="form-control" id="alamat" rows="8" cols="80"></textarea>
                     </div>
                   </div>
                  <div class="form-group row">
                     <label for="negara" class="col-sm-12 col-form-label">Negara</label>
                     <div class="col-sm-12">
                       <select class="form-control" id="negara" name="">
                         <option value="">IDN</option>
                         <option value="">MY</option>
                       </select>
                     </div>
                   </div>
                   <div class="form-group row">
                      <label for="provinsi" class="col-sm-12 col-form-label">Provinsi</label>
                      <div class="col-sm-12">
                        <select class="form-control" id="provinsi" name="">
                          <option value="">1</option>
                          <option value="">2</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                       <label for="kota" class="col-sm-12 col-form-label">Kota</label>
                       <div class="col-sm-12">
                         <select class="form-control" id="kota" name="">
                           <option value="">1</option>
                           <option value="">2</option>
                         </select>
                       </div>
                     </div>
                     <div class="form-group row">
                        <label for="kecamatan" class="col-sm-12 col-form-label">Kecamatan</label>
                        <input type="text" class="form-control" name="" value="" id="kecamatan" placeholder="Enter Kecamatan">
                      </div>
                      <div class="form-group row">
                         <label for="kelurahan" class="col-sm-12 col-form-label">Kelurahan</label>
                         <input type="text" class="form-control" name="" value="" id="kelurahan" placeholder="Enter Kelurahan">
                       </div>
                       <div class="form-group row">
                          <label for="zip_code" class="col-sm-12 col-form-label">ZIP Code</label>
                          <input type="text" class="form-control" name="" value="" id="zip_code" placeholder="Enter ZIP Code">
                        </div>
                    <br>

                 <h2>Patient Office / Work</h2>
                 <div class="form-group row">
                    <label for="cp_name" class="col-sm-12 col-form-label">Company Name</label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control"  id="cp_name" placeholder="Enter your company name" value="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="oa_address" class="col-sm-12 col-form-label">Office Address</label>
                    <div class="col-sm-12">
                      <textarea name="name" class="form-control" id="oa_address" rows="8" cols="80"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="oa_phone" class="col-sm-12 col-form-label">Office Phone</label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="oa_phone" value="+62">
                    </div>
                  </div>
                  <br>

                  <h2>Emergency Contact</h2>
                  <div class="form-group row">
                     <label for="e_full_name" class="col-sm-12 col-form-label">Full Name</label>
                     <div class="col-sm-12">
                       <input type="text" class="form-control"  id="e_full_name" placeholder="Enter emergency contact name" value="">
                     </div>
                   </div>
                   <div class="form-group row">
                     <label for="e_phone" class="col-sm-12 col-form-label">Phone</label>
                     <div class="col-sm-12">
                       <input type="text" class="form-control" id="e_phone" value="+62" placeholder="Enter emergency phone">
                     </div>
                   </div>
                  <input type="submit" class="btn btn-success form-control" name="" value="Save">

        </div>
      </div>

      </div>
    </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

  </body>
</html>
