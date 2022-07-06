<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Fahad Ali(fa376)</td></tr>
<tr><td> <em>Generated: </em> 7/5/2022 11:34:06 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-450-M22/it202-milestone1-deliverable/grade/fa376" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone1 branch</li><li>Create a milestone1.md file in your Project folder</li><li>Git add/commit/push this empty file to Milestone1 (you'll need the link later)</li><li>Fill in the deliverable items<ol><li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e,&nbsp;<a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li></ol></li><li>Ensure your images display correctly in the sample markdown at the bottom</li><li>Save the submission items</li><li>Copy/paste the markdown from the "Copy markdown to clipboard link" or via the download button</li><li>Paste the code into the milestone1.md file or overwrite the file</li><li>Git add/commit/push the md file to Milestone1</li><li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li><li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku dev</li></ol></li><li>Make a pull request from dev to prod (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku prod</li></ol></li><li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li></ol></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/177453213-0349305e-52fb-4a2d-9e25-6d9699e8ecd5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show invalid email validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/177453301-ef4cdfe0-7771-400d-9ac9-2ccfd8d2538c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show invalid password validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/177453397-69184aa2-7014-475e-bd31-ae0fc8e982e5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> Show passwords not much validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/177453472-e4f66401-1304-4b15-a59b-0089202952a7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show email not available validation (already registered)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/177453731-50b10d38-5e5c-47da-a1fd-71436c50c249.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> Show username not available validation (username is taken)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/177454123-57bfd796-8c31-4282-bd92-bc2012a1be5d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show the form with valid data filled in before the form is submitted<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/177454204-51b28c7d-590b-46a1-aaac-330bc18ab9a8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The valid user data from Task 1 should be present in this screenshot<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/fahadali323/IT202-450/pull/36">https://github.com/fahadali323/IT202-450/pull/36</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The form is used to gather input from the user or when the<br>client fills out the form on the website. The form validation is a<br>process in which the contents in the form are checked for correct wording<br>for email using regex, password that must match and is 8 or more<br>characters long. In Db activity, the form is checked to see if a<br>username or an email is already registered or not using relation of location<br>of the users registered in the database. If they exist, the client is<br>to resubmit the form either with different email or username that is not<br>already taken.&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/177455152-3f8c98f3-9d5c-4c6a-b7ff-034d3f0c55e2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show password mismatch validation (doesn&#39;t match what&#39;s in the DB)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/177455379-7d80083f-3004-4b36-bb17-a9798167534d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>successful login<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/fahadali323/IT202-450/pull/36">https://github.com/fahadali323/IT202-450/pull/36</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>In this case, the password mattvideo33 typed was wrong in the first screenshot.<br>As you can see the password the client typed is checked with the<br>passwords in the database. If it matches, the user is allowed to login<br>as can be seen in the second screenshot, if not then the user<br>must type in the password again.&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/177455716-ee8718b1-30e6-430e-a10a-2e57a36dfc5d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing the successful logout message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/177455816-43aa0bd7-fa47-4aa3-a77b-32306a0532b1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> showing the logged out user can&#39;t access a login-protected page<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/177455898-ed624932-18c4-4583-be41-21b9208ecda8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> showing the logged out user can&#39;t access a login-protected page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/fahadali323/IT202-450/pull/36">https://github.com/fahadali323/IT202-450/pull/36</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p><span style="color: rgb(32, 33, 36); font-family: Roboto, arial, sans-serif; font-size: 16px;">The Session Details<br>page records information about session and enables access to the home page or<br>other pages if the user is admin.&nbsp;</span><span style="color: rgb(32, 33, 36); font-family: Roboto,<br>arial, sans-serif; font-size: 16px;">These cookies tell the server what pages to show the<br>user. When the user logs out, the session ends and thus a user<br>cannot type back a login-protected page unless they log back in.&nbsp;</span><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/177456368-0f64064e-c919-4c2b-bd6d-3b7c206225c1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>user can&#39;t access a login-protected page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/177456590-772c16f5-9121-4ac9-bdea-bb03c722b044.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>admin access role <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/177456739-ff4f15dc-322d-4b7f-9fff-d7266465f956.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> user without an appropriate role can&#39;t access the role-protected page<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/177456784-18016e48-f970-4641-84fb-352a75494820.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>changed url to admin_role<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/177456860-74c7a0be-89e4-4543-93a0-22f5ee50a52d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>don&#39;t have access to admin<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/177457135-80160c0c-f780-4ab4-a008-ab17b97820b5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Roles table with valid data<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/177457212-be6369d6-9a42-418a-8a2d-f7610f0a37ea.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Roles table with valid data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/177456590-772c16f5-9121-4ac9-bdea-bb03c722b044.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>admin role access role <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/fahadali323/IT202-450/pull/36">https://github.com/fahadali323/IT202-450/pull/36</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>When a user logs out, the user session is destroyed thus their access<br>to the home page is destroyed. If the user tries to access a<br>login-protected page, the user will not be allowed to do&nbsp;<div>so because of sessions<br>that has ended. Thus the user must log back in to access the<br>login-protected page.&nbsp;</div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>For a role protected page, if the user is an admin his credentials<br>are checked in the database called users and userroles and roles are checked.<br>By default <a href="mailto:&#x64;&#x33;&#64;&#x74;&#101;&#x73;&#x74;&#x2e;&#99;&#111;&#x6d;">&#x64;&#x33;&#64;&#x74;&#101;&#x73;&#x74;&#x2e;&#99;&#111;&#x6d;</a> is the admin. The user id, role id and is<br>active is checked. If user is <a href="mailto:&#100;&#x33;&#64;&#116;&#101;&#x73;&#116;&#x2e;&#99;&#x6f;&#x6d;">&#100;&#x33;&#64;&#116;&#101;&#x73;&#116;&#x2e;&#99;&#x6f;&#x6d;</a> his credentials id, and role id<br>is checked with the database and since it matches, the user is allowed<br>to access admin resources. If the user is not an admin, the user<br>id is checked with the database userroles database and since it does not<br>match, the user will not be allowed admin access.&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/177459007-dfcce6e5-7e4d-4adb-944d-ea522c7e4d7e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>site&#39;s styles/theme<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/fahadali323/IT202-450/pull/36">https://github.com/fahadali323/IT202-450/pull/36</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>In the css file i changed the body color, font-family, uppercased the navigation<br>links, used a hover over the navigation to make it easier for the<br>client to know what they are selecting. For the forms, and input, and<br>.mail to change the margin, border, width of the boxes, and the color<br>of the boxes.&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/177459539-f7ee1179-2b2e-4e93-95de-83fc115ae497.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>messages/errors should be &quot;user friendly<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/fahadali323/IT202-450/pull/36">https://github.com/fahadali323/IT202-450/pull/36</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>The messages are made user friendly by using helper.js which displays the messages<br>in a certain style. We use flash.php which helps with placing the messages<br>after the navigation bar.And then we used flash_messages which flashes the messages in<br>certain colors, green for success, yellow for warning, and red for access denied.&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/177459998-2fc1921d-d12b-44b6-96b6-5fb947c45f94.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> User Profile page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/fahadali323/IT202-450/pull/36">https://github.com/fahadali323/IT202-450/pull/36</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>The data is retrieved about the user and displayed by using profile.php. In<br>this file we use get_useremail() and&nbsp;<div>get username() to display the user data to<br>the screen.&nbsp;</div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/177460735-3ed0ece6-ffe2-408a-b687-e744224dcc23.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show username validation message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/177461418-0f07260a-3682-4bdc-9665-51d7d171e478.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> Show email validation message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/177461798-d60dac2c-42db-4906-b044-32774e45dcb8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> password validation message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/177461863-103b1786-8365-4ca5-b4e9-77d33315e133.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show password mismatch message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/177461929-1fc5c083-b809-4f81-a917-4028cc6e0259.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show email/username already in use message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/177457212-be6369d6-9a42-418a-8a2d-f7610f0a37ea.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>user name changed before<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/177460789-81975d37-1875-4445-9ffe-7f591d690257.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>user name changed after<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/fahadali323/IT202-450/pull/36">https://github.com/fahadali323/IT202-450/pull/36</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>In profile.php forms are used to check for whether or not edits enter<br>by the users is applicable. WE validate the submitted data with already existing<br>data in the database. We verify the updates through email checks, password checks<br>and username checks using regex match for email. We also have prefills in<br>this file<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Issues and Project Board </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106360996/177462423-2e8e3f96-985e-41ed-9552-ebd178b68a68.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>done/closed (project board) <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Include a direct link to your Project Board</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/fahadali323/IT202-450/projects/1">https://github.com/fahadali323/IT202-450/projects/1</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Prod Application Link to Login Page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://fa376-prod.herokuapp.com/Project/profile.php">https://fa376-prod.herokuapp.com/Project/profile.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-450-M22/it202-milestone1-deliverable/grade/fa376" target="_blank">Grading</a></td></tr></table>