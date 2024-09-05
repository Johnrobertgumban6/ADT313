<h1>Hands-on Activity</h1>

<?php
    $table = array(
        "header"=>array(
            "Student Id",
            "Firstname",
            "Lastname",
            "Section",
            "Course",
            "YearLevel",
        ),
        "body" =>array(
                 array(
                    "firstname"=>"Firstname",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"YearLevel"
                 ),
                 array(
                    "firstname"=>"Firstname",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"YearLevel"
                ),
        

                array(
                    "firstname"=>"Firstname",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"YearLevel"
                ),
        

                array(
                    "firstname"=>"Firstname",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"YearLevel"
                ),
        

                array(
                    "firstname"=>"Firstname",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"YearLevel"
                ),
        
        
                array(
                    "firstname"=>"Firstname",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"YearLevel"
                ),
        
        
                array(
                    "firstname"=>"Firstname",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"YearLevel"
                ),
        
        
                array(
                    "firstname"=>"Firstname",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"YearLevel"
                ),
        

                array(
                    "firstname"=>"Firstname",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"YearLevel"
                ),
        

                array(
                    "firstname"=>"Firstname",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"YearLevel"
                )
                ),
                )



                
        ?>
                
                <table border="1">
                <thead>  
                <?php
                for ($i = 0; $i <= count($table["header"]) -1; $i++) {
                echo "<th>".$table["header"][$i]."</th>";
                }
                ?>
           </thead>
           <tbody>
           <?php
                for ($i = 0; $i <= count($table["body"]) -1; $i++) {
                echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$table["body"][$i]["firstname"]."</td>";
                echo "<td>".$table["body"][$i]["lastname"]."</td>";
                echo "<td>".$table["body"][$i]["section"]."</td>";
                echo "<td>".$table["body"][$i]["course"]."</td>";
                echo "<td>".$table["body"][$i]["yearlevel"]."</td>";
                echo "</tr>";
                }
            ?>
                    </tbody>
                <table/>





               