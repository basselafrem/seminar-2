<?php
include_once 'fragments/header.php';
date_default_timezone_set('Europe/Stockholm');
include 'databases/comdbh2.php';
include 'comments.php';
                    

?>



     <div id="contentt">
            <div id="nav">
          
                <h2> Pancakes Recipe</h2>
                <h3>THE INGREDIENTS</h3>
                <ul>
                    <li>2 eggs</li>
                    <li>1 3/4 cup milk</li>
                    <li>1 teaspoon vanilla essence</li>
                    <li>2 cups self-raising floor</li>
                    <li>1/3 cup CSR Caster Sugar</li>
                    <li>Butter, for frying, plus extra, to serve</li>
                    <li>Maple syrup, to serve</li>
                </ul>
                <br>
                <h3>THE METHOD</h3>
                <h3>Step 1</h3>
                <p>
                    Whisk eggs, milk and vanilla together in a jug. Sift flour into a large bowl. Stir in sugar. Make a well in the centre. Add milk mixture. Whisk until just combined.
                </p>
                <h3>Step 2</h3>
                <p>
                    Heat a large non-stick frying pan over medium heat. Grease pan with butter or spray with cooking oil. Using 1/4 cup mixture per pancake, cook 2 pancakes for 2 minutes or until bubbles appear on surface. Turn and cook for a further 1-2 minutes or until cooked through. Transfer to a plate. Cover loosely with foil to keep warm. Repeat with remaining mixture, greasing pan with butter or cooking oil between batches.
                </p>
                <h3>Step 3</h3>
                <p>Serve with maple syrup and extra butter.</p>
            </div>
            <div id="tasty"> 
                
                <img class="imgrecipe" src="images/pannkakor1.jpg" alt="pancakes"  >
                <?php
                    
                  if(isset($_SESSION['u_id'])){

                    echo "<form method='POST' action='".setComments($conn,'pancakescomments')."' >
                            <input type='hidden' name='uid' value='bassel'>
                            <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
                            <textarea name='message'></textarea><br>
                            <button class='btn'  type='submit' name='commentSubmit'>Comment</button>
                        </form>";
                       }else{
                          echo "<h3>You need to log in to comment</h3>";
                             echo "
                            <textarea name='message'></textarea><br>
                            <button class='btn'>Comment</button>
                                ";
                        }
                      getComments($conn, 'pancakescomments');
                    
 
             ?>
            </div>
         
         

<?php
include_once 'fragments/footer.php';
?>

