<div class='container-fluid'>
		
		<!-- Navigation bar -->
		<?php include('includes/nav.include.php'); ?>

	<!-- End of Navigation --> 
	</div>

<?php
session_start();

if (isset($_SESSION['username'])) {
	
	echo

		"Welcome, {$_SESSION['firstname']} {$_SESSION['lastname']} 
		<br><br><a href='profile.php'>Update Profile</a> | 
		<a href='posts.php'>My Posts</a> | <a class='btn btn-sm btn-info' href='logout.php'>Log out</a>
		<hr>

";
}else{
	header('location: login.php');
}
?>




<div class="section">
            <h1><span>My Coding Schedule</span></h1>
            <table>
                <tr>
                    <th>Day</th>
                    <th>Mon</th>
                    <th>Tue</th>
                    <th>Wed</th>
                    <th>Thu</th>
                    <th>Fri</th>
                </tr>
                <tr>
                    <td>8-8:30</td>
                    <td class="selected">Learn</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>9-10</td>
                    <td></td>
                    <td class="selected">Practice</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>1-1:30</td>
                    <td></td>
                    <td></td>
                    <td class="selected">Play</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>3:45-5</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="selected">Code</td>
                    <td></td>
                </tr>
                <tr>
                    <td>6-6:15</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="selected">Discuss</td>
                </tr>
            </table>
        </div>
        <!-- My Schedule section end -->
        <hr>
        
        <!-- My Skills section start -->
        <div class="section">
            <h1><span>My Skills</span></h1>
            <ul>
                <li>HTML <br />
                    <progress min="0" max="100" value="80"></progress>
                </li>
                <li>JavaScript <br />
                    <progress min="0" max="100" value="5"></progress>
                </li>
                <li>PHP <br />
                    <progress min="0" max="100" value="40"></progress>
                </li>
                <li>CSS <br />
                    <progress min="0" max="100" value="50"></progress>
                </li>
                <li>Adobe Photoshop <br />
                    <progress min="0" max="100" value="80"></progress>
                </li>
            </ul>
        </div>
        <!-- My Skills section end -->
        </body>
</html>
