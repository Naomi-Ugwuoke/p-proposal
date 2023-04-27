
<!DOCTYPE html>
<html>
<title>Project Proposal</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {
    font-family: "Open Sans"
    }
</style>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script> 
<body class="w3-light-grey">

    <script>
        $(document).ready(function() {
            alert("Chaacha, remember to stay safe and social distance!!");
        }
        );
    </script>

    
    <div class="w3-bar w3-black w3-hide-small">
        <a href="index.html" class="w3-bar-item w3-button">Home</a>
        <a href="matrix.html" class="w3-bar-item w3-button">Information</a>
        <a href="table.php" class="w3-bar-item w3-button">More</a>

    </div>

    <div class="w3-content" style="max-width:1600px">
    

        <!-- Header -->
        <header class="w3-container w3-center w3-padding-48 w3-white">
            <h1 class="w3-xxxlarge"><b>Naomi Ugwuoke</b></h1>
            <h6>300177027</h6>
        </header>

        <header class="w3-display-container w3-wide" id="home">
            <img class="w3-image" src="images/covid.jpg" alt="HEADER PHOTO OF MAN SITTING IN A CAR" width="1600" height="1060">
            <div class="w3-display-left w3-padding-large">
                <h1 class="w3-text-white">Naomi's</h1>
                <h1 class="w3-jumbo w3-text-white w3-hide-small"><b>Project Proposal</b></h1>
            </div>
        </header>

        <!-- Main Section -->

        <div class="w3-row w3-padding w3-border">


            <div class="w3-content" style="max-width:1100px">
                <div class="w3-container w3-padding-large">
                    <h2>Saved Information</h2>
                    <div id="phpselect">
                        
                        
                        <?php
                            
                            $connection = new mysqli('localhost', 'test', '12345', "test");
                            if( !$connection->connect_errno ) {
                                $sql = "SELECT * FROM localmountain";
                                if( $rs = $connection->query($sql) ){
                                while( $r = $rs->fetch_assoc() ){
                                    echo "<p>${r['mountain_name']} \n: ${r['distance']}</p>";
                                }
                                $rs->free();
                                }
                                $connection->close();
                            }
                            
                        ?>
                    </div>    
            
                
                </div>


            </div>    

            <hr>



            <div class="w3-content" style="max-width:1100px">


                <!-- Input Section -->
                <div class="w3-container w3-padding-64" id="form">

                    <!-- Change background color -->

                    <script>
                        $(document).ready(function(){
                        $("input").focus(function(){
                            $(this).css("background-color", "yellow");
                        });
                        $("input").blur(function(){
                            $(this).css("background-color", "red");
                        });
                        });
                    </script>


                    <form id='form' action="insert.php" method="POST">
                        <h2>Fill in the Form Below</h2>
                        
                        
                        <p>Name of Mountain: <input class="w3-input w3-padding-16" id='mountain_name' type="text" name='mountain_name'></p>
                        <p>Distance: <input class="w3-input w3-padding-16" id='distance' type="text" name='distance'></p>
                        

                        <!-- Submit button -->
                        
                        <p><input class= "w3-button w3-dark-grey w3-text-white w3-section" type='submit' value="Submit"></p>
                    </form>

                    
                    


                </div>
                <hr>


                <div class="w3-container w3-padding-large">
                    <script>
                        $(document).ready(function() 
                        {
                            $('#more').click(function()
                            {
                                $('#details').toggle();
                            });

                        });
                    </script>
                    <p>
                        <H2>Be Safe</H2>
                        As the temperature drops and the weather gets colder, ... 
                        <a href="#"id="more">more</a>
                        <div id="details">
                            <p>... it is important to remain aware of the current situation right now. Usually during this time of the year, it is a norm for prople to head up to the mountains for an adventurous skiing experience. However, in our current situation, as you participate in your activities this year, be sure to abide by the recommended guidelines to protect ourselves against the corona virus. Be sure to make use of face coverings and hand sanitizers as you go out into public places. Also, avoid touching your face and wash your hands properly, regularly.</p>
                        </div>
                    </p>
                    <hr>
                    <script>
                        $(document).ready(function() 
                        {
                            $('#xtra').click(function()
                            {
                                $('#detail').toggle();
                            });

                        });
                    </script>

                    <p>
                        <H2>Skiing Season in Whistler</H2>
                        Its that time of year again ... 
                        <a href="#"id="xtra">more</a>
                        <div id="detail">
                            <p>... a time when it gets colder.During this time, people tend to adjust to the weather and their environment, causing them to pickup sports which are only possible in regions of similar temperature. One of these activities includes skiing. Skiing is a sport which can be adjusted to fit everyones needs. It is not hard to learn either. Whether you do this activity on a steep slope, or a flat slope, it doesnt matter. It can always be made fun. Skiing is also a competitive sport for some, done by people who have had years of experience, but you do not need all this experience to participate in the activity. Just remember to stay safe no matter where or when you decide to partake in this activity.</p>
                        </div>
                    </p>
                    



                
                </div>


                <!-- section -->
                <p><h1>
                    &nbsp I will not use wikipedia for my research.

                </h1></p>

                <hr>




            </div>
        </div>


        <script>
            $('#form').submit(function()
            {
                if ($('#mountain_name').val() == '' ||
                $('#distance').val() == 0))
                {
                    alert('Fill in all empty spaces')
                    return false
                }
            })

            

        </script>
            


        <!-- Footer -->
        <footer class="w3-container w3-dark-grey" style="padding:32px">
            <a href="#" class="w3-button w3-black w3-padding-large w3-margin-bottom"><i class="fa fa-arrow-up w3-margin-right"></i>Top</a>
            <p>Name: Ugwuoke Naomi</p>
            <p>Student ID: 300177027</p>
        </footer>

    </div>

    </body>
</html>