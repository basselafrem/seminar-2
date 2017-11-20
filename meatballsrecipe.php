<?php
    include_once 'fragments/header.php';
    date_default_timezone_set('Europe/Stockholm');
    include '/databases/comdbh1.php';
    include 'comments.php';
?>

 <div id="contentt">
            <div id="nav">
   
                <h2> Meatballs Recipe</h2>
                <h3>THE INGREDIENTS</h3>
                <ul>
                    <li>1 pound ground beef</li>
                    <li>1/2 pound ground veal</li>
                    <li>1/2 pound ground pork</li>
                    <li>2 cloves garlic, minced</li>
                    <li>2 eggs</li>
                    <li>1 cup freshly grated Romano cheese</li>
                    <li>1 1/2 tablespoons chopped Italian flat leaf parsley</li>
                    <li>salt and ground black pepper to taste</li>
                    <li>2 cups stale Italian bread, crumbled</li>
                    <li>1 1/2 cups lukewarm water</li>
                    <li>1 cup olive oil</li>
                </ul>
                <br>
                <h3>THE METHOD</h3>
                <h3>Step 1</h3>
                <p>
                  Combine beef, veal, and pork in a large bowl. Add garlic, eggs, cheese, parsley, salt and pepper.
                </p>
                <h3>Step 2</h3>
                <p>
                    Blend bread crumbs into meat mixture. Slowly add the water 1/2 cup at a time. The mixture should be very moist but still hold its shape if rolled into meatballs. (I usually use about 1 1/4 cups of water). Shape into meatballs.
                </p>
                <h3>Step 3</h3>
                <p>Heat olive oil in a large skillet. Fry meatballs in batches. When the meatball is very brown and slightly crisp remove from the heat and drain on a paper towel. (If your mixture is too wet, cover the meatballs while they are cooking so that they hold their shape better.)</p>
            </div>
            <div id="tasty"> 
                
                <img class="imgrecipe" src="images/meatballs.jpg" alt="meatballs"  >
                <?php
                if(isset($_SESSION['u_id'])){
                    echo "<form method='POST' action='".setComments($conn,'meatballscomments')."' >
                            <input type='hidden' name='uid' value='".$_SESSION['u_uid']."'>
                            <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
                            <textarea name='message'></textarea><br>
                            <button class='btn' type='submit' name='commentSubmit'>Comment</button>
                        </form>";
                       }else{
                             echo "<h3>You need to log in to comment</h3>";
                             echo "<textarea name='message'></textarea><br>
                                   <button class='btn' >Comment</button>";
                       }
                       getComments($conn, 'meatballscomments');

                ?>
            </div>
     
     
     
<?php
include_once 'fragments/footer.php';
?>


