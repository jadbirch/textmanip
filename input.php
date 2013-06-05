<?php require('head.php');?>
    <div class="entry">
        <form method="POST" data-validate="parsley" target="_blank" action="results.php" enctype="multipart/form-data">
        
        
		    <textarea class="textbox tabIndent" placeholder="insert text" cols="100" rows="20" name="text" value="text"></textarea>
            
		<div id="capitalisation" class="section">
            <h3 class="listheader">Capitalisation </h3>

            <p>This feature allows you to capitalise the first letter of words. Useful for dealing with pieces of text that have failed to capitalise names, countries etc.</p> 
            
                 <input id="capitalise1" type="text" name="capitalise1" placeholder="First word">   <br>
    		     <input id="capitalise2"  type="text" name="capitalise2" placeholder="Second word"> <br>
    		     <input id="capitalise3" type="text" name="capitalise3" placeholder="Third word"> <br>
                 <input id="uppercase1" type="text" name="uppercase1" placeholder="Uppercase every letter of this word"> <br>
             
        </div>
        <div class="section">
            <h3 class="listheader">Bulk Actions</h3>
            <p>Convert the entirety of the text into either upper or lowercase. Possibly useful for those "shouty" forum users!</p>
                 All to Uppercase <input type="radio" data-trigger="change" name="case" value="upper"><br>
                 All to Lowercase <input type="radio" data-trigger="change"  name="case" value="lower"> <br>
                 <p class="tip"></p>
             
        </div>
        <div class="section">
            <h3 class="listheader">Replacements</h3>
            
                <input type="text" name="tobereplaced" placeholder="Replace this with" > <input type="text" name="toreplace" placeholder="this"> 
                <input type="text" name="tobereplaced2" placeholder="Replace this with" > <input type="text" name="toreplace2" placeholder="this"> 
                <input type="text" name="tobereplaced3" placeholder="Replace this with"> <input type="text" name="toreplace3" placeholder="this"><br>
             
        </div>
        <div class="section">
        <h3 class="listheader">Miscellaneous options</h3>
            
             
             <p><label for="minify">Minify</label> <input class="minify" id="minify" type="checkbox" name="minify"> <span style="position:static;bottom:0px;" class="muted" rel="tooltipsy" title="Minification is used by developers to take out the white space of their CSS files" aria-hidden="true" data-icon="&#xe000"></span> </p>
             <p><label for="scramble">Scramble</label> <input id="scramble" type="checkbox" name="scramble"></input> <span style="position:static;bottom:0px;" class="muted" rel="tooltipsy" title="Mix up the letters randomly. Not recommended for dissertations." aria-hidden="true" data-icon="&#xe000"></span></p>
             <p><label for="i">i-kleen</label> <input id="i" type="checkbox" name="i"></input></p>
             
        </div>
            
    
           <br><input class="btn btn-primary btn-large btn-block" type="submit" value="Submit"></input>
	    </form> 
        </div>