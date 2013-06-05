    <?php
    	require('head.php');
/**THIS IS THE BEGINNING OF BRINGING IN INPUTS FROM INDEX.PHP**/
//make $haystack the textarea from index.php
        if($_FILES["file"]["tmp_name"]!= ""){
            $haystack = file_get_contents($_FILES["file"]["tmp_name"]);
        } else { 
		$haystack =  ($_POST["text"]);
        }
//make a copy of $haystack that removes whitespace early in the file so it can be used in the manipulations below
    		$haystacktrimmed = preg_replace('/\s+/', '', $haystack);
//checks to see if magic quotes is on. The if statement strips slashes if it is, and leaves it the same if not. 
    if (get_magic_quotes_gpc()) {
            $haystack = stripslashes($haystack); 
        }
//checks if all uppercase is ticked then uses strtoupper
    if(isset($_POST["case"]) && $_POST["case"] == "upper"){
            $haystack = strtoupper($haystack);
    }
//checks if all lowercase is ticked then uses strtolower
    if(isset($_POST["lowercase"]) && $_POST["case"] == "lower"){
        $haystack = strtolower($haystack);
    }
//uses preg_replace to make a whole word uppercase, replacing the old word with the new word capitalised
    if(isset($_POST["uppercase1"])){
        $needleu = '/' . $_POST["uppercase1"] . '/';
		$newneedleu = strtoupper($_POST["uppercase1"]);
        $newneedleu = stripslashes($newneedleu);
		$haystack = preg_replace($needleu,$newneedleu, $haystack);
	}
//uses preg_replace to give first letter of word a capital
	if(isset($_POST["capitalise1"])){
		$needle1 = '/' . $_POST["capitalise1"] . '/';
		$newneedle1 = ucwords($_POST["capitalise1"]);
        $newneedle1 = stripslashes($newneedle1);
		$haystack = preg_replace($needle1,$newneedle1, $haystack);
    }
//uses preg_replace to give first letter of word a capital
	if(isset($_POST["capitalise2"])){
		$needle2 = '/' . $_POST["capitalise2"] . '/';
		$newneedle2 = ucwords($_POST["capitalise2"]);
        $newneedle = stripslashes($newneedle2);
		$haystack = preg_replace($needle2,$newneedle2, $haystack);
    }
//uses preg_replace to give first letter of word a capital
    if(isset($_POST["capitalise3"])){
		$needle3 = '/' . $_POST["capitalise3"] . '/';
		$newneedle3 = ucwords($_POST["capitalise3"]);
        $newneedle3 = stripslashes($newneedle3);
		$haystack = preg_replace($needle3,$newneedle3, $haystack);
	}
//uses str_replace to do straight swap
    if(isset($_POST["tobereplaced"])) {
    	$replacee =$_POST["tobereplaced"];
    	$replacement =$_POST["toreplace"];
  	    $haystack = str_replace($replacee,$replacement,$haystack);
    }
//uses str_replace to do straight swap
    if(isset($_POST["tobereplaced2"])) {
    	$replacee =$_POST["tobereplaced2"];
    	$replacement =$_POST["toreplace2"];
  	    $haystack = str_replace($replacee,$replacement,$haystack);
    }
//uses str_replace to do straight swap
    if(isset($_POST["tobereplaced3"])) {
    	$replacee =$_POST["tobereplaced3"];
    	$replacement =$_POST["toreplace3"];
  	$haystack = str_replace($replacee,$replacement,$haystack);
    }
//checks to see if minification is selected. Replaces spaces and whitespace with nothing. At the end because this needs to be done after everything else
    if(isset($_POST["minify"])) {
    	$haystack = preg_replace('/\s+/', '', $haystack);
    }
//checks to see if scramble is selected and uses shuffle to do it
    if(isset($_POST["scramble"])) {
        $haystack =  str_shuffle($haystack);
    }
    if(isset($_POST["i"])) {
        $haystack = preg_replace('/\bi\b/', 'I', $haystack);
    }
    $readingtime = str_word_count($haystack) / 250;
    $readingtimesecs = $readingtime * 60;
/** DISPLAY THE INFO TO THE USER AND PUT THE CONTENTS IN A .TXT FILE. **/
    if($haystack != strip_tags($haystack)) {
        echo '<p style="color:white;display:inline-block;padding:15px;margin-after;2em;background-color:#e74c3c">We detected that there was HTML in your text, so we are unable to give you a preview of your text.</p>';
    } else {
    echo '<div class="haystackpreview">' . $haystack . '</div>';
    } 
    
    
/** DO STUFF WITH THE CONTENT **/


?>
</div>
</body>
</html>