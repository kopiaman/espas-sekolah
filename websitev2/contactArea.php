<script type="text/javascript" src="js/dc_form_contact.js"></script>
<section id="contactArea">
    	<span class="overlay"></span>
    
    	<div class="container">             
			<div class="text">
                <div class="row text-center">
                    <div class="col-md-12">
    
                        <h1>Ruang Komen dan Pertanyaan</h1>
                        <span class="border">
                            <i class="fa fa-plane"></i>
                        </span>
    
                    </div>
                </div>
                <div class="row">
                    <?php  echo '<h2>'.$note.'</h2>' ?>
                    <div class="col-sm-6">
                        <form action='contactPage.php' method='post' target="_blank" name="contactForm">
                            <input type="text" placeholder="Nama" class="form-control" id="name" name="name" required >
                            <input type="text" placeholder="Perkara" class="form-control" id="subject" name="subject" required >                         
                            <input type="email" placeholder="Email " class="form-control" id="email"  name="email">
                            <input type="tel" placeholder="No Tel" class="form-control" id="tel" name="tel" required >
                            <textarea cols="10" rows="5" placeholder="Mesej Anda..." class="form-control" id="mesej"  name="mesej" ></textarea>
                            <input type="submit" class="btn" value="submit">
                        </form>
                    </div>
                    
                    <div class="col-sm-6">
                        
                        <h4></h4>
                        
                        <p>Kami amat mengalu-alukan sebarang idea dan maklum balas pihak anda. Jika ada sebarang pertanyaan, sila hubungi kami</p>
                        
                        <p class="lead"><?php echo $school['campus_name']; ?></p>
                        
                        <p>ALAMAT: <?php echo $school['address'];?>, <br><?php echo $school['postcode'].' '.$school['city'];?>, <br><?php echo $school['state'];?> </p>
                        
                        <p>Tel: <?php echo $school['tel'];?></p>
                        <p >EMAIL: <a href="#" style="color:#FFF"><?php echo $school['email'];?></a></p>
                        
                    </div>
                
                </div>		
            </div>
        </div>
 </section>