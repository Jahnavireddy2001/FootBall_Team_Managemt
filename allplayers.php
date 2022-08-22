<!DOCTYPE html>
<html lang="en-US">
<head>
    <title></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        .banner{
    width: 100%;
    height: 100vh;
    background-color: black;

}
.navbar{
    width: 85%;
    margin : auto;
    padding: 35px 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.logo {
    width: 100px;
    cursor: pointer;
}

.navbar ul li
{
    list-style: none;
    display: inline-block;
    margin: 10;
    position: relative;
}
.navbar ul li a
{
    text-decoration: none;
    color: deepskyblue;
}
.navbar ul li::after{
content: '';
height: 3px;
width: 0%;
background: #FF0000;
position: absolute;
left: 0;
bottom: -10;
transition: 0.4s;
}
.navbar ul li:hover::after{
    width: 100%;
}
.down {
    display:none;
}
.navbar ul li:hover .down
{
     display:block;
    position:fixed;
    color:deepskyblue;
    font-size:12px;
    margin-top:auto;
    margin-left:-15px;
}
.navbar ul li:hover .down ul
{
    display:block;
    margin:10px;
}
table,td,th{
    padding: 10px;
    border: 1px solid deepskyblue;
    border-collapse:collapse;
    color: white;
    text-align: center;
}
.loginbox
{
    position:absolute;
    top:90%;
    left:20%;
}

.loginbox input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    width: 255px;
    background: #fb2525;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;

}
.loginbx
{
    position:absolute;
    top:90%;
    left:60%
}

.loginbx input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    width: 255px;
    background: #fb2525;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;

}


        h3 span {
            font-size: 22px;
        }
        h3 input.search-input {
            width: 300px;
            margin-left: auto;
            float: right;
        }
        .mt32 {
            margin-top: 32px;
        }
    </style>
</head>
<body class="mt32">
<div class="banner">
        <div class="navbar">
                     <a href="home.html" ><img src="https://cdn.freebiesupply.com/images/thumbs/2x/manchester-united-logo.png" class="logo"></a>
                     <a href="allplayers.php"><img src="https://cdn.freebiesupply.com/images/thumbs/2x/manchester-united-logo.png" class="logo1"></a>
                
                     <ul>
                     <li><a href="club.php">CLUBS </a>
                     <div class="down">
                     <ul>
                         <li><a href="club1.php">MAN UTD</a></li>
                         <li><a href="club2.php">BYREN</a></li>
                       </ul>
                         </div></li>
                     <li><a href="allplayers.php">PLAYERS </a>
                         <div class="down">
                         <ul>
                             <li><a href="squad.php">ATTACK</a></li>
                             <li><a href="mid.php">MIDFILD</a></li>
                             <li><a href="def.php">DEFENCE</a></li>
                             <li><a href="gk.php">GOAL KEEPER</a></li>

                         </ul>
        </div>
      </li>
      <li><a href="manager.php"> STAFF </a></li>
      <li><a href="match.php">FIXTURES </a></li>
     <li><a href="index.html">LOG OUT</a></li>
      </ul>
</div>
    <div class="container">
        <h3>
            <input type="search" placeholder="Search..." class="form-control search-input" data-table="customers-list"/><br>
        </h3>
        <table class="table table-striped mt32 customers-list">
            <thead>
                <tr>
                 <th>Name</th>
                 <th>Nationality</th>
                 <th>Date Of Birth</th>
                 <th>Height</th>
                 <th>Jersy No</th>
                 <th>Position</th>

                 <th colspan="2" align="center" >Operations</th>
                </tr>
            </thead>
            <tbody>
            <?php
    $con= new mysqli("localhost","root","","football");
        if($con->connect_error){
        die("failed to connect : ".$con->connect_error);
    }
    $sql = "SELECT * FROM players";
$result = $con->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"] . "</td><td>" . $row["nationality"] . "</td><td>" . $row["dob"] . "</td><td>" . $row["height"] . "</td><td>" . $row["jersy_no"] . "</td><td>" . $row["position"] . "</td><td><a href = 'pupdate.php?club_id=$row[club_id]&player_id=$row[player_id]&name=$row[name]&nationality=$row[nationality]&dob=$row[dob]&height=$row[height]&jersy_no=$row[jersy_no]&position=$row[position]'><input type='submit' value='Edit' id='editbtn'</a></td><td><a href = 'pdelete.php?player_id=$row[player_id]'><input type='submit' value='Delete' id='deletebtn'</a></td></tr>";

    }
}
else {
    echo " results";
}
    ?>
            </tbody>
        </table>
    </div>
</div>
<div class="loginbox">
<p><a href="players.php"><input type="submit" name="" value="Add Player" ></a>  </p>
</div>
<div class="loginbx">
<p><a href="history.php"><input type="submit" name="" value="History" ></a>  </p>
</div>

    <script>
        (function(document) {
            'use strict';

            var TableFilter = (function(myArray) {
                var search_input;

                function _onInputSearch(e) {
                    search_input = e.target;
                    var tables = document.getElementsByClassName(search_input.getAttribute('data-table'));
                    myArray.forEach.call(tables, function(table) {
                        myArray.forEach.call(table.tBodies, function(tbody) {
                            myArray.forEach.call(tbody.rows, function(row) {
                                var text_content = row.textContent.toLowerCase();
                                var search_val = search_input.value.toLowerCase();
                                row.style.display = text_content.indexOf(search_val) > -1 ? '' : 'none';
                            });
                        });
                    });
                }

                return {
                    init: function() {
                        var inputs = document.getElementsByClassName('search-input');
                        myArray.forEach.call(inputs, function(input) {
                            input.oninput = _onInputSearch;
                        });
                    }
                };
            })(Array.prototype);

            document.addEventListener('readystatechange', function() {
                if (document.readyState === 'complete') {
                    TableFilter.init();
                }
            });

        })(document);
    </script>
</body>
</html>
