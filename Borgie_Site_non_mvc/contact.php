<?php  include'assets/include/header.php'; ?>
	<hr class="soften">
	<div class="well well-small">
	<h1>Visitez Nous</h1>
	<hr class="soften"/>	
	<div class="row-fluid">
		<div class="span8 relative">
		<iframe style="width:100%; height:350px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Newbury+Street,+Boston,+MA,+United+States&amp;aq=1&amp;oq=NewBoston,+MA,+United+States&amp;sll=42.347238,-71.084011&amp;sspn=0.014099,0.033023&amp;ie=UTF8&amp;hq=Newbury+Street,+Boston,+MA,+United+States&amp;t=m&amp;ll=42.348994,-71.088248&amp;spn=0.001388,0.006276&amp;z=18&amp;iwloc=A&amp;output=embed"></iframe>

		<div class="absoluteBlk">
		<div class="well wellsmall">
		<h4>Details</h4>
		<h5>
			2601 Mission St.<br/>
			San Francisco, CA 94110<br/><br/>
			 
			info@mysite.com<br/>
			﻿Tel 123-456-6780<br/>
			Fax 123-456-5679<br/>
			web:wwwmysitedomain.com
		</h5>
		</div>
		</div>
		</div>
		
		<div class="span4">
		<h4>Bienvenu</h4>
		<form action="main.php" method="post" class="form-horizontal">
        <fieldset>
          <div class="control-group">
           
              <input type="text" name="nom" placeholder="nom" class="input-xlarge"/>
           
          </div>
          <div class="control-group">
           
              <input type="text" name="prenom" placeholder="prénom" class="input-xlarge"/>
           
          </div>
		   <div class="control-group">
           
              <input type="text" name="email"  placeholder="email" class="input-xlarge"/>
           
          </div>
		   <div class="control-group">
           
              <input type="text" name="sujet" placeholder="sujet" class="input-xlarge"/>
          
          </div>
          <div class="control-group">
              <textarea rows="3" id="textarea" name="vide" class="input-xlarge"></textarea>
           
          </div>

            <button class="shopBtn" type="submit" name="submit">Envoyer email</button>
            <input type="hidden" name="action" value="contact">
        </fieldset>
      </form>
		</div>
	</div>

	
</div>
<?php  include'assets/include/footer.php' ;?>
